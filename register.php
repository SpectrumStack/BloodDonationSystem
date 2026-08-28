<?php
session_start();
require_once 'includes/db.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $role     = trim($_POST['role']);
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $phone    = trim($_POST['phone']);
    $password = trim($_POST['password']);

    // Check if email already exists
    $check_stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();

    if ($check_result->num_rows > 0) {
        $error = "This email address is already registered.";
    } else {
        // Hash password for security
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert new user into database
        $stmt = $conn->prepare("INSERT INTO users (role, name, email, phone, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $role, $name, $email, $phone, $hashed_password);

        if ($stmt->execute()) {
            // Get last inserted ID and set session
            $_SESSION['user_id']   = $conn->insert_id;
            $_SESSION['user_name'] = $name;
            $_SESSION['role']      = $role;

            // Redirect based on selected role
            if ($role == 'admin') {
                header("Location: admin/dashboard.php");
            } elseif ($role == 'donor') {
                header("Location: donor/dashboard.php");
            } else {
                header("Location: user/dashboard.php");
            }
            exit();
        } else {
            $error = "Something went wrong! Please try again.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Create Account | BloodCare</title>


    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >


    <link
        rel="stylesheet"
        href="assets/css/style.css"
    >


    <link
        rel="stylesheet"
        href="assets/css/auth.css"
    >

</head>


<body>


<div class="auth-page">


    <div
        class="auth-container"
        style="min-height:720px;"
    >


        <!-- =================================================
             BRAND PANEL
             ================================================= -->

        <div class="auth-brand">


            <a
                href="index.php"
                class="auth-logo"
            >

                <div class="auth-logo-icon">

                    <i class="bi bi-droplet-fill"></i>

                </div>

                <span>
                    BloodCare
                </span>

            </a>


            <div class="auth-brand-content">

                <h1>
                    Become Part of
                    Something Bigger
                </h1>


                <p>

                    Create your BloodCare account and join a
                    community dedicated to helping people get
                    the blood they need.

                </p>


                <div class="auth-features">


                    <div class="auth-feature">

                        <div class="auth-feature-icon">

                            <i class="bi bi-heart-fill"></i>

                        </div>

                        <span>
                            Donate blood and save lives
                        </span>

                    </div>


                    <div class="auth-feature">

                        <div class="auth-feature-icon">

                            <i class="bi bi-search"></i>

                        </div>

                        <span>
                            Find blood when you need it
                        </span>

                    </div>


                    <div class="auth-feature">

                        <div class="auth-feature-icon">

                            <i class="bi bi-bell-fill"></i>

                        </div>

                        <span>
                            Get important notifications
                        </span>

                    </div>


                </div>

            </div>


            <div class="auth-brand-footer">

                Together, we can make every drop count.

            </div>


        </div>



        <!-- =================================================
             FORM PANEL
             ================================================= -->

        <div class="auth-form-panel">


            <div class="auth-form-wrapper">


                <div class="auth-form-header">

                    <h2>
                        Create Account
                    </h2>

                    <p>
                        Join BloodCare in just a few steps.
                    </p>

                </div>


                <!-- ERROR MESSAGE SHOW -->
                <?php if (!empty($error)): ?>
                    <div style="color: #d9534f; background-color: #f2dede; border: 1px solid #ebccd1; padding: 10px; border-radius: 6px; margin-bottom: 15px; font-size: 14px; text-align: center;">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>


                <form
                    action=""
                    method="POST"
                >


                    <!-- ROLE -->

                    <div class="auth-form-group">

                        <label>
                            Account Type
                        </label>


                        <div class="role-selection">


                            <label class="role-option">

                                <input
                                    type="radio"
                                    name="role"
                                    value="user"
                                    checked
                                >

                                <div class="role-card">

                                    <i class="bi bi-person"></i>

                                    <span>
                                        User
                                    </span>

                                </div>

                            </label>


                            <label class="role-option">

                                <input
                                    type="radio"
                                    name="role"
                                    value="donor"
                                >

                                <div class="role-card">

                                    <i class="bi bi-heart-pulse"></i>

                                    <span>
                                        Donor
                                    </span>

                                </div>

                            </label>


                            <label class="role-option">

                                <input
                                    type="radio"
                                    name="role"
                                    value="admin"
                                >

                                <div class="role-card">

                                    <i class="bi bi-shield-lock"></i>

                                    <span>
                                        Admin
                                    </span>

                                </div>

                            </label>


                        </div>

                    </div>


                    <!-- NAME -->

                    <div class="auth-form-group">

                        <label>
                            Full Name
                        </label>


                        <div class="auth-input-wrapper">

                            <i class="bi bi-person"></i>

                            <input
                                type="text"
                                name="name"
                                class="auth-input"
                                placeholder="Enter your full name"
                                required
                            >

                        </div>

                    </div>


                    <!-- EMAIL -->

                    <div class="auth-form-group">

                        <label>
                            Email Address
                        </label>


                        <div class="auth-input-wrapper">

                            <i class="bi bi-envelope"></i>

                            <input
                                type="email"
                                name="email"
                                class="auth-input"
                                placeholder="Enter your email"
                                required
                            >

                        </div>

                    </div>


                    <!-- PHONE -->

                    <div class="auth-form-group">

                        <label>
                            Phone Number
                        </label>


                        <div class="auth-input-wrapper">

                            <i class="bi bi-telephone"></i>

                            <input
                                type="tel"
                                name="phone"
                                class="auth-input"
                                placeholder="01XXXXXXXXX"
                                required
                            >

                        </div>

                    </div>


                    <!-- PASSWORD -->

                    <div class="auth-form-group">

                        <label>
                            Password
                        </label>


                        <div class="auth-input-wrapper">

                            <i class="bi bi-lock"></i>

                            <input
                                type="password"
                                name="password"
                                id="registerPassword"
                                class="auth-input"
                                placeholder="Create a password"
                                required
                            >

                            <i
                                class="bi bi-eye password-toggle"
                                data-target="#registerPassword"
                            ></i>

                        </div>

                    </div>


                    <!-- TERMS -->

                    <label class="auth-terms">

                        <input
                            type="checkbox"
                            required
                        >

                        <span>

                            I agree to the
                            <a href="#">
                                Terms & Conditions
                            </a>
                            and
                            <a href="#">
                                Privacy Policy
                            </a>.

                        </span>

                    </label>


                    <!-- SUBMIT -->

                    <button
                        type="submit"
                        class="auth-submit"
                    >

                        <i class="bi bi-person-plus-fill"></i>

                        Create Account

                    </button>


                </form>


                <!-- DIVIDER -->

                <div class="auth-divider">

                    <span>
                        ALREADY REGISTERED?
                    </span>

                </div>


                <div class="auth-switch">

                    Already have an account?

                    <a href="login.php">
                        Sign In
                    </a>

                </div>


            </div>


        </div>


    </div>


</div>


<script src="assets/js/script.js"></script>

</body>

</html>