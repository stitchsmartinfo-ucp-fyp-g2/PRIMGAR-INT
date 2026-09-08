<?php
$dbPath = __DIR__ . '/storage/database.sqlite';
if (file_exists($dbPath)) {
    unlink($dbPath);
}
$pdo = new PDO("sqlite:" . $dbPath);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$tables = [
    "CREATE TABLE users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        email TEXT NOT NULL UNIQUE,
        password TEXT NOT NULL,
        role TEXT DEFAULT 'user',
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )",
    "CREATE TABLE testimonials (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        initials TEXT NOT NULL,
        author TEXT NOT NULL,
        position TEXT,
        review TEXT NOT NULL,
        display_order INTEGER,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )",
    "CREATE TABLE faqs (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        question TEXT NOT NULL,
        answer TEXT NOT NULL,
        display_order INTEGER,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )",
    "CREATE TABLE services (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        title TEXT NOT NULL,
        description TEXT NOT NULL,
        icon_svg TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )",
    "CREATE TABLE products (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        category TEXT NOT NULL,
        title TEXT NOT NULL,
        image_url TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )",
    "CREATE TABLE rfqs (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL,
        phone TEXT NOT NULL,
        category TEXT NOT NULL,
        quantity INTEGER,
        details TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )",
    "CREATE TABLE web_images (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        section_name TEXT NOT NULL,
        image_path TEXT NOT NULL,
        alt_text TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP
    )"
];

foreach ($tables as $t) {
    $pdo->exec($t);
}

// INSERT DATA
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

// FAQs
$faqs = [
    ['What is your minimum order quantity (MOQ) for custom clothing?', 'Our standard Minimum Order Quantity (MOQ) is 100 pieces per design, style, and color. This low MOQ helps fashion startups and growing clothing brands test products efficiently without holding excessive inventory.', 1],
    ['Do you ship worldwide? What are your delivery locations?', 'Yes, Primgar International provides door-to-door bulk shipping worldwide. We routinely ship to major brand markets including the USA, United Kingdom, Canada, Australia, Germany, and across Europe via trusted freight carriers.', 2],
    ['What fabric options do you offer for custom streetwear and sportswear?', 'Our fabric library includes premium materials: 100% Loopback Cotton Fleece (380-500 GSM), Combed Cotton Jersey, Organic Cotton (GOTS certified), Nylon Spandex activewear blends, and recycled polyester materials. We also offer custom dye matching and custom fabric development.', 3],
    ['Can you handle custom packaging and private labeling?', 'Absolutely. We offer complete private label solutions including custom woven labels, printed neck tags, premium hang tags, and branded frosted polybags or custom boxes to ensure your products are fully retail-ready.', 4],
    ['What are your payment terms and typical turnaround times?', 'Our standard payment terms are 50% upfront to commence sampling/production, and 50% prior to dispatch. Typical turnaround is 2-3 weeks for sampling and 4-6 weeks for bulk production, depending on order complexity and current schedule.', 5]
];

$stmt = $pdo->prepare("INSERT INTO faqs (question, answer, display_order) VALUES (?, ?, ?)");
foreach ($faqs as $faq) {
    $stmt->execute($faq);
}

// Testimonials
$testimonials = [
    ['James Mitchell', 'Founder, UrbanThread Co. — UK', 'Primgar International delivered exactly what we envisioned — premium hoodies with flawless embroidery and true-to-spec GSM. Our brand has never looked better.', 'JM', 1],
    ['Sara Khalid', 'Brand Director, Luxe Labels — UAE', 'The sample quality blew us away. Production was on time, packaging was immaculate, and communication was top-tier throughout. 100% will order again.', 'SK', 2],
    ['Ryan Moore', 'CEO, PeakForm Athletics — USA', 'We placed our first 500-piece order for custom tracksuits. Every detail was handled professionally. This factory is the real deal for global brands.', 'RM', 3]
];

$stmt = $pdo->prepare("INSERT INTO testimonials (author, position, review, initials, display_order) VALUES (?, ?, ?, ?, ?)");
foreach ($testimonials as $t) {
    $stmt->execute($t);
}

$hash = password_hash('Admin123!', PASSWORD_DEFAULT);
$pdo->prepare("INSERT INTO users (email, password, role) VALUES (?, ?, 'admin')")->execute(['primgarintl@gmail.com', $hash]);

echo "SQLite DB created.\n";
