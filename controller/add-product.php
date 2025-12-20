<?php
header("Content-Type: application/json");
require_once "../config/db.php";
require_once "../middleware/verify_csrf.php";


    if (!isset($_POST['name']) || empty(trim($_POST['name']))) {
        echo json_encode(["data" => false, "message" => "Product name is required"]);
        exit;
    }

    if (!isset($_POST['price']) || floatval($_POST['price']) <= 0) {
        echo json_encode(["data" => false, "message" => "Invalid price"]);
        exit;
    }

    if (empty($_FILES['image']['name'][0])) {
        echo json_encode(["data" => false, "message" => "Please upload at least one image"]);
        exit;
    }

    $name        = trim($_POST['name']);
    $price       = floatval($_POST['price']);
    $category_id = intval($_POST['category']);
    $description = trim($_POST['description'] ?? "");

try {
    // --- START TRANSACTION ---
    $pdo->beginTransaction();

    // --- INSERT PRODUCT ---
    $stmt = $pdo->prepare("
        INSERT INTO t_products (product_name, product_price, product_description, category_id)
        VALUES (:name, :price, :description, :category)
    ");

    $stmt->execute([
        ":name"        => $name,
        ":price"       => $price,
        ":description" => $description,
        ":category"    => $category_id,
    ]);

    $product_id = $pdo->lastInsertId();

   $uploadDir = realpath(__DIR__ . "/../uploads");

    if ($uploadDir === false || !is_dir($uploadDir)) {
        echo json_encode([
            "data" => false,
            "message" => "Uploads directory not found"
        ]);
        exit;
    }

    if (!is_writable($uploadDir)) {
        echo json_encode([
            "data" => false,
            "message" => "Uploads directory is not writable"
        ]);
        exit;
    }

    // Normalize files array
    $images = $_FILES['image'];

    if (!is_array($images['tmp_name'])) {
        // Convert single file to array
        $images = [
            'name'     => [$images['name']],
            'type'     => [$images['type']],
            'tmp_name' => [$images['tmp_name']],
            'error'    => [$images['error']],
            'size'     => [$images['size']],
        ];
    }
    $uploadDir .= DIRECTORY_SEPARATOR;
    foreach ($images['tmp_name'] as $key => $tmp_name) {

        if ($images['error'][$key] !== UPLOAD_ERR_OK) {
            continue;
        }

        $ext = strtolower(pathinfo($images['name'][$key], PATHINFO_EXTENSION));
        $fileName = uniqid("img_", true) . "." . $ext;
        $filePath = $uploadDir . $fileName;

        if (!move_uploaded_file($tmp_name, $filePath)) {
            echo json_encode(["data" => false, "message" => "Image upload failed"]);
            exit;
        }

        $img = $pdo->prepare("
            INSERT INTO t_images (product_id, image_name)
            VALUES (:product_id, :image)
        ");

        $img->execute([
            ":product_id" => $product_id,
            ":image"      => $fileName
        ]);
    }

    // --- COMMIT ---
    $pdo->commit();

    echo json_encode(["data" => true, "message" => "Product added successfully"]);
    exit;

} catch (Exception $e) {
    $pdo->rollBack();
    echo json_encode(["data" => false, "message" => $e->getMessage()]);
    exit;
}
