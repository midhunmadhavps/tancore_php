<?php
header("Content-Type: application/json");
require_once "../config/db.php";

try {
    if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
        echo json_encode([
            "value" => false,
            "message" => "Invalid product id"
        ]);
        exit;
    }

    $id = (int) $_POST['id'];
    $stmt = $pdo->prepare("
        DELETE FROM t_products WHERE id = :id
    ");

    $stmt->execute([
        ":id" => $id
    ]);

    // Check if any row was deleted
    if ($stmt->rowCount() === 0) {
        echo json_encode([
            "value" => false,
            "message" => "Product not found",
        ]);
        exit;
    }

    echo json_encode([
        "value" => true,
        "message" => "Product deleted successfully",
    ]);
    exit;

} catch (Exception $e) {
    echo json_encode([
        "value" => false,
        "message" => $e->getMessage()
    ]);
    exit;
}
