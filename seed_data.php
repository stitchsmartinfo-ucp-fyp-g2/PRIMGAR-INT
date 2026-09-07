<?php
$host = '127.0.0.1';
$user = 'root';
$pass = '';
$db = 'primgarinternational';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

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

    echo "Data seeded successfully.\n";

} catch (PDOException $e) {
    die("DB ERROR: " . $e->getMessage());
}
