<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>My Profile | BloodCare</title>

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
                <i class="bi bi-person-circle"></i>
            </div>

            <div>

                <h1>My Profile</h1>

                <p>
                    View and manage your personal information.
                </p>

            </div>

        </div>


        <a href="#" class="btn btn-primary">

            <i class="bi bi-pencil"></i>

            Edit Profile

        </a>

    </div>


    <div class="user-profile">


        <div class="profile-card">

            <div class="profile-photo-wrapper">

                <img
                    src="../assets/images/default-user.png"
                    class="profile-photo"
                >

                <span class="profile-online"></span>

            </div>

            <h2>John Doe</h2>

            <p>BloodCare User</p>

            <span class="badge badge-success">
                Active Account
            </span>


            <div class="profile-meta">

                <div class="profile-meta-item">

                    <i class="bi bi-envelope"></i>

                    <div>

                        <small>Email</small>

                        <span>
                            user@email.com
                        </span>

                    </div>

                </div>


                <div class="profile-meta-item">

                    <i class="bi bi-telephone"></i>

                    <div>

                        <small>Phone</small>

                        <span>
                            01XXXXXXXXX
                        </span>

                    </div>

                </div>


                <div class="profile-meta-item">

                    <i class="bi bi-calendar"></i>

                    <div>

                        <small>Member Since</small>

                        <span>
                            January 2026
                        </span>

                    </div>

                </div>

            </div>

        </div>


        <div class="profile-details">

            <div class="profile-details-header">

                <h3>Personal Information</h3>

                <p>
                    Your registered account information.
                </p>

            </div>


            <div class="profile-details-body">

                <div class="profile-info-grid">

                    <div class="info-box">

                        <label>Full Name</label>

                        <strong>
                            John Doe
                        </strong>

                    </div>


                    <div class="info-box">

                        <label>Email Address</label>

                        <strong>
                            user@email.com
                        </strong>

                    </div>


                    <div class="info-box">

                        <label>Phone Number</label>

                        <strong>
                            01XXXXXXXXX
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

                        <label>Account Type</label>

                        <strong>
                            User
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