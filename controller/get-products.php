<?php
header("Content-Type: application/json");
require_once "../config/db.php";
require_once "../middleware/verify_csrf.php";

try {

    // Filters
    $categoryIds = $_GET['category_ids'] ?? '';
    $minPrice    = $_GET['min_price'] ?? '';
    $maxPrice    = $_GET['max_price'] ?? '';
    $search    = $_GET['search'] ?? '';

    // Pagination
    $page     = max(1, (int)($_GET['page'] ?? 1));
    $perPage  = max(1, (int)($_GET['per_page'] ?? 9));
    $offset   = ($page - 1) * $perPage;

    /* =========================
       1️⃣ COUNT QUERY
    ========================= */
    $countSql = "
        SELECT COUNT(DISTINCT p.id)
        FROM t_products p
        WHERE 1=1
    ";

    $countParams = [];

    if (!empty($categoryIds)) {
        $ids = array_map('intval', explode(",", $categoryIds));
        $placeholders = implode(",", array_fill(0, count($ids), "?"));
        $countSql .= " AND p.category_id IN ($placeholders)";
        $countParams = array_merge($countParams, $ids);
    }

    if ($minPrice !== '') {
        $countSql .= " AND p.product_price >= ?";
        $countParams[] = $minPrice;
    }

    if ($maxPrice !== '') {
        $countSql .= " AND p.product_price <= ?";
        $countParams[] = $maxPrice;
    }

    if ($search !== '') {
        $countSql .= " AND p.product_name LIKE ?";
        $countParams[] = "%" . $search;
    }

    $countStmt = $pdo->prepare($countSql);
    $countStmt->execute($countParams);
    $totalProducts = (int) $countStmt->fetchColumn();
    $totalPages = ceil($totalProducts / $perPage);

    /* =========================
       2️⃣ DATA QUERY
    ========================= */
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

    if (!empty($categoryIds)) {
        $ids = array_map('intval', explode(",", $categoryIds));
        $placeholders = implode(",", array_fill(0, count($ids), "?"));
        $sql .= " AND p.category_id IN ($placeholders)";
        $params = array_merge($params, $ids);
    }

    if ($minPrice !== '') {
        $sql .= " AND p.product_price >= ?";
        $params[] = $minPrice;
    }

    if ($maxPrice !== '') {
        $sql .= " AND p.product_price <= ?";
        $params[] = $maxPrice;
    }

    if ($search !== '') {
        $sql .= " AND p.product_name LIKE ?";
        $params[] = "%" . $search;
    }

    $sql .= "
        GROUP BY p.id
        ORDER BY p.id DESC
        LIMIT $perPage OFFSET $offset
    ";


    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    /* =========================
       RESPONSE
    ========================= */
    echo json_encode([
        "value" => true,
        "data" => $products,
        "pagination" => [
            "current_page" => $page,
            "per_page"     => $perPage,
            "total_pages"  => $totalPages,
            "total_items"  => $totalProducts
        ]
    ]);
    exit;

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode([
        "value" => false,
        "message" => $e->getMessage()
    ]);
    exit;
}
