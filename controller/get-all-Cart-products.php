<?php
header("Content-Type: application/json");
require_once "../config/db.php";
require_once "../middleware/verify_csrf.php";

try {
    $ids = $_GET['ids'] ?? [];

    if (empty($ids)) {
        echo json_encode([
            "value" => true,
            "data" => []
        ]);
        exit;
    }
    
    $sql = "
        SELECT 
            p.id,
            p.product_name,
            p.product_price
        FROM t_products p
    ";

    $params = [];

    if (!empty($ids) && is_array($ids)) {

        // OPTIONAL but recommended: sanitize
        $ids = array_map('intval', $ids);

        // Create ?,?,? placeholders
        $placeholders = '';
        $placeholders = implode(',', array_fill(0, count($ids), '?'));

        $sql .= " WHERE p.id IN ($placeholders)";
        $params = $ids;
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode([
        "value" => true,
        "data" => $products
    ]);
    exit;

} catch (Exception $e) {
    echo json_encode([
        "value" => false,
        "message" => $e->getMessage()
    ]);
    exit;
}
