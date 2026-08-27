<?php
$page_title = "Donor Dashboard";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Donor Dashboard | BloodCare
    </title>

    <!-- Bootstrap Icons -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- GLOBAL CSS -->
    <link
        rel="stylesheet"
        href="../assets/css/style.css"
    >

    <!-- DASHBOARD CSS -->
    <link
        rel="stylesheet"
        href="../assets/css/dashboard.css"
    >

    <!-- DONOR CSS -->
    <link
        rel="stylesheet"
        href="../assets/css/donor-pages.css"
    >

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

                    <small>
                        Donor Portal
                    </small>

                    <strong>
                        Dashboard
                    </strong>

                </div>

            </div>


            <div class="donor-navbar-right">

                <a
                    href="notifications.php"
                    class="donor-nav-icon"
                >

                    <i class="bi bi-bell"></i>

                    <span class="donor-notification-dot"></span>

                </a>

                <div class="donor-navbar-divider"></div>

                <div class="donor-user-mini">

                    <img
                        src="../assets/images/default-user.png"
                        alt="Donor"
                    >

                    <div class="donor-user-mini-info">

                        <strong>
                            John Donor
                        </strong>

                        <span>
                            Blood Donor
                        </span>

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

                    <h2>
                        Welcome back, John!
                    </h2>

                    <p>
                        Every blood donation can make a real
                        difference. Keep your donor profile
                        updated and stay ready to help someone
                        in need.
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

                    <div class="donor-stat-label">
                        Total Donations
                    </div>

                    <strong class="donor-stat-number">
                        08
                    </strong>

                    <div class="donor-stat-description">
                        Lives potentially helped
                    </div>

                </div>


                <div class="donor-stat-card">

                    <div class="donor-stat-top">

                        <div class="donor-stat-icon green">
                            <i class="bi bi-heart-pulse-fill"></i>
                        </div>

                    </div>

                    <div class="donor-stat-label">
                        Blood Group
                    </div>

                    <strong class="donor-stat-number">
                        O+
                    </strong>

                    <div class="donor-stat-description">
                        Your registered blood type
                    </div>

                </div>


                <div class="donor-stat-card">

                    <div class="donor-stat-top">

                        <div class="donor-stat-icon blue">
                            <i class="bi bi-calendar-check-fill"></i>
                        </div>

                    </div>

                    <div class="donor-stat-label">
                        Appointments
                    </div>

                    <strong class="donor-stat-number">
                        03
                    </strong>

                    <div class="donor-stat-description">
                        Upcoming appointments
                    </div>

                </div>


                <div class="donor-stat-card">

                    <div class="donor-stat-top">

                        <div class="donor-stat-icon orange">
                            <i class="bi bi-award-fill"></i>
                        </div>

                    </div>

                    <div class="donor-stat-label">
                        Donor Status
                    </div>

                    <strong class="donor-stat-number">
                        Active
                    </strong>

                    <div class="donor-stat-description">
                        Eligible for donation
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

                                <img
                                    src="../assets/images/default-user.png"
                                    alt="Donor"
                                >

                                <span class="donor-online"></span>

                            </div>

                            <div class="donor-profile-name">

                                <h2>
                                    John Donor
                                </h2>

                                <p>
                                    Registered Blood Donor
                                </p>

                                <span class="donor-blood-badge">

                                    <i class="bi bi-droplet-fill"></i>

                                    O Positive

                                </span>

                            </div>

                        </div>


                        <div class="donor-info-grid">


                            <div class="donor-info-item">

                                <div class="donor-info-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>

                                <div>

                                    <span>
                                        Email Address
                                    </span>

                                    <strong>
                                        john@example.com
                                    </strong>

                                </div>

                            </div>


                            <div class="donor-info-item">

                                <div class="donor-info-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>

                                <div>

                                    <span>
                                        Phone
                                    </span>

                                    <strong>
                                        +880 1712-345678
                                    </strong>

                                </div>

                            </div>


                            <div class="donor-info-item">

                                <div class="donor-info-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>

                                <div>

                                    <span>
                                        Location
                                    </span>

                                    <strong>
                                        Dhaka, Bangladesh
                                    </strong>

                                </div>

                            </div>


                            <div class="donor-info-item">

                                <div class="donor-info-icon">
                                    <i class="bi bi-calendar3"></i>
                                </div>

                                <div>

                                    <span>
                                        Last Donation
                                    </span>

                                    <strong>
                                        15 July 2026
                                    </strong>

                                </div>

                            </div>


                        </div>

                    </div>


                    <!-- APPOINTMENTS -->

                    <div class="donor-card">

                        <div class="donor-card-header">

                            <div class="donor-card-title">

                                <h3>
                                    Upcoming Appointments
                                </h3>

                                <p>
                                    Your scheduled donation appointments
                                </p>

                            </div>

                            <a
                                href="appointment.php"
                                class="btn btn-outline btn-sm"
                            >
                                View All
                            </a>

                        </div>


                        <div class="donor-card-body">


                            <div class="appointment-card">

                                <div class="appointment-date">

                                    <strong>
                                        05
                                    </strong>

                                    <span>
                                        SEP
                                    </span>

                                </div>

                                <div class="appointment-info">

                                    <h4>
                                        Life Saver Blood Camp
                                    </h4>

                                    <p>
                                        <i class="bi bi-clock"></i>
                                        10:00 AM
                                    </p>

                                    <small>
                                        Dhaka Medical Area
                                    </small>

                                </div>

                                <span class="donor-status confirmed">
                                    Confirmed
                                </span>

                            </div>


                            <div class="appointment-card">

                                <div class="appointment-date">

                                    <strong>
                                        18
                                    </strong>

                                    <span>
                                        SEP
                                    </span>

                                </div>

                                <div class="appointment-info">

                                    <h4>
                                        BloodCare Donation Drive
                                    </h4>

                                    <p>
                                        <i class="bi bi-clock"></i>
                                        11:30 AM
                                    </p>

                                    <small>
                                        Dhanmondi, Dhaka
                                    </small>

                                </div>

                                <span class="donor-status pending">
                                    Pending
                                </span>

                            </div>


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

                                    <strong>
                                        Available to Donate
                                    </strong>

                                    <span>
                                        You're currently available
                                    </span>

                                </div>

                            </div>


                            <label class="availability-switch">

                                <input
                                    type="checkbox"
                                    checked
                                >

                                <span class="availability-slider"></span>

                            </label>

                        </div>

                    </div>


                    <!-- QUICK ACTIONS -->

                    <div class="donor-card">

                        <div class="donor-card-header">

                            <div class="donor-card-title">

                                <h3>
                                    Quick Actions
                                </h3>

                                <p>
                                    Manage your donor account
                                </p>

                            </div>

                        </div>


                        <div class="donor-card-body">

                            <div class="quick-actions">


                                <a
                                    href="profile.php"
                                    class="quick-action"
                                >

                                    <div class="quick-action-icon">
                                        <i class="bi bi-person"></i>
                                    </div>

                                    <div>

                                        <strong>
                                            My Profile
                                        </strong>

                                        <span>
                                            View profile
                                        </span>

                                    </div>

                                </a>


                                <a
                                    href="edit_profile.php"
                                    class="quick-action"
                                >

                                    <div class="quick-action-icon">
                                        <i class="bi bi-pencil-square"></i>
                                    </div>

                                    <div>

                                        <strong>
                                            Edit Profile
                                        </strong>

                                        <span>
                                            Update information
                                        </span>

                                    </div>

                                </a>


                                <a
                                    href="appointment.php"
                                    class="quick-action"
                                >

                                    <div class="quick-action-icon">
                                        <i class="bi bi-calendar-plus"></i>
                                    </div>

                                    <div>

                                        <strong>
                                            Appointment
                                        </strong>

                                        <span>
                                            Schedule donation
                                        </span>

                                    </div>

                                </a>


                                <a
                                    href="donation_history.php"
                                    class="quick-action"
                                >

                                    <div class="quick-action-icon">
                                        <i class="bi bi-clock-history"></i>
                                    </div>

                                    <div>

                                        <strong>
                                            History
                                        </strong>

                                        <span>
                                            View donations
                                        </span>

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