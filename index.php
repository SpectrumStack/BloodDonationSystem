<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>BloodCare | Save Lives, Donate Blood</title>


    <!-- Bootstrap Icons -->

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    <!-- Global CSS -->

    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >


    <style>

        /* =====================================================
           LANDING PAGE
           ===================================================== */

        .landing-page {
            min-height: 100vh;
            background: #fff;
        }


        /* =====================================================
           NAVBAR
           ===================================================== */

        .landing-nav {

            height: 76px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 6%;

            background: rgba(255,255,255,0.96);

            border-bottom: 1px solid #f1f5f9;

            position: sticky;

            top: 0;

            z-index: 1000;

            backdrop-filter: blur(10px);
        }


        .landing-logo {

            display: flex;

            align-items: center;

            gap: 10px;
        }


        .landing-logo-icon {

            width: 39px;

            height: 39px;

            border-radius: 11px;

            background: var(--primary);

            color: #fff;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 18px;

            box-shadow:
                0 7px 18px rgba(220,38,38,0.22);
        }


        .landing-logo-text {

            font-family: Poppins, sans-serif;

            font-size: 19px;

            font-weight: 800;

            color: var(--secondary);
        }


        .landing-logo-text span {
            color: var(--primary);
        }


        .landing-nav-links {

            display: flex;

            align-items: center;

            gap: 30px;
        }


        .landing-nav-links a {

            color: var(--text-light);

            font-size: 12px;

            font-weight: 600;

            transition: var(--transition);
        }


        .landing-nav-links a:hover {

            color: var(--primary);
        }


        .landing-nav-actions {

            display: flex;

            align-items: center;

            gap: 9px;
        }


        /* =====================================================
           HERO
           ===================================================== */

        .hero {

            min-height: 650px;

            display: grid;

            grid-template-columns: 1fr 0.9fr;

            align-items: center;

            gap: 60px;

            padding: 70px 8%;

            background:
                radial-gradient(
                    circle at 80% 20%,
                    rgba(220,38,38,0.08),
                    transparent 35%
                ),
                linear-gradient(
                    180deg,
                    #fff 0%,
                    #fff8f8 100%
                );

            overflow: hidden;
        }


        .hero-content {
            max-width: 650px;
        }


        .hero-badge {

            display: inline-flex;

            align-items: center;

            gap: 7px;

            padding: 7px 12px;

            background: var(--primary-soft);

            border: 1px solid #fecaca;

            border-radius: 30px;

            color: var(--primary);

            font-size: 10px;

            font-weight: 700;

            margin-bottom: 20px;
        }


        .hero-badge i {
            font-size: 12px;
        }


        .hero h1 {

            font-size: clamp(38px, 5vw, 62px);

            line-height: 1.08;

            letter-spacing: -2px;

            margin-bottom: 20px;

            max-width: 650px;
        }


        .hero h1 span {
            color: var(--primary);
        }


        .hero-description {

            max-width: 540px;

            font-size: 14px;

            line-height: 1.9;

            color: var(--text-light);

            margin-bottom: 30px;
        }


        .hero-buttons {

            display: flex;

            align-items: center;

            gap: 12px;

            flex-wrap: wrap;
        }


        .hero-btn {

            padding: 13px 21px;

            border-radius: 11px;

            font-size: 12px;

            font-weight: 700;

            display: inline-flex;

            align-items: center;

            gap: 8px;

            transition: var(--transition);
        }


        .hero-btn-primary {

            color: #fff;

            background: var(--primary);

            box-shadow:
                0 8px 22px rgba(220,38,38,0.22);
        }


        .hero-btn-primary:hover {

            background: var(--primary-dark);

            color: #fff;

            transform: translateY(-2px);
        }


        .hero-btn-outline {

            color: var(--text-dark);

            border: 1px solid var(--border);

            background: #fff;
        }


        .hero-btn-outline:hover {

            border-color: var(--primary);

            color: var(--primary);

            transform: translateY(-2px);
        }


        /* =====================================================
           HERO VISUAL
           ===================================================== */

        .hero-visual {

            position: relative;

            min-height: 480px;

            display: flex;

            align-items: center;

            justify-content: center;
        }


        .hero-circle {

            width: 400px;

            height: 400px;

            border-radius: 50%;

            background:
                linear-gradient(
                    145deg,
                    #fee2e2,
                    #fff
                );

            border: 1px solid #fecaca;

            display: flex;

            align-items: center;

            justify-content: center;

            box-shadow:
                0 30px 70px rgba(220,38,38,0.12);
        }


        .hero-drop {

            width: 190px;

            height: 245px;

            background:
                linear-gradient(
                    145deg,
                    #ef4444,
                    #991b1b
                );

            border-radius:
                65% 65% 65% 0;

            transform: rotate(-45deg);

            box-shadow:
                0 25px 40px rgba(153,27,27,0.25);

            display: flex;

            align-items: center;

            justify-content: center;
        }


        .hero-drop i {

            transform: rotate(45deg);

            color: #fff;

            font-size: 65px;
        }


        /* =====================================================
           FLOATING CARDS
           ===================================================== */

        .hero-float {

            position: absolute;

            background: #fff;

            border: 1px solid var(--border);

            border-radius: 14px;

            padding: 13px;

            box-shadow:
                0 15px 35px rgba(15,23,42,0.10);

            display: flex;

            align-items: center;

            gap: 10px;
        }


        .hero-float.one {

            top: 70px;

            right: 0;
        }


        .hero-float.two {

            bottom: 70px;

            left: 0;
        }


        .hero-float-icon {

            width: 36px;

            height: 36px;

            border-radius: 10px;

            background: var(--primary-light);

            color: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;
        }


        .hero-float strong {

            display: block;

            color: var(--text-dark);

            font-size: 12px;
        }


        .hero-float span {

            display: block;

            color: var(--text-muted);

            font-size: 9px;
        }


        /* =====================================================
           STATS
           ===================================================== */

        .landing-stats {

            display: grid;

            grid-template-columns: repeat(4, 1fr);

            max-width: 1100px;

            margin: -35px auto 0;

            position: relative;

            z-index: 5;

            background: #fff;

            border: 1px solid var(--border);

            border-radius: 18px;

            box-shadow:
                0 15px 40px rgba(15,23,42,0.08);
        }


        .landing-stat {

            text-align: center;

            padding: 24px;

            border-right: 1px solid var(--border);
        }


        .landing-stat:last-child {
            border-right: none;
        }


        .landing-stat strong {

            display: block;

            font-family: Poppins, sans-serif;

            color: var(--primary);

            font-size: 25px;

            font-weight: 800;
        }


        .landing-stat span {

            display: block;

            color: var(--text-light);

            font-size: 10px;

            margin-top: 3px;
        }


        /* =====================================================
           SECTION
           ===================================================== */

        .landing-section {

            padding: 90px 8%;
        }


        .landing-section-header {

            text-align: center;

            max-width: 650px;

            margin: 0 auto 45px;
        }


        .landing-section-header .small-title {

            color: var(--primary);

            font-size: 10px;

            font-weight: 800;

            text-transform: uppercase;

            letter-spacing: 1.5px;

            margin-bottom: 8px;
        }


        .landing-section-header h2 {

            font-size: 32px;

            margin-bottom: 10px;
        }


        .landing-section-header p {

            font-size: 12px;

            line-height: 1.8;
        }


        /* =====================================================
           FEATURE CARDS
           ===================================================== */

        .feature-grid {

            max-width: 1100px;

            margin: auto;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;
        }


        .feature-card {

            padding: 28px;

            background: #fff;

            border: 1px solid var(--border);

            border-radius: 17px;

            transition: var(--transition);
        }


        .feature-card:hover {

            transform: translateY(-5px);

            border-color: #fecaca;

            box-shadow: var(--shadow-md);
        }


        .feature-icon {

            width: 52px;

            height: 52px;

            border-radius: 14px;

            background: var(--primary-soft);

            color: var(--primary);

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 22px;

            margin-bottom: 20px;
        }


        .feature-card h3 {

            font-size: 16px;

            margin-bottom: 8px;
        }


        .feature-card p {

            font-size: 11px;

            line-height: 1.8;
        }


        /* =====================================================
           HOW IT WORKS
           ===================================================== */

        .steps {

            max-width: 1000px;

            margin: auto;

            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 35px;

            position: relative;
        }


        .step {

            text-align: center;

            position: relative;

            z-index: 2;
        }


        .step-number {

            width: 60px;

            height: 60px;

            border-radius: 50%;

            margin: auto auto 18px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: var(--primary);

            color: #fff;

            font-family: Poppins, sans-serif;

            font-weight: 800;

            box-shadow:
                0 10px 25px rgba(220,38,38,0.20);
        }


        .step h3 {

            font-size: 15px;

            margin-bottom: 7px;
        }


        .step p {

            font-size: 11px;

            line-height: 1.7;
        }


        /* =====================================================
           CTA
           ===================================================== */

        .cta-section {

            margin: 0 8% 80px;

            padding: 55px;

            border-radius: 22px;

            background:
                linear-gradient(
                    135deg,
                    #991b1b,
                    #dc2626
                );

            text-align: center;

            position: relative;

            overflow: hidden;
        }


        .cta-section::before {

            content: '';

            position: absolute;

            width: 300px;

            height: 300px;

            border-radius: 50%;

            right: -100px;

            top: -150px;

            background: rgba(255,255,255,0.08);
        }


        .cta-section h2 {

            position: relative;

            z-index: 2;

            color: #fff;

            font-size: 30px;

            margin-bottom: 10px;
        }


        .cta-section p {

            position: relative;

            z-index: 2;

            color: rgba(255,255,255,0.75);

            font-size: 12px;

            margin-bottom: 23px;
        }


        .cta-section .hero-btn {

            position: relative;

            z-index: 2;

            background: #fff;

            color: var(--primary);
        }


        /* =====================================================
           FOOTER
           ===================================================== */

        .landing-footer {

            padding: 45px 8% 25px;

            background: #0f172a;

            color: #fff;
        }


        .footer-grid {

            display: grid;

            grid-template-columns: 1.5fr 1fr 1fr 1fr;

            gap: 40px;

            max-width: 1200px;

            margin: auto;
        }


        .footer-brand p {

            max-width: 320px;

            color: #94a3b8;

            font-size: 11px;

            line-height: 1.8;

            margin-top: 14px;
        }


        .footer-column h4 {

            color: #fff;

            font-size: 12px;

            margin-bottom: 15px;
        }


        .footer-column a {

            display: block;

            color: #64748b;

            font-size: 10px;

            margin-bottom: 9px;

            transition: var(--transition);
        }


        .footer-column a:hover {

            color: #ef4444;
        }


        .footer-bottom {

            max-width: 1200px;

            margin: 35px auto 0;

            padding-top: 18px;

            border-top: 1px solid rgba(255,255,255,0.07);

            display: flex;

            justify-content: space-between;

            gap: 20px;

            color: #64748b;

            font-size: 9px;
        }


        /* =====================================================
           MOBILE
           ===================================================== */

        @media (max-width: 1000px) {

            .hero {

                grid-template-columns: 1fr;

                text-align: center;

                padding: 60px 6%;
            }

            .hero-content {

                margin: auto;
            }

            .hero-description {

                margin-left: auto;

                margin-right: auto;
            }

            .hero-buttons {

                justify-content: center;
            }

            .hero-visual {

                min-height: 400px;
            }

            .landing-stats {

                margin-left: 5%;

                margin-right: 5%;
            }

            .footer-grid {

                grid-template-columns: 1fr 1fr;
            }

        }


        @media (max-width: 750px) {

            .landing-nav {

                padding: 0 20px;
            }

            .landing-nav-links {

                display: none;
            }

            .hero-circle {

                width: 300px;

                height: 300px;
            }

            .hero-drop {

                width: 135px;

                height: 180px;
            }

            .landing-stats {

                grid-template-columns: repeat(2, 1fr);
            }

            .landing-stat {

                border-bottom: 1px solid var(--border);
            }

            .landing-stat:nth-child(2) {

                border-right: none;
            }

            .landing-stat:nth-child(3),
            .landing-stat:nth-child(4) {

                border-bottom: none;
            }

            .feature-grid,
            .steps {

                grid-template-columns: 1fr;
            }

            .landing-section {

                padding: 65px 6%;
            }

            .cta-section {

                margin: 0 5% 60px;

                padding: 40px 22px;
            }

        }


        @media (max-width: 500px) {

            .landing-nav-actions .btn {

                padding: 8px 11px;

                font-size: 10px;
            }

            .hero {

                padding-top: 45px;
            }

            .hero h1 {

                font-size: 36px;

                letter-spacing: -1px;
            }

            .hero-visual {

                min-height: 330px;
            }

            .hero-circle {

                width: 250px;

                height: 250px;
            }

            .hero-drop {

                width: 110px;

                height: 145px;
            }

            .hero-float.one {

                right: -5px;

                top: 35px;
            }

            .hero-float.two {

                left: -5px;

                bottom: 35px;
            }

            .footer-grid {

                grid-template-columns: 1fr;
            }

            .footer-bottom {

                flex-direction: column;
            }

        }

    </style>

</head>


<body>


<div class="landing-page">


    <!-- =====================================================
         NAVBAR
         ===================================================== -->

    <nav class="landing-nav">


        <a
            href="index.php"
            class="landing-logo"
        >

            <div class="landing-logo-icon">

                <i class="bi bi-droplet-fill"></i>

            </div>

            <div class="landing-logo-text">

                Blood<span>Care</span>

            </div>

        </a>


        <div class="landing-nav-links">

            <a href="#home">
                Home
            </a>

            <a href="#about">
                About
            </a>

            <a href="#services">
                Services
            </a>

            <a href="#how-it-works">
                How It Works
            </a>

        </div>


        <div class="landing-nav-actions">

            <a
                href="login.php"
                class="btn btn-outline btn-sm"
            >

                Login

            </a>

            <a
                href="register.php"
                class="btn btn-primary btn-sm"
            >

                Get Started

            </a>

        </div>


    </nav>



    <!-- =====================================================
         HERO
         ===================================================== -->

    <section
        class="hero"
        id="home"
    >


        <div class="hero-content">


            <div class="hero-badge">

                <i class="bi bi-heart-pulse-fill"></i>

                Together We Can Save Lives

            </div>


            <h1>

                Every Drop of Blood

                <span>
                    Can Save a Life.
                </span>

            </h1>


            <p class="hero-description">

                BloodCare connects generous blood donors with
                patients who need blood. Find a donor, request
                blood, donate and help make a difference in
                someone's life.

            </p>


            <div class="hero-buttons">

                <a
                    href="register.php"
                    class="hero-btn hero-btn-primary"
                >

                    <i class="bi bi-heart-fill"></i>

                    Become a Donor

                </a>


                <a
                    href="login.php"
                    class="hero-btn hero-btn-outline"
                >

                    <i class="bi bi-search"></i>

                    Find Blood

                </a>

            </div>


        </div>



        <!-- HERO VISUAL -->

        <div class="hero-visual">


            <div class="hero-circle">

                <div class="hero-drop">

                    <i class="bi bi-heart-pulse-fill"></i>

                </div>

            </div>


            <!-- FLOAT CARD -->

            <div class="hero-float one">

                <div class="hero-float-icon">

                    <i class="bi bi-people-fill"></i>

                </div>

                <div>

                    <strong>
                        2,548+ Donors
                    </strong>

                    <span>
                        Active donors
                    </span>

                </div>

            </div>


            <div class="hero-float two">

                <div class="hero-float-icon">

                    <i class="bi bi-heart-fill"></i>

                </div>

                <div>

                    <strong>
                        1,824 Lives Saved
                    </strong>

                    <span>
                        Through donations
                    </span>

                </div>

            </div>


        </div>


    </section>



    <!-- =====================================================
         STATS
         ===================================================== -->

    <div class="landing-stats">


        <div class="landing-stat">

            <strong>
                2.5K+
            </strong>

            <span>
                Registered Donors
            </span>

        </div>


        <div class="landing-stat">

            <strong>
                1.8K+
            </strong>

            <span>
                Successful Donations
            </span>

        </div>


        <div class="landing-stat">

            <strong>
                1.2K+
            </strong>

            <span>
                Blood Requests
            </span>

        </div>


        <div class="landing-stat">

            <strong>
                98%
            </strong>

            <span>
                Successful Matching
            </span>

        </div>


    </div>



    <!-- =====================================================
         SERVICES
         ===================================================== -->

    <section
        class="landing-section"
        id="services"
    >


        <div class="landing-section-header">

            <div class="small-title">
                Our Services
            </div>

            <h2>
                Everything You Need in One Place
            </h2>

            <p>

                BloodCare makes blood donation and blood
                searching easier, faster and more reliable.

            </p>

        </div>


        <div class="feature-grid">


            <div class="feature-card">

                <div class="feature-icon">

                    <i class="bi bi-person-heart"></i>

                </div>

                <h3>
                    Become a Donor
                </h3>

                <p>

                    Register as a donor and make yourself
                    available to people who urgently need
                    your blood group.

                </p>

            </div>


            <div class="feature-card">

                <div class="feature-icon">

                    <i class="bi bi-search"></i>

                </div>

                <h3>
                    Find Blood
                </h3>

                <p>

                    Search available donors by blood group,
                    district and location whenever you need
                    blood.

                </p>

            </div>


            <div class="feature-card">

                <div class="feature-icon">

                    <i class="bi bi-exclamation-triangle"></i>

                </div>

                <h3>
                    Emergency Request
                </h3>

                <p>

                    Submit urgent blood requests and reach
                    suitable donors as quickly as possible.

                </p>

            </div>


        </div>


    </section>



    <!-- =====================================================
         ABOUT
         ===================================================== -->

    <section
        class="landing-section"
        id="about"
        style="background:#f8fafc;"
    >


        <div class="landing-section-header">

            <div class="small-title">
                About BloodCare
            </div>

            <h2>
                Technology Connecting People to Save Lives
            </h2>

            <p>

                Our platform brings donors, patients,
                hospitals and blood requests together in
                one organized system.

            </p>

        </div>


        <div class="feature-grid">


            <div class="feature-card">

                <div class="feature-icon">

                    <i class="bi bi-shield-check"></i>

                </div>

                <h3>
                    Trusted Platform
                </h3>

                <p>

                    Donor information and blood requests are
                    managed through a structured and secure
                    platform.

                </p>

            </div>


            <div class="feature-card">

                <div class="feature-icon">

                    <i class="bi bi-lightning-charge-fill"></i>

                </div>

                <h3>
                    Fast Matching
                </h3>

                <p>

                    Quickly find suitable donors according
                    to blood group and location.

                </p>

            </div>


            <div class="feature-card">

                <div class="feature-icon">

                    <i class="bi bi-geo-alt-fill"></i>

                </div>

                <h3>
                    Location Based
                </h3>

                <p>

                    Search for donors and blood camps based
                    on district and area.

                </p>

            </div>


        </div>


    </section>



    <!-- =====================================================
         HOW IT WORKS
         ===================================================== -->

    <section
        class="landing-section"
        id="how-it-works"
    >


        <div class="landing-section-header">

            <div class="small-title">
                How It Works
            </div>

            <h2>
                Three Simple Steps
            </h2>

            <p>

                Whether you're donating or searching for
                blood, BloodCare keeps the process simple.

            </p>

        </div>


        <div class="steps">


            <div class="step">

                <div class="step-number">
                    01
                </div>

                <h3>
                    Create Account
                </h3>

                <p>

                    Register yourself as a donor or user
                    and complete your profile.

                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    02
                </div>

                <h3>
                    Find or Request
                </h3>

                <p>

                    Search donors or create a blood request
                    according to your needs.

                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    03
                </div>

                <h3>
                    Save a Life
                </h3>

                <p>

                    Connect with a suitable donor and help
                    someone receive the blood they need.

                </p>

            </div>


        </div>


    </section>



    <!-- =====================================================
         CTA
         ===================================================== -->

    <section class="cta-section">


        <h2>
            Ready to Make a Difference?
        </h2>


        <p>

            Your one donation could be someone's second
            chance at life.

        </p>


        <a
            href="register.php"
            class="hero-btn"
        >

            <i class="bi bi-heart-fill"></i>

            Become a Blood Donor

        </a>


    </section>



    <!-- =====================================================
         FOOTER
         ===================================================== -->

    <footer class="landing-footer">


        <div class="footer-grid">


            <div class="footer-brand">

                <div class="landing-logo">

                    <div class="landing-logo-icon">

                        <i class="bi bi-droplet-fill"></i>

                    </div>

                    <div
                        class="landing-logo-text"
                        style="color:#fff;"
                    >

                        Blood<span>Care</span>

                    </div>

                </div>


                <p>

                    A modern blood donation management
                    platform connecting donors and people
                    who need blood.

                </p>

            </div>


            <div class="footer-column">

                <h4>
                    Platform
                </h4>

                <a href="#">
                    Find Donor
                </a>

                <a href="#">
                    Blood Request
                </a>

                <a href="#">
                    Blood Camps
                </a>

                <a href="#">
                    Emergency
                </a>

            </div>


            <div class="footer-column">

                <h4>
                    Account
                </h4>

                <a href="login.php">
                    Login
                </a>

                <a href="register.php">
                    Register
                </a>

                <a href="#">
                    Donor Dashboard
                </a>

            </div>


            <div class="footer-column">

                <h4>
                    Support
                </h4>

                <a href="#">
                    About Us
                </a>

                <a href="#">
                    Contact
                </a>

                <a href="#">
                    Privacy Policy
                </a>

            </div>


        </div>


        <div class="footer-bottom">

            <span>
                © 2026 BloodCare. All rights reserved.
            </span>

            <span>
                Designed for saving lives ❤️
            </span>

        </div>


    </footer>


</div>


<script src="assets/js/script.js"></script>

</body>

</html>