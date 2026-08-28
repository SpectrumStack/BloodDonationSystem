<?php
// ======================================================
// BLOODCARE - ADMIN APPOINTMENT LIST
// ======================================================

session_start();

// Login protection চাইলে পরে এখানে add করবে
// require_once '../../includes/session.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Appointments | BloodCare Admin</title>

    <!-- ==================================================
         BOOTSTRAP ICONS
    ================================================== -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- ==================================================
         GLOBAL CSS
    ================================================== -->
    <link rel="stylesheet"
          href="../../assets/css/style.css">

    <!-- ==================================================
         ADMIN DASHBOARD CSS
    ================================================== -->
    <link rel="stylesheet"
          href="../../assets/css/dashboard.css">

    <!-- ==================================================
         ADMIN INNER PAGES CSS
    ================================================== -->
    <link rel="stylesheet"
          href="../../assets/css/admin-pages.css">

</head>

<body>

<div class="admin-app">

    <!-- ==================================================
         SIDEBAR
    ================================================== -->

    <?php include '../../includes/admin_sidebar.php'; ?>


    <!-- ==================================================
         MAIN
    ================================================== -->

    <main class="admin-main">

        <!-- NAVBAR -->

        <?php include '../../includes/navbar.php'; ?>


        <!-- PAGE CONTENT -->

        <div class="admin-page">

            <!-- PAGE HEADER -->

            <div class="page-header">

                <div class="page-header-left">

                    <div class="breadcrumb">
                        <i class="bi bi-grid"></i>
                        <span>Admin</span>
                        <i class="bi bi-chevron-right"></i>
                        <span>Appointments</span>
                    </div>

                    <h1>Appointment Management</h1>

                    <p>
                        Manage donor appointments, schedules and donation visits.
                    </p>

                </div>


                <div class="page-header-actions">

                    <button class="btn btn-outline">
                        <i class="bi bi-download"></i>
                        Export
                    </button>

                    <button class="btn btn-primary">
                        <i class="bi bi-plus-lg"></i>
                        New Appointment
                    </button>

                </div>

            </div>


            <!-- ==================================================
                 STAT CARDS
            ================================================== -->

            <div class="page-stats">

                <div class="page-stat-card">

                    <div class="page-stat-icon red">
                        <i class="bi bi-calendar-check"></i>
                    </div>

                    <div>
                        <span>Total Appointments</span>
                        <strong>248</strong>
                        <small>All appointments</small>
                    </div>

                </div>


                <div class="page-stat-card">

                    <div class="page-stat-icon orange">
                        <i class="bi bi-clock"></i>
                    </div>

                    <div>
                        <span>Pending</span>
                        <strong>32</strong>
                        <small>Waiting for approval</small>
                    </div>

                </div>


                <div class="page-stat-card">

                    <div class="page-stat-icon blue">
                        <i class="bi bi-calendar-event"></i>
                    </div>

                    <div>
                        <span>Today</span>
                        <strong>18</strong>
                        <small>Scheduled today</small>
                    </div>

                </div>


                <div class="page-stat-card">

                    <div class="page-stat-icon green">
                        <i class="bi bi-check-circle"></i>
                    </div>

                    <div>
                        <span>Completed</span>
                        <strong>198</strong>
                        <small>Successfully completed</small>
                    </div>

                </div>

            </div>


            <!-- ==================================================
                 FILTER CARD
            ================================================== -->

            <div class="page-card">

                <div class="page-card-header">

                    <div>

                        <h3>
                            <i class="bi bi-calendar3"></i>
                            Appointment Records
                        </h3>

                        <p>
                            View and manage all donor appointments.
                        </p>

                    </div>


                    <div class="page-filter-actions">

                        <div class="search-box">

                            <i class="bi bi-search"></i>

                            <input
                                type="text"
                                placeholder="Search appointments..."
                            >

                        </div>


                        <select class="form-select page-filter">

                            <option>All Status</option>
                            <option>Pending</option>
                            <option>Approved</option>
                            <option>Completed</option>
                            <option>Rejected</option>

                        </select>

                    </div>

                </div>


                <!-- TABLE -->

                <div class="page-table-wrapper">

                    <table class="page-table">

                        <thead>

                        <tr>

                            <th>DONOR</th>
                            <th>BLOOD GROUP</th>
                            <th>DATE</th>
                            <th>TIME</th>
                            <th>LOCATION</th>
                            <th>STATUS</th>
                            <th>ACTION</th>

                        </tr>

                        </thead>


                        <tbody>

                        <tr>

                            <td>

                                <div class="table-user">

                                    <img
                                        src="../../assets/images/default-user.png"
                                        alt="Donor"
                                    >

                                    <div>
                                        <strong>Rahim Ahmed</strong>
                                        <span>rahim@email.com</span>
                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="blood-badge">O+</span>
                            </td>


                            <td>
                                26 Aug 2026
                            </td>


                            <td>
                                10:30 AM
                            </td>


                            <td>
                                Dhaka Medical
                            </td>


                            <td>
                                <span class="status-badge approved">
                                    Approved
                                </span>
                            </td>


                            <td>

                                <div class="table-actions">

                                    <button class="action-btn view">
                                        <i class="bi bi-eye"></i>
                                    </button>

                                    <button class="action-btn edit">
                                        <i class="bi bi-pencil"></i>
                                    </button>

                                    <button class="action-btn delete">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                </div>

                            </td>

                        </tr>


                        <tr>

                            <td>

                                <div class="table-user">

                                    <img
                                        src="../../assets/images/default-user.png"
                                        alt="Donor"
                                    >

                                    <div>
                                        <strong>Sumaiya Akter</strong>
                                        <span>sumaiya@email.com</span>
                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="blood-badge">A+</span>
                            </td>


                            <td>
                                27 Aug 2026
                            </td>


                            <td>
                                11:00 AM
                            </td>


                            <td>
                                BloodCare Center
                            </td>


                            <td>
                                <span class="status-badge pending">
                                    Pending
                                </span>
                            </td>


                            <td>

                                <div class="table-actions">

                                    <button class="action-btn view">
                                        <i class="bi bi-eye"></i>
                                    </button>

                                    <button class="action-btn edit">
                                        <i class="bi bi-pencil"></i>
                                    </button>

                                    <button class="action-btn delete">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                </div>

                            </td>

                        </tr>


                        <tr>

                            <td>

                                <div class="table-user">

                                    <img
                                        src="../../assets/images/default-user.png"
                                        alt="Donor"
                                    >

                                    <div>
                                        <strong>Tanvir Hasan</strong>
                                        <span>tanvir@email.com</span>
                                    </div>

                                </div>

                            </td>


                            <td>
                                <span class="blood-badge">B+</span>
                            </td>


                            <td>
                                25 Aug 2026
                            </td>


                            <td>
                                02:00 PM
                            </td>


                            <td>
                                Uttara Center
                            </td>


                            <td>
                                <span class="status-badge completed">
                                    Completed
                                </span>
                            </td>


                            <td>

                                <div class="table-actions">

                                    <button class="action-btn view">
                                        <i class="bi bi-eye"></i>
                                    </button>

                                    <button class="action-btn edit">
                                        <i class="bi bi-pencil"></i>
                                    </button>

                                    <button class="action-btn delete">
                                        <i class="bi bi-trash"></i>
                                    </button>

                                </div>

                            </td>

                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>


            <!-- FOOTER -->

            <?php include '../../includes/footer.php'; ?>

        </div>

    </main>

</div>


<script src="../../assets/js/script.js"></script>
<script src="../../assets/js/dashboard.js"></script>

</body>
</html>