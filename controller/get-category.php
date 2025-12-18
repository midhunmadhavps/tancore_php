<?php
header("Content-Type: application/json");
require_once "../config/db.php";
require_once "../middleware/verify_csrf.php";

try {
    $stmt = $pdo->prepare("
        SELECT id, category_name 
        FROM t_category 
        ORDER BY category_name ASC
    ");
    $stmt->execute();

    echo json_encode([
        "value" => true,
        "data" => $stmt->fetchAll(PDO::FETCH_ASSOC)
    ]);
    exit;

} catch (Exception $e) {
    echo json_encode([
        "value" => false,
        "message" => $e->getMessage()
    ]);
    exit;
}
