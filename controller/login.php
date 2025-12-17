<?php
header("Content-Type: application/json");
require_once "../config/db.php";
require_once "../config/session.php";

try {

    /* ---------- Validation ---------- */
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo json_encode([
            "value" => false,
            "message" => "Invalid login credentials"
        ]);
        exit;
    }

    $username = trim($_POST['username']);
    $password = $_POST['password'];

    /* ---------- Fetch User ---------- */
    $stmt = $pdo->prepare("
        SELECT id, username, password 
        FROM t_users 
        WHERE username = :username 
        LIMIT 1
    ");
    $stmt->execute([
        ":username" => $username
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    /* ---------- Generic Error ---------- */
    if (!$user || !password_verify($password, $user['password'])) {
        echo json_encode([
            "value" => false,
            "message" => "Invalid login credentials"
        ]);
        exit;
    }

    /* ---------- Login Success ---------- */
    // Secure session
    session_regenerate_id(true);
    // Set session variables
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['logged_in'] = true;

    echo json_encode([
        "value" => true,
        "message" => "Login successful"
    ]);
    exit;

} catch (Exception $e) {
    echo json_encode([
        "value" => false,
        "message" => "Server error"
    ]);
    exit;
}
