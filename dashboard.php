<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard | BloodCare</title>


<!-- Bootstrap -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet">


<!-- Bootstrap Icons -->

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


<!-- Google Font -->

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
rel="stylesheet">


<style>


*{

margin:0;

padding:0;

box-sizing:border-box;

font-family:'Poppins',sans-serif;

}


body{

background:#f6f8fb;

}



/* ================= SIDEBAR ================= */


.sidebar{

position:fixed;

left:0;

top:0;

height:100vh;

width:260px;

background:#dc3545;

color:white;

padding:25px 15px;

}



.logo{

font-size:28px;

font-weight:700;

text-align:center;

margin-bottom:35px;

}


.sidebar a{

display:flex;

align-items:center;

gap:15px;

padding:14px 18px;

margin-bottom:10px;

color:white;

text-decoration:none;

border-radius:12px;

transition:.3s;

}


.sidebar a:hover,
.sidebar a.active{

background:white;

color:#dc3545;

}


.sidebar i{

font-size:20px;

}



/* ================= MAIN ================= */


.main{

margin-left:260px;

padding:25px;

}



/* ================= TOPBAR ================= */


.topbar{

background:white;

padding:18px 25px;

border-radius:18px;

display:flex;

justify-content:space-between;

align-items:center;

box-shadow:0 10px 25px rgba(0,0,0,.08);

}


.profile{

display:flex;

align-items:center;

gap:10px;

}


.profile img{

width:45px;

height:45px;

border-radius:50%;

object-fit:cover;

}





/* ================= CARDS ================= */


.stat-card{

background:white;

padding:25px;

border-radius:20px;

box-shadow:0 10px 25px rgba(0,0,0,.08);

transition:.3s;

}


.stat-card:hover{

transform:translateY(-8px);

}



.stat-icon{

width:60px;

height:60px;

display:flex;

align-items:center;

justify-content:center;

border-radius:15px;

font-size:28px;

color:white;

}



.red{

background:#dc3545;

}


.green{

background:#198754;

}


.blue{

background:#0d6efd;

}


.orange{

background:#fd7e14;

}




.stat-card h3{

font-size:35px;

font-weight:700;

margin-top:15px;

}




/* ================= CONTENT CARD ================= */


.content-card{

background:white;

padding:25px;

border-radius:20px;

box-shadow:0 10px 25px rgba(0,0,0,.08);

}



.table{

vertical-align:middle;

}



.badge-success{

background:#198754;

color:white;

padding:8px 12px;

border-radius:20px;

}


.badge-danger{

background:#dc3545;

color:white;

padding:8px 12px;

border-radius:20px;

}



/* ================= BLOOD STOCK ================= */


.stock-box{

padding:15px;

border-radius:15px;

background:#fff5f5;

margin-bottom:15px;

}



.progress{

height:10px;

border-radius:20px;

}



/* MOBILE */

@media(max-width:992px){

.sidebar{

width:80px;

}


.sidebar span,
.logo-text{

display:none;

}


.main{

margin-left:80px;

}


}


</style>


</head>


<body>



<!-- ================= SIDEBAR ================= -->


<div class="sidebar">


<div class="logo">

<i class="bi bi-heart-pulse-fill"></i>

<span class="logo-text">

BloodCare

</span>

</div>



<a href="#" class="active">

<i class="bi bi-grid-fill"></i>

<span>

Dashboard

</span>

</a>


<a href="add_donor.php">

<i class="bi bi-person-plus-fill"></i>

<span>

Add Donor

</span>

</a>


<a href="donor_list.php">

<i class="bi bi-people-fill"></i>

<span>

Donor List

</span>

</a>


<a href="blood_request.php">

<i class="bi bi-droplet-fill"></i>

<span>

Blood Request

</span>

</a>


<a href="appointment.php">

<i class="bi bi-calendar-check"></i>

<span>

Appointment

</span>

</a>


<a href="blood_stock.php">

<i class="bi bi-box-seam-fill"></i>

<span>

Blood Stock

</span>

</a>


<a href="blood_camp.php">

<i class="bi bi-hospital-fill"></i>

<span>

Blood Camp

</span>

</a>



<a href="notification.php">

<i class="bi bi-bell-fill"></i>

<span>

Notification

</span>

</a>



<a href="login.php">

<i class="bi bi-box-arrow-right"></i>

<span>

Logout

</span>

</a>



</div>






<!-- ================= MAIN ================= -->


<div class="main">


<div class="topbar">


<div>

<h4 class="fw-bold mb-0">

Dashboard

</h4>

<p class="text-muted mb-0">

Welcome back Admin

</p>


</div>


<div class="profile">


<img src="assets/images/user.jpg">


<div>

<h6 class="mb-0">

Admin

</h6>

<small>

BloodCare

</small>


</div>


</div>


</div>





<!-- ================= STATISTICS ================= -->


<div class="row g-4 mt-4">


<div class="col-lg-3 col-md-6">


<div class="stat-card">


<div class="stat-icon red">

<i class="bi bi-people-fill"></i>

</div>


<h3>

5000

</h3>


<p>

Total Donors

</p>


</div>


</div>





<div class="col-lg-3 col-md-6">


<div class="stat-card">


<div class="stat-icon green">

<i class="bi bi-droplet-fill"></i>

</div>


<h3>

350

</h3>


<p>

Blood Requests

</p>


</div>


</div>






<div class="col-lg-3 col-md-6">


<div class="stat-card">


<div class="stat-icon blue">

<i class="bi bi-calendar-check"></i>

</div>


<h3>

120

</h3>


<p>

Appointments

</p>


</div>


</div>





<div class="col-lg-3 col-md-6">


<div class="stat-card">


<div class="stat-icon orange">

<i class="bi bi-box-seam"></i>

</div>


<h3>

850

</h3>


<p>

Blood Bags

</p>


</div>


</div>


</div>







<!-- ================= TABLE ================= -->


<div class="row mt-4">


<div class="col-lg-8">


<div class="content-card">


<h4 class="fw-bold mb-4">

Recent Blood Requests

</h4>



<table class="table">


<thead>

<tr>

<th>

Patient

</th>

<th>

Blood

</th>

<th>

Hospital

</th>

<th>

Status

</th>


</tr>

</thead>



<tbody>


<tr>

<td>

Rahim

</td>


<td>

A+

</td>


<td>

Dhaka Medical

</td>


<td>

<span class="badge-success">

Accepted

</span>

</td>


</tr>



<tr>

<td>

Karim

</td>


<td>

O-

</td>


<td>

Square Hospital

</td>


<td>

<span class="badge-danger">

Pending

</span>

</td>


</tr>


</tbody>


</table>


</div>


</div>







<!-- STOCK -->


<div class="col-lg-4">


<div class="content-card">


<h4 class="fw-bold mb-4">

Blood Stock

</h4>



<div class="stock-box">

<b>

A+

</b>


<div class="progress mt-2">

<div class="progress-bar bg-danger"
style="width:80%">

</div>

</div>

</div>



<div class="stock-box">

<b>

B+

</b>


<div class="progress mt-2">

<div class="progress-bar bg-success"
style="width:60%">

</div>

</div>

</div>




<div class="stock-box">

<b>

O+

</b>


<div class="progress mt-2">

<div class="progress-bar bg-warning"
style="width:40%">

</div>

</div>

</div>



</div>


</div>


</div>




</div>





</body>

</html>