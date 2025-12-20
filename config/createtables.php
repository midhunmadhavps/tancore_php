<?php
require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$dbname = $_ENV['DB_NAME'];

try {
    // 1️⃣ Connect without DB first
    $pdo = new PDO("mysql:host=$host;charset=utf8mb4", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname`");
    echo "Database verified ✔<br>";

    $pdo->exec("USE `$dbname`");

    $sql = "

    CREATE TABLE IF NOT EXISTS t_category (
        id INT AUTO_INCREMENT PRIMARY KEY,
        category_name VARCHAR(100) NOT NULL UNIQUE
    );

    INSERT INTO t_category (category_name)
    SELECT 'NECKLACE' WHERE NOT EXISTS (SELECT 1 FROM t_category WHERE category_name='NECKLACE');
    INSERT INTO t_category (category_name)
    SELECT 'BRACELET' WHERE NOT EXISTS (SELECT 1 FROM t_category WHERE category_name='BRACELET');
    INSERT INTO t_category (category_name)
    SELECT 'RING' WHERE NOT EXISTS (SELECT 1 FROM t_category WHERE category_name='RING');
    INSERT INTO t_category (category_name)
    SELECT 'EARING' WHERE NOT EXISTS (SELECT 1 FROM t_category WHERE category_name='EARING');
    INSERT INTO t_category (category_name)
    SELECT 'ANKLETS' WHERE NOT EXISTS (SELECT 1 FROM t_category WHERE category_name='ANKLETS');
    INSERT INTO t_category (category_name)
    SELECT 'BANGLES' WHERE NOT EXISTS (SELECT 1 FROM t_category WHERE category_name='BANGLES');
    INSERT INTO t_category (category_name)
    SELECT 'KIDS' WHERE NOT EXISTS (SELECT 1 FROM t_category WHERE category_name='KIDS');

    CREATE TABLE IF NOT EXISTS t_products (
        id INT AUTO_INCREMENT PRIMARY KEY,
        category_id INT NOT NULL,
        product_name VARCHAR(100),
        product_price DECIMAL(10,2),
        product_description VARCHAR(255),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        CONSTRAINT fk_category FOREIGN KEY (category_id)
            REFERENCES t_category(id)
            ON DELETE CASCADE
            ON UPDATE CASCADE
    );

    CREATE TABLE IF NOT EXISTS t_images (
        id INT AUTO_INCREMENT PRIMARY KEY,
        product_id INT NOT NULL,
        image_name VARCHAR(100) NOT NULL,
        CONSTRAINT fk_products FOREIGN KEY (product_id)
            REFERENCES t_products(id)
            ON DELETE CASCADE
            ON UPDATE CASCADE
    );

    CREATE TABLE IF NOT EXISTS t_users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(50) NOT NULL,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ";

    $pdo->exec($sql);

    echo " All tables created and sample data inserted!";

} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
