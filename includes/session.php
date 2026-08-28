<?php

/* =========================================================
   BLOODCARE - SESSION MANAGEMENT
   ========================================================= */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


/* =========================================================
   CHECK LOGIN
   ========================================================= */

function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}


/* =========================================================
   REQUIRE LOGIN
   ========================================================= */

function requireLogin()
{
    if (!isLoggedIn()) {

        header("Location: ../login.php");
        exit;

    }
}


/* =========================================================
   GET CURRENT USER ID
   ========================================================= */

function currentUserId()
{
    return $_SESSION['user_id'] ?? null;
}


/* =========================================================
   GET CURRENT USER ROLE
   ========================================================= */

function currentUserRole()
{
    return $_SESSION['role'] ?? null;
}


/* =========================================================
   REQUIRE SPECIFIC ROLE
   ========================================================= */

function requireRole($role)
{
    requireLogin();

    if (
        !isset($_SESSION['role']) ||
        $_SESSION['role'] !== $role
    ) {

        header("Location: ../index.php");
        exit;

    }
}


/* =========================================================
   REQUIRE ADMIN
   ========================================================= */

function requireAdmin()
{
    requireRole("admin");
}


/* =========================================================
   REQUIRE DONOR
   ========================================================= */

function requireDonor()
{
    requireRole("donor");
}


/* =========================================================
   REQUIRE USER
   ========================================================= */

function requireUser()
{
    requireRole("user");
}

?>