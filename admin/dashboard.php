<?php
session_start();

/*
|--------------------------------------------------------------------------
| DATABASE CONNECTION
|--------------------------------------------------------------------------
| Database এখন ব্যবহার করছি না।
| পরে এখানে:
| require_once '../includes/db.php';
| require_once '../includes/session.php';
| ব্যবহার করা যাবে।
|--------------------------------------------------------------------------
*/
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Admin Dashboard | BloodCare</title>


    <!-- =====================================================
         BOOTSTRAP ICONS
         ===================================================== -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    <!-- =====================================================
         GLOBAL CSS
         ===================================================== -->

    <link
        rel="stylesheet"
        href="../assets/css/style.css"
    >


    <!-- =====================================================
         ADMIN DASHBOARD CSS
         ===================================================== -->

    <link
        rel="stylesheet"
        href="../assets/css/dashboard.css"
    >

</head>


<body>


<!-- =========================================================
     ADMIN APP
     ========================================================= -->

<div class="admin-app">


    <!-- =====================================================
         SIDEBAR
         ===================================================== -->

    <?php include '../includes/admin_sidebar.php'; ?>


    <!-- =====================================================
         MAIN
         ===================================================== -->

    <main class="admin-main">


        <!-- =================================================
             NAVBAR
             ================================================= -->

        <?php include '../includes/navbar.php'; ?>


        <!-- =================================================
             DASHBOARD CONTENT
             ================================================= -->

        <div class="dashboard-content">


            <!-- =================================================
                 INTRO
                 ================================================= -->

            <div class="dashboard-intro">

                <div>

                    <div class="dashboard-breadcrumb">

                        <i class="bi bi-house-fill"></i>

                        <span>Admin</span>

                        <i class="bi bi-chevron-right"></i>

                        <span>Dashboard</span>

                    </div>


                    <h1>
                        Dashboard Overview
                    </h1>


                    <p>
                        Monitor your blood donation system and manage activities.
                    </p>

                </div>


                <!-- DATE -->

                <div class="dashboard-date">

                    <i class="bi bi-calendar3"></i>

                    <div>

                        <span>
                            TODAY
                        </span>

                        <strong>
                            <?php echo date('F d, Y'); ?>
                        </strong>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 STATISTICS
                 ================================================= -->

            <div class="stats-grid">


                <!-- TOTAL DONORS -->

                <div class="stat-card">

                    <div class="stat-card-top">

                        <div class="stat-icon red">

                            <i class="bi bi-people-fill"></i>

                        </div>

                        <span class="stat-growth positive">
                            <i class="bi bi-arrow-up"></i>
                            12.5%
                        </span>

                    </div>


                    <div class="stat-card-content">

                        <span>
                            Total Donors
                        </span>

                        <strong>
                            2,486
                        </strong>

                        <small>
                            Compared with last month
                        </small>

                    </div>


                    <div class="stat-mini-chart">

                        <span style="height: 25%;"></span>
                        <span style="height: 40%;"></span>
                        <span style="height: 35%;"></span>
                        <span style="height: 55%;"></span>
                        <span style="height: 48%;"></span>
                        <span style="height: 70%;"></span>
                        <span style="height: 85%;"></span>

                    </div>

                </div>



                <!-- BLOOD REQUESTS -->

                <div class="stat-card">

                    <div class="stat-card-top">

                        <div class="stat-icon blue">

                            <i class="bi bi-file-earmark-medical-fill"></i>

                        </div>

                        <span class="stat-growth positive">
                            <i class="bi bi-arrow-up"></i>
                            8.2%
                        </span>

                    </div>


                    <div class="stat-card-content">

                        <span>
                            Blood Requests
                        </span>

                        <strong>
                            1,284
                        </strong>

                        <small>
                            Requests received this month
                        </small>

                    </div>


                    <div class="stat-mini-chart blue-chart">

                        <span style="height: 35%;"></span>
                        <span style="height: 50%;"></span>
                        <span style="height: 42%;"></span>
                        <span style="height: 65%;"></span>
                        <span style="height: 55%;"></span>
                        <span style="height: 78%;"></span>
                        <span style="height: 90%;"></span>

                    </div>

                </div>



                <!-- DONATIONS -->

                <div class="stat-card">

                    <div class="stat-card-top">

                        <div class="stat-icon green">

                            <i class="bi bi-droplet-fill"></i>

                        </div>

                        <span class="stat-growth positive">
                            <i class="bi bi-arrow-up"></i>
                            15.8%
                        </span>

                    </div>


                    <div class="stat-card-content">

                        <span>
                            Successful Donations
                        </span>

                        <strong>
                            986
                        </strong>

                        <small>
                            Successful donations this month
                        </small>

                    </div>


                    <div class="stat-mini-chart green-chart">

                        <span style="height: 30%;"></span>
                        <span style="height: 45%;"></span>
                        <span style="height: 40%;"></span>
                        <span style="height: 62%;"></span>
                        <span style="height: 58%;"></span>
                        <span style="height: 75%;"></span>
                        <span style="height: 88%;"></span>

                    </div>

                </div>



                <!-- EMERGENCY -->

                <div class="stat-card">

                    <div class="stat-card-top">

                        <div class="stat-icon orange">

                            <i class="bi bi-exclamation-triangle-fill"></i>

                        </div>

                        <span class="stat-growth negative">
                            Needs attention
                        </span>

                    </div>


                    <div class="stat-card-content">

                        <span>
                            Emergency Requests
                        </span>

                        <strong>
                            05
                        </strong>

                        <small>
                            Active emergency requests
                        </small>

                    </div>


                    <div class="stat-mini-chart orange-chart">

                        <span style="height: 45%;"></span>
                        <span style="height: 30%;"></span>
                        <span style="height: 60%;"></span>
                        <span style="height: 45%;"></span>
                        <span style="height: 75%;"></span>
                        <span style="height: 50%;"></span>
                        <span style="height: 70%;"></span>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 SECOND ROW
                 ================================================= -->

            <div class="dashboard-grid">


                <!-- =================================================
                     BLOOD INVENTORY
                     ================================================= -->

                <div class="dashboard-card">

                    <div class="dashboard-card-header">

                        <div>

                            <h3>
                                Blood Inventory
                            </h3>

                            <p>
                                Current blood stock availability
                            </p>

                        </div>


                        <a
                            href="stock/blood_stock.php"
                            class="card-link"
                        >

                            View Inventory

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>


                    <div class="inventory-grid">


                        <!-- A+ -->

                        <div class="blood-stock-item">

                            <div class="blood-type">
                                A+
                            </div>

                            <div class="blood-stock-info">

                                <strong>
                                    128
                                </strong>

                                <span>
                                    Units available
                                </span>

                            </div>

                            <div class="stock-progress">

                                <div
                                    class="stock-progress-bar high"
                                    style="width:82%;"
                                ></div>

                            </div>

                            <small>
                                Good supply
                            </small>

                        </div>



                        <!-- A- -->

                        <div class="blood-stock-item">

                            <div class="blood-type">
                                A-
                            </div>

                            <div class="blood-stock-info">

                                <strong>
                                    42
                                </strong>

                                <span>
                                    Units available
                                </span>

                            </div>

                            <div class="stock-progress">

                                <div
                                    class="stock-progress-bar medium"
                                    style="width:54%;"
                                ></div>

                            </div>

                            <small>
                                Moderate
                            </small>

                        </div>



                        <!-- B+ -->

                        <div class="blood-stock-item">

                            <div class="blood-type">
                                B+
                            </div>

                            <div class="blood-stock-info">

                                <strong>
                                    96
                                </strong>

                                <span>
                                    Units available
                                </span>

                            </div>

                            <div class="stock-progress">

                                <div
                                    class="stock-progress-bar high"
                                    style="width:72%;"
                                ></div>

                            </div>

                            <small>
                                Good supply
                            </small>

                        </div>



                        <!-- B- -->

                        <div class="blood-stock-item">

                            <div class="blood-type">
                                B-
                            </div>

                            <div class="blood-stock-info">

                                <strong>
                                    18
                                </strong>

                                <span>
                                    Units available
                                </span>

                            </div>

                            <div class="stock-progress">

                                <div
                                    class="stock-progress-bar low"
                                    style="width:28%;"
                                ></div>

                            </div>

                            <small>
                                Low supply
                            </small>

                        </div>



                        <!-- O+ -->

                        <div class="blood-stock-item">

                            <div class="blood-type">
                                O+
                            </div>

                            <div class="blood-stock-info">

                                <strong>
                                    156
                                </strong>

                                <span>
                                    Units available
                                </span>

                            </div>

                            <div class="stock-progress">

                                <div
                                    class="stock-progress-bar high"
                                    style="width:91%;"
                                ></div>

                            </div>

                            <small>
                                Excellent
                            </small>

                        </div>



                        <!-- O- -->

                        <div class="blood-stock-item">

                            <div class="blood-type">
                                O-
                            </div>

                            <div class="blood-stock-info">

                                <strong>
                                    11
                                </strong>

                                <span>
                                    Units available
                                </span>

                            </div>

                            <div class="stock-progress">

                                <div
                                    class="stock-progress-bar critical"
                                    style="width:15%;"
                                ></div>

                            </div>

                            <small>
                                Critical
                            </small>

                        </div>



                        <!-- AB+ -->

                        <div class="blood-stock-item">

                            <div class="blood-type">
                                AB+
                            </div>

                            <div class="blood-stock-info">

                                <strong>
                                    67
                                </strong>

                                <span>
                                    Units available
                                </span>

                            </div>

                            <div class="stock-progress">

                                <div
                                    class="stock-progress-bar medium"
                                    style="width:61%;"
                                ></div>

                            </div>

                            <small>
                                Moderate
                            </small>

                        </div>



                        <!-- AB- -->

                        <div class="blood-stock-item">

                            <div class="blood-type">
                                AB-
                            </div>

                            <div class="blood-stock-info">

                                <strong>
                                    24
                                </strong>

                                <span>
                                    Units available
                                </span>

                            </div>

                            <div class="stock-progress">

                                <div
                                    class="stock-progress-bar low"
                                    style="width:31%;"
                                ></div>

                            </div>

                            <small>
                                Low supply
                            </small>

                        </div>

                    </div>

                </div>



                <!-- =================================================
                     EMERGENCY REQUESTS
                     ================================================= -->

                <div class="dashboard-card emergency-card">

                    <div class="dashboard-card-header">

                        <div>

                            <h3>
                                Emergency Requests
                            </h3>

                            <p>
                                Requests requiring immediate attention
                            </p>

                        </div>


                        <div class="live-badge">

                            <span></span>

                            LIVE

                        </div>

                    </div>


                    <div class="emergency-list">


                        <!-- Emergency 1 -->

                        <div class="emergency-item">

                            <div class="emergency-blood">
                                O-
                            </div>

                            <div class="emergency-details">

                                <strong>
                                    Emergency Blood Needed
                                </strong>

                                <span>
                                    Dhaka Medical College
                                </span>

                                <small>
                                    2 units • 12 minutes ago
                                </small>

                            </div>

                            <button
                                class="emergency-action"
                                title="View Request"
                            >

                                <i class="bi bi-arrow-up-right"></i>

                            </button>

                        </div>



                        <!-- Emergency 2 -->

                        <div class="emergency-item">

                            <div class="emergency-blood">
                                B+
                            </div>

                            <div class="emergency-details">

                                <strong>
                                    Urgent Blood Requirement
                                </strong>

                                <span>
                                    Square Hospital
                                </span>

                                <small>
                                    3 units • 24 minutes ago
                                </small>

                            </div>

                            <button
                                class="emergency-action"
                                title="View Request"
                            >

                                <i class="bi bi-arrow-up-right"></i>

                            </button>

                        </div>



                        <!-- Emergency 3 -->

                        <div class="emergency-item">

                            <div class="emergency-blood">
                                A+
                            </div>

                            <div class="emergency-details">

                                <strong>
                                    Blood Required
                                </strong>

                                <span>
                                    United Hospital
                                </span>

                                <small>
                                    1 unit • 41 minutes ago
                                </small>

                            </div>

                            <button
                                class="emergency-action"
                                title="View Request"
                            >

                                <i class="bi bi-arrow-up-right"></i>

                            </button>

                        </div>



                        <!-- Emergency 4 -->

                        <div class="emergency-item">

                            <div class="emergency-blood">
                                AB+
                            </div>

                            <div class="emergency-details">

                                <strong>
                                    Immediate Donation Needed
                                </strong>

                                <span>
                                    Ibn Sina Hospital
                                </span>

                                <small>
                                    2 units • 58 minutes ago
                                </small>

                            </div>

                            <button
                                class="emergency-action"
                                title="View Request"
                            >

                                <i class="bi bi-arrow-up-right"></i>

                            </button>

                        </div>

                    </div>


                    <a
                        href="blood_request/emergency_request.php"
                        class="emergency-view-all"
                    >

                        View All Emergency Requests

                        <i class="bi bi-arrow-right"></i>

                    </a>

                </div>

            </div>



            <!-- =================================================
                 THIRD ROW
                 ================================================= -->

            <div class="dashboard-grid third-row">


                <!-- =================================================
                     RECENT BLOOD REQUESTS
                     ================================================= -->

                <div class="dashboard-card">

                    <div class="dashboard-card-header">

                        <div>

                            <h3>
                                Recent Blood Requests
                            </h3>

                            <p>
                                Latest requests from users
                            </p>

                        </div>

                        <a
                            href="blood_request/request_list.php"
                            class="card-link"
                        >

                            View All

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>


                    <div class="dashboard-table-wrapper">

                        <table class="dashboard-table">

                            <thead>

                                <tr>

                                    <th>
                                        REQUESTER
                                    </th>

                                    <th>
                                        BLOOD
                                    </th>

                                    <th>
                                        DATE
                                    </th>

                                    <th>
                                        STATUS
                                    </th>

                                </tr>

                            </thead>


                            <tbody>


                                <tr>

                                    <td>

                                        <div class="table-person">

                                            <div class="person-avatar">
                                                <i class="bi bi-person-fill"></i>
                                            </div>

                                            <div>

                                                <strong>
                                                    Sarah Ahmed
                                                </strong>

                                                <span>
                                                    BR-10248
                                                </span>

                                            </div>

                                        </div>

                                    </td>


                                    <td>

                                        <span class="table-blood">
                                            O+
                                        </span>

                                    </td>


                                    <td>
                                        Aug 26, 2026
                                    </td>


                                    <td>

                                        <span class="status-pill pending">
                                            Pending
                                        </span>

                                    </td>

                                </tr>



                                <tr>

                                    <td>

                                        <div class="table-person">

                                            <div class="person-avatar">
                                                <i class="bi bi-person-fill"></i>
                                            </div>

                                            <div>

                                                <strong>
                                                    Tanvir Hasan
                                                </strong>

                                                <span>
                                                    BR-10247
                                                </span>

                                            </div>

                                        </div>

                                    </td>


                                    <td>

                                        <span class="table-blood">
                                            A+
                                        </span>

                                    </td>


                                    <td>
                                        Aug 26, 2026
                                    </td>


                                    <td>

                                        <span class="status-pill approved">
                                            Approved
                                        </span>

                                    </td>

                                </tr>



                                <tr>

                                    <td>

                                        <div class="table-person">

                                            <div class="person-avatar">
                                                <i class="bi bi-person-fill"></i>
                                            </div>

                                            <div>

                                                <strong>
                                                    Nusrat Jahan
                                                </strong>

                                                <span>
                                                    BR-10246
                                                </span>

                                            </div>

                                        </div>

                                    </td>


                                    <td>

                                        <span class="table-blood">
                                            B-
                                        </span>

                                    </td>


                                    <td>
                                        Aug 25, 2026
                                    </td>


                                    <td>

                                        <span class="status-pill completed">
                                            Completed
                                        </span>

                                    </td>

                                </tr>



                                <tr>

                                    <td>

                                        <div class="table-person">

                                            <div class="person-avatar">
                                                <i class="bi bi-person-fill"></i>
                                            </div>

                                            <div>

                                                <strong>
                                                    Rakib Chowdhury
                                                </strong>

                                                <span>
                                                    BR-10245
                                                </span>

                                            </div>

                                        </div>

                                    </td>


                                    <td>

                                        <span class="table-blood">
                                            AB+
                                        </span>

                                    </td>


                                    <td>
                                        Aug 25, 2026
                                    </td>


                                    <td>

                                        <span class="status-pill rejected">
                                            Rejected
                                        </span>

                                    </td>

                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>



                <!-- =================================================
                     RECENT ACTIVITY
                     ================================================= -->

                <div class="dashboard-card">

                    <div class="dashboard-card-header">

                        <div>

                            <h3>
                                Recent Activity
                            </h3>

                            <p>
                                Latest system activities
                            </p>

                        </div>

                        <a
                            href="#"
                            class="card-link"
                        >

                            View All

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>


                    <div class="activity-list">


                        <!-- Activity -->

                        <div class="activity-item">

                            <div class="activity-icon donation">

                                <i class="bi bi-droplet-fill"></i>

                            </div>

                            <div class="activity-content">

                                <strong>
                                    New blood donation recorded
                                </strong>

                                <span>
                                    Ahmed Rahman donated O+ blood.
                                </span>

                                <small>
                                    8 minutes ago
                                </small>

                            </div>

                        </div>



                        <div class="activity-item">

                            <div class="activity-icon appointment">

                                <i class="bi bi-calendar-check-fill"></i>

                            </div>

                            <div class="activity-content">

                                <strong>
                                    Appointment scheduled
                                </strong>

                                <span>
                                    Maria Akter booked a donation slot.
                                </span>

                                <small>
                                    21 minutes ago
                                </small>

                            </div>

                        </div>



                        <div class="activity-item">

                            <div class="activity-icon donor">

                                <i class="bi bi-person-plus-fill"></i>

                            </div>

                            <div class="activity-content">

                                <strong>
                                    New donor registered
                                </strong>

                                <span>
                                    Hasan Mahmud joined BloodCare.
                                </span>

                                <small>
                                    36 minutes ago
                                </small>

                            </div>

                        </div>



                        <div class="activity-item">

                            <div class="activity-icon request">

                                <i class="bi bi-file-earmark-medical-fill"></i>

                            </div>

                            <div class="activity-content">

                                <strong>
                                    Blood request approved
                                </strong>

                                <span>
                                    Request BR-10247 has been approved.
                                </span>

                                <small>
                                    52 minutes ago
                                </small>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 FOURTH ROW
                 ================================================= -->

            <div class="dashboard-grid third-row">


                <!-- =================================================
                     DONOR OVERVIEW
                     ================================================= -->

                <div class="dashboard-card">

                    <div class="dashboard-card-header">

                        <div>

                            <h3>
                                Donor Overview
                            </h3>

                            <p>
                                Current donor availability
                            </p>

                        </div>


                        <select class="card-filter">

                            <option>
                                This Month
                            </option>

                            <option>
                                Last Month
                            </option>

                            <option>
                                This Year
                            </option>

                        </select>

                    </div>


                    <div class="donor-overview-content">


                        <div class="donor-chart">

                            <div class="chart-circle">

                                <div class="chart-circle-inner">

                                    <strong>
                                        2,486
                                    </strong>

                                    <span>
                                        Total Donors
                                    </span>

                                </div>

                            </div>

                        </div>


                        <div class="donor-legend">


                            <div class="legend-item">

                                <span class="legend-dot active"></span>

                                <div>

                                    <strong>
                                        75%
                                    </strong>

                                    <span>
                                        Active Donors
                                    </span>

                                </div>

                            </div>



                            <div class="legend-item">

                                <span class="legend-dot inactive"></span>

                                <div>

                                    <strong>
                                        17%
                                    </strong>

                                    <span>
                                        Inactive Donors
                                    </span>

                                </div>

                            </div>



                            <div class="legend-item">

                                <span class="legend-dot unavailable"></span>

                                <div>

                                    <strong>
                                        8%
                                    </strong>

                                    <span>
                                        Currently Unavailable
                                    </span>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- =================================================
                     UPCOMING CAMPS
                     ================================================= -->

                <div class="dashboard-card">

                    <div class="dashboard-card-header">

                        <div>

                            <h3>
                                Upcoming Blood Camps
                            </h3>

                            <p>
                                Scheduled donation campaigns
                            </p>

                        </div>


                        <a
                            href="camp/blood_camp.php"
                            class="card-link"
                        >

                            View All

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </div>


                    <div class="camp-list">


                        <!-- Camp -->

                        <div class="camp-item">

                            <div class="camp-date">

                                <strong>
                                    05
                                </strong>

                                <span>
                                    SEP
                                </span>

                            </div>


                            <div class="camp-info">

                                <strong>
                                    Life Saver Blood Donation Camp
                                </strong>

                                <span>

                                    <i class="bi bi-geo-alt-fill"></i>

                                    Dhaka Community Center

                                </span>

                            </div>


                            <span class="camp-status">
                                Upcoming
                            </span>

                        </div>



                        <div class="camp-item">

                            <div class="camp-date">

                                <strong>
                                    12
                                </strong>

                                <span>
                                    SEP
                                </span>

                            </div>


                            <div class="camp-info">

                                <strong>
                                    Save Life Campaign 2026
                                </strong>

                                <span>

                                    <i class="bi bi-geo-alt-fill"></i>

                                    Uttara Community Hall

                                </span>

                            </div>


                            <span class="camp-status">
                                Upcoming
                            </span>

                        </div>



                        <div class="camp-item">

                            <div class="camp-date">

                                <strong>
                                    20
                                </strong>

                                <span>
                                    SEP
                                </span>

                            </div>


                            <div class="camp-info">

                                <strong>
                                    Blood Heroes Initiative
                                </strong>

                                <span>

                                    <i class="bi bi-geo-alt-fill"></i>

                                    Mirpur Convention Center

                                </span>

                            </div>


                            <span class="camp-status">
                                Upcoming
                            </span>

                        </div>



                        <div class="camp-item">

                            <div class="camp-date">

                                <strong>
                                    28
                                </strong>

                                <span>
                                    SEP
                                </span>

                            </div>


                            <div class="camp-info">

                                <strong>
                                    Donate Blood, Save Lives
                                </strong>

                                <span>

                                    <i class="bi bi-geo-alt-fill"></i>

                                    Dhanmondi Town Hall

                                </span>

                            </div>


                            <span class="camp-status">
                                Upcoming
                            </span>

                        </div>

                    </div>

                </div>

            </div>



            <!-- =================================================
                 FOOTER
                 ================================================= -->

            <footer class="dashboard-footer">

                <span>
                    © <?php echo date('Y'); ?>
                    <strong>BloodCare</strong>.
                    All rights reserved.
                </span>


                <div>

                    <a href="#">
                        Privacy
                    </a>

                    <a href="#">
                        Terms
                    </a>

                    <a href="#">
                        Support
                    </a>

                </div>

            </footer>


        </div>

    </main>

</div>



<!-- =========================================================
     JAVASCRIPT
     ========================================================= -->

<script src="../assets/js/dashboard.js"></script>

<script src="../assets/js/script.js"></script>


</body>

</html>