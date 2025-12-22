<?php
require_once __DIR__ . "/../config/session.php";
require_once __DIR__ . "/../config/csrf.php";

$token = $_SERVER['HTTP_X_CSRF_TOKEN'] ?? '';

if (!$token || !hash_equals($_SESSION['csrf_token'], $token)) {
    http_response_code(403);
    echo json_encode([
        "value" => false,
        "message" => "Invalid CSRF token"
    ]);
    exit;
}
