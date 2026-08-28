<?php
// =========================================================
// BLOODCARE - DONOR PROFILE
// UI ONLY
// =========================================================
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Donor Profile | BloodCare</title>
<!-- Bootstrap Icons -->
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- Global CSS -->
<link rel="stylesheet"
      href="../../assets/css/style.css">

<!-- Admin Dashboard CSS -->
<link rel="stylesheet"
      href="../../assets/css/dashboard.css">

<!-- Admin Inner Pages CSS -->
<link rel="stylesheet"
      href="../../assets/css/admin-pages.css">

    <style>

        .page-content {
            padding: 28px;
        }

        .profile-header-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 17px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            margin-bottom: 20px;
        }

        .profile-cover {
            height: 120px;
            background:
                linear-gradient(
                    135deg,
                    #991b1b,
                    #dc2626
                );
            position: relative;
        }

        .profile-main {
            padding: 0 25px 22px;
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 20px;
        }

        .profile-person {
            display: flex;
            align-items: flex-end;
            gap: 15px;
            margin-top: -42px;
        }

        .profile-photo {
            width: 88px;
            height: 88px;
            border-radius: 18px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: var(--shadow-md);
        }

        .profile-name h1 {
            font-size: 22px;
            margin-bottom: 3px;
        }

        .profile-name p {
            font-size: 11px;
            margin-bottom: 7px;
        }

        .profile-actions {
            display: flex;
            gap: 8px;
        }

        .profile-body {
            display: grid;
            grid-template-columns: 1.3fr .7fr;
            gap: 20px;
        }

        .profile-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: var(--shadow-sm);
            overflow: hidden;
        }

        .profile-card-header {
            padding: 18px 20px;
            border-bottom: 1px solid var(--border-light);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .profile-card-header h3 {
            font-size: 15px;
            margin: 0;
        }

        .profile-card-body {
            padding: 20px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 18px;
        }

        .profile-info-item {
            display: flex;
            gap: 11px;
        }

        .profile-info-icon {
            width: 36px;
            height: 36px;
            border-radius: 9px;
            background: var(--primary-soft);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .profile-info-item span {
            display: block;
            color: var(--text-muted);
            font-size: 9px;
            margin-bottom: 3px;
        }

        .profile-info-item strong {
            display: block;
            color: var(--text-dark);
            font-size: 11px;
        }

        .blood-highlight {
            text-align: center;
            padding: 25px 20px;
        }

        .large-blood {
            width: 85px;
            height: 85px;
            margin: auto;
            border-radius: 23px;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Poppins,sans-serif;
            font-size: 27px;
            font-weight: 800;
        }

        .blood-highlight h3 {
            margin-top: 13px;
            font-size: 16px;
        }

        .blood-highlight p {
            font-size: 10px;
        }

        .availability {
            margin: 20px;
            padding: 13px;
            border-radius: 10px;
            background: #ecfdf5;
            border: 1px solid #bbf7d0;
            display: flex;
            align-items: center;
            gap: 9px;
            color: #15803d;
            font-size: 11px;
            font-weight: 700;
        }

        .availability i {
            font-size: 15px;
        }

        .history-table {
            width: 100%;
            border-collapse: collapse;
        }

        .history-table th {
            background: #f8fafc;
            color: var(--text-muted);
            font-size: 9px;
            text-align: left;
            padding: 11px 15px;
        }

        .history-table td {
            padding: 13px 15px;
            border-bottom: 1px solid var(--border-light);
            font-size: 10px;
        }

        @media(max-width: 950px) {

            .profile-body {
                grid-template-columns: 1fr;
            }

        }

        @media(max-width: 650px) {

            .page-content {
                padding: 20px 16px;
            }

            .profile-main {
                align-items: flex-start;
                flex-direction: column;
            }

            .profile-actions {
                width: 100%;
            }

            .profile-actions .btn {
                flex: 1;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>


<body>


<div class="admin-app">


    <!-- SIDEBAR -->

    <aside class="admin-sidebar">

        <div class="sidebar-logo">

            <a href="../dashboard.php" class="sidebar-logo-link">

                <div class="sidebar-logo-icon">
                    <i class="bi bi-droplet-fill"></i>
                </div>

                <div class="sidebar-logo-text">

                    <strong>BloodCare</strong>

                    <span>ADMINISTRATION PANEL</span>

                </div>

            </a>

        </div>


        <nav class="sidebar-navigation">

            <div class="sidebar-section-title">
                MAIN MENU
            </div>

            <ul class="sidebar-menu">

                <li>
                    <a href="../dashboard.php">
                        <span class="menu-icon">
                            <i class="bi bi-grid-1x2-fill"></i>
                        </span>
                        Dashboard
                    </a>
                </li>

                <li>
                    <a href="donor_list.php" class="active">
                        <span class="menu-icon">
                            <i class="bi bi-people-fill"></i>
                        </span>
                        Donors
                    </a>
                </li>

                <li>
                    <a href="../blood_request/request_list.php">
                        <span class="menu-icon">
                            <i class="bi bi-file-earmark-medical-fill"></i>
                        </span>
                        Blood Requests
                    </a>
                </li>

                <li>
                    <a href="../appointment/appointment_list.php">
                        <span class="menu-icon">
                            <i class="bi bi-calendar-check-fill"></i>
                        </span>
                        Appointments
                    </a>
                </li>

            </ul>

        </nav>

    </aside>


    <!-- MAIN -->

    <main class="admin-main">


        <header class="admin-navbar">

            <div class="navbar-left">

                <button class="sidebar-toggle">
                    <i class="bi bi-list"></i>
                </button>

                <div class="navbar-heading">

                    <span>DONOR MANAGEMENT</span>

                    <strong>Donor Profile</strong>

                </div>

            </div>


            <div class="navbar-right">

                <button class="navbar-icon-btn">

                    <i class="bi bi-bell"></i>

                    <span class="notification-dot"></span>

                </button>


                <div class="navbar-divider"></div>


                <div class="navbar-user">

                    <img
                        src="../../assets/images/default-user.png"
                        alt="Admin"
                    >

                    <div class="navbar-user-info">

                        <strong>Administrator</strong>

                        <span>Super Admin</span>

                    </div>

                </div>

            </div>

        </header>


        <section class="page-content">


            <!-- PROFILE HEADER -->

            <div class="profile-header-card">

                <div class="profile-cover"></div>


                <div class="profile-main">


                    <div class="profile-person">

                        <img
                            class="profile-photo"
                            src="../../assets/images/default-user.png"
                            alt="Donor"
                        >


                        <div class="profile-name">

                            <h1>Rahim Ahmed</h1>

                            <p>
                                Donor ID: DN-1001
                            </p>

                            <span class="badge badge-success">
                                <i class="bi bi-check-circle"></i>
                                Available Donor
                            </span>

                        </div>

                    </div>


                    <div class="profile-actions">

                        <a
                            href="update_donor.php"
                            class="btn btn-outline"
                        >

                            <i class="bi bi-pencil"></i>

                            Edit

                        </a>


                        <button class="btn btn-primary">

                            <i class="bi bi-telephone"></i>

                            Contact

                        </button>

                    </div>


                </div>

            </div>


            <!-- BODY -->

            <div class="profile-body">


                <!-- DETAILS -->

                <div class="profile-card">

                    <div class="profile-card-header">

                        <h3>Personal Information</h3>

                    </div>


                    <div class="profile-card-body">

                        <div class="info-grid">


                            <div class="profile-info-item">

                                <div class="profile-info-icon">
                                    <i class="bi bi-person"></i>
                                </div>

                                <div>

                                    <span>Full Name</span>

                                    <strong>
                                        Rahim Ahmed
                                    </strong>

                                </div>

                            </div>


                            <div class="profile-info-item">

                                <div class="profile-info-icon">
                                    <i class="bi bi-envelope"></i>
                                </div>

                                <div>

                                    <span>Email</span>

                                    <strong>
                                        rahim@example.com
                                    </strong>

                                </div>

                            </div>


                            <div class="profile-info-item">

                                <div class="profile-info-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>

                                <div>

                                    <span>Phone</span>

                                    <strong>
                                        01712-345678
                                    </strong>

                                </div>

                            </div>


                            <div class="profile-info-item">

                                <div class="profile-info-icon">
                                    <i class="bi bi-gender-ambiguous"></i>
                                </div>

                                <div>

                                    <span>Gender</span>

                                    <strong>
                                        Male
                                    </strong>

                                </div>

                            </div>


                            <div class="profile-info-item">

                                <div class="profile-info-icon">
                                    <i class="bi bi-calendar"></i>
                                </div>

                                <div>

                                    <span>Date of Birth</span>

                                    <strong>
                                        15 March 2000
                                    </strong>

                                </div>

                            </div>


                            <div class="profile-info-item">

                                <div class="profile-info-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>

                                <div>

                                    <span>Location</span>

                                    <strong>
                                        Mirpur, Dhaka
                                    </strong>

                                </div>

                            </div>


                        </div>

                    </div>

                </div>


                <!-- BLOOD -->

                <div class="profile-card">

                    <div class="blood-highlight">

                        <div class="large-blood">
                            O+
                        </div>

                        <h3>Blood Group</h3>

                        <p>
                            Registered blood type
                        </p>

                    </div>


                    <div class="availability">

                        <i class="bi bi-check-circle-fill"></i>

                        Currently Available

                    </div>

                </div>


            </div>


            <!-- DONATION HISTORY -->

            <div
                class="profile-card"
                style="margin-top:20px;"
            >

                <div class="profile-card-header">

                    <h3>Donation History</h3>

                    <span class="badge badge-info">
                        4 Donations
                    </span>

                </div>


                <div style="overflow-x:auto;">

                    <table class="history-table">

                        <thead>

                        <tr>

                            <th>Date</th>

                            <th>Blood Group</th>

                            <th>Donation Center</th>

                            <th>Status</th>

                        </tr>

                        </thead>


                        <tbody>

                        <tr>

                            <td>
                                12 Aug 2026
                            </td>

                            <td>
                                <strong>O+</strong>
                            </td>

                            <td>
                                BloodCare Central
                            </td>

                            <td>
                                <span class="badge badge-success">
                                    Completed
                                </span>
                            </td>

                        </tr>


                        <tr>

                            <td>
                                05 May 2026
                            </td>

                            <td>
                                <strong>O+</strong>
                            </td>

                            <td>
                                Dhaka Medical Camp
                            </td>

                            <td>
                                <span class="badge badge-success">
                                    Completed
                                </span>
                            </td>

                        </tr>


                        <tr>

                            <td>
                                18 Jan 2026
                            </td>

                            <td>
                                <strong>O+</strong>
                            </td>

                            <td>
                                BloodCare Central
                            </td>

                            <td>
                                <span class="badge badge-success">
                                    Completed
                                </span>
                            </td>

                        </tr>

                        </tbody>

                    </table>

                </div>

            </div>


        </section>

    </main>

</div>


<script src="../../assets/js/dashboard.js"></script>

</body>

</html>