<?php
header("Content-Type: application/json");
require_once "../config/db.php";
require_once "../middleware/verify_csrf.php";

try {
    // Read limit safely
    $limit = isset($_GET['limit']) ? (int)$_GET['limit'] : 10;

    $sql = "
            SELECT 
        p.id AS product_id,
        p.product_name,
        p.product_price,
        p.product_description,
        c.category_name,
        MIN(i.image_name) AS images
    FROM t_products p
    JOIN t_category c ON p.category_id = c.id
    LEFT JOIN t_images i ON p.id = i.product_id
    GROUP BY p.id
    ORDER BY p.id DESC
    LIMIT $limit;

    ";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();

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
