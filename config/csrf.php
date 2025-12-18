<?php
require 'session.php';

// Always start session here
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Generate token once per session
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
