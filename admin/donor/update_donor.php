<?php
// =========================================================
// BLOODCARE - UPDATE DONOR
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

    <title>Edit Donor | BloodCare</title>

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

        .edit-layout {
            display: grid;
            grid-template-columns: 1fr 280px;
            gap: 20px;
            align-items: start;
        }

        .edit-card,
        .preview-card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 16px;
            box-shadow: var(--shadow-sm);
            overflow: hidden;
        }

        .edit-header {
            padding: 20px 22px;
            border-bottom: 1px solid var(--border-light);
        }

        .edit-header h1 {
            font-size: 20px;
            margin-bottom: 4px;
        }

        .edit-header p {
            font-size: 11px;
            margin: 0;
        }

        .edit-body {
            padding: 22px;
        }

        .edit-section {
            margin-bottom: 25px;
        }

        .edit-section:last-child {
            margin-bottom: 0;
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 8px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border-light);
            margin-bottom: 17px;
        }

        .section-title i {
            width: 29px;
            height: 29px;
            border-radius: 8px;
            background: var(--primary-soft);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section-title strong {
            font-size: 13px;
        }

        .fields {
            display: grid;
            grid-template-columns: repeat(2,1fr);
            gap: 16px;
        }

        .full {
            grid-column: 1 / -1;
        }

        .edit-actions {
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid var(--border-light);
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .preview-card {
            padding: 22px;
            text-align: center;
        }

        .preview-card img {
            width: 90px;
            height: 90px;
            border-radius: 20px;
            object-fit: cover;
            margin: auto;
            border: 4px solid #fff;
            box-shadow: 0 0 0 1px var(--border);
        }

        .preview-card h3 {
            margin-top: 13px;
            font-size: 16px;
        }

        .preview-card p {
            font-size: 10px;
            margin-bottom: 15px;
        }

        .preview-blood {
            width: 62px;
            height: 62px;
            margin: 15px auto;
            border-radius: 17px;
            background: var(--primary-light);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: Poppins,sans-serif;
            font-size: 19px;
            font-weight: 800;
        }

        .status-select {
            margin-top: 10px;
        }

        @media(max-width:900px) {

            .edit-layout {
                grid-template-columns: 1fr;
            }

        }

        @media(max-width:650px) {

            .page-content {
                padding: 20px 16px;
            }

            .fields {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }

            .edit-actions {
                flex-direction: column-reverse;
            }

            .edit-actions .btn {
                width: 100%;
            }

        }

    </style>

</head>


<body>


<div class="admin-app">


    <aside class="admin-sidebar">

        <div class="sidebar-logo">

            <a
                href="../dashboard.php"
                class="sidebar-logo-link"
            >

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

                    <a
                        href="donor_list.php"
                        class="active"
                    >

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


    <main class="admin-main">


        <header class="admin-navbar">

            <div class="navbar-left">

                <button class="sidebar-toggle">

                    <i class="bi bi-list"></i>

                </button>


                <div class="navbar-heading">

                    <span>DONOR MANAGEMENT</span>

                    <strong>Edit Donor</strong>

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


            <div class="edit-layout">


                <!-- FORM -->

                <div class="edit-card">


                    <div class="edit-header">

                        <h1>Edit Donor</h1>

                        <p>
                            Update donor information and availability.
                        </p>

                    </div>


                    <div class="edit-body">


                        <!-- PERSONAL -->

                        <div class="edit-section">

                            <div class="section-title">

                                <i class="bi bi-person"></i>

                                <strong>
                                    Personal Information
                                </strong>

                            </div>


                            <div class="fields">


                                <div class="form-group">

                                    <label class="form-label">
                                        Full Name
                                    </label>

                                    <input
                                        class="form-control"
                                        type="text"
                                        value="Rahim Ahmed"
                                    >

                                </div>


                                <div class="form-group">

                                    <label class="form-label">
                                        Email
                                    </label>

                                    <input
                                        class="form-control"
                                        type="email"
                                        value="rahim@example.com"
                                    >

                                </div>


                                <div class="form-group">

                                    <label class="form-label">
                                        Phone
                                    </label>

                                    <input
                                        class="form-control"
                                        type="text"
                                        value="01712-345678"
                                    >

                                </div>


                                <div class="form-group">

                                    <label class="form-label">
                                        Gender
                                    </label>

                                    <select class="form-select">

                                        <option selected>
                                            Male
                                        </option>

                                        <option>
                                            Female
                                        </option>

                                        <option>
                                            Other
                                        </option>

                                    </select>

                                </div>


                            </div>

                        </div>


                        <!-- BLOOD -->

                        <div class="edit-section">

                            <div class="section-title">

                                <i class="bi bi-droplet-fill"></i>

                                <strong>
                                    Blood Information
                                </strong>

                            </div>


                            <div class="fields">


                                <div class="form-group">

                                    <label class="form-label">
                                        Blood Group
                                    </label>

                                    <select class="form-select">

                                        <option>
                                            A+
                                        </option>

                                        <option>
                                            A-
                                        </option>

                                        <option>
                                            B+
                                        </option>

                                        <option>
                                            B-
                                        </option>

                                        <option>
                                            AB+
                                        </option>

                                        <option>
                                            AB-
                                        </option>

                                        <option selected>
                                            O+
                                        </option>

                                        <option>
                                            O-
                                        </option>

                                    </select>

                                </div>


                                <div class="form-group">

                                    <label class="form-label">
                                        Last Donation
                                    </label>

                                    <input
                                        class="form-control"
                                        type="date"
                                        value="2026-08-12"
                                    >

                                </div>


                                <div class="form-group">

                                    <label class="form-label">
                                        Availability
                                    </label>

                                    <select class="form-select">

                                        <option selected>
                                            Available
                                        </option>

                                        <option>
                                            Unavailable
                                        </option>

                                    </select>

                                </div>


                                <div class="form-group">

                                    <label class="form-label">
                                        Medical Status
                                    </label>

                                    <select class="form-select">

                                        <option selected>
                                            Healthy
                                        </option>

                                        <option>
                                            Under Treatment
                                        </option>

                                        <option>
                                            Temporarily Unfit
                                        </option>

                                    </select>

                                </div>


                            </div>

                        </div>


                        <!-- LOCATION -->

                        <div class="edit-section">

                            <div class="section-title">

                                <i class="bi bi-geo-alt-fill"></i>

                                <strong>
                                    Location
                                </strong>

                            </div>


                            <div class="fields">


                                <div class="form-group">

                                    <label class="form-label">
                                        District
                                    </label>

                                    <select class="form-select">

                                        <option selected>
                                            Dhaka
                                        </option>

                                        <option>
                                            Gazipur
                                        </option>

                                        <option>
                                            Narayanganj
                                        </option>

                                        <option>
                                            Chattogram
                                        </option>

                                    </select>

                                </div>


                                <div class="form-group">

                                    <label class="form-label">
                                        Area
                                    </label>

                                    <input
                                        class="form-control"
                                        value="Mirpur"
                                    >

                                </div>


                                <div class="form-group full">

                                    <label class="form-label">
                                        Address
                                    </label>

                                    <textarea
                                        class="form-control"
                                    >Mirpur, Dhaka, Bangladesh</textarea>

                                </div>


                            </div>

                        </div>


                        <div class="edit-actions">

                            <a
                                href="donor_profile.php"
                                class="btn btn-outline"
                            >

                                Cancel

                            </a>


                            <button class="btn btn-primary">

                                <i class="bi bi-check-lg"></i>

                                Save Changes

                            </button>

                        </div>


                    </div>

                </div>


                <!-- PREVIEW -->

                <div class="preview-card">

                    <img
                        src="../../assets/images/default-user.png"
                        alt="Donor"
                    >


                    <h3>
                        Rahim Ahmed
                    </h3>

                    <p>
                        Donor ID: DN-1001
                    </p>


                    <span class="badge badge-success">
                        <i class="bi bi-check-circle"></i>
                        Available
                    </span>


                    <div class="preview-blood">
                        O+
                    </div>


                    <p>
                        Blood Group
                    </p>


                    <div class="divider"></div>


                    <div class="status-select">

                        <span class="text-muted">
                            Account Status
                        </span>

                        <br>

                        <span class="badge badge-success mt-10">
                            Active
                        </span>

                    </div>

                </div>


            </div>


        </section>

    </main>

</div>


<script src="../../assets/js/dashboard.js"></script>

</body>

</html>