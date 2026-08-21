<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Update Donor | BloodCare</title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Common CSS -->

    <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- Form CSS -->

    <link rel="stylesheet" href="../../assets/css/form.css">

</head>

<body>


<?php include '../../includes/admin_sidebar.php'; ?>


<div class="main">




<!-- Breadcrumb -->

<div class="page-header">

    <div>

        <h2>

            <i class="bi bi-pencil-square text-danger"></i>

            Update Donor

        </h2>

        <p class="text-muted">

            Dashboard > Donor > Update Donor

        </p>

    </div>

</div>





<div class="row">




<!-- LEFT -->


<div class="col-lg-8">

<div class="card form-card">

<div class="card-body">


<h4 class="mb-4">

Donor Information

</h4>


<form>




<div class="row g-4">




<div class="col-md-6">

<label>

Donor ID

</label>

<input
type="text"
class="form-control"
value="DNR-1001"
readonly>

</div>





<div class="col-md-6">

<label>

Full Name

</label>

<input
type="text"
class="form-control"
value="Rahim Ahmed">

</div>






<div class="col-md-6">

<label>

Blood Group

</label>

<select class="form-select">

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






<div class="col-md-6">

<label>

Gender

</label>

<select class="form-select">

<option>Male</option>

<option>Female</option>

<option>Other</option>

</select>

</div>






<div class="col-md-6">

<label>

Age

</label>

<input
type="number"
class="form-control"
value="25">

</div>







<div class="col-md-6">

<label>

Phone

</label>

<input
type="text"
class="form-control"
value="017XXXXXXXX">

</div>








<div class="col-md-6">

<label>

Email

</label>

<input
type="email"
class="form-control"
value="rahim@gmail.com">

</div>







<div class="col-md-6">

<label>

District

</label>

<input
type="text"
class="form-control"
value="Dhaka">

</div>







<div class="col-md-6">

<label>

Area

</label>

<input
type="text"
class="form-control"
value="Mirpur">

</div>







<div class="col-md-6">

<label>

Last Donation Date

</label>

<input
type="date"
class="form-control"
value="2026-07-10">

</div>







<div class="col-md-6">

<label>

Medical Status

</label>

<select class="form-select">

<option>Healthy</option>

<option>Under Treatment</option>

<option>Not Eligible</option>

</select>

</div>








<div class="col-md-6">

<label>

Availability

</label>

<select class="form-select">

<option>Available</option>

<option>Unavailable</option>

</select>

</div>








<div class="col-12">

<label>

Address

</label>

<textarea
class="form-control"
rows="4">Mirpur, Dhaka, Bangladesh</textarea>

</div>





</div>






<div class="button-group mt-5">

<button class="btn btn-success">

<i class="bi bi-check-circle-fill"></i>

Save Changes

</button>




<button
type="reset"
class="btn btn-warning">

<i class="bi bi-arrow-clockwise"></i>

Reset

</button>





<button
class="btn btn-danger">

<i class="bi bi-trash-fill"></i>

Delete Donor

</button>





<a
href="donor_list.php"
class="btn btn-secondary">

Cancel

</a>

</div>





</form>

</div>

</div>

</div>








<!-- RIGHT SIDE -->


<div class="col-lg-4">




<div class="card profile-card">

<div class="card-body text-center">




<img
src="../../assets/images/default-user.png"
class="profile-image">



<h4>

Rahim Ahmed

</h4>





<span class="badge bg-danger">

A+

</span>





<input
type="file"
class="form-control mt-4">





</div>

</div>






<div class="card summary-card mt-4">

<div class="card-body">




<h5>

Donor Summary

</h5>

<hr>





<div class="summary-item">

<span>

Total Donations

</span>

<strong>

12

</strong>

</div>





<div class="summary-item">

<span>

Registered

</span>

<strong>

15 Jan 2024

</strong>

</div>







<div class="summary-item">

<span>

Last Donation

</span>

<strong>

10 Jul 2026

</strong>

</div>







<div class="summary-item">

<span>

Next Eligible

</span>

<strong>

10 Oct 2026

</strong>

</div>







<div class="summary-item">

<span>

Current Status

</span>

<strong class="text-success">

Available

</strong>

</div>





</div>

</div>




</div>





</div>




</div>




</body>

</html>