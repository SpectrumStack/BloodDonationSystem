<?php
// =========================================================
// BLOODCARE - ADMIN DONOR LIST
// UI ONLY
// =========================================================
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Donor Management | BloodCare</title>

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

        /* =====================================================
           DONOR MANAGEMENT PAGE
           ===================================================== */

        .page-content {
            padding: 28px;
        }

        /* Page Header */

        .page-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 25px;
        }

        .page-header-left {
            display: flex;
            align-items: flex-start;
            gap: 14px;
        }

        .page-title-icon {
            width: 46px;
            height: 46px;
            border-radius: 13px;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }

        .page-header h1 {
            font-size: 23px;
            margin-bottom: 4px;
        }

        .page-header p {
            font-size: 12px;
            margin: 0;
        }

        /* Stats */

        .donor-stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-bottom: 22px;
        }

        .donor-stat {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 15px;
            padding: 18px;
            display: flex;
            align-items: center;
            gap: 14px;
            transition: var(--transition);
        }

        .donor-stat:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .donor-stat-icon {
            width: 45px;
            height: 45px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
            flex-shrink: 0;
        }

        .donor-stat-icon.red {
            background: #fee2e2;
            color: #dc2626;
        }

        .donor-stat-icon.green {
            background: #dcfce7;
            color: #16a34a;
        }

        .donor-stat-icon.blue {
            background: #dbeafe;
            color: #2563eb;
        }

        .donor-stat-icon.orange {
            background: #fef3c7;
            color: #d97706;
        }

        .donor-stat-info span {
            display: block;
            font-size: 11px;
            color: var(--text-light);
            margin-bottom: 3px;
        }

        .donor-stat-info strong {
            display: block;
            font-family: Poppins, sans-serif;
            font-size: 21px;
            color: var(--text-dark);
        }

        /* Main Card */

        .donor-table-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: var(--shadow-sm);
            overflow: hidden;
        }

        /* Toolbar */

        .donor-toolbar {
            padding: 18px 20px;
            border-bottom: 1px solid var(--border-light);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        .toolbar-left {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .donor-search {
            position: relative;
            width: 250px;
        }

        .donor-search i {
            position: absolute;
            left: 13px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-muted);
        }

        .donor-search input {
            width: 100%;
            height: 40px;
            padding: 0 12px 0 38px;
            border: 1px solid var(--border);
            border-radius: 9px;
            outline: none;
            font-size: 12px;
        }

        .donor-search input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(220,38,38,.07);
        }

        .filter-select {
            height: 40px;
            padding: 0 30px 0 12px;
            border: 1px solid var(--border);
            border-radius: 9px;
            background: #fff;
            color: var(--text);
            outline: none;
            font-size: 12px;
        }

        /* Table */

        .donor-table-wrapper {
            overflow-x: auto;
        }

        .donor-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 900px;
        }

        .donor-table th {
            padding: 13px 18px;
            background: #f8fafc;
            border-bottom: 1px solid var(--border);
            text-align: left;
            font-size: 10px;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: .4px;
            white-space: nowrap;
        }

        .donor-table td {
            padding: 14px 18px;
            border-bottom: 1px solid var(--border-light);
            font-size: 11px;
            color: var(--text);
            vertical-align: middle;
        }

        .donor-table tr:last-child td {
            border-bottom: none;
        }

        .donor-table tbody tr {
            transition: var(--transition);
        }

        .donor-table tbody tr:hover {
            background: #fffafa;
        }

        /* Donor */

        .donor-person {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .donor-person img {
            width: 38px;
            height: 38px;
            border-radius: 11px;
            object-fit: cover;
            border: 1px solid var(--border);
        }

        .donor-person strong {
            display: block;
            color: var(--text-dark);
            font-size: 12px;
            margin-bottom: 2px;
        }

        .donor-person span {
            display: block;
            color: var(--text-muted);
            font-size: 9px;
        }

        /* Blood */

        .blood-badge {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: var(--primary-light);
            color: var(--primary);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-family: Poppins, sans-serif;
            font-size: 11px;
            font-weight: 800;
        }

        /* Location */

        .location-info {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .location-info i {
            color: var(--primary);
        }

        /* Actions */

        .action-buttons {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .action-btn {
            width: 31px;
            height: 31px;
            border-radius: 8px;
            border: 1px solid var(--border);
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            transition: var(--transition);
        }

        .action-btn.view {
            color: #2563eb;
        }

        .action-btn.edit {
            color: #d97706;
        }

        .action-btn.delete {
            color: #dc2626;
        }

        .action-btn:hover {
            transform: translateY(-1px);
        }

        .action-btn.view:hover {
            background: #eff6ff;
            border-color: #bfdbfe;
        }

        .action-btn.edit:hover {
            background: #fffbeb;
            border-color: #fde68a;
        }

        .action-btn.delete:hover {
            background: #fef2f2;
            border-color: #fecaca;
        }

        /* Pagination */

        .table-footer {
            padding: 16px 20px;
            border-top: 1px solid var(--border-light);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .table-footer p {
            font-size: 11px;
            margin: 0;
        }

        .pagination {
            display: flex;
            gap: 5px;
        }

        .page-btn {
            width: 32px;
            height: 32px;
            border: 1px solid var(--border);
            background: #fff;
            border-radius: 7px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            color: var(--text);
        }

        .page-btn.active {
            background: var(--primary);
            color: #fff;
            border-color: var(--primary);
        }

        .page-btn:hover:not(.active) {
            background: var(--primary-soft);
            color: var(--primary);
            border-color: #fecaca;
        }

        /* Responsive */

        @media(max-width: 1000px) {

            .donor-stats {
                grid-template-columns: repeat(2, 1fr);
            }

        }

        @media(max-width: 700px) {

            .page-content {
                padding: 20px 16px;
            }

            .page-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .donor-stats {
                grid-template-columns: 1fr;
            }

            .donor-toolbar {
                align-items: stretch;
                flex-direction: column;
            }

            .toolbar-left {
                width: 100%;
            }

            .donor-search {
                width: 100%;
            }

            .table-footer {
                align-items: flex-start;
                flex-direction: column;
                gap: 12px;
            }

        }

    </style>

</head>


<body>


<div class="admin-app">


    <!-- =====================================================
         SIDEBAR
         ===================================================== -->

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

            <button class="sidebar-close">
                <i class="bi bi-x-lg"></i>
            </button>

        </div>


        <div class="sidebar-profile">

            <img src="../../assets/images/default-user.png" alt="Admin">

            <div class="sidebar-profile-info">

                <strong>System Administrator</strong>

                <span>
                    <i class="bi bi-circle-fill"></i>
                    Online
                </span>

            </div>

            <button class="profile-menu-btn">
                <i class="bi bi-three-dots"></i>
            </button>

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

                        <span class="menu-count">248</span>

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

                <li>

                    <a href="../stock/blood_stock.php">

                        <span class="menu-icon">
                            <i class="bi bi-droplet-half"></i>
                        </span>

                        Blood Stock

                    </a>

                </li>

                <div class="sidebar-section-title">
                    MANAGEMENT
                </div>

                <li>

                    <a href="../camp/blood_camp.php">

                        <span class="menu-icon">
                            <i class="bi bi-calendar-event-fill"></i>
                        </span>

                        Blood Camps

                    </a>

                </li>

                <li>

                    <a href="../notification/notification.php">

                        <span class="menu-icon">
                            <i class="bi bi-bell-fill"></i>
                        </span>

                        Notifications

                    </a>

                </li>

                <li>

                    <a href="../blood_request/emergency_request.php">

                        <span class="menu-icon emergency-icon">
                            <i class="bi bi-exclamation-triangle-fill"></i>
                        </span>

                        Emergency Requests

                        <span class="menu-count danger-count">
                            5
                        </span>

                    </a>

                </li>

            </ul>

        </nav>


        <div class="sidebar-footer">

            <div class="sidebar-help">

                <div class="help-icon">
                    <i class="bi bi-headset"></i>
                </div>

                <div>

                    <strong>Need Help?</strong>

                    <span>Contact support</span>

                </div>

                <i class="bi bi-chevron-right"></i>

            </div>

        </div>

    </aside>


    <!-- =====================================================
         MAIN
         ===================================================== -->

    <main class="admin-main">


        <!-- NAVBAR -->

        <header class="admin-navbar">

            <div class="navbar-left">

                <button class="sidebar-toggle">
                    <i class="bi bi-list"></i>
                </button>

                <div class="navbar-heading">

                    <span>ADMINISTRATION</span>

                    <strong>Donor Management</strong>

                </div>

            </div>


            <div class="navbar-right">

                <div class="navbar-search">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        placeholder="Search..."
                    >

                    <span class="search-shortcut">
                        Ctrl K
                    </span>

                </div>


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

                    <i class="bi bi-chevron-down"></i>

                </div>

            </div>

        </header>


        <!-- =================================================
             CONTENT
             ================================================= -->

        <section class="page-content">


            <!-- HEADER -->

            <div class="page-header">

                <div class="page-header-left">

                    <div class="page-title-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <div>

                        <h1>Donor Management</h1>

                        <p>
                            Manage registered blood donors and their information.
                        </p>

                    </div>

                </div>


                <a
                    href="add_donor.php"
                    class="btn btn-primary"
                >

                    <i class="bi bi-person-plus-fill"></i>

                    Add New Donor

                </a>

            </div>


            <!-- =================================================
                 STATS
                 ================================================= -->

            <div class="donor-stats">

                <div class="donor-stat">

                    <div class="donor-stat-icon red">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <div class="donor-stat-info">

                        <span>Total Donors</span>

                        <strong>248</strong>

                    </div>

                </div>


                <div class="donor-stat">

                    <div class="donor-stat-icon green">
                        <i class="bi bi-check-circle-fill"></i>
                    </div>

                    <div class="donor-stat-info">

                        <span>Available</span>

                        <strong>184</strong>

                    </div>

                </div>


                <div class="donor-stat">

                    <div class="donor-stat-icon blue">
                        <i class="bi bi-heart-pulse-fill"></i>
                    </div>

                    <div class="donor-stat-info">

                        <span>Donated Recently</span>

                        <strong>72</strong>

                    </div>

                </div>


                <div class="donor-stat">

                    <div class="donor-stat-icon orange">
                        <i class="bi bi-clock-history"></i>
                    </div>

                    <div class="donor-stat-info">

                        <span>Unavailable</span>

                        <strong>64</strong>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 TABLE
                 ================================================= -->

            <div class="donor-table-card">


                <!-- TOOLBAR -->

                <div class="donor-toolbar">

                    <div class="toolbar-left">

                        <div class="donor-search">

                            <i class="bi bi-search"></i>

                            <input
                                type="text"
                                placeholder="Search donor..."
                            >

                        </div>


                        <select class="filter-select">

                            <option>All Blood Groups</option>

                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>

                        </select>


                        <select class="filter-select">

                            <option>All Status</option>

                            <option>Available</option>

                            <option>Unavailable</option>

                        </select>

                    </div>


                    <button class="btn btn-outline btn-sm">

                        <i class="bi bi-download"></i>

                        Export

                    </button>

                </div>


                <!-- TABLE -->

                <div class="donor-table-wrapper">

                    <table class="donor-table">

                        <thead>

                        <tr>

                            <th>Donor</th>

                            <th>Blood Group</th>

                            <th>Location</th>

                            <th>Phone</th>

                            <th>Last Donation</th>

                            <th>Status</th>

                            <th>Actions</th>

                        </tr>

                        </thead>


                        <tbody>


                        <!-- DONOR 1 -->

                        <tr>

                            <td>

                                <div class="donor-person">

                                    <img
                                        src="../../assets/images/default-user.png"
                                        alt="Donor"
                                    >

                                    <div>

                                        <strong>Rahim Ahmed</strong>

                                        <span>ID: DN-1001</span>

                                    </div>

                                </div>

                            </td>


                            <td>

                                <span class="blood-badge">
                                    O+
                                </span>

                            </td>


                            <td>

                                <div class="location-info">

                                    <i class="bi bi-geo-alt-fill"></i>

                                    Dhaka

                                </div>

                            </td>


                            <td>
                                01712-345678
                            </td>


                            <td>
                                12 Aug 2026
                            </td>


                            <td>

                                <span class="badge badge-success">
                                    <i class="bi bi-check-circle"></i>
                                    Available
                                </span>

                            </td>


                            <td>

                                <div class="action-buttons">

                                    <a
                                        href="donor_profile.php"
                                        class="action-btn view"
                                        title="View"
                                    >
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a
                                        href="update_donor.php"
                                        class="action-btn edit"
                                        title="Edit"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <button
                                        class="action-btn delete"
                                        title="Delete"
                                    >
                                        <i class="bi bi-trash3"></i>
                                    </button>

                                </div>

                            </td>

                        </tr>


                        <!-- DONOR 2 -->

                        <tr>

                            <td>

                                <div class="donor-person">

                                    <img
                                        src="../../assets/images/default-user.png"
                                        alt="Donor"
                                    >

                                    <div>

                                        <strong>Sumaiya Akter</strong>

                                        <span>ID: DN-1002</span>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="blood-badge">A+</span>
                            </td>

                            <td>

                                <div class="location-info">

                                    <i class="bi bi-geo-alt-fill"></i>

                                    Gazipur

                                </div>

                            </td>

                            <td>
                                01819-876543
                            </td>

                            <td>
                                05 Aug 2026
                            </td>

                            <td>

                                <span class="badge badge-success">
                                    <i class="bi bi-check-circle"></i>
                                    Available
                                </span>

                            </td>

                            <td>

                                <div class="action-buttons">

                                    <a
                                        href="donor_profile.php"
                                        class="action-btn view"
                                    >
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a
                                        href="update_donor.php"
                                        class="action-btn edit"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <button class="action-btn delete">
                                        <i class="bi bi-trash3"></i>
                                    </button>

                                </div>

                            </td>

                        </tr>


                        <!-- DONOR 3 -->

                        <tr>

                            <td>

                                <div class="donor-person">

                                    <img
                                        src="../../assets/images/default-user.png"
                                        alt="Donor"
                                    >

                                    <div>

                                        <strong>Tanvir Hasan</strong>

                                        <span>ID: DN-1003</span>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="blood-badge">B+</span>
                            </td>

                            <td>

                                <div class="location-info">

                                    <i class="bi bi-geo-alt-fill"></i>

                                    Narayanganj

                                </div>

                            </td>

                            <td>
                                01911-234567
                            </td>

                            <td>
                                21 Jul 2026
                            </td>

                            <td>

                                <span class="badge badge-warning">
                                    <i class="bi bi-clock"></i>
                                    Unavailable
                                </span>

                            </td>

                            <td>

                                <div class="action-buttons">

                                    <a
                                        href="donor_profile.php"
                                        class="action-btn view"
                                    >
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a
                                        href="update_donor.php"
                                        class="action-btn edit"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <button class="action-btn delete">
                                        <i class="bi bi-trash3"></i>
                                    </button>

                                </div>

                            </td>

                        </tr>


                        <!-- DONOR 4 -->

                        <tr>

                            <td>

                                <div class="donor-person">

                                    <img
                                        src="../../assets/images/default-user.png"
                                        alt="Donor"
                                    >

                                    <div>

                                        <strong>Nusrat Jahan</strong>

                                        <span>ID: DN-1004</span>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="blood-badge">AB+</span>
                            </td>

                            <td>

                                <div class="location-info">

                                    <i class="bi bi-geo-alt-fill"></i>

                                    Uttara

                                </div>

                            </td>

                            <td>
                                01612-998877
                            </td>

                            <td>
                                10 Jun 2026
                            </td>

                            <td>

                                <span class="badge badge-success">
                                    <i class="bi bi-check-circle"></i>
                                    Available
                                </span>

                            </td>

                            <td>

                                <div class="action-buttons">

                                    <a
                                        href="donor_profile.php"
                                        class="action-btn view"
                                    >
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a
                                        href="update_donor.php"
                                        class="action-btn edit"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <button class="action-btn delete">
                                        <i class="bi bi-trash3"></i>
                                    </button>

                                </div>

                            </td>

                        </tr>


                        <!-- DONOR 5 -->

                        <tr>

                            <td>

                                <div class="donor-person">

                                    <img
                                        src="../../assets/images/default-user.png"
                                        alt="Donor"
                                    >

                                    <div>

                                        <strong>Arif Hossain</strong>

                                        <span>ID: DN-1005</span>

                                    </div>

                                </div>

                            </td>

                            <td>
                                <span class="blood-badge">O-</span>
                            </td>

                            <td>

                                <div class="location-info">

                                    <i class="bi bi-geo-alt-fill"></i>

                                    Mirpur

                                </div>

                            </td>

                            <td>
                                01755-665544
                            </td>

                            <td>
                                28 May 2026
                            </td>

                            <td>

                                <span class="badge badge-danger">
                                    <i class="bi bi-x-circle"></i>
                                    Unavailable
                                </span>

                            </td>

                            <td>

                                <div class="action-buttons">

                                    <a
                                        href="donor_profile.php"
                                        class="action-btn view"
                                    >
                                        <i class="bi bi-eye"></i>
                                    </a>

                                    <a
                                        href="update_donor.php"
                                        class="action-btn edit"
                                    >
                                        <i class="bi bi-pencil"></i>
                                    </a>

                                    <button class="action-btn delete">
                                        <i class="bi bi-trash3"></i>
                                    </button>

                                </div>

                            </td>

                        </tr>


                        </tbody>

                    </table>

                </div>


                <!-- FOOTER -->

                <div class="table-footer">

                    <p>
                        Showing <strong>1–5</strong> of
                        <strong>248</strong> donors
                    </p>


                    <div class="pagination">

                        <button class="page-btn">
                            <i class="bi bi-chevron-left"></i>
                        </button>

                        <button class="page-btn active">
                            1
                        </button>

                        <button class="page-btn">
                            2
                        </button>

                        <button class="page-btn">
                            3
                        </button>

                        <button class="page-btn">
                            4
                        </button>

                        <button class="page-btn">
                            <i class="bi bi-chevron-right"></i>
                        </button>

                    </div>

                </div>


            </div>

        </section>

    </main>

</div>


<script src="../../assets/js/dashboard.js"></script>

</body>

</html>