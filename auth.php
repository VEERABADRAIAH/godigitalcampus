<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function authorize($allowed_roles) {
    if (!isset($_SESSION['user_role']) || !in_array($_SESSION['user_role'], $allowed_roles)) {
        header("HTTP/1.1 403 Forbidden");
        echo "Access denied!";
        exit;
    }
}
?>