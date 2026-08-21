<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login | BloodCare</title>


<!-- Bootstrap CSS -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


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

display:flex;

justify-content:center;

align-items:center;

background:

linear-gradient(
rgba(220,53,69,.85),
rgba(120,0,0,.85)
),

url("assets/images/login-bg.jpg");

background-size:cover;

background-position:center;

}



/* Login Box */

.login-card{

width:420px;

background:rgba(255,255,255,.95);

padding:40px;

border-radius:25px;

box-shadow:0 20px 50px rgba(0,0,0,.25);

animation:slideUp .8s ease;

}



@keyframes slideUp{

from{

opacity:0;

transform:translateY(50px);

}

to{

opacity:1;

transform:translateY(0);

}

}



/* Logo */

.logo{

width:80px;

height:80px;

background:#dc3545;

border-radius:50%;

display:flex;

justify-content:center;

align-items:center;

margin:auto;

color:white;

font-size:40px;

}



/* Heading */

.login-card h2{

font-weight:700;

color:#dc3545;

}



/* Input */

.form-control{

height:55px;

border-radius:12px;

padding-left:45px;

border:1px solid #ddd;

}



.input-box{

position:relative;

}



.input-box i{

position:absolute;

left:15px;

top:17px;

color:#dc3545;

font-size:20px;

}



/* Button */

.login-btn{

height:55px;

border-radius:30px;

background:#dc3545;

border:none;

color:white;

font-weight:600;

font-size:17px;

transition:.3s;

}



.login-btn:hover{

background:#b02a37;

transform:translateY(-3px);

}



/* Links */

a{

text-decoration:none;

color:#dc3545;

font-weight:500;

}



a:hover{

color:#b02a37;

}



/* Mobile */

@media(max-width:500px){

.login-card{

width:90%;

padding:30px;

}

}


</style>


</head>


<body>



<div class="login-card">


<div class="logo">

<i class="bi bi-heart-pulse-fill"></i>

</div>


<h2 class="text-center mt-3">

BloodCare

</h2>


<p class="text-center text-muted">

Login to your account

</p>



<form>


<div class="mb-3 input-box">


<i class="bi bi-envelope-fill"></i>


<input type="email"
class="form-control"
placeholder="Email Address"
required>


</div>




<div class="mb-3 input-box">


<i class="bi bi-lock-fill"></i>


<input type="password"
class="form-control"
placeholder="Password"
required>


</div>



<div class="d-flex justify-content-between mb-4">


<div>

<input type="checkbox"
id="remember">

<label for="remember">

Remember Me

</label>

</div>


<a href="#">

Forgot Password?

</a>


</div>




<button class="btn login-btn w-100">

<i class="bi bi-box-arrow-in-right"></i>

Login

</button>



<p class="text-center mt-4">

Don't have an account?

<a href="register.php">

Register Now

</a>


</p>



</form>


</div>



</body>

</html>