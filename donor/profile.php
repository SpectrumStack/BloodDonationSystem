<?php
session_start();
require_once "../includes/db.php";

// Auth Check: ডোনার লগইন না থাকলে পাঠাবে
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

$donor_id = $_SESSION['user_id'];
$message = "";
$error = "";

// --- PROFILE UPDATE LOGIC ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_profile'])) {
    $name        = trim($_POST['name']);
    $phone       = trim($_POST['phone']);
    $blood_group = trim($_POST['blood_group']);
    $gender      = trim($_POST['gender']);
    $age         = intval($_POST['age']);
    $district    = trim($_POST['district']);
    $area        = trim($_POST['area']);
    $location    = $area . ", " . $district;

    // Image Upload Handling
    $image_name = null;
    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] === 0) {
        $ext = pathinfo($_FILES['profile_image']['name'], PATHINFO_EXTENSION);
        $allowed = ['jpg', 'jpeg', 'png', 'webp'];
        
        if (in_array(strtolower($ext), $allowed)) {
            $upload_dir = "../uploads/";
            
            // ফোল্ডার না থাকলে স্বয়ংক্রিয়ভাবে তৈরি করবে
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            $image_name = "donor_" . $donor_id . "_" . time() . "." . $ext;
            $upload_path = $upload_dir . $image_name;
            move_uploaded_file($_FILES['profile_image']['tmp_name'], $upload_path);
        }
    }

    if ($image_name) {
        $update_sql = "UPDATE users SET name=?, phone=?, blood_group=?, gender=?, age=?, district=?, area=?, location=?, image=? WHERE id=?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("ssssissssi", $name, $phone, $blood_group, $gender, $age, $district, $area, $location, $image_name, $donor_id);
    } else {
        $update_sql = "UPDATE users SET name=?, phone=?, blood_group=?, gender=?, age=?, district=?, area=?, location=? WHERE id=?";
        $stmt = $conn->prepare($update_sql);
        $stmt->bind_param("ssssisssi", $name, $phone, $blood_group, $gender, $age, $district, $area, $location, $donor_id);
    }

    if ($stmt->execute()) {
        $message = "Profile updated successfully!";
    } else {
        $error = "Failed to update profile.";
    }
}

// --- FETCH PROFILE DATA ---
$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $donor_id);
$stmt->execute();
$donor = $stmt->get_result()->fetch_assoc();

// Data processing ($name ও $donor_name দুটোই ডিফাইন করা হলো)
$name         = $donor['name'] ?? 'Donor Name';
$donor_name   = $name; // donor-user-mini কার্ডের জন্য
$blood_group  = $donor['blood_group'] ?? 'N/A';
$gender       = $donor['gender'] ?? 'Not Specified';
$age          = $donor['age'] ?? 'N/A';
$district     = $donor['district'] ?? 'Dhaka';
$area         = $donor['area'] ?? 'Mirpur';
$location     = !empty($donor['location']) ? $donor['location'] : ($area . ", " . $district);
$status       = ($donor['availability_status'] ?? 'Available') === 'Available';
$phone        = $donor['phone'] ?? 'N/A';

$profile_img = (!empty($donor['image']) && file_exists("../uploads/" . $donor['image'])) 
    ? "../uploads/" . $donor['image'] 
    : "../assets/images/default-user.png";

// Fetch Last Donation Date
$last_donation_date = "N/A";
$history_check = $conn->query("SHOW TABLES LIKE 'donation_history'");
if ($history_check && $history_check->num_rows > 0) {
    $last_date_stmt = $conn->prepare("SELECT DATE_FORMAT(donation_date, '%d %B %Y') FROM donation_history WHERE donor_id = ? ORDER BY donation_date DESC LIMIT 1");
    $last_date_stmt->bind_param("i", $donor_id);
    $last_date_stmt->execute();
    $last_res = $last_date_stmt->get_result()->fetch_row();
    if ($last_res) {
        $last_donation_date = $last_res[0];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Profile | BloodCare</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/user-pages.css">

    <style>
        /* Edit Modal CSS */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        .modal-card {
            background: #fff;
            padding: 25px;
            border-radius: 12px;
            max-width: 500px;
            width: 90%;
            max-height: 90vh;
            overflow-y: auto;
        }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; font-weight: 600; }
        .form-group input, .form-group select {
            width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px;
        }
        .form-row { display: flex; gap: 10px; }
        .alert { padding: 10px; margin-bottom: 15px; border-radius: 6px; }
        .alert-success { background: #d4edda; color: #155724; }
        .alert-danger { background: #f8d7da; color: #721c24; }
    </style>
</head>

<body>

<div class="admin-app">

<?php include "../includes/donor_sidebar.php"; ?>

<main class="admin-main">

<div class="user-page">

    <?php if ($message): ?>
        <div class="alert alert-success"><?= htmlspecialchars($message) ?></div>
    <?php endif; ?>
    <?php if ($error): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <div class="user-page-header">
        <div class="user-page-title">
            <div class="title-icon">
                <i class="bi bi-person-badge-fill"></i>
            </div>
            <div>
                <h1>Donor Profile</h1>
                <p>View donor information and availability.</p>
            </div>
        </div>

        <button onclick="openEditModal()" class="btn btn-primary">
            <i class="bi bi-pencil-square"></i>
            Edit Profile
        </button>
    </div>

    <div class="user-profile">

        <!-- PROFILE CARD -->
        <div class="profile-card">
            <div class="profile-photo-wrapper">
                <img src="<?= htmlspecialchars($profile_img) ?>" class="profile-photo" alt="Profile">
                <span class="profile-online" style="background-color: <?= $status ? '#22c55e' : '#ef4444' ?>;"></span>
            </div>

            <h2><?= htmlspecialchars($donor_name) ?></h2>
            <p>Verified Blood Donor</p>

            <span class="badge <?= $status ? 'badge-success' : 'badge-danger' ?>">
                <i class="bi bi-circle-fill"></i>
                <?= $status ? 'Available' : 'Unavailable' ?>
            </span>

            <div class="profile-meta">
                <div class="profile-meta-item">
                    <i class="bi bi-droplet-fill"></i>
                    <div>
                        <small>Blood Group</small>
                        <span><?= htmlspecialchars($blood_group) ?></span>
                    </div>
                </div>

                <div class="profile-meta-item">
                    <i class="bi bi-geo-alt-fill"></i>
                    <div>
                        <small>Location</small>
                        <span><?= htmlspecialchars($location) ?></span>
                    </div>
                </div>

                <div class="profile-meta-item">
                    <i class="bi bi-calendar-check"></i>
                    <div>
                        <small>Last Donation</small>
                        <span><?= htmlspecialchars($last_donation_date) ?></span>
                    </div>
                </div>
            </div>

            <button onclick="openEditModal()" class="btn btn-primary btn-block mt-20">
                <i class="bi bi-pencil-square"></i>
                Edit Information
            </button>
        </div>

        <!-- DETAILS -->
        <div class="profile-details">
            <div class="profile-details-header">
                <h3>Donor Information</h3>
                <p>Basic information about this donor.</p>
            </div>

            <div class="profile-details-body">
                <div class="profile-info-grid">

                    <div class="info-box">
                        <label>Full Name</label>
                        <strong><?= htmlspecialchars($donor_name) ?></strong>
                    </div>

                    <div class="info-box">
                        <label>Blood Group</label>
                        <strong><?= htmlspecialchars($blood_group) ?></strong>
                    </div>

                    <div class="info-box">
                        <label>Gender</label>
                        <strong><?= htmlspecialchars($gender) ?></strong>
                    </div>

                    <div class="info-box">
                        <label>Age</label>
                        <strong><?= htmlspecialchars($age) ?> Years</strong>
                    </div>

                    <div class="info-box">
                        <label>District</label>
                        <strong><?= htmlspecialchars($district) ?></strong>
                    </div>

                    <div class="info-box">
                        <label>Area</label>
                        <strong><?= htmlspecialchars($area) ?></strong>
                    </div>

                    <div class="info-box">
                        <label>Availability</label>
                        <strong class="<?= $status ? 'text-success' : 'text-danger' ?>">
                            <?= $status ? 'Available' : 'Unavailable' ?>
                        </strong>
                    </div>

                    <div class="info-box">
                        <label>Last Donation</label>
                        <strong><?= htmlspecialchars($last_donation_date) ?></strong>
                    </div>

                </div>
            </div>
        </div>

    </div>

</div>

</main>

</div>

<!-- EDIT PROFILE MODAL -->
<div class="modal-overlay" id="editModal">
    <div class="modal-card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
            <h3>Edit Profile Information</h3>
            <button onclick="closeEditModal()" style="border:none; background:none; font-size: 20px; cursor:pointer;">&times;</button>
        </div>

        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label>Profile Image</label>
                <input type="file" name="profile_image" accept="image/*">
            </div>

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" value="<?= htmlspecialchars($donor_name) ?>" required>
            </div>

            <div class="form-row">
                <div class="form-group" style="flex: 1;">
                    <label>Phone Number</label>
                    <input type="text" name="phone" value="<?= htmlspecialchars($phone) ?>" required>
                </div>
                <div class="form-group" style="flex: 1;">
                    <label>Blood Group</label>
                    <select name="blood_group" required>
                        <?php 
                        $groups = ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'];
                        foreach ($groups as $bg): ?>
                            <option value="<?= $bg ?>" <?= ($blood_group === $bg) ? 'selected' : '' ?>><?= $bg ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group" style="flex: 1;">
                    <label>Gender</label>
                    <select name="gender">
                        <option value="Male" <?= $gender == 'Male' ? 'selected' : '' ?>>Male</option>
                        <option value="Female" <?= $gender == 'Female' ? 'selected' : '' ?>>Female</option>
                        <option value="Other" <?= $gender == 'Other' ? 'selected' : '' ?>>Other</option>
                    </select>
                </div>
                <div class="form-group" style="flex: 1;">
                    <label>Age</label>
                    <input type="number" name="age" value="<?= htmlspecialchars($age) ?>" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group" style="flex: 1;">
                    <label>District</label>
                    <input type="text" name="district" value="<?= htmlspecialchars($district) ?>" required>
                </div>
                <div class="form-group" style="flex: 1;">
                    <label>Area</label>
                    <input type="text" name="area" value="<?= htmlspecialchars($area) ?>" required>
                </div>
            </div>

            <div style="display: flex; gap: 10px; margin-top: 15px;">
                <button type="submit" name="update_profile" class="btn btn-primary" style="flex:1;">Save Changes</button>
                <button type="button" onclick="closeEditModal()" class="btn btn-outline" style="flex:1;">Cancel</button>
            </div>
        </form>
    </div>
</div>

<script>
    function openEditModal() {
        document.getElementById('editModal').style.display = 'flex';
    }
    function closeEditModal() {
        document.getElementById('editModal').style.display = 'none';
    }
</script>

</body>
</html>