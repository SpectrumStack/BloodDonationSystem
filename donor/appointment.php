<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta
name="viewport"
content="width=device-width, initial-scale=1.0"
>

<title>Appointments | BloodCare</title>

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

<strong>Appointments</strong>

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

<span>Appointments</span>

</div>

<h1>My Appointments</h1>

<p>
Manage your upcoming and previous donation appointments.
</p>

</div>


<div class="donor-header-actions">

<button class="btn btn-primary">

<i class="bi bi-calendar-plus"></i>

New Appointment

</button>

</div>

</div>


<div class="donor-card">


<div class="donor-card-header">

<div class="donor-card-title">

<h3>
Upcoming Appointments
</h3>

<p>
Your scheduled blood donation appointments.
</p>

</div>

</div>


<div class="donor-card-body">


<div class="appointment-card">

<div class="appointment-date">

<strong>05</strong>

<span>SEP</span>

</div>


<div class="appointment-info">

<h4>
Life Saver Blood Donation Camp
</h4>

<p>
<i class="bi bi-clock"></i>
10:00 AM - 1:00 PM
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

<strong>18</strong>

<span>SEP</span>

</div>


<div class="appointment-info">

<h4>
BloodCare Donation Drive
</h4>

<p>
<i class="bi bi-clock"></i>
11:30 AM - 2:00 PM
</p>

<small>
Dhanmondi, Dhaka
</small>

</div>


<span class="donor-status pending">
Pending
</span>

</div>


<div class="appointment-card">

<div class="appointment-date">

<strong>27</strong>

<span>SEP</span>

</div>


<div class="appointment-info">

<h4>
Community Blood Camp
</h4>

<p>
<i class="bi bi-clock"></i>
09:00 AM - 12:00 PM
</p>

<small>
Uttara, Dhaka
</small>

</div>


<span class="donor-status completed">
Completed
</span>

</div>


</div>

</div>


</div>

</main>

</div>

</body>

</html>