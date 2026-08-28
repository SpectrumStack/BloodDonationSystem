<?php
session_start();
require_once '../includes/db.php';

// Auth Check: ডোনার লগইন না থাকলে লগইন পেজে পাঠাবে
if (!isset($_SESSION['user_id']) || ($_SESSION['role'] !== 'donor' && $_SESSION['role'] !== 'user')) {
    header("Location: ../login.php");
    exit();
}

$donor_id = $_SESSION['user_id'];

// ১. ডোনারের সম্পূর্ণ প্রোফাইল তথ্য ফেচ করা (Users Table)
$stmt = $conn->prepare("SELECT name, email, phone, blood_group, location, image, availability_status FROM users WHERE id = ?");
$stmt->bind_param("i", $donor_id);
$stmt->execute();
$donor = $stmt->get_result()->fetch_assoc();

// ডাটা না পাওয়া গেলে ডিফল্ট মান সেট করা
$donor_name   = $donor['name'] ?? 'Donor';
$donor_email  = $donor['email'] ?? 'Not Provided';
$donor_phone  = $donor['phone'] ?? 'Not Provided';
$blood_group  = $donor['blood_group'] ?? 'Not Provided';
$location     = $donor['location'] ?? 'Not Provided';
$is_available = ($donor['availability_status'] ?? 'Available') === 'Available';

// ছবির পাথ তৈরি (ছবি না থাকলে ডিফল্ট ইমেজ দেখাবে)
$profile_img = (!empty($donor['image']) && file_exists("../uploads/" . $donor['image'])) 
    ? "../uploads/" . $donor['image'] 
    : "../assets/images/default-user.png";

// ২. মোট রক্তদান গণনা (Donation History Table)
$total_donations = "00";
$last_donation_date = "N/A";
$history_check = $conn->query("SHOW TABLES LIKE 'donation_history'");
if ($history_check && $history_check->num_rows > 0) {
    // Total Count
    $count_stmt = $conn->prepare("SELECT COUNT(*) FROM donation_history WHERE donor_id = ?");
    $count_stmt->bind_param("i", $donor_id);
    $count_stmt->execute();
    $total_donations = sprintf("%02d", $count_stmt->get_result()->fetch_row()[0]);

    // Last Donation Date
    $last_date_stmt = $conn->prepare("SELECT DATE_FORMAT(donation_date, '%d %B %Y') FROM donation_history WHERE donor_id = ? ORDER BY donation_date DESC LIMIT 1");
    $last_date_stmt->bind_param("i", $donor_id);
    $last_date_stmt->execute();
    $last_res = $last_date_stmt->get_result()->fetch_row();
    if ($last_res) {
        $last_donation_date = $last_res[0];
    }
}

// ৩. আসন্ন অ্যাপয়েন্টমেন্ট ফেচ করা (Appointments Table)
$upcoming_appointments = [];
$app_check = $conn->query("SHOW TABLES LIKE 'appointments'");
if ($app_check && $app_check->num_rows > 0) {
    $app_stmt = $conn->prepare("SELECT title, DATE_FORMAT(appointment_date, '%d') as app_day, UPPER(DATE_FORMAT(appointment_date, '%b')) as app_month, TIME_FORMAT(appointment_time, '%h:%i %p') as app_time, location, status FROM appointments WHERE donor_id = ? AND appointment_date >= CURDATE() ORDER BY appointment_date ASC LIMIT 2");
    $app_stmt->bind_param("i", $donor_id);
    $app_stmt->execute();
    $upcoming_appointments = $app_stmt->get_result();
}

$page_title = "Donor Dashboard";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Dashboard | BloodCare</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- GLOBAL CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- DASHBOARD CSS -->
    <link rel="stylesheet" href="../assets/css/dashboard.css">

    <!-- DONOR CSS -->
    <link rel="stylesheet" href="../assets/css/donor-pages.css">
</head>

<body>

<div class="donor-app">

    <!-- SIDEBAR -->
    <?php include "../includes/donor_sidebar.php"; ?>

    <!-- MAIN -->
    <main class="donor-main">

        <!-- NAVBAR -->
        <nav class="donor-navbar">
            <div class="donor-navbar-left">
                <button class="donor-menu-btn">
                    <i class="bi bi-list"></i>
                </button>
                <div class="donor-page-title">
                    <small>Donor Portal</small>
                    <strong>Dashboard</strong>
                </div>
            </div>

            <div class="donor-navbar-right">
                <a href="notifications.php" class="donor-nav-icon">
                    <i class="bi bi-bell"></i>
                    <span class="donor-notification-dot"></span>
                </a>

                <div class="donor-navbar-divider"></div>

                <div class="donor-user-mini">
                    <img src="<?= htmlspecialchars($profile_img) ?>" alt="Donor">
                    <div class="donor-user-mini-info">
                        <strong><?= htmlspecialchars($donor_name) ?></strong>
                        <span>Blood Donor</span>
                    </div>
                </div>
            </div>
        </nav>

        <!-- CONTENT -->
        <div class="donor-content">

            <!-- WELCOME -->
            <section class="donor-welcome-card">
                <div class="donor-welcome-content">
                    <span>
                        <i class="bi bi-heart-fill"></i>
                        Thank you for saving lives
                    </span>
                    <h2>Welcome back, <?= htmlspecialchars(explode(' ', trim($donor_name))[0]) ?>!</h2>
                    <p>
                        Every blood donation can make a real difference. Keep your donor profile updated and stay ready to help someone in need.
                    </p>
                </div>
            </section>

            <!-- STATS -->
            <section class="donor-stats">

                <div class="donor-stat-card">
                    <div class="donor-stat-top">
                        <div class="donor-stat-icon red">
                            <i class="bi bi-droplet-fill"></i>
                        </div>
                    </div>
                    <div class="donor-stat-label">Total Donations</div>
                    <strong class="donor-stat-number"><?= $total_donations ?></strong>
                    <div class="donor-stat-description">Lives potentially helped</div>
                </div>

                <div class="donor-stat-card">
                    <div class="donor-stat-top">
                        <div class="donor-stat-icon green">
                            <i class="bi bi-heart-pulse-fill"></i>
                        </div>
                    </div>
                    <div class="donor-stat-label">Blood Group</div>
                    <strong class="donor-stat-number"><?= htmlspecialchars($blood_group) ?></strong>
                    <div class="donor-stat-description">Your registered blood type</div>
                </div>

                <div class="donor-stat-card">
                    <div class="donor-stat-top">
                        <div class="donor-stat-icon blue">
                            <i class="bi bi-calendar-check-fill"></i>
                        </div>
                    </div>
                    <div class="donor-stat-label">Appointments</div>
                    <strong class="donor-stat-number">
                        <?= sprintf("%02d", is_object($upcoming_appointments) ? $upcoming_appointments->num_rows : 0) ?>
                    </strong>
                    <div class="donor-stat-description">Upcoming appointments</div>
                </div>

                <div class="donor-stat-card">
                    <div class="donor-stat-top">
                        <div class="donor-stat-icon orange">
                            <i class="bi bi-award-fill"></i>
                        </div>
                    </div>
                    <div class="donor-stat-label">Donor Status</div>
                    <strong class="donor-stat-number"><?= $is_available ? 'Active' : 'Inactive' ?></strong>
                    <div class="donor-stat-description">
                        <?= $is_available ? 'Eligible for donation' : 'Currently Unavailable' ?>
                    </div>
                </div>

            </section>

            <!-- MAIN GRID -->
            <div class="donor-grid">

                <!-- LEFT -->
                <div>

                    <!-- PROFILE -->
                    <div class="donor-profile-card">
                        <div class="donor-profile-top">
                            <div class="donor-profile-avatar">
                                <img src="<?= htmlspecialchars($profile_img) ?>" alt="Donor">
                                <span class="donor-online" style="background-color: <?= $is_available ? '#22c55e' : '#ef4444' ?>;"></span>
                            </div>
                            <div class="donor-profile-name">
                                <h2><?= htmlspecialchars($donor_name) ?></h2>
                                <p>Registered Blood Donor</p>
                                <span class="donor-blood-badge">
                                    <i class="bi bi-droplet-fill"></i>
                                    <?= htmlspecialchars($blood_group) ?>
                                </span>
                            </div>
                        </div>

                        <div class="donor-info-grid">

                            <div class="donor-info-item">
                                <div class="donor-info-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div>
                                    <span>Email Address</span>
                                    <strong><?= htmlspecialchars($donor_email) ?></strong>
                                </div>
                            </div>

                            <div class="donor-info-item">
                                <div class="donor-info-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div>
                                    <span>Phone</span>
                                    <strong><?= htmlspecialchars($donor_phone) ?></strong>
                                </div>
                            </div>

                            <div class="donor-info-item">
                                <div class="donor-info-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div>
                                    <span>Location</span>
                                    <strong><?= htmlspecialchars($location) ?></strong>
                                </div>
                            </div>

                            <div class="donor-info-item">
                                <div class="donor-info-icon">
                                    <i class="bi bi-calendar3"></i>
                                </div>
                                <div>
                                    <span>Last Donation</span>
                                    <strong><?= htmlspecialchars($last_donation_date) ?></strong>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- APPOINTMENTS -->
                    <div class="donor-card">
                        <div class="donor-card-header">
                            <div class="donor-card-title">
                                <h3>Upcoming Appointments</h3>
                                <p>Your scheduled donation appointments</p>
                            </div>
                            <a href="appointment.php" class="btn btn-outline btn-sm">View All</a>
                        </div>

                        <div class="donor-card-body">
                            <?php if (is_object($upcoming_appointments) && $upcoming_appointments->num_rows > 0): ?>
                                <?php while ($app = $upcoming_appointments->fetch_assoc()): ?>
                                    <div class="appointment-card">
                                        <div class="appointment-date">
                                            <strong><?= htmlspecialchars($app['app_day']) ?></strong>
                                            <span><?= htmlspecialchars($app['app_month']) ?></span>
                                        </div>
                                        <div class="appointment-info">
                                            <h4><?= htmlspecialchars($app['title']) ?></h4>
                                            <p>
                                                <i class="bi bi-clock"></i>
                                                <?= htmlspecialchars($app['app_time']) ?>
                                            </p>
                                            <small><?= htmlspecialchars($app['location']) ?></small>
                                        </div>
                                        <span class="donor-status <?= strtolower(htmlspecialchars($app['status'])) ?>">
                                            <?= htmlspecialchars($app['status']) ?>
                                        </span>
                                    </div>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <p style="text-align: center; color: #666; padding: 10px 0;">No upcoming appointments found.</p>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

                <!-- RIGHT -->
                <div>

                    <!-- AVAILABILITY -->
                    <div class="donor-availability">
                        <div class="availability-top">
                            <div class="availability-title">
                                <div class="availability-icon">
                                    <i class="bi bi-heart-pulse-fill"></i>
                                </div>
                                <div>
                                    <strong>Available to Donate</strong>
                                    <span><?= $is_available ? "You're currently available" : "You're currently unavailable" ?></span>
                                </div>
                            </div>

                            <label class="availability-switch">
                                <input type="checkbox" id="availabilityToggle" <?= $is_available ? 'checked' : '' ?>>
                                <span class="availability-slider"></span>
                            </label>
                        </div>
                    </div>

                    <!-- QUICK ACTIONS -->
                    <div class="donor-card">
                        <div class="donor-card-header">
                            <div class="donor-card-title">
                                <h3>Quick Actions</h3>
                                <p>Manage your donor account</p>
                            </div>
                        </div>

                        <div class="donor-card-body">
                            <div class="quick-actions">

                                <a href="profile.php" class="quick-action">
                                    <div class="quick-action-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div>
                                        <strong>My Profile</strong>
                                        <span>View profile</span>
                                    </div>
                                </a>

                                <a href="edit_profile.php" class="quick-action">
                                    <div class="quick-action-icon">
                                        <i class="bi bi-pencil-square"></i>
                                    </div>
                                    <div>
                                        <strong>Edit Profile</strong>
                                        <span>Update information</span>
                                    </div>
                                </a>

                                <a href="appointment.php" class="quick-action">
                                    <div class="quick-action-icon">
                                        <i class="bi bi-calendar-plus"></i>
                                    </div>
                                    <div>
                                        <strong>Appointment</strong>
                                        <span>Schedule donation</span>
                                    </div>
                                </a>

                                <a href="donation_history.php" class="quick-action">
                                    <div class="quick-action-icon">
                                        <i class="bi bi-clock-history"></i>
                                    </div>
                                    <div>
                                        <strong>History</strong>
                                        <span>View donations</span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </main>

</div>

</body>
</html>