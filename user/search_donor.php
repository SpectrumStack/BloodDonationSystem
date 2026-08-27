<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Search Donor | BloodCare</title>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link
    rel="stylesheet"
    href="../assets/css/style.css"
>

<link
    rel="stylesheet"
    href="../assets/css/dashboard.css"
>

<link
    rel="stylesheet"
    href="../assets/css/user-pages.css"
>
</head>

<body>

<div class="admin-app">

<?php include "../includes/user_sidebar.php"; ?>

<main class="admin-main">

<?php include "../includes/navbar.php"; ?>

<div class="user-page">

    <div class="user-page-header">

        <div class="user-page-title">

            <div class="title-icon">
                <i class="bi bi-search"></i>
            </div>

            <div>
                <h1>Search Donors</h1>
                <p>Find suitable blood donors based on your requirements.</p>
            </div>

        </div>

    </div>


    <!-- SEARCH -->

    <div class="donor-search-box">

        <h2>Find a Blood Donor</h2>

        <p>
            Select blood group and location to find available donors.
        </p>

        <form class="donor-search-form">

            <div class="search-field">

                <i class="bi bi-droplet-fill"></i>

                <select>
                    <option>Select Blood Group</option>
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


            <div class="search-field">

                <i class="bi bi-geo-alt-fill"></i>

                <select>
                    <option>Select District</option>
                    <option>Dhaka</option>
                    <option>Gazipur</option>
                    <option>Narayanganj</option>
                    <option>Chattogram</option>
                    <option>Sylhet</option>
                </select>

            </div>


            <div class="search-field">

                <i class="bi bi-pin-map-fill"></i>

                <input
                    type="text"
                    placeholder="Area / Location"
                >

            </div>


            <button class="btn btn-primary">

                <i class="bi bi-search"></i>

                Search

            </button>

        </form>

    </div>


    <!-- RESULTS -->

    <div class="user-panel">

        <div class="user-panel-header">

            <div>

                <h3>Available Donors</h3>

                <p>Showing available donors</p>

            </div>

            <span class="badge badge-success">
                24 Donors Available
            </span>

        </div>


        <div class="user-panel-body">

            <div class="donor-results">


                <!-- DONOR 1 -->

                <div class="donor-card">

                    <div class="donor-card-top">

                        <img
                            src="../assets/images/default-user.png"
                            class="donor-card-avatar"
                        >

                        <div class="donor-card-name">

                            <strong>Rahim Ahmed</strong>

                            <span>
                                <i class="bi bi-circle-fill"></i>
                                Available
                            </span>

                        </div>

                        <div class="donor-blood">
                            A+
                        </div>

                    </div>


                    <div class="donor-card-info">

                        <div class="donor-info-item">
                            <i class="bi bi-geo-alt"></i>
                            <span>Mirpur, Dhaka</span>
                        </div>

                        <div class="donor-info-item">
                            <i class="bi bi-telephone"></i>
                            <span>01XXXXXXXXX</span>
                        </div>

                    </div>


                    <div class="donor-card-footer">

                        <span class="badge badge-success">
                            Available
                        </span>

                        <a href="donor_profile.php"
                           class="btn btn-sm btn-primary">

                            View Profile

                        </a>

                    </div>

                </div>


                <!-- DONOR 2 -->

                <div class="donor-card">

                    <div class="donor-card-top">

                        <img
                            src="../assets/images/default-user.png"
                            class="donor-card-avatar"
                        >

                        <div class="donor-card-name">

                            <strong>Sumaiya Islam</strong>

                            <span>Available</span>

                        </div>

                        <div class="donor-blood">
                            O+
                        </div>

                    </div>


                    <div class="donor-card-info">

                        <div class="donor-info-item">
                            <i class="bi bi-geo-alt"></i>
                            <span>Uttara, Dhaka</span>
                        </div>

                        <div class="donor-info-item">
                            <i class="bi bi-clock"></i>
                            <span>Recently Active</span>
                        </div>

                    </div>


                    <div class="donor-card-footer">

                        <span class="badge badge-success">
                            Available
                        </span>

                        <a href="donor_profile.php"
                           class="btn btn-sm btn-primary">

                            View Profile

                        </a>

                    </div>

                </div>


                <!-- DONOR 3 -->

                <div class="donor-card">

                    <div class="donor-card-top">

                        <img
                            src="../assets/images/default-user.png"
                            class="donor-card-avatar"
                        >

                        <div class="donor-card-name">

                            <strong>Hasan Mahmud</strong>

                            <span>Available</span>

                        </div>

                        <div class="donor-blood">
                            B+
                        </div>

                    </div>


                    <div class="donor-card-info">

                        <div class="donor-info-item">
                            <i class="bi bi-geo-alt"></i>
                            <span>Banani, Dhaka</span>
                        </div>

                        <div class="donor-info-item">
                            <i class="bi bi-clock"></i>
                            <span>2 hours ago</span>
                        </div>

                    </div>


                    <div class="donor-card-footer">

                        <span class="badge badge-success">
                            Available
                        </span>

                        <a href="donor_profile.php"
                           class="btn btn-sm btn-primary">

                            View Profile

                        </a>

                    </div>

                </div>


            </div>

        </div>

    </div>

</div>

</main>

</div>

</body>
</html>