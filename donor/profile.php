<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
>

<title>My Profile | BloodCare</title>

<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>

    <!-- DASHBOARD CSS -->
    <link
        rel="stylesheet"
        href="../assets/css/dashboard.css"
    >
<link
    rel="stylesheet"
    href="../assets/css/style.css"
>

<link
    rel="stylesheet"
    href="../assets/css/donor-pages.css"
>

</head>

<body>

<div class="donor-app">

<?php include "../includes/donor_sidebar.php"; ?>

<main class="donor-main">


<nav class="donor-navbar">

    <div class="donor-navbar-left">

        <button class="donor-menu-btn">
            <i class="bi bi-list"></i>
        </button>

        <div class="donor-page-title">

            <small>Donor Portal</small>

            <strong>My Profile</strong>

        </div>

    </div>


    <div class="donor-navbar-right">

        <a
            href="notifications.php"
            class="donor-nav-icon"
        >
            <i class="bi bi-bell"></i>
        </a>

        <div class="donor-navbar-divider"></div>

        <div class="donor-user-mini">

            <img
                src="../assets/images/default-user.png"
                alt="Donor"
            >

            <div class="donor-user-mini-info">

                <strong>John Donor</strong>

                <span>Blood Donor</span>

            </div>

        </div>

    </div>

</nav>


<div class="donor-content">


<div class="donor-page-header">

    <div class="donor-page-header-left">

        <div class="donor-breadcrumb">

            <i class="bi bi-house-fill"></i>

            <span>Dashboard</span>

            <i class="bi bi-chevron-right"></i>

            <span>Profile</span>

        </div>

        <h1>My Profile</h1>

        <p>
            View your donor information and account details.
        </p>

    </div>


    <div class="donor-header-actions">

        <a
            href="edit_profile.php"
            class="btn btn-primary"
        >

            <i class="bi bi-pencil-square"></i>

            Edit Profile

        </a>

    </div>

</div>


<div class="donor-profile-card">


<div class="donor-profile-top">

    <div class="donor-profile-avatar">

        <img
            src="../assets/images/default-user.png"
            alt="John Donor"
        >

        <span class="donor-online"></span>

    </div>


    <div class="donor-profile-name">

        <h2>John Donor</h2>

        <p>Registered Blood Donor</p>

        <span class="donor-blood-badge">

            <i class="bi bi-droplet-fill"></i>

            O Positive

        </span>

    </div>

</div>


<div class="donor-info-grid">


<div class="donor-info-item">

    <div class="donor-info-icon">
        <i class="bi bi-person"></i>
    </div>

    <div>
        <span>Full Name</span>
        <strong>John Donor</strong>
    </div>

</div>


<div class="donor-info-item">

    <div class="donor-info-icon">
        <i class="bi bi-envelope"></i>
    </div>

    <div>
        <span>Email Address</span>
        <strong>john@example.com</strong>
    </div>

</div>


<div class="donor-info-item">

    <div class="donor-info-icon">
        <i class="bi bi-telephone"></i>
    </div>

    <div>
        <span>Phone Number</span>
        <strong>+880 1712-345678</strong>
    </div>

</div>


<div class="donor-info-item">

    <div class="donor-info-icon">
        <i class="bi bi-droplet"></i>
    </div>

    <div>
        <span>Blood Group</span>
        <strong>O Positive (O+)</strong>
    </div>

</div>


<div class="donor-info-item">

    <div class="donor-info-icon">
        <i class="bi bi-calendar3"></i>
    </div>

    <div>
        <span>Date of Birth</span>
        <strong>12 March 2001</strong>
    </div>

</div>


<div class="donor-info-item">

    <div class="donor-info-icon">
        <i class="bi bi-gender-ambiguous"></i>
    </div>

    <div>
        <span>Gender</span>
        <strong>Male</strong>
    </div>

</div>


<div class="donor-info-item">

    <div class="donor-info-icon">
        <i class="bi bi-geo-alt"></i>
    </div>

    <div>
        <span>District</span>
        <strong>Dhaka</strong>
    </div>

</div>


<div class="donor-info-item">

    <div class="donor-info-icon">
        <i class="bi bi-pin-map"></i>
    </div>

    <div>
        <span>Area</span>
        <strong>Dhanmondi</strong>
    </div>

</div>


</div>

</div>


<div class="donor-grid">


<div class="donor-card">

<div class="donor-card-header">

<div class="donor-card-title">

<h3>Donation Summary</h3>

<p>Your blood donation statistics</p>

</div>

</div>


<div class="donor-card-body">

<div class="donor-stats">


<div class="donor-stat-card">

<div class="donor-stat-icon red">
<i class="bi bi-droplet-fill"></i>
</div>

<div class="donor-stat-label">
Total Donations
</div>

<strong class="donor-stat-number">
08
</strong>

</div>


<div class="donor-stat-card">

<div class="donor-stat-icon green">
<i class="bi bi-heart-fill"></i>
</div>

<div class="donor-stat-label">
Lives Helped
</div>

<strong class="donor-stat-number">
24+
</strong>

</div>

</div>

</div>

</div>


<div class="donor-availability">

<div class="availability-top">

<div class="availability-title">

<div class="availability-icon">
<i class="bi bi-check-circle-fill"></i>
</div>

<div>

<strong>Donation Status</strong>

<span>Eligible for donation</span>

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