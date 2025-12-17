<?php
require_once "../config/db.php";

$username = "midhun";
$password = "Admin@123";

// Hash the password securely
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert into DB
$stmt = $pdo->prepare("
    INSERT INTO t_users (username, password)
    VALUES (:username, :password)
");

$stmt->execute([
    ":username" => $username,
    ":password" => $hashedPassword
]);

echo "User created successfully";
