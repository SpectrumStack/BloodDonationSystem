<?php

/* =========================================================
   BLOODCARE - COMMON FUNCTIONS
   ========================================================= */


/* =========================================================
   ESCAPE HTML
   ========================================================= */

function e($value)
{
    return htmlspecialchars(
        $value ?? '',
        ENT_QUOTES,
        'UTF-8'
    );
}


/* =========================================================
   REDIRECT
   ========================================================= */

function redirect($url)
{
    header("Location: " . $url);
    exit;
}


/* =========================================================
   SET FLASH MESSAGE
   ========================================================= */

function setFlash($type, $message)
{
    $_SESSION['flash'] = [
        'type' => $type,
        'message' => $message
    ];
}


/* =========================================================
   GET FLASH MESSAGE
   ========================================================= */

function getFlash()
{
    if (!isset($_SESSION['flash'])) {
        return null;
    }

    $flash = $_SESSION['flash'];

    unset($_SESSION['flash']);

    return $flash;
}


/* =========================================================
   SHOW FLASH MESSAGE
   ========================================================= */

function showFlash()
{
    $flash = getFlash();

    if (!$flash) {
        return;
    }

    $type = e($flash['type']);
    $message = e($flash['message']);

    $icon = "bi-info-circle-fill";

    if ($type === "success") {
        $icon = "bi-check-circle-fill";
    }

    if ($type === "danger") {
        $icon = "bi-x-circle-fill";
    }

    if ($type === "warning") {
        $icon = "bi-exclamation-triangle-fill";
    }

    echo "
        <div class='alert-custom alert-$type alert-auto-hide'>
            <i class='bi $icon'></i>
            <span>$message</span>
        </div>
    ";
}


/* =========================================================
   FORMAT DATE
   ========================================================= */

function formatDate($date)
{
    if (!$date) {
        return "-";
    }

    return date(
        "d M Y",
        strtotime($date)
    );
}


/* =========================================================
   FORMAT DATETIME
   ========================================================= */

function formatDateTime($datetime)
{
    if (!$datetime) {
        return "-";
    }

    return date(
        "d M Y, h:i A",
        strtotime($datetime)
    );
}


/* =========================================================
   GET INITIALS
   ========================================================= */

function getInitials($name)
{
    $name = trim($name);

    if ($name === '') {
        return "U";
    }

    $parts = preg_split(
        '/\s+/',
        $name
    );

    $initials = '';

    foreach ($parts as $part) {

        $initials .=
            strtoupper(
                substr($part, 0, 1)
            );

        if (strlen($initials) >= 2) {
            break;
        }

    }

    return $initials;
}


/* =========================================================
   BLOOD GROUP COLOR CLASS
   ========================================================= */

function bloodGroupClass($bloodGroup)
{
    $bloodGroup = strtoupper(
        trim($bloodGroup)
    );

    return match ($bloodGroup) {

        "A+"  => "badge-danger",
        "A-"  => "badge-danger",

        "B+"  => "badge-info",
        "B-"  => "badge-info",

        "AB+" => "badge-warning",
        "AB-" => "badge-warning",

        "O+"  => "badge-success",
        "O-"  => "badge-success",

        default => "badge-info"
    };
}


/* =========================================================
   STATUS BADGE
   ========================================================= */

function statusBadge($status)
{
    $status = strtolower(
        trim($status)
    );

    $class = "badge-info";

    if (
        in_array(
            $status,
            [
                "approved",
                "completed",
                "available",
                "active",
                "accepted"
            ]
        )
    ) {
        $class = "badge-success";
    }

    elseif (
        in_array(
            $status,
            [
                "pending",
                "processing",
                "scheduled"
            ]
        )
    ) {
        $class = "badge-warning";
    }

    elseif (
        in_array(
            $status,
            [
                "rejected",
                "cancelled",
                "inactive",
                "unavailable"
            ]
        )
    ) {
        $class = "badge-danger";
    }

    return "<span class='badge-custom $class'>" .
        e(ucfirst($status)) .
        "</span>";
}


/* =========================================================
   VALIDATE EMAIL
   ========================================================= */

function isValidEmail($email)
{
    return filter_var(
        $email,
        FILTER_VALIDATE_EMAIL
    );
}


/* =========================================================
   SANITIZE PHONE
   ========================================================= */

function cleanPhone($phone)
{
    return preg_replace(
        '/[^0-9+]/',
        '',
        $phone
    );
}


/* =========================================================
   RANDOM TOKEN
   ========================================================= */

function generateToken($length = 32)
{
    return bin2hex(
        random_bytes(
            (int) ($length / 2)
        )
    );
}


/* =========================================================
   USER AVATAR
   ========================================================= */

function userAvatar($photo = null)
{
    if (!empty($photo)) {
        return "../assets/images/donors/" . e($photo);
    }

    return "../assets/images/default-user.png";
}


/* =========================================================
   CHECK ACTIVE PAGE
   ========================================================= */

function isActivePage($page)
{
    $currentPage =
        basename(
            $_SERVER['PHP_SELF']
        );

    return $currentPage === $page
        ? "active"
        : "";
}

?>