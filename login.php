<?php
session_start();
require_once 'includes/db.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Database check query
    $stmt = $conn->prepare("SELECT id, name, password, role FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        
        // Check password (supports hashed or plain text)
        if (password_verify($password, $user['password']) || $password === $user['password']) {
            $_SESSION['user_id']   = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['role']      = $user['role'];

            // Redirect based on user role
            if ($user['role'] == 'admin') {
                header("Location: admin/dashboard.php");
            } elseif ($user['role'] == 'donor') {
                header("Location: donor/dashboard.php");
            } else {
                header("Location: user/dashboard.php");
            }
            exit();
        } else {
            $error = "Invalid password. Please try again.";
        }
    } else {
        $error = "No user found with this email address.";
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

    <title>Login | BloodCare</title>


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


    <div class="auth-container">


        <!-- =================================================
             LEFT BRAND
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
                    Welcome Back to
                    BloodCare
                </h1>


                <p>

                    Sign in to manage your blood requests,
                    appointments, donations and connect with
                    people who need your help.

                </p>


                <div class="auth-features">


                    <div class="auth-feature">

                        <div class="auth-feature-icon">

                            <i class="bi bi-check-lg"></i>

                        </div>

                        <span>
                            Find blood donors quickly
                        </span>

                    </div>


                    <div class="auth-feature">

                        <div class="auth-feature-icon">

                            <i class="bi bi-check-lg"></i>

                        </div>

                        <span>
                            Manage your donations
                        </span>

                    </div>


                    <div class="auth-feature">

                        <div class="auth-feature-icon">

                            <i class="bi bi-check-lg"></i>

                        </div>

                        <span>
                            Help save lives
                        </span>

                    </div>


                </div>

            </div>


            <div class="auth-brand-footer">

                Every drop counts. Every donor matters.

            </div>


        </div>



        <!-- =================================================
             RIGHT FORM
             ================================================= -->

        <div class="auth-form-panel">


            <div class="auth-form-wrapper">


                <div class="auth-form-header">

                    <h2>
                        Sign in
                    </h2>

                    <p>
                        Enter your credentials to continue.
                    </p>

                </div>


                <!-- ERROR MESSAGE SHOW -->
                <?php if (!empty($error)): ?>
                    <div style="color: #d9534f; background-color: #f2dede; border: 1px solid #ebccd1; padding: 10px; border-radius: 6px; margin-bottom: 15px; font-size: 14px; text-align: center;">
                        <?= htmlspecialchars($error) ?>
                    </div>
                <?php endif; ?>


                <!-- FORM -->

                <form
                    action=""
                    method="POST"
                >


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
                                id="loginPassword"
                                class="auth-input"
                                placeholder="Enter your password"
                                required
                            >


                            <i
                                class="bi bi-eye password-toggle"
                                data-target="#loginPassword"
                            ></i>

                        </div>

                    </div>


                    <!-- OPTIONS -->

                    <div class="auth-options">


                        <label class="remember-me">

                            <input
                                type="checkbox"
                                name="remember"
                            >

                            Remember me

                        </label>


                        <a
                            href="#"
                            class="forgot-link"
                        >

                            Forgot Password?

                        </a>


                    </div>


                    <!-- SUBMIT -->

                    <button
                        type="submit"
                        class="auth-submit"
                    >

                        <i class="bi bi-box-arrow-in-right"></i>

                        Sign In

                    </button>


                </form>


                <!-- DIVIDER -->

                <div class="auth-divider">

                    <span>
                        NEW TO BLOODCARE?
                    </span>

                </div>


                <!-- REGISTER -->

                <div class="auth-switch">

                    Don't have an account?

                    <a href="register.php">
                        Create Account
                    </a>

                </div>


            </div>


        </div>


    </div>


</div>


<script src="assets/js/script.js"></script>

</body>

</html>