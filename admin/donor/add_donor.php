<?php
// =========================================================
// BLOODCARE - ADD DONOR
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

    <title>Add Donor | BloodCare</title>

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
           ADD DONOR PAGE
           ===================================================== */

        .page-content {
            padding: 28px;
        }

        .page-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 25px;
        }

        .page-heading {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .page-heading-icon {
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

        .page-heading h1 {
            font-size: 23px;
            margin-bottom: 3px;
        }

        .page-heading p {
            font-size: 12px;
            margin: 0;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            color: var(--text-light);
            font-size: 12px;
            font-weight: 600;
        }

        .back-btn:hover {
            color: var(--primary);
        }

        /* Main Layout */

        .donor-form-layout {
            display: grid;
            grid-template-columns: 1fr 310px;
            gap: 20px;
            align-items: start;
        }

        /* Card */

        .form-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: var(--shadow-sm);
            overflow: hidden;
        }

        .form-card-header {
            padding: 20px 22px;
            border-bottom: 1px solid var(--border-light);
        }

        .form-card-header h3 {
            font-size: 16px;
            margin-bottom: 3px;
        }

        .form-card-header p {
            font-size: 11px;
            margin: 0;
        }

        .form-card-body {
            padding: 23px;
        }

        /* Section */

        .form-section {
            margin-bottom: 28px;
        }

        .form-section:last-child {
            margin-bottom: 0;
        }

        .form-section-title {
            display: flex;
            align-items: center;
            gap: 9px;
            margin-bottom: 18px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border-light);
        }

        .form-section-title-icon {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            background: var(--primary-soft);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
        }

        .form-section-title strong {
            font-size: 13px;
            color: var(--text-dark);
        }

        /* Grid */

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px;
        }

        .form-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .full {
            grid-column: 1 / -1;
        }

        /* Radio */

        .radio-group {
            display: flex;
            gap: 9px;
            flex-wrap: wrap;
        }

        .radio-option {
            position: relative;
        }

        .radio-option input {
            position: absolute;
            opacity: 0;
        }

        .radio-option label {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 70px;
            height: 42px;
            padding: 0 13px;
            border: 1px solid var(--border);
            border-radius: 9px;
            background: #fff;
            color: var(--text);
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .radio-option input:checked + label {
            background: var(--primary-soft);
            border-color: var(--primary);
            color: var(--primary);
        }

        /* Upload */

        .upload-box {
            border: 1.5px dashed #cbd5e1;
            border-radius: 12px;
            padding: 22px;
            text-align: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .upload-box:hover {
            border-color: var(--primary);
            background: var(--primary-soft);
        }

        .upload-icon {
            width: 45px;
            height: 45px;
            margin: auto;
            border-radius: 12px;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
            font-size: 19px;
            margin-bottom: 10px;
        }

        .upload-box strong {
            display: block;
            color: var(--text-dark);
            font-size: 12px;
            margin-bottom: 3px;
        }

        .upload-box span {
            color: var(--text-muted);
            font-size: 10px;
        }

        /* Actions */

        .form-actions {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid var(--border-light);
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        /* Side Card */

        .info-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: var(--shadow-sm);
            padding: 20px;
        }

        .info-card h3 {
            font-size: 15px;
            margin-bottom: 5px;
        }

        .info-card > p {
            font-size: 11px;
            margin-bottom: 20px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 11px;
            margin-bottom: 16px;
        }

        .info-item:last-child {
            margin-bottom: 0;
        }

        .info-icon {
            width: 32px;
            height: 32px;
            flex-shrink: 0;
            border-radius: 8px;
            background: var(--primary-soft);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .info-item strong {
            display: block;
            color: var(--text-dark);
            font-size: 11px;
            margin-bottom: 2px;
        }

        .info-item span {
            display: block;
            color: var(--text-light);
            font-size: 10px;
            line-height: 1.5;
        }

        .required-note {
            margin-top: 18px;
            padding: 11px;
            background: #fffbeb;
            border: 1px solid #fde68a;
            border-radius: 9px;
            color: #92400e;
            font-size: 10px;
        }

        /* Responsive */

        @media(max-width: 1000px) {

            .donor-form-layout {
                grid-template-columns: 1fr;
            }

        }

        @media(max-width: 700px) {

            .page-content {
                padding: 20px 16px;
            }

            .page-top {
                align-items: flex-start;
                flex-direction: column;
                gap: 12px;
            }

            .form-grid,
            .form-grid-3 {
                grid-template-columns: 1fr;
            }

            .form-card-body {
                padding: 18px;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .form-actions .btn {
                width: 100%;
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

            <button class="sidebar-close">
                <i class="bi bi-x-lg"></i>
            </button>

        </div>


        <div class="sidebar-profile">

            <img
                src="../../assets/images/default-user.png"
                alt="Admin"
            >

            <div class="sidebar-profile-info">

                <strong>System Administrator</strong>

                <span>
                    <i class="bi bi-circle-fill"></i>
                    Online
                </span>

            </div>

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

                <li>
                    <a href="../stock/blood_stock.php">
                        <span class="menu-icon">
                            <i class="bi bi-droplet-half"></i>
                        </span>
                        Blood Stock
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


    <!-- MAIN -->

    <main class="admin-main">


        <!-- NAVBAR -->

        <header class="admin-navbar">

            <div class="navbar-left">

                <button class="sidebar-toggle">
                    <i class="bi bi-list"></i>
                </button>

                <div class="navbar-heading">

                    <span>ADMINISTRATION</span>

                    <strong>Add New Donor</strong>

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

                    <i class="bi bi-chevron-down"></i>

                </div>

            </div>

        </header>


        <!-- CONTENT -->

        <section class="page-content">


            <div class="page-top">

                <div class="page-heading">

                    <div class="page-heading-icon">
                        <i class="bi bi-person-plus-fill"></i>
                    </div>

                    <div>

                        <h1>Add New Donor</h1>

                        <p>
                            Register a new donor into the BloodCare system.
                        </p>

                    </div>

                </div>


                <a
                    href="donor_list.php"
                    class="back-btn"
                >

                    <i class="bi bi-arrow-left"></i>

                    Back to Donors

                </a>

            </div>


            <div class="donor-form-layout">


                <!-- FORM -->

                <div class="form-card">

                    <div class="form-card-header">

                        <h3>Donor Information</h3>

                        <p>
                            Enter the donor's personal and medical information.
                        </p>

                    </div>


                    <div class="form-card-body">


                        <!-- PERSONAL -->

                        <div class="form-section">

                            <div class="form-section-title">

                                <div class="form-section-title-icon">
                                    <i class="bi bi-person"></i>
                                </div>

                                <strong>Personal Information</strong>

                            </div>


                            <div class="form-grid">

                                <div class="form-group">

                                    <label class="form-label">
                                        Full Name <span>*</span>
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="Enter full name"
                                    >

                                </div>


                                <div class="form-group">

                                    <label class="form-label">
                                        Email Address
                                    </label>

                                    <input
                                        type="email"
                                        class="form-control"
                                        placeholder="example@email.com"
                                    >

                                </div>


                                <div class="form-group">

                                    <label class="form-label">
                                        Phone Number <span>*</span>
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="01XXXXXXXXX"
                                    >

                                </div>


                                <div class="form-group">

                                    <label class="form-label">
                                        Date of Birth
                                    </label>

                                    <input
                                        type="date"
                                        class="form-control"
                                    >

                                </div>


                                <div class="form-group full">

                                    <label class="form-label">
                                        Gender <span>*</span>
                                    </label>

                                    <div class="radio-group">

                                        <div class="radio-option">

                                            <input
                                                type="radio"
                                                name="gender"
                                                id="male"
                                            >

                                            <label for="male">
                                                Male
                                            </label>

                                        </div>


                                        <div class="radio-option">

                                            <input
                                                type="radio"
                                                name="gender"
                                                id="female"
                                            >

                                            <label for="female">
                                                Female
                                            </label>

                                        </div>


                                        <div class="radio-option">

                                            <input
                                                type="radio"
                                                name="gender"
                                                id="other"
                                            >

                                            <label for="other">
                                                Other
                                            </label>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- BLOOD -->

                        <div class="form-section">

                            <div class="form-section-title">

                                <div class="form-section-title-icon">
                                    <i class="bi bi-droplet-fill"></i>
                                </div>

                                <strong>Blood Information</strong>

                            </div>


                            <div class="form-grid">

                                <div class="form-group">

                                    <label class="form-label">
                                        Blood Group <span>*</span>
                                    </label>

                                    <select class="form-select">

                                        <option>
                                            Select Blood Group
                                        </option>

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


                                <div class="form-group">

                                    <label class="form-label">
                                        Last Donation Date
                                    </label>

                                    <input
                                        type="date"
                                        class="form-control"
                                    >

                                </div>

                            </div>

                        </div>


                        <!-- LOCATION -->

                        <div class="form-section">

                            <div class="form-section-title">

                                <div class="form-section-title-icon">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>

                                <strong>Location Information</strong>

                            </div>


                            <div class="form-grid">

                                <div class="form-group">

                                    <label class="form-label">
                                        District <span>*</span>
                                    </label>

                                    <select class="form-select">

                                        <option>
                                            Select District
                                        </option>

                                        <option>Dhaka</option>
                                        <option>Gazipur</option>
                                        <option>Narayanganj</option>
                                        <option>Chattogram</option>
                                        <option>Sylhet</option>

                                    </select>

                                </div>


                                <div class="form-group">

                                    <label class="form-label">
                                        Area
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        placeholder="e.g. Mirpur"
                                    >

                                </div>


                                <div class="form-group full">

                                    <label class="form-label">
                                        Full Address
                                    </label>

                                    <textarea
                                        class="form-control"
                                        placeholder="Enter complete address"
                                    ></textarea>

                                </div>

                            </div>

                        </div>


                        <!-- PHOTO -->

                        <div class="form-section">

                            <div class="form-section-title">

                                <div class="form-section-title-icon">
                                    <i class="bi bi-camera-fill"></i>
                                </div>

                                <strong>Profile Photo</strong>

                            </div>


                            <div class="upload-box">

                                <div class="upload-icon">
                                    <i class="bi bi-cloud-arrow-up"></i>
                                </div>

                                <strong>
                                    Upload donor photo
                                </strong>

                                <span>
                                    JPG, PNG or WEBP · Max 2MB
                                </span>

                                <input
                                    type="file"
                                    hidden
                                >

                            </div>

                        </div>


                        <!-- ACTIONS -->

                        <div class="form-actions">

                            <a
                                href="donor_list.php"
                                class="btn btn-outline"
                            >

                                Cancel

                            </a>


                            <button
                                type="button"
                                class="btn btn-primary"
                            >

                                <i class="bi bi-check-lg"></i>

                                Register Donor

                            </button>

                        </div>


                    </div>

                </div>


                <!-- INFO -->

                <div class="info-card">

                    <h3>Donor Registration</h3>

                    <p>
                        Please make sure the information is accurate.
                    </p>


                    <div class="info-item">

                        <div class="info-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>

                        <div>

                            <strong>Verify Information</strong>

                            <span>
                                Confirm the donor's personal information before saving.
                            </span>

                        </div>

                    </div>


                    <div class="info-item">

                        <div class="info-icon">
                            <i class="bi bi-droplet"></i>
                        </div>

                        <div>

                            <strong>Blood Group</strong>

                            <span>
                                Double-check the blood group to avoid emergency matching errors.
                            </span>

                        </div>

                    </div>


                    <div class="info-item">

                        <div class="info-icon">
                            <i class="bi bi-telephone"></i>
                        </div>

                        <div>

                            <strong>Contact Number</strong>

                            <span>
                                Use an active phone number for emergency communication.
                            </span>

                        </div>

                    </div>


                    <div class="required-note">

                        <i class="bi bi-info-circle"></i>

                        Fields marked with
                        <strong>*</strong>
                        are required.

                    </div>

                </div>


            </div>

        </section>

    </main>

</div>


<script src="../../assets/js/dashboard.js"></script>

</body>

</html>