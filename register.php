<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Register | BloodCare</title>


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

min-height:100vh;

background:

linear-gradient(
rgba(220,53,69,.85),
rgba(120,0,0,.85)
),

url("assets/images/register-bg.jpg");

background-size:cover;

background-position:center;

padding:50px 0;

}



/* Main Card */

.register-card{

max-width:900px;

margin:auto;

background:white;

border-radius:25px;

padding:45px;

box-shadow:0 20px 50px rgba(0,0,0,.25);

animation:show .8s ease;

}



@keyframes show{

from{

opacity:0;

transform:translateY(40px);

}

to{

opacity:1;

transform:translateY(0);

}

}



/* Header */

.logo{

width:80px;

height:80px;

background:#dc3545;

border-radius:50%;

display:flex;

align-items:center;

justify-content:center;

margin:auto;

color:white;

font-size:40px;

}



h2{

color:#dc3545;

font-weight:700;

}



/* Form */

.form-label{

font-weight:600;

}



.input-box{

position:relative;

}


.input-box i{

position:absolute;

left:15px;

top:17px;

color:#dc3545;

font-size:18px;

}



.form-control,
.form-select{

height:55px;

border-radius:12px;

padding-left:45px;

border:1px solid #ddd;

}


.form-select{

padding-left:15px;

}



.form-control:focus,
.form-select:focus{

border-color:#dc3545;

box-shadow:0 0 0 .2rem rgba(220,53,69,.15);

}



/* Photo Upload */


.photo-box{

text-align:center;

margin-bottom:25px;

}


.profile-icon{

width:100px;

height:100px;

border-radius:50%;

background:#ffe5e8;

display:flex;

justify-content:center;

align-items:center;

margin:auto;

font-size:45px;

color:#dc3545;

}



.upload-btn{

margin-top:15px;

}



/* Button */


.register-btn{

height:55px;

background:#dc3545;

border:none;

border-radius:30px;

color:white;

font-weight:600;

font-size:17px;

transition:.3s;

}



.register-btn:hover{

background:#b02a37;

transform:translateY(-3px);

}



/* Login */

a{

text-decoration:none;

color:#dc3545;

font-weight:600;

}



@media(max-width:768px){

.register-card{

padding:25px;

}

}



</style>


</head>


<body>


<div class="container">



<div class="register-card">



<div class="logo">

<i class="bi bi-heart-pulse-fill"></i>

</div>



<h2 class="text-center mt-3">

Create Donor Account

</h2>


<p class="text-center text-muted mb-4">

Join BloodCare and save lives

</p>



<form>



<!-- Photo -->

<div class="photo-box">


<div class="profile-icon">

<i class="bi bi-person-fill"></i>

</div>


<input type="file"
class="form-control mt-3">


</div>





<div class="row g-4">


<!-- Name -->

<div class="col-md-6">

<label class="form-label">

Full Name

</label>


<div class="input-box">

<i class="bi bi-person-fill"></i>

<input type="text"
class="form-control"
placeholder="Enter your name">

</div>

</div>





<!-- Email -->

<div class="col-md-6">


<label class="form-label">

Email

</label>


<div class="input-box">

<i class="bi bi-envelope-fill"></i>

<input type="email"
class="form-control"
placeholder="Email address">

</div>


</div>





<!-- Phone -->

<div class="col-md-6">


<label class="form-label">

Phone Number

</label>


<div class="input-box">

<i class="bi bi-telephone-fill"></i>


<input type="text"
class="form-control"
placeholder="Phone number">

</div>


</div>






<!-- Blood Group -->

<div class="col-md-6">


<label class="form-label">

Blood Group

</label>


<select class="form-select">


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






<!-- Gender -->

<div class="col-md-6">


<label class="form-label">

Gender

</label>


<select class="form-select">


<option>Select Gender</option>

<option>Male</option>

<option>Female</option>

<option>Other</option>


</select>


</div>





<!-- Age -->

<div class="col-md-6">


<label class="form-label">

Age

</label>


<div class="input-box">

<i class="bi bi-calendar"></i>

<input type="number"
class="form-control"
placeholder="Age">


</div>


</div>






<!-- Address -->

<div class="col-12">


<label class="form-label">

Address

</label>


<div class="input-box">


<i class="bi bi-geo-alt-fill"></i>


<input type="text"
class="form-control"
placeholder="Your address">


</div>


</div>







<!-- Medical Status -->

<div class="col-md-6">


<label class="form-label">

Medical Status

</label>


<select class="form-select">


<option>Select Status</option>

<option>Healthy</option>

<option>Under Treatment</option>

<option>Not Available</option>


</select>


</div>





<!-- Last Donation -->


<div class="col-md-6">


<label class="form-label">

Last Donation Date

</label>


<input type="date"
class="form-control">



</div>






<!-- Password -->

<div class="col-md-6">


<label class="form-label">

Password

</label>


<div class="input-box">


<i class="bi bi-lock-fill"></i>


<input type="password"
class="form-control"
placeholder="Password">


</div>


</div>






<!-- Confirm Password -->


<div class="col-md-6">


<label class="form-label">

Confirm Password

</label>


<div class="input-box">


<i class="bi bi-lock-fill"></i>


<input type="password"
class="form-control"
placeholder="Confirm password">


</div>


</div>



</div>




<button class="btn register-btn w-100 mt-5">


<i class="bi bi-person-plus-fill"></i>

Register Now


</button>





<p class="text-center mt-4">


Already have an account?


<a href="login.php">

Login

</a>


</p>




</form>



</div>


</div>



</body>

</html>