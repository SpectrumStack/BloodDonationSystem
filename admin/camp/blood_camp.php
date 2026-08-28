<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Blood Camps | BloodCare Admin</title>

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet"
          href="../../assets/css/style.css">

    <link rel="stylesheet"
          href="../../assets/css/dashboard.css">

    <link rel="stylesheet"
          href="../../assets/css/admin-pages.css">

</head>

<body>

<div class="admin-app">

    <?php include '../../includes/admin_sidebar.php'; ?>

    <main class="admin-main">

        <?php include '../../includes/navbar.php'; ?>

        <div class="admin-page">

            <!-- HEADER -->

            <div class="page-header">

                <div class="page-header-left">

                    <div class="breadcrumb">

                        <i class="bi bi-grid"></i>
                        <span>Admin</span>

                        <i class="bi bi-chevron-right"></i>

                        <span>Blood Camps</span>

                    </div>

                    <h1>Blood Donation Camps</h1>

                    <p>
                        Create, manage and monitor blood donation campaigns.
                    </p>

                </div>


                <div class="page-header-actions">

                    <button class="btn btn-outline">
                        <i class="bi bi-calendar3"></i>
                        Calendar
                    </button>

                    <button class="btn btn-primary">
                        <i class="bi bi-plus-lg"></i>
                        Create Camp
                    </button>

                </div>

            </div>


            <!-- CAMP STATS -->

            <div class="page-stats">

                <div class="page-stat-card">

                    <div class="page-stat-icon red">
                        <i class="bi bi-geo-alt"></i>
                    </div>

                    <div>
                        <span>Total Camps</span>
                        <strong>42</strong>
                        <small>All campaigns</small>
                    </div>

                </div>


                <div class="page-stat-card">

                    <div class="page-stat-icon blue">
                        <i class="bi bi-calendar-event"></i>
                    </div>

                    <div>
                        <span>Upcoming</span>
                        <strong>08</strong>
                        <small>Upcoming camps</small>
                    </div>

                </div>


                <div class="page-stat-card">

                    <div class="page-stat-icon green">
                        <i class="bi bi-check-circle"></i>
                    </div>

                    <div>
                        <span>Completed</span>
                        <strong>31</strong>
                        <small>Completed camps</small>
                    </div>

                </div>


                <div class="page-stat-card">

                    <div class="page-stat-icon orange">
                        <i class="bi bi-people"></i>
                    </div>

                    <div>
                        <span>Registrations</span>
                        <strong>1,284</strong>
                        <small>Total registrations</small>
                    </div>

                </div>

            </div>


            <!-- CAMP LIST -->

            <div class="camp-page-grid">


                <div class="camp-page-card">

                    <div class="camp-page-banner">

                        <div class="camp-date-large">

                            <strong>05</strong>
                            <span>SEP</span>

                        </div>

                        <span class="camp-live-status">
                            Upcoming
                        </span>

                    </div>


                    <div class="camp-page-content">

                        <h3>
                            Life Saver Blood Donation Camp
                        </h3>

                        <p>
                            <i class="bi bi-geo-alt"></i>
                            Dhaka Medical College
                        </p>

                        <p>
                            <i class="bi bi-clock"></i>
                            09:00 AM - 04:00 PM
                        </p>


                        <div class="camp-page-meta">

                            <span>
                                <i class="bi bi-people"></i>
                                128 Registered
                            </span>

                            <span>
                                Capacity: 200
                            </span>

                        </div>


                        <div class="camp-page-actions">

                            <button class="btn btn-outline btn-sm">
                                <i class="bi bi-eye"></i>
                                View
                            </button>

                            <button class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil"></i>
                                Manage
                            </button>

                        </div>

                    </div>

                </div>


                <div class="camp-page-card">

                    <div class="camp-page-banner">

                        <div class="camp-date-large">

                            <strong>12</strong>
                            <span>SEP</span>

                        </div>

                        <span class="camp-live-status">
                            Upcoming
                        </span>

                    </div>


                    <div class="camp-page-content">

                        <h3>
                            Blood For Life Campaign
                        </h3>

                        <p>
                            <i class="bi bi-geo-alt"></i>
                            Uttara Community Center
                        </p>

                        <p>
                            <i class="bi bi-clock"></i>
                            10:00 AM - 05:00 PM
                        </p>


                        <div class="camp-page-meta">

                            <span>
                                <i class="bi bi-people"></i>
                                94 Registered
                            </span>

                            <span>
                                Capacity: 150
                            </span>

                        </div>


                        <div class="camp-page-actions">

                            <button class="btn btn-outline btn-sm">
                                <i class="bi bi-eye"></i>
                                View
                            </button>

                            <button class="btn btn-primary btn-sm">
                                <i class="bi bi-pencil"></i>
                                Manage
                            </button>

                        </div>

                    </div>

                </div>


            </div>


            <?php include '../../includes/footer.php'; ?>

        </div>

    </main>

</div>


<script src="../../assets/js/script.js"></script>
<script src="../../assets/js/dashboard.js"></script>

</body>
</html>