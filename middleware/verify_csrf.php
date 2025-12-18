<?php
require_once __DIR__ . "/../config/session.php";
require_once __DIR__ . "/../config/csrf.php";

$headers = function_exists('getallheaders') ? getallheaders() : $_SERVER;

$token = $headers['X-CSRF-TOKEN']
    ?? $headers['HTTP_X_CSRF_TOKEN']
    ?? $_POST['_csrf']
    ?? '';

if (!$token || $token !== $_SESSION['csrf_token']) {
    http_response_code(403);
    echo json_encode([
        "value" => false,
        "message" => "Invalid CSRF token"
    ]);
    exit;
}
