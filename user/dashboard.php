<?php
// Database / backend will be added later.
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>User Dashboard | BloodCare</title>


    <!-- =====================================================
         BOOTSTRAP ICONS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    <!-- =====================================================
         GLOBAL CSS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="../assets/css/style.css"
    >


    <!-- =====================================================
         DASHBOARD / SIDEBAR CSS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="../assets/css/dashboard.css"
    >


    <!-- =====================================================
         USER PAGE CSS
    ====================================================== -->

    <link
        rel="stylesheet"
        href="../assets/css/user-pages.css"
    >

</head>


<body>


    <!-- =====================================================
         USER SIDEBAR
    ====================================================== -->

    <?php include '../includes/user_sidebar.php'; ?>


    <!-- =====================================================
         MAIN CONTENT
    ====================================================== -->

    <main class="main-content">


        <!-- =================================================
             PAGE HEADER
        ================================================== -->

        <div class="user-page">

            <div class="user-page-header">

                <div class="user-page-title">

                    <div class="title-icon">
                        <i class="bi bi-grid-1x2-fill"></i>
                    </div>

                    <div>

                        <h1>
                            Welcome Back!
                        </h1>

                        <p>
                            Find blood donors and manage your blood requests.
                        </p>

                    </div>

                </div>


                <div class="user-header-actions">

                    <a
                        href="blood_request.php"
                        class="btn btn-primary"
                    >
                        <i class="bi bi-plus-lg"></i>
                        Request Blood
                    </a>

                    <a
                        href="search_donor.php"
                        class="btn btn-outline"
                    >
                        <i class="bi bi-search"></i>
                        Find Donor
                    </a>

                </div>

            </div>


            <!-- =================================================
                 STATISTICS
            ================================================== -->

            <div class="user-stats">


                <!-- Blood Requests -->
                <div class="user-stat">

                    <div class="user-stat-top">

                        <div class="user-stat-icon red">
                            <i class="bi bi-droplet-fill"></i>
                        </div>

                        <small>
                            This month
                        </small>

                    </div>

                    <h2>
                        03
                    </h2>

                    <p>
                        Blood Requests
                    </p>

                </div>


                <!-- Completed -->
                <div class="user-stat">

                    <div class="user-stat-top">

                        <div class="user-stat-icon green">
                            <i class="bi bi-check-circle-fill"></i>
                        </div>

                        <small>
                            Successful
                        </small>

                    </div>

                    <h2>
                        02
                    </h2>

                    <p>
                        Completed Requests
                    </p>

                </div>


                <!-- Appointments -->
                <div class="user-stat">

                    <div class="user-stat-top">

                        <div class="user-stat-icon blue">
                            <i class="bi bi-calendar-check"></i>
                        </div>

                        <small>
                            Upcoming
                        </small>

                    </div>

                    <h2>
                        01
                    </h2>

                    <p>
                        Appointments
                    </p>

                </div>


                <!-- Notifications -->
                <div class="user-stat">

                    <div class="user-stat-top">

                        <div class="user-stat-icon orange">
                            <i class="bi bi-bell-fill"></i>
                        </div>

                        <small>
                            Unread
                        </small>

                    </div>

                    <h2>
                        04
                    </h2>

                    <p>
                        Notifications
                    </p>

                </div>

            </div>


            <!-- =================================================
                 MAIN CONTENT GRID
            ================================================== -->

            <div class="user-grid">


                <!-- =================================================
                     RECENT REQUESTS
                ================================================== -->

                <div class="user-panel">

                    <div class="user-panel-header">

                        <div>

                            <h3>
                                Recent Blood Requests
                            </h3>

                            <p>
                                Your latest blood request activities
                            </p>

                        </div>

                        <a
                            href="my_requests.php"
                            class="btn btn-sm btn-outline"
                        >
                            View All
                        </a>

                    </div>


                    <div class="request-table-wrapper">

                        <table class="user-table">

                            <thead>

                                <tr>

                                    <th>
                                        Request ID
                                    </th>

                                    <th>
                                        Blood Group
                                    </th>

                                    <th>
                                        Location
                                    </th>

                                    <th>
                                        Date
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                </tr>

                            </thead>


                            <tbody>


                                <tr>

                                    <td>
                                        <span class="request-id">
                                            #REQ-1024
                                        </span>
                                    </td>

                                    <td>
                                        <span class="request-blood">
                                            A+
                                        </span>
                                    </td>

                                    <td>
                                        Dhaka Medical
                                    </td>

                                    <td>
                                        25 Aug 2026
                                    </td>

                                    <td>
                                        <span class="status approved">
                                            Approved
                                        </span>
                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        <span class="request-id">
                                            #REQ-1021
                                        </span>
                                    </td>

                                    <td>
                                        <span class="request-blood">
                                            O+
                                        </span>
                                    </td>

                                    <td>
                                        Uttara
                                    </td>

                                    <td>
                                        20 Aug 2026
                                    </td>

                                    <td>
                                        <span class="status completed">
                                            Completed
                                        </span>
                                    </td>

                                </tr>


                                <tr>

                                    <td>
                                        <span class="request-id">
                                            #REQ-1018
                                        </span>
                                    </td>

                                    <td>
                                        <span class="request-blood">
                                            B+
                                        </span>
                                    </td>

                                    <td>
                                        Mirpur
                                    </td>

                                    <td>
                                        18 Aug 2026
                                    </td>

                                    <td>
                                        <span class="status pending">
                                            Pending
                                        </span>
                                    </td>

                                </tr>


                            </tbody>

                        </table>

                    </div>

                </div>


                <!-- =================================================
                     QUICK ACTIONS
                ================================================== -->

                <div class="user-panel">

                    <div class="user-panel-header">

                        <div>

                            <h3>
                                Quick Actions
                            </h3>

                            <p>
                                Frequently used services
                            </p>

                        </div>

                    </div>


                    <div class="user-panel-body">

                        <div class="quick-actions">


                            <a
                                href="search_donor.php"
                                class="quick-action"
                            >

                                <div class="quick-action-icon">
                                    <i class="bi bi-search"></i>
                                </div>

                                <div>

                                    <strong>
                                        Find Donor
                                    </strong>

                                    <span>
                                        Search nearby donors
                                    </span>

                                </div>

                            </a>


                            <a
                                href="blood_request.php"
                                class="quick-action"
                            >

                                <div class="quick-action-icon">
                                    <i class="bi bi-droplet-fill"></i>
                                </div>

                                <div>

                                    <strong>
                                        Request Blood
                                    </strong>

                                    <span>
                                        Create blood request
                                    </span>

                                </div>

                            </a>


                            <a
                                href="emergency_request.php"
                                class="quick-action"
                            >

                                <div class="quick-action-icon">
                                    <i class="bi bi-exclamation-triangle-fill"></i>
                                </div>

                                <div>

                                    <strong>
                                        Emergency
                                    </strong>

                                    <span>
                                        Urgent blood request
                                    </span>

                                </div>

                            </a>


                            <a
                                href="notifications.php"
                                class="quick-action"
                            >

                                <div class="quick-action-icon">
                                    <i class="bi bi-bell-fill"></i>
                                </div>

                                <div>

                                    <strong>
                                        Notifications
                                    </strong>

                                    <span>
                                        View latest updates
                                    </span>

                                </div>

                            </a>


                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 BLOODCARE SERVICES
            ================================================== -->

            <div class="user-panel">

                <div class="user-panel-header">

                    <div>

                        <h3>
                            BloodCare Services
                        </h3>

                        <p>
                            Everything you need to manage your blood requirements.
                        </p>

                    </div>

                </div>


                <div class="user-panel-body">

                    <div class="quick-actions">


                        <a
                            href="search_donor.php"
                            class="quick-action"
                        >

                            <div class="quick-action-icon">
                                <i class="bi bi-people-fill"></i>
                            </div>

                            <div>

                                <strong>
                                    Search Donors
                                </strong>

                                <span>
                                    Find compatible blood donors
                                </span>

                            </div>

                        </a>


                        <a
                            href="my_requests.php"
                            class="quick-action"
                        >

                            <div class="quick-action-icon">
                                <i class="bi bi-file-earmark-medical"></i>
                            </div>

                            <div>

                                <strong>
                                    My Requests
                                </strong>

                                <span>
                                    Track your blood requests
                                </span>

                            </div>

                        </a>


                        <a
                            href="profile.php"
                            class="quick-action"
                        >

                            <div class="quick-action-icon">
                                <i class="bi bi-person-circle"></i>
                            </div>

                            <div>

                                <strong>
                                    My Profile
                                </strong>

                                <span>
                                    Manage your account
                                </span>

                            </div>

                        </a>


                        <a
                            href="emergency_request.php"
                            class="quick-action"
                        >

                            <div class="quick-action-icon">
                                <i class="bi bi-heart-pulse-fill"></i>
                            </div>

                            <div>

                                <strong>
                                    Emergency Help
                                </strong>

                                <span>
                                    Request blood urgently
                                </span>

                            </div>

                        </a>


                    </div>

                </div>

            </div>


        </div>

    </main>


</body>

</html>