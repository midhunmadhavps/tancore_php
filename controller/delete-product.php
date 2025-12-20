<?php
header("Content-Type: application/json");
require_once "../config/db.php";
require_once "../middleware/verify_csrf.php";

try {
    if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
        echo json_encode([
            "value" => false,
            "message" => "Invalid product id"
        ]);
        exit;
    }

    $id = (int) $_POST['id'];

    $imgStmt = $pdo->prepare("
        SELECT image_name 
        FROM t_images 
        WHERE product_id = ?
    ");
    $imgStmt->execute([$id]);
    $images = $imgStmt->fetchAll(PDO::FETCH_COLUMN);

    $uploadPath = realpath(__DIR__ . "/../uploads");

    if ($uploadPath === false || !is_dir($uploadPath)) {
        echo json_encode([
            "value" => false,
            "message" => "Uploads directory not found"
        ]);
        exit;
    }

    if (!is_writable($uploadPath)) {
        echo json_encode([
            "value" => false,
            "message" => "No delete permission for uploads folder"
        ]);
        exit;
    }

    $failedImages = [];
    foreach ($images as $image) {
        $image = basename($image);
        $file = $uploadPath . DIRECTORY_SEPARATOR . $image;

        if (file_exists($file) && is_file($file)) {
            if (!unlink($file)) {
                error_log("Failed to delete image: " . $file);
                $failedImages[] = $image;
            }
        }
    }

    $stmt = $pdo->prepare("DELETE FROM t_products WHERE id = ?");
    $stmt->execute([$id]);

    if ($stmt->rowCount() === 0) {
        echo json_encode([
            "value" => false,
            "message" => "Product not found",
            "image_errors" => $failedImages
        ]);
        exit;
    }

    echo json_encode([
        "value" => true,
        "message" => "Product deleted successfully",
        "image_message" => empty($failedImages)
            ? "All images deleted successfully"
            : "Some images could not be deleted",
        "failed_images" => $failedImages
    ]);
    exit;

} catch (Exception $e) {
    echo json_encode([
        "value" => false,
        "message" => $e->getMessage()
    ]);
    exit;
}
