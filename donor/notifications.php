<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>Notifications | BloodCare</title>

<link
rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>

<link
rel="stylesheet"
href="../assets/css/style.css"
>

<link
rel="stylesheet"
href="../assets/css/donor-pages.css"
>

    <!-- DASHBOARD CSS -->
    <link
        rel="stylesheet"
        href="../assets/css/dashboard.css"
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

<strong>Notifications</strong>

</div>

</div>


<div class="donor-navbar-right">

<a
href="notifications.php"
class="donor-nav-icon"
>
<i class="bi bi-bell-fill"></i>
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

<span>Notifications</span>

</div>

<h1>Notifications</h1>

<p>
Stay updated with your donation activities.
</p>

</div>


<div class="donor-header-actions">

<button class="btn btn-outline btn-sm">
Mark all as read
</button>

</div>

</div>


<div class="donor-card">


<div class="donor-card-header">

<div class="donor-card-title">

<h3>
Recent Notifications
</h3>

<p>
You have 3 unread notifications.
</p>

</div>

</div>


<div class="donor-card-body">


<div class="notification-list">


<div class="donor-notification">

<div class="notification-icon red">

<i class="bi bi-calendar-check-fill"></i>

</div>

<div class="notification-content">

<h4>
Appointment Confirmed
</h4>

<p>
Your appointment for Life Saver Blood Donation
Camp has been confirmed for September 5, 2026.
</p>

<small>
10 minutes ago
</small>

</div>

<span class="notification-unread"></span>

</div>


<div class="donor-notification">

<div class="notification-icon green">

<i class="bi bi-heart-pulse-fill"></i>

</div>

<div class="notification-content">

<h4>
You are eligible to donate
</h4>

<p>
You are currently eligible for your next blood
donation. Your contribution can help save lives.
</p>

<small>
2 hours ago
</small>

</div>

<span class="notification-unread"></span>

</div>


<div class="donor-notification">

<div class="notification-icon blue">

<i class="bi bi-info-circle-fill"></i>

</div>

<div class="notification-content">

<h4>
Profile Reminder
</h4>

<p>
Please make sure your phone number and location
information are up to date.
</p>

<small>
Yesterday
</small>

</div>

<span class="notification-unread"></span>

</div>


<div class="donor-notification">

<div class="notification-icon orange">

<i class="bi bi-megaphone-fill"></i>

</div>

<div class="notification-content">

<h4>
New Blood Camp Available
</h4>

<p>
A new blood donation camp has been scheduled near
your location.
</p>

<small>
3 days ago
</small>

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