<?php
/* =========================================================
   BLOODCARE
   ADMIN - EMERGENCY BLOOD REQUEST
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

    <title>Emergency Requests | BloodCare Admin</title>


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
           EMERGENCY PAGE
           ===================================================== */

        .emergency-page {

            padding: 25px 28px 35px;

            max-width: 1700px;

            margin: auto;
        }


        /* =====================================================
           HEADER
           ===================================================== */

        .emergency-page-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 20px;

            margin-bottom: 23px;
        }


        .emergency-breadcrumb {

            display: flex;

            align-items: center;

            gap: 6px;

            font-size: 7px;

            color: #9ca3af;

            margin-bottom: 7px;
        }


        .emergency-breadcrumb i {

            color: #dc2626;
        }


        .emergency-title h1 {

            font-family: Poppins, sans-serif;

            font-size: 23px;

            color: var(--dashboard-text);

            margin-bottom: 5px;
        }


        .emergency-title p {

            color: var(--dashboard-muted);

            font-size: 9px;

            margin: 0;
        }


        .emergency-live {

            display: flex;

            align-items: center;

            gap: 7px;

            padding: 9px 12px;

            border: 1px solid #fecaca;

            background: #fff1f2;

            border-radius: 9px;

            color: #dc2626;

            font-size: 7px;

            font-weight: 800;
        }


        .emergency-live-dot {

            width: 7px;

            height: 7px;

            border-radius: 50%;

            background: #dc2626;

            animation: emergencyPulse 1.4s infinite;
        }


        @keyframes emergencyPulse {

            0% {
                box-shadow:
                    0 0 0 0 rgba(220,38,38,.4);
            }

            70% {
                box-shadow:
                    0 0 0 7px rgba(220,38,38,0);
            }

            100% {
                box-shadow:
                    0 0 0 0 rgba(220,38,38,0);
            }

        }


        /* =====================================================
           EMERGENCY STATS
           ===================================================== */

        .emergency-stats {

            display: grid;

            grid-template-columns:
                repeat(4, minmax(0, 1fr));

            gap: 14px;

            margin-bottom: 18px;
        }


        .emergency-stat {

            background: #fff;

            border: 1px solid var(--dashboard-border);

            border-radius: 13px;

            padding: 16px;

            box-shadow: var(--dashboard-shadow);

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .emergency-stat-icon {

            width: 41px;

            height: 41px;

            border-radius: 10px;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 15px;
        }


        .emergency-stat-icon.red {

            background: #fef2f2;

            color: #dc2626;
        }


        .emergency-stat-icon.orange {

            background: #fff7ed;

            color: #ea580c;
        }


        .emergency-stat-icon.green {

            background: #ecfdf5;

            color: #059669;
        }


        .emergency-stat-icon.blue {

            background: #eff6ff;

            color: #2563eb;
        }


        .emergency-stat span {

            display: block;

            color: #8b95a5;

            font-size: 7px;

            margin-bottom: 3px;
        }


        .emergency-stat strong {

            display: block;

            color: var(--dashboard-text);

            font-family: Poppins, sans-serif;

            font-size: 19px;

            line-height: 1;
        }


        /* =====================================================
           EMERGENCY GRID
           ===================================================== */

        .emergency-request-grid {

            display: grid;

            grid-template-columns:
                repeat(2, minmax(0, 1fr));

            gap: 16px;
        }


        /* =====================================================
           EMERGENCY REQUEST CARD
           ===================================================== */

        .urgent-request-card {

            background: #fff;

            border: 1px solid #fee2e2;

            border-radius: 14px;

            box-shadow: var(--dashboard-shadow);

            overflow: hidden;

            position: relative;

            transition: .25s ease;
        }


        .urgent-request-card:hover {

            transform: translateY(-2px);

            box-shadow:
                0 12px 28px rgba(220,38,38,.08);
        }


        .urgent-top-line {

            height: 3px;

            background: #dc2626;
        }


        .urgent-card-header {

            padding: 15px 17px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            border-bottom: 1px solid #fef2f2;
        }


        .urgent-id {

            display: flex;

            align-items: center;

            gap: 7px;
        }


        .urgent-icon {

            width: 31px;

            height: 31px;

            border-radius: 8px;

            background: #fef2f2;

            color: #dc2626;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 12px;
        }


        .urgent-id strong {

            display: block;

            color: var(--dashboard-text);

            font-size: 8px;

            margin-bottom: 2px;
        }


        .urgent-id span {

            display: block;

            color: #a0a8b5;

            font-size: 6px;
        }


        .critical-badge {

            padding: 5px 8px;

            border-radius: 20px;

            background: #dc2626;

            color: #fff;

            font-size: 6px;

            font-weight: 800;

            display: inline-flex;

            align-items: center;

            gap: 4px;
        }


        .critical-badge i {

            font-size: 5px;
        }


        /* =====================================================
           CARD BODY
           ===================================================== */

        .urgent-card-body {

            padding: 17px;
        }


        .patient-main {

            display: flex;

            align-items: center;

            gap: 12px;

            margin-bottom: 17px;
        }


        .patient-large-avatar {

            width: 48px;

            height: 48px;

            border-radius: 11px;

            background: #fff1f2;

            color: #dc2626;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 18px;

            flex-shrink: 0;
        }


        .patient-main strong {

            display: block;

            color: var(--dashboard-text);

            font-family: Poppins, sans-serif;

            font-size: 12px;

            margin-bottom: 3px;
        }


        .patient-main span {

            display: block;

            color: #8b95a5;

            font-size: 7px;
        }


        .blood-required {

            margin-left: auto;

            width: 50px;

            height: 50px;

            border-radius: 12px;

            background: #dc2626;

            color: #fff;

            display: flex;

            align-items: center;

            justify-content: center;

            flex-direction: column;

            box-shadow:
                0 7px 15px rgba(220,38,38,.18);
        }


        .blood-required strong {

            color: #fff;

            font-family: Poppins, sans-serif;

            font-size: 14px;

            line-height: 1;
        }


        .blood-required span {

            color: #fecaca;

            font-size: 5px;

            margin-top: 3px;
        }


        /* =====================================================
           INFORMATION GRID
           ===================================================== */

        .urgent-info-grid {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 9px;

            margin-bottom: 15px;
        }


        .urgent-info {

            padding: 10px;

            background: #fafbfc;

            border: 1px solid #f0f2f5;

            border-radius: 8px;
        }


        .urgent-info span {

            display: block;

            color: #9ca3af;

            font-size: 6px;

            margin-bottom: 4px;
        }


        .urgent-info strong {

            display: flex;

            align-items: center;

            gap: 5px;

            color: var(--dashboard-text);

            font-size: 7px;
        }


        .urgent-info strong i {

            color: #dc2626;

            font-size: 9px;
        }


        /* =====================================================
           TIMER
           ===================================================== */

        .time-warning {

            padding: 10px;

            border-radius: 8px;

            background: #fff7ed;

            border: 1px solid #fed7aa;

            display: flex;

            align-items: center;

            gap: 8px;

            margin-bottom: 14px;
        }


        .time-warning i {

            color: #ea580c;

            font-size: 13px;
        }


        .time-warning div {

            flex: 1;
        }


        .time-warning strong {

            display: block;

            color: #9a3412;

            font-size: 7px;

            margin-bottom: 2px;
        }


        .time-warning span {

            display: block;

            color: #c2410c;

            font-size: 6px;
        }


        .time-left {

            color: #ea580c;

            font-family: Poppins, sans-serif;

            font-size: 10px;

            font-weight: 800;
        }


        /* =====================================================
           CARD ACTIONS
           ===================================================== */

        .urgent-actions {

            display: grid;

            grid-template-columns:
                1fr 1fr 1fr;

            gap: 7px;
        }


        .urgent-btn {

            height: 34px;

            border-radius: 8px;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 5px;

            font-size: 7px;

            font-weight: 700;

            cursor: pointer;

            transition: .2s ease;
        }


        .urgent-btn:hover {

            transform: translateY(-1px);
        }


        .urgent-btn.view {

            background: #f8fafc;

            color: #475569;

            border: 1px solid #e2e8f0;
        }


        .urgent-btn.contact {

            background: #eff6ff;

            color: #2563eb;

            border: 1px solid #dbeafe;
        }


        .urgent-btn.respond {

            background: #dc2626;

            color: #fff;

            border: 1px solid #dc2626;
        }


        /* =====================================================
           RESPONSE PANEL
           ===================================================== */

        .response-panel {

            margin-top: 16px;

            background: #fff;

            border: 1px solid var(--dashboard-border);

            border-radius: 13px;

            box-shadow: var(--dashboard-shadow);

            padding: 17px;
        }


        .response-panel-header {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 15px;
        }


        .response-panel-header h3 {

            font-family: Poppins, sans-serif;

            font-size: 11px;

            color: var(--dashboard-text);

            margin-bottom: 3px;
        }


        .response-panel-header p {

            font-size: 7px;

            color: var(--dashboard-muted);

            margin: 0;
        }


        .response-progress {

            display: flex;

            align-items: center;

            gap: 12px;
        }


        .progress-track {

            width: 150px;

            height: 6px;

            border-radius: 20px;

            background: #f1f5f9;

            overflow: hidden;
        }


        .progress-value {

            width: 72%;

            height: 100%;

            background: #059669;

            border-radius: 20px;
        }


        .progress-text {

            color: #059669;

            font-size: 7px;

            font-weight: 800;
        }


        /* =====================================================
           RESPONSIVE
           ===================================================== */

        @media (max-width: 1100px) {

            .emergency-stats {

                grid-template-columns:
                    repeat(2, 1fr);
            }


            .emergency-request-grid {

                grid-template-columns: 1fr;
            }

        }


        @media (max-width: 700px) {

            .emergency-page {

                padding: 20px 16px;
            }


            .emergency-page-header {

                flex-direction: column;

                align-items: flex-start;
            }


            .emergency-live {

                width: 100%;

                justify-content: center;
            }


            .emergency-stats {

                grid-template-columns: 1fr;
            }


            .urgent-info-grid {

                grid-template-columns: 1fr;
            }


            .urgent-actions {

                grid-template-columns: 1fr;
            }


            .response-panel-header {

                align-items: flex-start;

                flex-direction: column;

                gap: 10px;
            }


            .progress-track {

                width: 120px;
            }

        }

    </style>

</head>


<body>


<div class="admin-app">


    <!-- SIDEBAR -->

    <?php include '../../includes/admin_sidebar.php'; ?>


    <main class="admin-main">


        <!-- NAVBAR -->

        <?php include '../../includes/navbar.php'; ?>


        <section class="emergency-page">


            <!-- =================================================
                 HEADER
                 ================================================= -->

            <div class="emergency-page-header">

                <div class="emergency-title">

                    <div class="emergency-breadcrumb">

                        <span>Admin</span>

                        <i class="bi bi-chevron-right"></i>

                        <span>Blood Requests</span>

                        <i class="bi bi-chevron-right"></i>

                        <span>Emergency</span>

                    </div>


                    <h1>Emergency Blood Requests</h1>


                    <p>
                        Monitor critical blood requirements and coordinate
                        immediate donor responses.
                    </p>

                </div>


                <div class="emergency-live">

                    <span class="emergency-live-dot"></span>

                    LIVE EMERGENCY MONITOR

                </div>

            </div>


            <!-- =================================================
                 STATS
                 ================================================= -->

            <div class="emergency-stats">


                <div class="emergency-stat">

                    <div class="emergency-stat-icon red">

                        <i class="bi bi-exclamation-triangle-fill"></i>

                    </div>

                    <div>

                        <span>Critical Requests</span>

                        <strong>07</strong>

                    </div>

                </div>


                <div class="emergency-stat">

                    <div class="emergency-stat-icon orange">

                        <i class="bi bi-clock-history"></i>

                    </div>

                    <div>

                        <span>Awaiting Response</span>

                        <strong>04</strong>

                    </div>

                </div>


                <div class="emergency-stat">

                    <div class="emergency-stat-icon green">

                        <i class="bi bi-people-fill"></i>

                    </div>

                    <div>

                        <span>Donors Contacted</span>

                        <strong>19</strong>

                    </div>

                </div>


                <div class="emergency-stat">

                    <div class="emergency-stat-icon blue">

                        <i class="bi bi-check-circle-fill"></i>

                    </div>

                    <div>

                        <span>Resolved Today</span>

                        <strong>12</strong>

                    </div>

                </div>


            </div>


            <!-- =================================================
                 REQUEST CARDS
                 ================================================= -->

            <div class="emergency-request-grid">


                <!-- REQUEST 1 -->

                <div class="urgent-request-card">

                    <div class="urgent-top-line"></div>


                    <div class="urgent-card-header">

                        <div class="urgent-id">

                            <div class="urgent-icon">

                                <i class="bi bi-broadcast-pin"></i>

                            </div>

                            <div>

                                <strong>#ER-0087</strong>

                                <span>Received 8 minutes ago</span>

                            </div>

                        </div>


                        <span class="critical-badge">

                            <i class="bi bi-circle-fill"></i>

                            CRITICAL

                        </span>

                    </div>


                    <div class="urgent-card-body">


                        <div class="patient-main">

                            <div class="patient-large-avatar">

                                <i class="bi bi-person-fill"></i>

                            </div>


                            <div>

                                <strong>Mohammad Karim</strong>

                                <span>Patient • Age 42 • Male</span>

                            </div>


                            <div class="blood-required">

                                <strong>O−</strong>

                                <span>2 UNITS</span>

                            </div>

                        </div>


                        <div class="urgent-info-grid">


                            <div class="urgent-info">

                                <span>HOSPITAL</span>

                                <strong>

                                    <i class="bi bi-hospital-fill"></i>

                                    Dhaka Medical

                                </strong>

                            </div>


                            <div class="urgent-info">

                                <span>LOCATION</span>

                                <strong>

                                    <i class="bi bi-geo-alt-fill"></i>

                                    Dhaka

                                </strong>

                            </div>


                            <div class="urgent-info">

                                <span>CONTACT</span>

                                <strong>

                                    <i class="bi bi-telephone-fill"></i>

                                    01712XXXXXX

                                </strong>

                            </div>


                            <div class="urgent-info">

                                <span>REQUIRED BY</span>

                                <strong>

                                    <i class="bi bi-calendar-event-fill"></i>

                                    Today, 9:00 PM

                                </strong>

                            </div>


                        </div>


                        <div class="time-warning">

                            <i class="bi bi-alarm-fill"></i>

                            <div>

                                <strong>Immediate Response Required</strong>

                                <span>
                                    Blood is needed within the next few hours.
                                </span>

                            </div>

                            <span class="time-left">
                                02:41
                            </span>

                        </div>


                        <div class="urgent-actions">

                            <button class="urgent-btn view">

                                <i class="bi bi-eye"></i>

                                View

                            </button>


                            <button class="urgent-btn contact">

                                <i class="bi bi-telephone"></i>

                                Contact

                            </button>


                            <button class="urgent-btn respond">

                                <i class="bi bi-heart-pulse-fill"></i>

                                Respond

                            </button>

                        </div>


                    </div>

                </div>


                <!-- REQUEST 2 -->

                <div class="urgent-request-card">

                    <div class="urgent-top-line"></div>


                    <div class="urgent-card-header">

                        <div class="urgent-id">

                            <div class="urgent-icon">

                                <i class="bi bi-broadcast-pin"></i>

                            </div>

                            <div>

                                <strong>#ER-0086</strong>

                                <span>Received 17 minutes ago</span>

                            </div>

                        </div>


                        <span class="critical-badge">

                            <i class="bi bi-circle-fill"></i>

                            CRITICAL

                        </span>

                    </div>


                    <div class="urgent-card-body">


                        <div class="patient-main">

                            <div class="patient-large-avatar">

                                <i class="bi bi-person-fill"></i>

                            </div>


                            <div>

                                <strong>Sumaiya Rahman</strong>

                                <span>Patient • Age 27 • Female</span>

                            </div>


                            <div class="blood-required">

                                <strong>A−</strong>

                                <span>1 UNIT</span>

                            </div>

                        </div>


                        <div class="urgent-info-grid">


                            <div class="urgent-info">

                                <span>HOSPITAL</span>

                                <strong>

                                    <i class="bi bi-hospital-fill"></i>

                                    Square Hospital

                                </strong>

                            </div>


                            <div class="urgent-info">

                                <span>LOCATION</span>

                                <strong>

                                    <i class="bi bi-geo-alt-fill"></i>

                                    Panthapath

                                </strong>

                            </div>


                            <div class="urgent-info">

                                <span>CONTACT</span>

                                <strong>

                                    <i class="bi bi-telephone-fill"></i>

                                    01819XXXXXX

                                </strong>

                            </div>


                            <div class="urgent-info">

                                <span>REQUIRED BY</span>

                                <strong>

                                    <i class="bi bi-calendar-event-fill"></i>

                                    Today, 10:30 PM

                                </strong>

                            </div>


                        </div>


                        <div class="time-warning">

                            <i class="bi bi-alarm-fill"></i>

                            <div>

                                <strong>Urgent Response Needed</strong>

                                <span>
                                    Matching donor is required immediately.
                                </span>

                            </div>

                            <span class="time-left">
                                04:18
                            </span>

                        </div>


                        <div class="urgent-actions">

                            <button class="urgent-btn view">

                                <i class="bi bi-eye"></i>

                                View

                            </button>


                            <button class="urgent-btn contact">

                                <i class="bi bi-telephone"></i>

                                Contact

                            </button>


                            <button class="urgent-btn respond">

                                <i class="bi bi-heart-pulse-fill"></i>

                                Respond

                            </button>

                        </div>


                    </div>

                </div>


                <!-- REQUEST 3 -->

                <div class="urgent-request-card">

                    <div class="urgent-top-line"></div>


                    <div class="urgent-card-header">

                        <div class="urgent-id">

                            <div class="urgent-icon">

                                <i class="bi bi-broadcast-pin"></i>

                            </div>

                            <div>

                                <strong>#ER-0085</strong>

                                <span>Received 29 minutes ago</span>

                            </div>

                        </div>


                        <span class="critical-badge">

                            <i class="bi bi-circle-fill"></i>

                            CRITICAL

                        </span>

                    </div>


                    <div class="urgent-card-body">


                        <div class="patient-main">

                            <div class="patient-large-avatar">

                                <i class="bi bi-person-fill"></i>

                            </div>


                            <div>

                                <strong>Fahim Chowdhury</strong>

                                <span>Patient • Age 35 • Male</span>

                            </div>


                            <div class="blood-required">

                                <strong>B+</strong>

                                <span>3 UNITS</span>

                            </div>

                        </div>


                        <div class="urgent-info-grid">


                            <div class="urgent-info">

                                <span>HOSPITAL</span>

                                <strong>

                                    <i class="bi bi-hospital-fill"></i>

                                    United Hospital

                                </strong>

                            </div>


                            <div class="urgent-info">

                                <span>LOCATION</span>

                                <strong>

                                    <i class="bi bi-geo-alt-fill"></i>

                                    Gulshan

                                </strong>

                            </div>


                            <div class="urgent-info">

                                <span>CONTACT</span>

                                <strong>

                                    <i class="bi bi-telephone-fill"></i>

                                    01911XXXXXX

                                </strong>

                            </div>


                            <div class="urgent-info">

                                <span>REQUIRED BY</span>

                                <strong>

                                    <i class="bi bi-calendar-event-fill"></i>

                                    Tomorrow, 8:00 AM

                                </strong>

                            </div>

                        </div>


                        <div class="time-warning">

                            <i class="bi bi-alarm-fill"></i>

                            <div>

                                <strong>Urgent Response Needed</strong>

                                <span>
                                    Three units are required for surgery.
                                </span>

                            </div>

                            <span class="time-left">
                                06:55
                            </span>

                        </div>


                        <div class="urgent-actions">

                            <button class="urgent-btn view">

                                <i class="bi bi-eye"></i>

                                View

                            </button>


                            <button class="urgent-btn contact">

                                <i class="bi bi-telephone"></i>

                                Contact

                            </button>


                            <button class="urgent-btn respond">

                                <i class="bi bi-heart-pulse-fill"></i>

                                Respond

                            </button>

                        </div>


                    </div>

                </div>


                <!-- REQUEST 4 -->

                <div class="urgent-request-card">

                    <div class="urgent-top-line"></div>


                    <div class="urgent-card-header">

                        <div class="urgent-id">

                            <div class="urgent-icon">

                                <i class="bi bi-broadcast-pin"></i>

                            </div>

                            <div>

                                <strong>#ER-0084</strong>

                                <span>Received 41 minutes ago</span>

                            </div>

                        </div>


                        <span class="critical-badge">

                            <i class="bi bi-circle-fill"></i>

                            CRITICAL

                        </span>

                    </div>


                    <div class="urgent-card-body">


                        <div class="patient-main">

                            <div class="patient-large-avatar">

                                <i class="bi bi-person-fill"></i>

                            </div>


                            <div>

                                <strong>Jannatul Ferdous</strong>

                                <span>Patient • Age 31 • Female</span>

                            </div>


                            <div class="blood-required">

                                <strong>AB−</strong>

                                <span>2 UNITS</span>

                            </div>

                        </div>


                        <div class="urgent-info-grid">


                            <div class="urgent-info">

                                <span>HOSPITAL</span>

                                <strong>

                                    <i class="bi bi-hospital-fill"></i>

                                    LabAid Hospital

                                </strong>

                            </div>


                            <div class="urgent-info">

                                <span>LOCATION</span>

                                <strong>

                                    <i class="bi bi-geo-alt-fill"></i>

                                    Dhanmondi

                                </strong>

                            </div>


                            <div class="urgent-info">

                                <span>CONTACT</span>

                                <strong>

                                    <i class="bi bi-telephone-fill"></i>

                                    01628XXXXXX

                                </strong>

                            </div>


                            <div class="urgent-info">

                                <span>REQUIRED BY</span>

                                <strong>

                                    <i class="bi bi-calendar-event-fill"></i>

                                    Today, 11:00 PM

                                </strong>

                            </div>

                        </div>


                        <div class="time-warning">

                            <i class="bi bi-alarm-fill"></i>

                            <div>

                                <strong>Immediate Response Required</strong>

                                <span>
                                    Rare blood group. Donor matching is urgent.
                                </span>

                            </div>

                            <span class="time-left">
                                08:22
                            </span>

                        </div>


                        <div class="urgent-actions">

                            <button class="urgent-btn view">

                                <i class="bi bi-eye"></i>

                                View

                            </button>


                            <button class="urgent-btn contact">

                                <i class="bi bi-telephone"></i>

                                Contact

                            </button>


                            <button class="urgent-btn respond">

                                <i class="bi bi-heart-pulse-fill"></i>

                                Respond

                            </button>

                        </div>


                    </div>

                </div>


            </div>


            <!-- =================================================
                 RESPONSE OVERVIEW
                 ================================================= -->

            <div class="response-panel">


                <div class="response-panel-header">

                    <div>

                        <h3>Emergency Response Overview</h3>

                        <p>
                            Current donor response progress for active requests.
                        </p>

                    </div>


                    <div class="response-progress">

                        <div class="progress-track">

                            <div class="progress-value"></div>

                        </div>

                        <span class="progress-text">
                            72% Responded
                        </span>

                    </div>

                </div>


            </div>


        </section>


    </main>

</div>


<script src="../../assets/js/dashboard.js"></script>

<script src="../../assets/js/script.js"></script>

</body>

</html>