<?php
$host = '127.0.0.1';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->exec("CREATE DATABASE IF NOT EXISTS primgarinternational CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");
    $pdo->exec("USE primgarinternational");

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            email VARCHAR(255) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            role ENUM('admin', 'user') DEFAULT 'user',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ");

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS testimonials (
            id INT AUTO_INCREMENT PRIMARY KEY,
            initials VARCHAR(5) NOT NULL,
            author VARCHAR(100) NOT NULL,
            position VARCHAR(100),
            review TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ");

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS faqs (
            id INT AUTO_INCREMENT PRIMARY KEY,
            question VARCHAR(255) NOT NULL,
            answer TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ");

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS services (
            id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(100) NOT NULL,
            description TEXT NOT NULL,
            icon_svg TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ");

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS products (
            id INT AUTO_INCREMENT PRIMARY KEY,
            category VARCHAR(50) NOT NULL,
            title VARCHAR(100) NOT NULL,
            image_url VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ");

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS rfqs (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(100) NOT NULL,
            email VARCHAR(254) NOT NULL,
            phone VARCHAR(40) NOT NULL,
            category VARCHAR(50) NOT NULL,
            quantity INT,
            details TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ");

    $pdo->exec("
        CREATE TABLE IF NOT EXISTS web_images (
            id INT AUTO_INCREMENT PRIMARY KEY,
            section_name VARCHAR(100) NOT NULL,
            image_path VARCHAR(255) NOT NULL,
            alt_text VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ");

    // Insert base images if none exist
    $stmt = $pdo->query("SELECT COUNT(*) FROM web_images");
    if ($stmt->fetchColumn() == 0) {
        $images = [
            ['home_hero', 'images/primgar-logo.png', 'Primgar International Logo'],
            ['home_services', 'images/embroidery.png', 'Premium embroidery on custom garment'],
            ['home_services', 'images/screenprinting.png', 'Screen printing process'],
            ['home_services', 'images/patternmaking.png', 'Pattern cutting'],
            ['home_customization', 'images/embroidery.png', 'Custom 3D puff embroidery on black fleece garment'],
            ['home_customization', 'images/labeling.png', 'Premium private labeling cardboard hang tags'],
            ['home_customization', 'images/printing.png', 'Sublimation printing on high-performance athletic apparel'],
            ['home_customization', 'images/screenprinting.png', 'Manual screen printing press applying red ink'],
            ['home_customization', 'images/patternmaking.png', 'Precision fashion pattern drafting and sizing'],
            ['home_customization', 'images/packaging.png', 'Frosted custom brand polybag packaging'],
            ['home_woven_label_modal', 'images/woven_label_1.jpg', 'Premium Woven Label 1'],
            ['home_woven_label_modal', 'images/woven_label_2.jpg', 'Premium Woven Label 2'],
            ['home_woven_label_modal', 'images/woven_label_3.jpg', 'Premium Woven Label 3'],

            ['fashion_wear_cats', 'images/cat_fashionwear.png', 'Hoodies'],
            ['fashion_wear_cats', 'images/labeling.png', 'T-Shirts'],
            ['fashion_wear_cats', 'images/patternmaking.png', 'Bottoms'],
            ['fashion_wear_cats', 'images/embroidery.png', 'Jackets'],
            ['fashion_wear_services', 'images/printing.png', 'Screen Printing'],
            ['fashion_wear_services', 'images/sourcing.jpg', 'Fabric Selection'],
            ['fashion_wear_services', 'images/embroidery.png', 'Embroidery'],

            ['sports_wear_cats', 'images/cat_sportswear.png', 'Hoodies'],
            ['sports_wear_cats', 'images/printing.png', 'T-Shirts'],
            ['sports_wear_cats', 'images/patternmaking.png', 'Bottoms'],
            ['sports_wear_cats', 'images/finishing.jpg', 'Jackets'],
            ['sports_wear_services', 'images/printing.png', 'Screen Printing'],
            ['sports_wear_services', 'images/sourcing.jpg', 'Fabric Selection'],
            ['sports_wear_services', 'images/embroidery.png', 'Embroidery'],

            ['work_wear_cats', 'images/cat_workwear.png', 'Hoodies'],
            ['work_wear_cats', 'images/labeling.png', 'T-Shirts'],
            ['work_wear_cats', 'images/cutting.jpg', 'Bottoms'],
            ['work_wear_cats', 'images/finishing.jpg', 'Jackets'],
            ['work_wear_services', 'images/printing.png', 'Screen Printing'],
            ['work_wear_services', 'images/sourcing.jpg', 'Fabric Selection'],
            ['work_wear_services', 'images/embroidery.png', 'Embroidery'],

            ['street_wear_products', 'images/cat_streetwear.png', 'Oversize T-Shirt'],
            ['street_wear_products', 'images/embroidery.png', 'Oversize Hoodie'],
            ['street_wear_products', 'images/printing.png', 'Oversize Acid-Wash Hoodie'],
            ['street_wear_products', 'images/patternmaking.png', 'Cotton Denim Oversize Jacket'],
            ['street_wear_products', 'images/finishing.jpg', 'Cargo Pants']
        ];
        
        $insert = $pdo->prepare("INSERT INTO web_images (section_name, image_path, alt_text) VALUES (?, ?, ?)");
        foreach ($images as $img) {
            $insert->execute($img);
        }
    }

    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->execute(['primgarinternationals@gmail.com']);
    if (!$stmt->fetch()) {
        $hash = password_hash('Admin123!', PASSWORD_DEFAULT);
        $pdo->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, 'admin')")->execute(['primgarinternationals@gmail.com', $hash]);
    }

    echo "Database setup complete.\n";

} catch (PDOException $e) {
    die("DB ERROR: " . $e->getMessage());
}