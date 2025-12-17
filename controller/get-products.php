<?php
header("Content-Type: application/json");
require_once "../config/db.php";

try {
    // Read AJAX values safely
    $categoryIds = $_GET['category_ids'] ?? '';
    $minPrice    = $_GET['min_price'] ?? '';
    $maxPrice    = $_GET['max_price'] ?? '';

    // Base query
    $sql = "
        SELECT 
            p.id AS product_id,
            p.product_name,
            p.product_price,
            p.product_description,
            c.category_name,
            GROUP_CONCAT(i.image_name) AS images
        FROM t_products p
        LEFT JOIN t_category c ON p.category_id = c.id
        LEFT JOIN t_images i ON p.id = i.product_id
        WHERE 1=1
    ";

    $params = [];

    // Filter by category IDs
    if (!empty($categoryIds)) {
        $ids = explode(",", $categoryIds);
        $placeholders = implode(",", array_fill(0, count($ids), "?"));
        $sql .= " AND p.category_id IN ($placeholders)";
        $params = array_merge($params, $ids);
    }

    // Filter by price range
    if ($minPrice !== '') {
        $sql .= " AND p.product_price >= ?";
        $params[] = $minPrice;
    }

    if ($maxPrice !== '') {
        $sql .= " AND p.product_price <= ?";
        $params[] = $maxPrice;
    }

    $sql .= "
        GROUP BY p.id
        ORDER BY p.id DESC
    ";

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
