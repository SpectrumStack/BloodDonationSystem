<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Donor Profile | BloodCare</title>

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
                <i class="bi bi-person-badge-fill"></i>
            </div>

            <div>
                <h1>Donor Profile</h1>
                <p>View donor information and availability.</p>
            </div>

        </div>

        <a href="search_donor.php" class="btn btn-outline">
            <i class="bi bi-arrow-left"></i>
            Back to Search
        </a>

    </div>


    <div class="user-profile">


        <!-- PROFILE CARD -->

        <div class="profile-card">

            <div class="profile-photo-wrapper">

                <img
                    src="../assets/images/default-user.png"
                    class="profile-photo"
                >

                <span class="profile-online"></span>

            </div>

            <h2>Rahim Ahmed</h2>

            <p>Verified Blood Donor</p>

            <span class="badge badge-success">
                <i class="bi bi-circle-fill"></i>
                Available
            </span>


            <div class="profile-meta">

                <div class="profile-meta-item">

                    <i class="bi bi-droplet-fill"></i>

                    <div>
                        <small>Blood Group</small>
                        <span>A+</span>
                    </div>

                </div>


                <div class="profile-meta-item">

                    <i class="bi bi-geo-alt-fill"></i>

                    <div>
                        <small>Location</small>
                        <span>Mirpur, Dhaka</span>
                    </div>

                </div>


                <div class="profile-meta-item">

                    <i class="bi bi-calendar-check"></i>

                    <div>
                        <small>Last Donation</small>
                        <span>15 July 2026</span>
                    </div>

                </div>

            </div>


            <a href="#" class="btn btn-primary btn-block mt-20">
                <i class="bi bi-telephone-fill"></i>
                Contact Donor
            </a>

        </div>


        <!-- DETAILS -->

        <div class="profile-details">

            <div class="profile-details-header">

                <h3>Donor Information</h3>

                <p>
                    Basic information about this donor.
                </p>

            </div>


            <div class="profile-details-body">

                <div class="profile-info-grid">

                    <div class="info-box">

                        <label>Full Name</label>

                        <strong>
                            Rahim Ahmed
                        </strong>

                    </div>


                    <div class="info-box">

                        <label>Blood Group</label>

                        <strong>
                            A Positive (A+)
                        </strong>

                    </div>


                    <div class="info-box">

                        <label>Gender</label>

                        <strong>
                            Male
                        </strong>

                    </div>


                    <div class="info-box">

                        <label>Age</label>

                        <strong>
                            27 Years
                        </strong>

                    </div>


                    <div class="info-box">

                        <label>District</label>

                        <strong>
                            Dhaka
                        </strong>

                    </div>


                    <div class="info-box">

                        <label>Area</label>

                        <strong>
                            Mirpur
                        </strong>

                    </div>


                    <div class="info-box">

                        <label>Availability</label>

                        <strong class="text-success">
                            Available
                        </strong>

                    </div>


                    <div class="info-box">

                        <label>Last Donation</label>

                        <strong>
                            15 July 2026
                        </strong>

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