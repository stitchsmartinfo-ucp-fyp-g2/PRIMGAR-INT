<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Work Wear Manufacturing | Primgar International</title>
  <meta name="description" content="Custom Work Wear Manufacturing at Primgar International. Cargo Pants, Hi-Vis, Coveralls, and Uniforms.">
  
  <link rel="stylesheet" href="index.css">

  <style>
    /* Specific styles for Street Wear Page matching Alimber structure */
    .page-hero {
      padding: 180px 20px 80px;
      text-align: center;
      background: linear-gradient(to bottom, rgba(0,0,0,0.8), var(--bg-color)), url('assets/streetwear-hero.jpg') center/cover no-repeat;
      min-height: 50vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
    .page-hero h1 {
      font-size: clamp(3rem, 6vw, 5rem);
      margin-bottom: 20px;
      text-transform: uppercase;
      letter-spacing: -0.02em;
    }
    .page-hero .breadcrumb {
      color: var(--text-secondary);
      font-size: 0.9rem;
      letter-spacing: 0.1em;
      text-transform: uppercase;
    }
    .page-hero .breadcrumb a {
      color: var(--text-color);
      text-decoration: none;
      transition: color 0.3s;
    }
    .page-hero .breadcrumb a:hover {
      color: var(--red-accent);
    }
    
    .street-section {
      padding: 100px 20px;
    }

    .cat-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 30px;
      margin-top: 60px;
    }
    .cat-item {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      aspect-ratio: 4/5;
      background: var(--bg-deep);
    }
    .cat-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
      opacity: 0.8;
    }
    .cat-item:hover .cat-img {
      transform: scale(1.05);
      opacity: 0.5;
    }
    .cat-info {
      position: absolute;
      bottom: 0; left: 0; width: 100%;
      padding: 30px;
      background: linear-gradient(to top, rgba(0,0,0,0.9), transparent);
      text-align: left;
    }
    .cat-info h3 {
      font-size: 1.5rem;
      margin-bottom: 10px;
      color: white;
    }

    /* Alternating Content Layout */
    .content-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
      align-items: center;
      margin-bottom: 100px;
    }
    .content-row.reverse {
      direction: rtl;
    }
    .content-row.reverse > * {
      direction: ltr;
    }
    .content-text h2 {
      font-size: clamp(2rem, 4vw, 3rem);
      margin-bottom: 24px;
      color: var(--red-accent);
    }
    .content-text p {
      font-size: 1.1rem;
      line-height: 1.8;
      color: var(--text-secondary);
      margin-bottom: 20px;
    }
    .content-image-wrapper {
      border-radius: 16px;
      overflow: hidden;
      aspect-ratio: 1/1;
    }
    .content-image-wrapper img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    @media (max-width: 900px) {
      .content-row {
        grid-template-columns: 1fr;
        gap: 40px;
      }
      .content-row.reverse {
        direction: ltr;
      }
    }
  </style>
</head>
<body class="smooth-scroll">

  <!-- Sticky Header -->
  <header id="main-header">
    <div class="container nav-container">
      <a href="index.php" class="logo" id="header-logo">
        PRIMGAR<span>INTERNATIONAL</span>
      </a>
      <nav aria-label="Main Navigation">
        <ul class="nav-menu" id="nav-links">
          <li><a href="index.php#about" class="nav-link magnetic">About</a></li>
          <li><a href="index.php#products" class="nav-link magnetic">Products</a></li>
          <li><a href="index.php#services" class="nav-link magnetic">Services</a></li>
          <li><a href="index.php#process" class="nav-link magnetic">Process</a></li>
          <li><a href="index.php#fabrics" class="nav-link magnetic">Fabric Library</a></li>
          <li><a href="index.php#rfq" class="nav-link magnetic">RFQ Calculator</a></li>
          <li><a href="index.php#faq" class="nav-link magnetic">FAQs</a></li>
        </ul>
      </nav>
      <a href="index.php#rfq" class="btn btn-primary magnetic" style="padding: 10px 20px; font-size: 0.9rem;">Get Quote</a>
      <div class="mobile-menu-toggle" id="mobile-toggle" aria-label="Toggle Menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="page-hero">
    <div class="container">
      <h1 class="reveal-up">Work Wear</h1>
      <div class="breadcrumb reveal-up" style="transition-delay: 0.1s;">
        <a href="index.php">Home</a> / Work Wear
      </div>
    </div>
  </section>

  <!-- Categories Grid -->
  <section class="street-section container">
    <div style="text-align: center; max-width: 800px; margin: 0 auto;" class="reveal-up">
      <span style="color: var(--red-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 0.12em; font-size: 0.85rem;">OUR EXPERTISE</span>
      <h2 style="font-size: clamp(2rem, 4vw, 3rem); margin: 10px 0 20px;">Reliable Custom Workwear Manufacturing</h2>
      <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.6;">Equip your workforce with durable, comfortable uniforms designed for your industry, branding and day-to-day working conditions.</p>
    </div>

    <div class="cat-grid">
      <div class="cat-item reveal-up">
        <img src="<?= htmlspecialchars($web_images['work_wear_cats'][0]['image_path'] ?? 'images/cat_workwear.png') ?>" alt="<?= htmlspecialchars($web_images['work_wear_cats'][0]['alt_text'] ?? 'Hoodies') ?>" class="cat-img">
        <div class="cat-info">
          <h3>Uniform Shirts</h3>
          <p style="color: var(--text-muted); font-size: 0.95rem;">Polos, shirts and branded basics</p>
        </div>
      </div>
      <div class="cat-item reveal-up" style="transition-delay: 0.1s;">
        <img src="<?= htmlspecialchars($web_images['work_wear_cats'][1]['image_path'] ?? 'images/labeling.png') ?>" alt="<?= htmlspecialchars($web_images['work_wear_cats'][1]['alt_text'] ?? 'T-Shirts') ?>" class="cat-img">
        <div class="cat-info">
          <h3>Hi-Vis Workwear</h3>
          <p style="color: var(--text-muted); font-size: 0.95rem;">Visibility trims and durable fabrics</p>
        </div>
      </div>
      <div class="cat-item reveal-up" style="transition-delay: 0.2s;">
        <img src="<?= htmlspecialchars($web_images['work_wear_cats'][2]['image_path'] ?? 'images/cutting.jpg') ?>" alt="<?= htmlspecialchars($web_images['work_wear_cats'][2]['alt_text'] ?? 'Bottoms') ?>" class="cat-img">
        <div class="cat-info">
          <h3>Cargo Trousers</h3>
          <p style="color: var(--text-muted); font-size: 0.95rem;">Reinforced panels and utility pockets</p>
        </div>
      </div>
      <div class="cat-item reveal-up" style="transition-delay: 0.3s;">
        <img src="<?= htmlspecialchars($web_images['work_wear_cats'][3]['image_path'] ?? 'images/finishing.jpg') ?>" alt="<?= htmlspecialchars($web_images['work_wear_cats'][3]['alt_text'] ?? 'Jackets') ?>" class="cat-img">
        <div class="cat-info">
          <h3>Coveralls & Jackets</h3>
          <p style="color: var(--text-muted); font-size: 0.95rem;">Industrial layers and weather protection</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Alternating Capabilities Rows -->
  <section class="street-section container">
    <div class="content-row">
      <div class="content-text reveal-up">
        <h2>Custom Screen Printing & DTG</h2>
        <p>Elevate your streetwear designs with our state-of-the-art printing techniques. We offer high-density screen printing, Direct-to-Garment (DTG), and specialized puff printing that adds 3D texture to your graphics.</p>
        <p>Our eco-friendly inks ensure vibrant colors that withstand hundreds of washes without fading or cracking.</p>
        <ul style="list-style: none; padding: 0; color: var(--text-secondary); margin-top: 20px;">
          <li style="margin-bottom: 10px;">✓ High-Density Puff Printing</li>
          <li style="margin-bottom: 10px;">✓ Soft-Hand Plastisol & Water-Based Inks</li>
          <li style="margin-bottom: 10px;">✓ Full-Color DTG for intricate artwork</li>
        </ul>
      </div>
      <div class="content-image-wrapper reveal-up" style="transition-delay: 0.2s;">
        <img src="<?= htmlspecialchars($web_images['work_wear_services'][0]['image_path'] ?? 'images/printing.png') ?>" alt="<?= htmlspecialchars($web_images['work_wear_services'][0]['alt_text'] ?? 'Screen Printing') ?>">
      </div>
    </div>

    <div class="content-row reverse">
      <div class="content-text reveal-up">
        <h2>Premium Fabric Sourcing</h2>
        <p>The foundation of luxury streetwear is the fabric. We source and mill premium textiles customized to your exact GSM and blend requirements.</p>
        <p>Whether you need a heavy 500 GSM loopback cotton for hoodies or a breathable, enzyme-washed jersey for vintage tees, our fabric library has it all.</p>
        <ul style="list-style: none; padding: 0; color: var(--text-secondary); margin-top: 20px;">
          <li style="margin-bottom: 10px;">✓ Custom Dyeing & Acid Wash</li>
          <li style="margin-bottom: 10px;">✓ 100% Organic & Combed Cotton</li>
          <li style="margin-bottom: 10px;">✓ Heavyweight French Terry & Fleece</li>
        </ul>
      </div>
      <div class="content-image-wrapper reveal-up" style="transition-delay: 0.2s;">
        <img src="<?= htmlspecialchars($web_images['work_wear_services'][1]['image_path'] ?? 'images/sourcing.jpg') ?>" alt="<?= htmlspecialchars($web_images['work_wear_services'][1]['alt_text'] ?? 'Fabric Selection') ?>">
      </div>
    </div>

    <div class="content-row">
      <div class="content-text reveal-up">
        <h2>Intricate 3D Embroidery</h2>
        <p>Make your logo stand out with premium embroidery services. From classic flat embroidery to raised 3D puff embroidery, our precise multi-head machines handle complex designs flawlessly.</p>
        <p>Perfect for hoodies, beanies, caps, and jackets, adding a tactile, high-end finish to any garment.</p>
      </div>
      <div class="content-image-wrapper reveal-up" style="transition-delay: 0.2s;">
        <img src="<?= htmlspecialchars($web_images['work_wear_services'][2]['image_path'] ?? 'images/embroidery.png') ?>" alt="<?= htmlspecialchars($web_images['work_wear_services'][2]['alt_text'] ?? 'Embroidery') ?>">
      </div>
    </div>
  </section>

  <!-- Specs / MOQ Table Section -->
  <section class="street-section" style="background: var(--bg-deep);">
    <div class="container">
      <div style="text-align: center; margin-bottom: 60px;" class="reveal-up">
        <span style="color: var(--red-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 0.12em; font-size: 0.85rem;">PRODUCTION SPECS</span>
        <h2 style="font-size: clamp(2rem, 4vw, 3rem); margin-top: 10px;">Capabilities at a Glance</h2>
      </div>
      <div class="reveal-up" style="overflow-x: auto;">
        <table style="width: 100%; border-collapse: collapse; font-size: 1rem;">
          <thead>
            <tr style="background: var(--red-accent); color: white;">
              <th style="padding: 18px 24px; text-align: left; font-weight: 700;">Product</th>
              <th style="padding: 18px 24px; text-align: left; font-weight: 700;">Min MOQ</th>
              <th style="padding: 18px 24px; text-align: left; font-weight: 700;">Lead Time</th>
              <th style="padding: 18px 24px; text-align: left; font-weight: 700;">Customization</th>
            </tr>
          </thead>
          <tbody>
            <tr style="border-bottom: 1px solid var(--border-color);">
              <td style="padding: 16px 24px; color: var(--text-color);">Hoodies & Sweatshirts</td>
              <td style="padding: 16px 24px; color: var(--text-secondary);">10 pcs</td>
              <td style="padding: 16px 24px; color: var(--text-secondary);">3-4 Weeks</td>
              <td style="padding: 16px 24px; color: var(--text-secondary);">Embroidery, Printing, Labels</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--border-color); background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 24px; color: var(--text-color);">Oversized T-Shirts</td>
              <td style="padding: 16px 24px; color: var(--text-secondary);">10 pcs</td>
              <td style="padding: 16px 24px; color: var(--text-secondary);">2-3 Weeks</td>
              <td style="padding: 16px 24px; color: var(--text-secondary);">DTG, Screen Print, Labels</td>
            </tr>
            <tr style="border-bottom: 1px solid var(--border-color);">
              <td style="padding: 16px 24px; color: var(--text-color);">Joggers & Cargo Pants</td>
              <td style="padding: 16px 24px; color: var(--text-secondary);">10 pcs</td>
              <td style="padding: 16px 24px; color: var(--text-secondary);">3-4 Weeks</td>
              <td style="padding: 16px 24px; color: var(--text-secondary);">Zipper Pockets, Labels, Dye</td>
            </tr>
            <tr style="background: rgba(255,255,255,0.02);">
              <td style="padding: 16px 24px; color: var(--text-color);">Jackets & Outerwear</td>
              <td style="padding: 16px 24px; color: var(--text-secondary);">10 pcs</td>
              <td style="padding: 16px 24px; color: var(--text-secondary);">4-5 Weeks</td>
              <td style="padding: 16px 24px; color: var(--text-secondary);">Full Custom, Lining, Patches</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="street-section container">
    <div style="text-align: center; margin-bottom: 60px;" class="reveal-up">
      <span style="color: var(--red-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 0.12em; font-size: 0.85rem;">FAQ</span>
      <h2 style="font-size: clamp(2rem, 4vw, 3rem); margin-top: 10px;">Common Questions</h2>
    </div>
    <div style="max-width: 800px; margin: 0 auto;">
      <div class="faq-item reveal-up">
        <div class="faq-question">
          <h3 style="font-size: 1.1rem;">What is the minimum order quantity for streetwear?</h3>
          <span style="font-size: 1.5rem; color: var(--red-accent);">+</span>
        </div>
        <div class="faq-answer">
          <p>Our minimum order quantity (MOQ) for streetwear is just 10 pieces per style. This makes us the ideal manufacturing partner for emerging brands and startups.</p>
        </div>
      </div>
      <div class="faq-item reveal-up">
        <div class="faq-question">
          <h3 style="font-size: 1.1rem;">Can I get samples before placing a bulk order?</h3>
          <span style="font-size: 1.5rem; color: var(--red-accent);">+</span>
        </div>
        <div class="faq-answer">
          <p>Yes, we provide pre-production samples within 7–10 days after design approval. Sample cost is applicable and will be deducted from your first bulk order.</p>
        </div>
      </div>
      <div class="faq-item reveal-up">
        <div class="faq-question">
          <h3 style="font-size: 1.1rem;">Do you offer private label packaging?</h3>
          <span style="font-size: 1.5rem; color: var(--red-accent);">+</span>
        </div>
        <div class="faq-answer">
          <p>Absolutely. We offer full private labeling, including custom woven labels, hang tags, polybag packaging, and branded boxes, ensuring your brand identity is present from garment to delivery.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Banner -->
  <section class="whatsapp-cta-banner">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px;">
      <div>
        <h3 style="font-size: 1.5rem; font-weight: 800; margin-bottom: 4px;">Ready to Outfit Your Workforce?</h3>
        <p style="color: rgba(255,255,255,0.75); font-size: 0.95rem;">Get a free quote within 12 hours. Min MOQ 10 pcs.</p>
      </div>
      <div style="display: flex; gap: 16px; flex-wrap: wrap;">
        <a href="https://wa.me/923147560683?text=Hi%2C%20I%27m%20interested%20in%20Work%20Wear%20manufacturing%20with%20Primgar%20Wears." target="_blank" rel="noopener noreferrer" class="btn-whatsapp-cta magnetic">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink:0;"><path d="M12 2C6.477 2 2 6.477 2 12c0 1.884.52 3.654 1.423 5.176L2.04 21.724a.5.5 0 00.636.636l4.548-1.383A9.957 9.957 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18c-1.505 0-2.927-.41-4.147-1.12l-.29-.17-3.007.915.929-2.947-.19-.302A7.96 7.96 0 014 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8z"/></svg>
          WhatsApp Us Now
        </a>
        <a href="index.php#rfq" class="btn btn-secondary magnetic" style="border-radius: 8px; padding: 14px 28px;">
          Get a Quote →
        </a>
      </div>
    </div>
  </section>

  <!-- Sticky Actions (WhatsApp CTA) -->
  <div class="sticky-actions">
    <a href="https://wa.me/923147560683" class="float-btn float-whatsapp magnetic" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor">
        <path d="M12 2C6.477 2 2 6.477 2 12c0 1.884.52 3.654 1.423 5.176L2.04 21.724a.5.5 0 00.636.636l4.548-1.383A9.957 9.957 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm.05 18.25c-1.573 0-3.094-.416-4.44-1.207a.5.5 0 00-.472-.036l-2.9 0.883 0.883-2.9a.5.5 0 00-.036-.472c-.791-1.346-1.207-2.867-1.207-4.44 0-4.825 3.925-8.75 8.75-8.75s8.75 3.925 8.75 8.75-3.925 8.75-8.75 8.75z"/>
      </svg>
    </a>
  </div>

  <!-- Footer -->
  <?php include __DIR__ . '/../partials/footer.php'; ?>

  <!-- GSAP & Lenis -->
  <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
  <script src="app.js"></script>
</body>
</html>
