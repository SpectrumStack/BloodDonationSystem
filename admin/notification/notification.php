<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Notifications | BloodCare Admin</title>

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

                        <span>Notifications</span>

                    </div>

                    <h1>Notifications</h1>

                    <p>
                        Manage system alerts and important notifications.
                    </p>

                </div>


                <div class="page-header-actions">

                    <button class="btn btn-outline">
                        <i class="bi bi-check2-all"></i>
                        Mark All Read
                    </button>

                    <button class="btn btn-primary">
                        <i class="bi bi-plus-lg"></i>
                        Create Notification
                    </button>

                </div>

            </div>


            <!-- NOTIFICATION STATS -->

            <div class="page-stats">

                <div class="page-stat-card">

                    <div class="page-stat-icon red">
                        <i class="bi bi-bell"></i>
                    </div>

                    <div>
                        <span>Total Notifications</span>
                        <strong>386</strong>
                        <small>All notifications</small>
                    </div>

                </div>


                <div class="page-stat-card">

                    <div class="page-stat-icon orange">
                        <i class="bi bi-envelope"></i>
                    </div>

                    <div>
                        <span>Unread</span>
                        <strong>24</strong>
                        <small>Need attention</small>
                    </div>

                </div>


                <div class="page-stat-card">

                    <div class="page-stat-icon green">
                        <i class="bi bi-send"></i>
                    </div>

                    <div>
                        <span>Sent Today</span>
                        <strong>57</strong>
                        <small>Today's notifications</small>
                    </div>

                </div>


                <div class="page-stat-card">

                    <div class="page-stat-icon blue">
                        <i class="bi bi-people"></i>
                    </div>

                    <div>
                        <span>Recipients</span>
                        <strong>1,842</strong>
                        <small>Total users</small>
                    </div>

                </div>

            </div>


            <!-- NOTIFICATION CARD -->

            <div class="page-card">

                <div class="page-card-header">

                    <div>

                        <h3>
                            <i class="bi bi-bell"></i>
                            Recent Notifications
                        </h3>

                        <p>
                            Latest system notifications and alerts.
                        </p>

                    </div>


                    <select class="form-select page-filter">

                        <option>All Notifications</option>
                        <option>Unread</option>
                        <option>Emergency</option>
                        <option>System</option>
                        <option>Campaign</option>

                    </select>

                </div>


                <div class="notification-page-list">


                    <!-- NOTIFICATION 1 -->

                    <div class="notification-page-item unread">

                        <div class="notification-page-icon emergency">

                            <i class="bi bi-exclamation-triangle"></i>

                        </div>


                        <div class="notification-page-content">

                            <div class="notification-page-title">

                                <strong>
                                    Emergency Blood Request
                                </strong>

                                <span>
                                    10 minutes ago
                                </span>

                            </div>

                            <p>
                                Emergency request received for O- blood
                                at Dhaka Medical College.
                            </p>

                            <div class="notification-page-meta">

                                <span class="notification-tag emergency">
                                    Emergency
                                </span>

                                <span>
                                    Request #BC-1024
                                </span>

                            </div>

                        </div>


                        <button class="notification-more">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>

                    </div>


                    <!-- NOTIFICATION 2 -->

                    <div class="notification-page-item unread">

                        <div class="notification-page-icon donation">

                            <i class="bi bi-droplet"></i>

                        </div>


                        <div class="notification-page-content">

                            <div class="notification-page-title">

                                <strong>
                                    New Donation Completed
                                </strong>

                                <span>
                                    35 minutes ago
                                </span>

                            </div>

                            <p>
                                Rahim Ahmed successfully completed
                                a blood donation.
                            </p>

                            <div class="notification-page-meta">

                                <span class="notification-tag donation">
                                    Donation
                                </span>

                                <span>
                                    Donor #D-2045
                                </span>

                            </div>

                        </div>


                        <button class="notification-more">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>

                    </div>


                    <!-- NOTIFICATION 3 -->

                    <div class="notification-page-item">

                        <div class="notification-page-icon camp">

                            <i class="bi bi-geo-alt"></i>

                        </div>


                        <div class="notification-page-content">

                            <div class="notification-page-title">

                                <strong>
                                    Upcoming Blood Camp
                                </strong>

                                <span>
                                    2 hours ago
                                </span>

                            </div>

                            <p>
                                Life Saver Blood Donation Camp is scheduled
                                for September 5, 2026.
                            </p>

                            <div class="notification-page-meta">

                                <span class="notification-tag camp">
                                    Campaign
                                </span>

                            </div>

                        </div>


                        <button class="notification-more">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>

                    </div>


                    <!-- NOTIFICATION 4 -->

                    <div class="notification-page-item">

                        <div class="notification-page-icon system">

                            <i class="bi bi-shield-check"></i>

                        </div>


                        <div class="notification-page-content">

                            <div class="notification-page-title">

                                <strong>
                                    System Update
                                </strong>

                                <span>
                                    Yesterday
                                </span>

                            </div>

                            <p>
                                BloodCare system maintenance has been
                                completed successfully.
                            </p>

                            <div class="notification-page-meta">

                                <span class="notification-tag system">
                                    System
                                </span>

                            </div>

                        </div>


                        <button class="notification-more">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>

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