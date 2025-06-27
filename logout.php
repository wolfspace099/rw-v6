<?php
session_save_path('/home/container/sessions');
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

// Remove session cookie (if used)
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Redirect to login page (or homepage)
header("Location: login");
exit();
?>