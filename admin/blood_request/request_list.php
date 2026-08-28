<?php
/* =========================================================
   BLOODCARE
   ADMIN - BLOOD REQUEST LIST
   UI ONLY
   ========================================================= */
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Blood Requests | BloodCare Admin</title>

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
           BLOOD REQUEST PAGE
           ===================================================== */

        .request-page {
            padding: 25px 28px 35px;
            max-width: 1700px;
            margin: auto;
        }


        /* =====================================================
           PAGE HEADER
           ===================================================== */

        .request-page-header {

            display: flex;
            align-items: center;
            justify-content: space-between;

            gap: 20px;

            margin-bottom: 25px;
        }


        .request-title-area h1 {

            font-family: Poppins, sans-serif;

            font-size: 23px;

            color: var(--dashboard-text);

            margin-bottom: 5px;
        }


        .request-title-area p {

            font-size: 9px;

            color: var(--dashboard-muted);

            margin: 0;
        }


        .request-breadcrumb {

            display: flex;
            align-items: center;

            gap: 6px;

            margin-bottom: 7px;

            font-size: 7px;

            color: #9ca3af;
        }


        .request-breadcrumb i {

            color: var(--dashboard-red);

        }


        .request-header-actions {

            display: flex;

            align-items: center;

            gap: 8px;
        }


        /* =====================================================
           QUICK STATS
           ===================================================== */

        .request-stats {

            display: grid;

            grid-template-columns:
                repeat(4, minmax(0, 1fr));

            gap: 14px;

            margin-bottom: 18px;
        }


        .request-stat {

            background: #fff;

            border: 1px solid var(--dashboard-border);

            border-radius: 13px;

            padding: 16px;

            display: flex;

            align-items: center;

            gap: 12px;

            box-shadow: var(--dashboard-shadow);

            transition: .25s ease;
        }


        .request-stat:hover {

            transform: translateY(-2px);

            box-shadow:
                0 10px 25px rgba(15,23,42,.06);
        }


        .request-stat-icon {

            width: 40px;
            height: 40px;

            border-radius: 10px;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 15px;

            flex-shrink: 0;
        }


        .request-stat-icon.red {

            background: #fff1f2;
            color: #dc2626;
        }


        .request-stat-icon.orange {

            background: #fffbeb;
            color: #d97706;
        }


        .request-stat-icon.blue {

            background: #eff6ff;
            color: #2563eb;
        }


        .request-stat-icon.green {

            background: #ecfdf5;
            color: #059669;
        }


        .request-stat-content span {

            display: block;

            color: #8b95a5;

            font-size: 7px;

            margin-bottom: 3px;
        }


        .request-stat-content strong {

            display: block;

            color: var(--dashboard-text);

            font-family: Poppins, sans-serif;

            font-size: 19px;

            line-height: 1;
        }


        /* =====================================================
           FILTER CARD
           ===================================================== */

        .request-filter-card {

            background: #fff;

            border: 1px solid var(--dashboard-border);

            border-radius: 13px;

            box-shadow: var(--dashboard-shadow);

            padding: 15px;

            margin-bottom: 16px;
        }


        .filter-row {

            display: grid;

            grid-template-columns:
                1.5fr
                1fr
                1fr
                1fr
                auto;

            gap: 10px;

            align-items: end;
        }


        .filter-field label {

            display: block;

            font-size: 7px;

            font-weight: 700;

            color: #687386;

            margin-bottom: 6px;
        }


        .filter-field input,
        .filter-field select {

            width: 100%;

            height: 38px;

            padding: 0 11px;

            border: 1px solid #e9edf2;

            border-radius: 8px;

            background: #f8fafc;

            color: var(--dashboard-text);

            outline: none;

            font-size: 8px;

            font-family: inherit;

            transition: .2s ease;
        }


        .filter-field input:focus,
        .filter-field select:focus {

            background: #fff;

            border-color: #fecaca;

            box-shadow:
                0 0 0 3px rgba(220,38,38,.06);
        }


        .filter-actions {

            display: flex;

            gap: 7px;
        }


        .filter-btn {

            height: 38px;

            padding: 0 13px;

            border-radius: 8px;

            display: inline-flex;

            align-items: center;

            justify-content: center;

            gap: 5px;

            font-size: 8px;

            font-weight: 700;

            cursor: pointer;
        }


        .filter-btn-primary {

            background: var(--dashboard-red);

            color: #fff;
        }


        .filter-btn-primary:hover {

            background: var(--dashboard-red-dark);
        }


        .filter-btn-light {

            background: #f8fafc;

            color: #64748b;

            border: 1px solid #e9edf2;
        }


        .filter-btn-light:hover {

            background: #f1f5f9;
        }


        /* =====================================================
           REQUEST TABLE CARD
           ===================================================== */

        .request-table-card {

            background: #fff;

            border: 1px solid var(--dashboard-border);

            border-radius: 13px;

            box-shadow: var(--dashboard-shadow);

            overflow: hidden;
        }


        .request-table-header {

            min-height: 65px;

            padding: 14px 17px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            border-bottom: 1px solid #f0f2f5;
        }


        .request-table-header h3 {

            font-family: Poppins, sans-serif;

            font-size: 11px;

            color: var(--dashboard-text);

            margin-bottom: 3px;
        }


        .request-table-header p {

            font-size: 7px;

            color: var(--dashboard-muted);

            margin: 0;
        }


        .request-count {

            padding: 5px 8px;

            border-radius: 20px;

            background: #fff1f2;

            color: #dc2626;

            font-size: 7px;

            font-weight: 800;
        }


        /* =====================================================
           TABLE
           ===================================================== */

        .request-table-wrapper {

            overflow-x: auto;
        }


        .request-table {

            width: 100%;

            border-collapse: collapse;

            min-width: 950px;
        }


        .request-table th {

            padding: 11px 17px;

            text-align: left;

            background: #fafbfc;

            border-bottom: 1px solid #edf0f4;

            color: #98a1ae;

            font-size: 6px;

            text-transform: uppercase;

            letter-spacing: .5px;

            white-space: nowrap;
        }


        .request-table td {

            padding: 12px 17px;

            border-bottom: 1px solid #f1f3f6;

            color: #687386;

            font-size: 7px;

            vertical-align: middle;
        }


        .request-table tbody tr {

            transition: .2s ease;
        }


        .request-table tbody tr:hover {

            background: #fffafa;
        }


        .request-table tbody tr:last-child td {

            border-bottom: none;
        }


        /* =====================================================
           REQUEST ID
           ===================================================== */

        .request-id {

            color: #64748b;

            font-weight: 700;

            font-size: 7px;
        }


        /* =====================================================
           PATIENT
           ===================================================== */

        .patient-info {

            display: flex;

            align-items: center;

            gap: 8px;
        }


        .patient-avatar {

            width: 31px;
            height: 31px;

            border-radius: 8px;

            background: #fff1f2;

            color: #dc2626;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 11px;

            flex-shrink: 0;
        }


        .patient-info strong {

            display: block;

            color: var(--dashboard-text);

            font-size: 8px;

            margin-bottom: 2px;
        }


        .patient-info span {

            display: block;

            color: #9ca3af;

            font-size: 6px;
        }


        /* =====================================================
           BLOOD TYPE
           ===================================================== */

        .request-blood {

            width: 32px;
            height: 32px;

            display: inline-flex;

            align-items: center;
            justify-content: center;

            border-radius: 8px;

            background: #fff1f2;

            color: #dc2626;

            font-family: Poppins, sans-serif;

            font-size: 8px;

            font-weight: 800;
        }


        /* =====================================================
           LOCATION
           ===================================================== */

        .location-info {

            display: flex;

            align-items: center;

            gap: 5px;

            color: #687386;
        }


        .location-info i {

            color: #dc2626;

            font-size: 9px;
        }


        /* =====================================================
           URGENCY
           ===================================================== */

        .urgency {

            display: inline-flex;

            align-items: center;

            gap: 4px;

            padding: 4px 7px;

            border-radius: 20px;

            font-size: 6px;

            font-weight: 800;
        }


        .urgency.high {

            background: #fef2f2;

            color: #dc2626;
        }


        .urgency.medium {

            background: #fffbeb;

            color: #b45309;
        }


        .urgency.normal {

            background: #eff6ff;

            color: #2563eb;
        }


        .urgency i {

            font-size: 6px;
        }


        /* =====================================================
           STATUS
           ===================================================== */

        .request-status {

            display: inline-flex;

            padding: 4px 8px;

            border-radius: 20px;

            font-size: 6px;

            font-weight: 800;
        }


        .request-status.pending {

            background: #fffbeb;

            color: #b45309;
        }


        .request-status.approved {

            background: #eff6ff;

            color: #2563eb;
        }


        .request-status.fulfilled {

            background: #ecfdf5;

            color: #059669;
        }


        .request-status.rejected {

            background: #fef2f2;

            color: #dc2626;
        }


        /* =====================================================
           ACTIONS
           ===================================================== */

        .request-actions {

            display: flex;

            align-items: center;

            gap: 5px;
        }


        .request-action {

            width: 28px;
            height: 28px;

            border-radius: 7px;

            border: 1px solid #edf0f4;

            background: #fff;

            display: flex;

            align-items: center;
            justify-content: center;

            font-size: 9px;

            cursor: pointer;

            transition: .2s ease;
        }


        .request-action.view {

            color: #2563eb;
        }


        .request-action.approve {

            color: #059669;
        }


        .request-action.delete {

            color: #dc2626;
        }


        .request-action:hover {

            transform: translateY(-1px);

            background: #f8fafc;
        }


        /* =====================================================
           PAGINATION
           ===================================================== */

        .request-pagination {

            padding: 13px 17px;

            border-top: 1px solid #f0f2f5;

            display: flex;

            align-items: center;

            justify-content: space-between;
        }


        .pagination-info {

            color: #9ca3af;

            font-size: 6px;
        }


        .pagination-buttons {

            display: flex;

            gap: 4px;
        }


        .page-btn {

            min-width: 27px;

            height: 27px;

            padding: 0 7px;

            border: 1px solid #e9edf2;

            background: #fff;

            border-radius: 6px;

            color: #64748b;

            font-size: 7px;

            display: flex;

            align-items: center;
            justify-content: center;

            cursor: pointer;
        }


        .page-btn:hover {

            border-color: #fecaca;

            color: #dc2626;
        }


        .page-btn.active {

            background: #dc2626;

            border-color: #dc2626;

            color: #fff;
        }


        /* =====================================================
           RESPONSIVE
           ===================================================== */

        @media (max-width: 1100px) {

            .request-stats {

                grid-template-columns:
                    repeat(2, minmax(0, 1fr));
            }


            .filter-row {

                grid-template-columns:
                    repeat(2, 1fr);
            }

        }


        @media (max-width: 700px) {

            .request-page {

                padding: 20px 16px;
            }


            .request-page-header {

                align-items: flex-start;

                flex-direction: column;
            }


            .request-header-actions {

                width: 100%;
            }


            .request-header-actions .btn {

                flex: 1;
            }


            .request-stats {

                grid-template-columns: 1fr;
            }


            .filter-row {

                grid-template-columns: 1fr;
            }


            .filter-actions {

                width: 100%;
            }


            .filter-btn {

                flex: 1;
            }


            .request-pagination {

                align-items: flex-start;

                flex-direction: column;

                gap: 10px;
            }

        }

    </style>

</head>


<body>


<div class="admin-app">


    <!-- =====================================================
         SIDEBAR
         ===================================================== -->

    <?php include '../../includes/admin_sidebar.php'; ?>


    <!-- =====================================================
         MAIN
         ===================================================== -->

    <main class="admin-main">


        <!-- =================================================
             NAVBAR
             ================================================= -->

        <?php include '../../includes/navbar.php'; ?>


        <!-- =================================================
             PAGE CONTENT
             ================================================= -->

        <section class="request-page">


            <!-- PAGE HEADER -->

            <div class="request-page-header">

                <div class="request-title-area">

                    <div class="request-breadcrumb">

                        <span>Admin</span>

                        <i class="bi bi-chevron-right"></i>

                        <span>Blood Requests</span>

                    </div>


                    <h1>Blood Requests</h1>

                    <p>
                        Manage and monitor all blood requests submitted by users.
                    </p>

                </div>


                <div class="request-header-actions">

                    <a
                        href="emergency_request.php"
                        class="btn btn-danger btn-sm"
                    >

                        <i class="bi bi-exclamation-triangle-fill"></i>

                        Emergency Requests

                    </a>

                </div>

            </div>


            <!-- =================================================
                 STATS
                 ================================================= -->

            <div class="request-stats">


                <div class="request-stat">

                    <div class="request-stat-icon red">

                        <i class="bi bi-droplet-fill"></i>

                    </div>

                    <div class="request-stat-content">

                        <span>Total Requests</span>

                        <strong>248</strong>

                    </div>

                </div>


                <div class="request-stat">

                    <div class="request-stat-icon orange">

                        <i class="bi bi-hourglass-split"></i>

                    </div>

                    <div class="request-stat-content">

                        <span>Pending</span>

                        <strong>32</strong>

                    </div>

                </div>


                <div class="request-stat">

                    <div class="request-stat-icon blue">

                        <i class="bi bi-arrow-repeat"></i>

                    </div>

                    <div class="request-stat-content">

                        <span>Processing</span>

                        <strong>18</strong>

                    </div>

                </div>


                <div class="request-stat">

                    <div class="request-stat-icon green">

                        <i class="bi bi-check-circle-fill"></i>

                    </div>

                    <div class="request-stat-content">

                        <span>Fulfilled</span>

                        <strong>198</strong>

                    </div>

                </div>


            </div>


            <!-- =================================================
                 FILTER
                 ================================================= -->

            <div class="request-filter-card">

                <div class="filter-row">


                    <div class="filter-field">

                        <label>Search Request</label>

                        <input
                            type="text"
                            placeholder="Search by patient name or request ID..."
                        >

                    </div>


                    <div class="filter-field">

                        <label>Blood Group</label>

                        <select>

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

                    </div>


                    <div class="filter-field">

                        <label>Urgency</label>

                        <select>

                            <option>All Urgency</option>

                            <option>High</option>

                            <option>Medium</option>

                            <option>Normal</option>

                        </select>

                    </div>


                    <div class="filter-field">

                        <label>Status</label>

                        <select>

                            <option>All Status</option>

                            <option>Pending</option>

                            <option>Approved</option>

                            <option>Fulfilled</option>

                            <option>Rejected</option>

                        </select>

                    </div>


                    <div class="filter-actions">

                        <button
                            class="filter-btn filter-btn-primary"
                        >

                            <i class="bi bi-funnel-fill"></i>

                            Filter

                        </button>


                        <button
                            class="filter-btn filter-btn-light"
                            title="Reset"
                        >

                            <i class="bi bi-arrow-clockwise"></i>

                        </button>

                    </div>


                </div>

            </div>


            <!-- =================================================
                 REQUEST TABLE
                 ================================================= -->

            <div class="request-table-card">


                <div class="request-table-header">

                    <div>

                        <h3>Recent Blood Requests</h3>

                        <p>
                            Complete list of submitted blood requests
                        </p>

                    </div>


                    <span class="request-count">

                        248 Requests

                    </span>

                </div>


                <div class="request-table-wrapper">


                    <table class="request-table">


                        <thead>

                            <tr>

                                <th>ID</th>

                                <th>Patient</th>

                                <th>Blood</th>

                                <th>Hospital / Location</th>

                                <th>Units</th>

                                <th>Urgency</th>

                                <th>Date</th>

                                <th>Status</th>

                                <th>Action</th>

                            </tr>

                        </thead>


                        <tbody>


                            <!-- ROW 1 -->

                            <tr>

                                <td>

                                    <span class="request-id">
                                        #BR-0248
                                    </span>

                                </td>


                                <td>

                                    <div class="patient-info">

                                        <div class="patient-avatar">

                                            <i class="bi bi-person-fill"></i>

                                        </div>

                                        <div>

                                            <strong>
                                                Rahim Ahmed
                                            </strong>

                                            <span>
                                                01712XXXXXX
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="request-blood">
                                        O+
                                    </span>

                                </td>


                                <td>

                                    <div class="location-info">

                                        <i class="bi bi-geo-alt-fill"></i>

                                        Dhaka Medical College

                                    </div>

                                </td>


                                <td>
                                    <strong>2</strong> Unit
                                </td>


                                <td>

                                    <span class="urgency high">

                                        <i class="bi bi-circle-fill"></i>

                                        High

                                    </span>

                                </td>


                                <td>
                                    26 Aug 2026
                                </td>


                                <td>

                                    <span class="request-status pending">
                                        Pending
                                    </span>

                                </td>


                                <td>

                                    <div class="request-actions">

                                        <button
                                            class="request-action view"
                                            title="View"
                                        >

                                            <i class="bi bi-eye"></i>

                                        </button>


                                        <button
                                            class="request-action approve"
                                            title="Approve"
                                        >

                                            <i class="bi bi-check-lg"></i>

                                        </button>


                                        <button
                                            class="request-action delete"
                                            title="Delete"
                                        >

                                            <i class="bi bi-trash3"></i>

                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <!-- ROW 2 -->

                            <tr>

                                <td>
                                    <span class="request-id">
                                        #BR-0247
                                    </span>
                                </td>


                                <td>

                                    <div class="patient-info">

                                        <div class="patient-avatar">

                                            <i class="bi bi-person-fill"></i>

                                        </div>

                                        <div>

                                            <strong>
                                                Nusrat Jahan
                                            </strong>

                                            <span>
                                                01819XXXXXX
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="request-blood">
                                        A-
                                    </span>

                                </td>


                                <td>

                                    <div class="location-info">

                                        <i class="bi bi-geo-alt-fill"></i>

                                        Square Hospital

                                    </div>

                                </td>


                                <td>
                                    <strong>1</strong> Unit
                                </td>


                                <td>

                                    <span class="urgency medium">

                                        <i class="bi bi-circle-fill"></i>

                                        Medium

                                    </span>

                                </td>


                                <td>
                                    26 Aug 2026
                                </td>


                                <td>

                                    <span class="request-status approved">
                                        Approved
                                    </span>

                                </td>


                                <td>

                                    <div class="request-actions">

                                        <button class="request-action view">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button class="request-action delete">
                                            <i class="bi bi-trash3"></i>
                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <!-- ROW 3 -->

                            <tr>

                                <td>
                                    <span class="request-id">
                                        #BR-0246
                                    </span>
                                </td>


                                <td>

                                    <div class="patient-info">

                                        <div class="patient-avatar">

                                            <i class="bi bi-person-fill"></i>

                                        </div>

                                        <div>

                                            <strong>
                                                Arif Hossain
                                            </strong>

                                            <span>
                                                01911XXXXXX
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="request-blood">
                                        B+
                                    </span>

                                </td>


                                <td>

                                    <div class="location-info">

                                        <i class="bi bi-geo-alt-fill"></i>

                                        United Hospital

                                    </div>

                                </td>


                                <td>
                                    <strong>3</strong> Units
                                </td>


                                <td>

                                    <span class="urgency normal">

                                        <i class="bi bi-circle-fill"></i>

                                        Normal

                                    </span>

                                </td>


                                <td>
                                    25 Aug 2026
                                </td>


                                <td>

                                    <span class="request-status fulfilled">
                                        Fulfilled
                                    </span>

                                </td>


                                <td>

                                    <div class="request-actions">

                                        <button class="request-action view">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <!-- ROW 4 -->

                            <tr>

                                <td>
                                    <span class="request-id">
                                        #BR-0245
                                    </span>
                                </td>


                                <td>

                                    <div class="patient-info">

                                        <div class="patient-avatar">

                                            <i class="bi bi-person-fill"></i>

                                        </div>

                                        <div>

                                            <strong>
                                                Sohana Akter
                                            </strong>

                                            <span>
                                                01628XXXXXX
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="request-blood">
                                        AB+
                                    </span>

                                </td>


                                <td>

                                    <div class="location-info">

                                        <i class="bi bi-geo-alt-fill"></i>

                                        LabAid Hospital

                                    </div>

                                </td>


                                <td>
                                    <strong>2</strong> Units
                                </td>


                                <td>

                                    <span class="urgency high">

                                        <i class="bi bi-circle-fill"></i>

                                        High

                                    </span>

                                </td>


                                <td>
                                    25 Aug 2026
                                </td>


                                <td>

                                    <span class="request-status approved">
                                        Approved
                                    </span>

                                </td>


                                <td>

                                    <div class="request-actions">

                                        <button class="request-action view">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                        <button class="request-action approve">
                                            <i class="bi bi-check-lg"></i>
                                        </button>

                                    </div>

                                </td>

                            </tr>


                            <!-- ROW 5 -->

                            <tr>

                                <td>
                                    <span class="request-id">
                                        #BR-0244
                                    </span>
                                </td>


                                <td>

                                    <div class="patient-info">

                                        <div class="patient-avatar">

                                            <i class="bi bi-person-fill"></i>

                                        </div>

                                        <div>

                                            <strong>
                                                Tanvir Hasan
                                            </strong>

                                            <span>
                                                01521XXXXXX
                                            </span>

                                        </div>

                                    </div>

                                </td>


                                <td>

                                    <span class="request-blood">
                                        B-
                                    </span>

                                </td>


                                <td>

                                    <div class="location-info">

                                        <i class="bi bi-geo-alt-fill"></i>

                                        Anwer Khan Modern

                                    </div>

                                </td>


                                <td>
                                    <strong>1</strong> Unit
                                </td>


                                <td>

                                    <span class="urgency medium">

                                        <i class="bi bi-circle-fill"></i>

                                        Medium

                                    </span>

                                </td>


                                <td>
                                    24 Aug 2026
                                </td>


                                <td>

                                    <span class="request-status rejected">
                                        Rejected
                                    </span>

                                </td>


                                <td>

                                    <div class="request-actions">

                                        <button class="request-action view">
                                            <i class="bi bi-eye"></i>
                                        </button>

                                    </div>

                                </td>

                            </tr>


                        </tbody>

                    </table>

                </div>


                <!-- PAGINATION -->

                <div class="request-pagination">

                    <span class="pagination-info">

                        Showing 1–5 of 248 requests

                    </span>


                    <div class="pagination-buttons">

                        <button class="page-btn">

                            <i class="bi bi-chevron-left"></i>

                        </button>

                        <button class="page-btn active">1</button>

                        <button class="page-btn">2</button>

                        <button class="page-btn">3</button>

                        <button class="page-btn">...</button>

                        <button class="page-btn">50</button>

                        <button class="page-btn">

                            <i class="bi bi-chevron-right"></i>

                        </button>

                    </div>

                </div>


            </div>


        </section>


    </main>

</div>


<!-- Dashboard JS -->

<script src="../../assets/js/dashboard.js"></script>

<script src="../../assets/js/script.js"></script>

</body>

</html>