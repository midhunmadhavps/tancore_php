<?php
header("Content-Type: application/json");

require_once "../middleware/verify_csrf.php";

$_SESSION = [];

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params['path'],
        $params['domain'],
        $params['secure'],
        $params['httponly']
    );
}

session_destroy();

session_start();
session_regenerate_id(true);

echo json_encode([
    "value" => true,
    "message" => "Logged out successfully"
]);
exit;
