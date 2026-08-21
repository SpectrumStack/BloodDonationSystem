<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Blood Donation Management System</title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<!-- ========================= NAVBAR =========================== -->

<nav class="navbar navbar-expand-lg navbar-dark bg-danger shadow-sm sticky-top">

    <div class="container">

        <a class="navbar-brand fw-bold fs-3" href="#">

            <i class="bi bi-heart-pulse-fill"></i>

            BloodCare

        </a>

        <button class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbar">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
            id="navbar">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">

                    <a class="nav-link active" href="#">Home</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="#">Search Donor</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="#">Blood Camp</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="#">Emergency</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="#">About</a>

                </li>

                <li class="nav-item">

                    <a class="btn btn-light text-danger ms-lg-3 px-4"
                        href="login.php">

                        Login

                    </a>

                </li>

            </ul>

        </div>

    </div>

</nav>

<!-- ======================= HERO SECTION ======================= -->

<section class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <span class="badge bg-light text-danger mb-3 p-2">

                    ❤️ Save Life Through Blood Donation

                </span>

                <h1 class="display-4 fw-bold text-white">

                    Donate Blood,

                    <br>

                    Save Someone's Life.

                </h1>

                <p class="text-light mt-4">

                    BloodCare is a modern blood donation management system
                    that helps patients quickly find suitable blood donors,
                    manage donation appointments, emergency requests,
                    blood camps and blood stock efficiently.

                </p>

                <div class="mt-4">

                    <a href="register.php"
                        class="btn btn-light btn-lg me-3">

                        Become Donor

                    </a>

                    <a href="blood_request.php"
                        class="btn btn-outline-light btn-lg">

                        Request Blood

                    </a>

                </div>

                <div class="row mt-5">

                    <div class="col-4">

                        <h2 class="fw-bold text-white">

                            5000+

                        </h2>

                        <p class="text-light">

                            Donors

                        </p>

                    </div>

                    <div class="col-4">

                        <h2 class="fw-bold text-white">

                            1200+

                        </h2>

                        <p class="text-light">

                            Requests

                        </p>

                    </div>

                    <div class="col-4">

                        <h2 class="fw-bold text-white">

                            350+

                        </h2>

                        <p class="text-light">

                            Camps

                        </p>

                    </div>

                </div>

            </div>

           
        </div>

    </div>

</section>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- ========================================================= -->
<!--                SEARCH DONOR SECTION                       -->
<!-- ========================================================= -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold text-danger">
                Find a Blood Donor
            </h2>

            <p class="text-muted">
                Search donors instantly by blood group and location.
            </p>

        </div>

        <div class="card shadow-lg border-0 rounded-4 p-4">

            <form>

                <div class="row g-3">

                    <div class="col-md-3">

                        <label class="form-label fw-semibold">
                            Blood Group
                        </label>

                        <select class="form-select">

                            <option selected>Select</option>

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

                    <div class="col-md-3">

                        <label class="form-label fw-semibold">
                            District
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Dhaka">

                    </div>

                    <div class="col-md-3">

                        <label class="form-label fw-semibold">
                            Area
                        </label>

                        <input
                            type="text"
                            class="form-control"
                            placeholder="Rampura">

                    </div>

                    <div class="col-md-3 d-grid">

                        <label class="form-label text-white">
                            Search
                        </label>

                        <button class="btn btn-danger">

                            <i class="bi bi-search"></i>

                            Search Donor

                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

</section>

<!-- ========================================================= -->
<!--                  FEATURE SECTION                          -->
<!-- ========================================================= -->

<section class="py-5 success-section">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">

                Why Choose BloodCare?

            </h2>

            <p class="text-muted">

                Modern blood donation management with fast response.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-4">

                <div class="card border-0 shadow h-100 rounded-4 text-center p-4">

                    <div class="display-4 text-danger mb-3">

                        <i class="bi bi-heart-pulse-fill"></i>

                    </div>

                    <h4>

                        Safe Donation

                    </h4>

                    <p class="text-muted">

                        Donate blood safely through verified donation
                        centers and experienced medical teams.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow h-100 rounded-4 text-center p-4">

                    <div class="display-4 text-danger mb-3">

                        <i class="bi bi-lightning-charge-fill"></i>

                    </div>

                    <h4>

                        Emergency Support

                    </h4>

                    <p class="text-muted">

                        Instantly notify nearby donors during emergency
                        blood requests.

                    </p>

                </div>

            </div>

            <div class="col-lg-4">

                <div class="card border-0 shadow h-100 rounded-4 text-center p-4">

                    <div class="display-4 text-danger mb-3">

                        <i class="bi bi-people-fill"></i>

                    </div>

                    <h4>

                        Trusted Community

                    </h4>

                    <p class="text-muted">

                        Thousands of verified blood donors are ready
                        to help patients anytime.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ========================================================= -->
<!--                 LIVE STATISTICS                           -->
<!-- ========================================================= -->

<section class="py-5 bg-danger text-white">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-3">

                <h1 class="fw-bold">

                    5000+

                </h1>

                <p>

                    Registered Donors

                </p>

            </div>

            <div class="col-md-3">

                <h1 class="fw-bold">

                    3200+

                </h1>

                <p>

                    Blood Donations

                </p>

            </div>

            <div class="col-md-3">

                <h1 class="fw-bold">

                    1200+

                </h1>

                <p>

                    Emergency Requests

                </p>

            </div>

            <div class="col-md-3">

                <h1 class="fw-bold">

                    350+

                </h1>

                <p>

                    Blood Camps

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ========================================================= -->
<!--                   HOW IT WORKS                            -->
<!-- ========================================================= -->

<section class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">

                How It Works

            </h2>

            <p class="text-muted">

                Just four simple steps.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-md-3">

                <div class="card border-0 shadow rounded-4 text-center p-4 h-100">

                    <div class="display-5 text-danger">

                        1

                    </div>

                    <h5 class="mt-3">

                        Register

                    </h5>

                    <p class="text-muted">

                        Create your donor account.

                    </p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card border-0 shadow rounded-4 text-center p-4 h-100">

                    <div class="display-5 text-danger">

                        2

                    </div>

                    <h5 class="mt-3">

                        Search

                    </h5>

                    <p class="text-muted">

                        Find nearby blood donors.

                    </p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card border-0 shadow rounded-4 text-center p-4 h-100">

                    <div class="display-5 text-danger">

                        3

                    </div>

                    <h5 class="mt-3">

                        Request

                    </h5>

                    <p class="text-muted">

                        Send blood request instantly.

                    </p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="card border-0 shadow rounded-4 text-center p-4 h-100">

                    <div class="display-5 text-danger">

                        4

                    </div>

                    <h5 class="mt-3">

                        Save Life

                    </h5>

                    <p class="text-muted">

                        Help patients with timely donations.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ================================================= -->
<!--              UPCOMING BLOOD CAMPS                 -->
<!-- ================================================= -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-danger px-3 py-2">
                Upcoming Events
            </span>

            <h2 class="fw-bold mt-3">
                Upcoming Blood Donation Camps
            </h2>

            <p class="text-muted">
                Join our upcoming blood donation camps and help save lives.
            </p>

        </div>

        <div class="row g-4">

            <!-- Camp 1 -->

            <div class="col-lg-4">

                <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">

                    <img src="assets/images/camp1.jpg"
                        class="card-img-top"
                        height="220"
                        style="object-fit:cover;">

                    <div class="card-body">

                        <span class="badge bg-danger mb-3">

                            15 August 2026

                        </span>

                        <h4>

                            Dhaka Mega Blood Camp

                        </h4>

                        <p class="text-muted">

                            Organized by BloodCare Foundation.

                        </p>

                        <hr>

                        <p>

                            <i class="bi bi-geo-alt-fill text-danger"></i>

                            Bashundhara Convention Hall

                        </p>

                        <p>

                            <i class="bi bi-clock-fill text-danger"></i>

                            9:00 AM - 5:00 PM

                        </p>

                        <a href="#"
                            class="btn btn-danger w-100">

                            Register Now

                        </a>

                    </div>

                </div>

            </div>

            <!-- Camp 2 -->

            <div class="col-lg-4">

                <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">

                    <img src="assets/images/camp2.jpg"
                        class="card-img-top"
                        height="220"
                        style="object-fit:cover;">

                    <div class="card-body">

                        <span class="badge bg-danger mb-3">

                            22 August 2026

                        </span>

                        <h4>

                            City Medical Blood Camp

                        </h4>

                        <p class="text-muted">

                            Help hospitals maintain blood stock.

                        </p>

                        <hr>

                        <p>

                            <i class="bi bi-geo-alt-fill text-danger"></i>

                            Dhanmondi

                        </p>

                        <p>

                            <i class="bi bi-clock-fill text-danger"></i>

                            10 AM - 4 PM

                        </p>

                        <a href="#"
                            class="btn btn-danger w-100">

                            Register Now

                        </a>

                    </div>

                </div>

            </div>

            <!-- Camp 3 -->

            <div class="col-lg-4">

                <div class="card border-0 shadow-lg rounded-4 overflow-hidden h-100">

                    <img src="assets/images/camp3.jpg"
                        class="card-img-top"
                        height="220"
                        style="object-fit:cover;">

                    <div class="card-body">

                        <span class="badge bg-danger mb-3">

                            30 August 2026

                        </span>

                        <h4>

                            Youth Blood Festival

                        </h4>

                        <p class="text-muted">

                            Donate blood and inspire others.

                        </p>

                        <hr>

                        <p>

                            <i class="bi bi-geo-alt-fill text-danger"></i>

                            Uttara Sector 10

                        </p>

                        <p>

                            <i class="bi bi-clock-fill text-danger"></i>

                            8 AM - 3 PM

                        </p>

                        <a href="#"
                            class="btn btn-danger w-100">

                            Register Now

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>





<!-- ================================================= -->
<!--             EMERGENCY REQUEST BANNER              -->
<!-- ================================================= -->

<section class="py-5 emergency-section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-8">

                <h2 class="text-white fw-bold">

                    🚨 Emergency Blood Needed?

                </h2>

                <p class="text-light mt-3">

                    Quickly send an emergency blood request.
                    Nearby matching donors will instantly receive
                    your notification.

                </p>

            </div>

            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">

                <a href="emergency_request.php"
                    class="btn btn-light btn-lg px-5">

                    Request Now

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ================================================= -->
<!--              DONOR TESTIMONIALS                   -->
<!-- ================================================= -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-danger px-3 py-2">
                Testimonials
            </span>

            <h2 class="fw-bold mt-3">
                What Our Donors Say
            </h2>

            <p class="text-muted">
                Thousands of donors are helping save lives every day.
            </p>

        </div>

        <div class="row g-4">

            <!-- Card 1 -->

            <div class="col-lg-4">

                <div class="card border-0 shadow-lg rounded-4 p-4 h-100">

                    <div class="d-flex align-items-center mb-3">

                        <img src="assets/images/user1.jpg"
                             width="70"
                             height="70"
                             class="rounded-circle border border-3 border-danger">

                        <div class="ms-3">

                            <h5 class="mb-0">

                                Ahmed Rahman

                            </h5>

                            <small class="text-muted">

                                Regular Blood Donor

                            </small>

                        </div>

                    </div>

                    <p class="text-muted">

                        "BloodCare made blood donation so easy.
                        The appointment process is smooth and
                        organized."

                    </p>

                    <div class="text-warning">

                        ★★★★★

                    </div>

                </div>

            </div>



            <!-- Card 2 -->

            <div class="col-lg-4">

                <div class="card border-0 shadow-lg rounded-4 p-4 h-100">

                    <div class="d-flex align-items-center mb-3">

                        <img src="assets/images/user2.jpg"
                             width="70"
                             height="70"
                             class="rounded-circle border border-3 border-danger">

                        <div class="ms-3">

                            <h5 class="mb-0">

                                Nusrat Jahan

                            </h5>

                            <small class="text-muted">

                                Volunteer

                            </small>

                        </div>

                    </div>

                    <p class="text-muted">

                        "I found a donor within minutes during
                        an emergency. Amazing platform."

                    </p>

                    <div class="text-warning">

                        ★★★★★

                    </div>

                </div>

            </div>



            <!-- Card 3 -->

            <div class="col-lg-4">

                <div class="card border-0 shadow-lg rounded-4 p-4 h-100">

                    <div class="d-flex align-items-center mb-3">

                        <img src="assets/images/user3.jpg"
                             width="70"
                             height="70"
                             class="rounded-circle border border-3 border-danger">

                        <div class="ms-3">

                            <h5 class="mb-0">

                                Sarah Islam

                            </h5>

                            <small class="text-muted">

                                Blood Recipient

                            </small>

                        </div>

                    </div>

                    <p class="text-muted">

                        "This website saved my father's life.
                        Thank you to every blood donor."

                    </p>

                    <div class="text-warning">

                        ★★★★★

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ================================================= -->
<!--               SUCCESS STORY                        -->
<!-- ================================================= -->

<section class="py-5">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<img src="assets/images/success.png"
class="img-fluid">

</div>

<div class="col-lg-6">

<span class="badge bg-danger">

Success Story

</span>

<h2 class="fw-bold mt-3">

Together We Have Saved More Than
10,000 Lives

</h2>

<p class="text-muted mt-3">

Every blood donation can save up to
three lives.

Our mission is to connect donors with
patients as quickly as possible.

Join our growing community and become
a hero today.

</p>

<div class="row mt-4">

<div class="col-6">

<h3 class="text-danger fw-bold">

10K+

</h3>

<p>

Lives Saved

</p>

</div>

<div class="col-6">

<h3 class="text-danger fw-bold">

5000+

</h3>

<p>

Registered Donors

</p>

</div>

</div>

<a href="register.php"
class="btn btn-danger btn-lg mt-3">

Become a Donor

</a>

</div>

</div>

</div>

</section>



<!-- ================================================= -->
<!--             NEWSLETTER SECTION                     -->
<!-- ================================================= -->

<section class="py-5 bg-danger">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h2 class="text-white fw-bold">

Stay Updated

</h2>

<p class="text-light">

Receive updates about blood camps,
emergency requests and health tips.

</p>

</div>

<div class="col-lg-6">

<div class="input-group">

<input
type="email"
class="form-control form-control-lg"
placeholder="Enter your email">

<button class="btn btn-dark">

Subscribe

</button>

</div>

</div>

</div>

</div>

</section>


<!-- ========================================= -->
<!--            PROFESSIONAL FOOTER            -->
<!-- ========================================= -->

<footer class="footer bg-dark text-light pt-5 pb-3">

    <div class="container">

        <div class="row">

            <!-- Company -->

            <div class="col-lg-4 col-md-6 mb-4">

                <h3 class="fw-bold text-danger">

                    <i class="bi bi-heart-pulse-fill"></i>

                    BloodCare

                </h3>

                <p class="mt-3">

                    BloodCare is a modern Blood Donation Management System
                    that connects blood donors with patients quickly and
                    securely.

                </p>

                <div class="mt-4">

                    <a href="#" class="social-icon">

                        <i class="bi bi-facebook"></i>

                    </a>

                    <a href="#" class="social-icon">

                        <i class="bi bi-instagram"></i>

                    </a>

                    <a href="#" class="social-icon">

                        <i class="bi bi-twitter-x"></i>

                    </a>

                    <a href="#" class="social-icon">

                        <i class="bi bi-linkedin"></i>

                    </a>

                </div>

            </div>

            <!-- Quick Links -->

            <div class="col-lg-2 col-md-6 mb-4">

                <h5 class="fw-bold">

                    Quick Links

                </h5>

                <ul class="list-unstyled mt-3">

                    <li>

                        <a href="#" class="footer-link">

                            Home

                        </a>

                    </li>

                    <li>

                        <a href="#" class="footer-link">

                            Search Donor

                        </a>

                    </li>

                    <li>

                        <a href="#" class="footer-link">

                            Blood Request

                        </a>

                    </li>

                    <li>

                        <a href="#" class="footer-link">

                            Blood Camp

                        </a>

                    </li>

                    <li>

                        <a href="#" class="footer-link">

                            Contact

                        </a>

                    </li>

                </ul>

            </div>

            <!-- Services -->

            <div class="col-lg-3 col-md-6 mb-4">

                <h5 class="fw-bold">

                    Our Services

                </h5>

                <ul class="list-unstyled mt-3">

                    <li>✔ Blood Donation</li>

                    <li>✔ Emergency Request</li>

                    <li>✔ Appointment Booking</li>

                    <li>✔ Blood Stock</li>

                    <li>✔ Donation Camp</li>

                </ul>

            </div>

            <!-- Contact -->

            <div class="col-lg-3 col-md-6 mb-4">

                <h5 class="fw-bold">

                    Contact Us

                </h5>

                <p class="mt-3">

                    <i class="bi bi-geo-alt-fill text-danger"></i>

                    Dhaka, Bangladesh

                </p>

                <p>

                    <i class="bi bi-envelope-fill text-danger"></i>

                    info@bloodcare.com

                </p>

                <p>

                    <i class="bi bi-telephone-fill text-danger"></i>

                    +880 1711-000000

                </p>

                <p>

                    <i class="bi bi-clock-fill text-danger"></i>

                    24/7 Emergency Support

                </p>

            </div>

        </div>

        <hr class="border-secondary">

        <div class="row align-items-center">

            <div class="col-md-6">

                <p class="mb-0">

                    © 2026 BloodCare.

                    All Rights Reserved.

                </p>

            </div>

            <div class="col-md-6 text-md-end">

                <a href="#" class="footer-link me-3">

                    Privacy Policy

                </a>

                <a href="#" class="footer-link me-3">

                    Terms

                </a>

                <a href="#" class="footer-link">

                    FAQ

                </a>

            </div>

        </div>

    </div>

</footer>





<!-- ========================================= -->
<!--          FLOATING EMERGENCY BUTTON         -->
<!-- ========================================= -->

<a href="emergency_request.php"

class="emergency-btn"

title="Emergency Blood Request">

<i class="bi bi-heart-pulse-fill"></i>

</a>





<!-- ========================================= -->
<!--            BACK TO TOP BUTTON             -->
<!-- ========================================= -->

<button id="topBtn"

title="Back To Top">

<i class="bi bi-arrow-up"></i>

</button>





<!-- ========================================= -->
<!--                 SCRIPT                    -->
<!-- ========================================= -->

<script>

let topButton = document.getElementById("topBtn");

window.onscroll = function () {

if(document.body.scrollTop > 250 ||

document.documentElement.scrollTop > 250){

topButton.style.display="block";

}

else{

topButton.style.display="none";

}

};

topButton.onclick=function(){

window.scrollTo({

top:0,

behavior:'smooth'

});

}

</script>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
