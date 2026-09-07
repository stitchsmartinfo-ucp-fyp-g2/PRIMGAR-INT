<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>Street Wear Manufacturing | Primgar International</title>
  <meta name="description" content="Custom Street Wear Manufacturing at Primgar International. Hoodies, Sweatshirts, T-Shirts, Bottoms, and Jackets.">
  
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

    /* Product Slider */
    .product-slider-wrapper {
      position: relative;
      width: 100%;
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 50px;
    }
    .static-product-scroller {
      width: 100%;
      overflow-x: auto;
      scrollbar-width: none;
      display: flex;
      gap: 30px;
      padding: 20px 0;
    }
    .static-product-scroller::-webkit-scrollbar {
      display: none;
    }
    .static-item {
      width: 280px;
      flex-shrink: 0;
      text-align: center;
    }
    .static-item img {
      width: 100%;
      height: 300px;
      object-fit: contain;
      border-radius: 8px;
      background: #fff;
      padding: 10px;
    }
    .static-item h3 {
      font-size: 1.1rem;
      color: var(--text-color);
      margin-top: 20px;
      white-space: normal;
      font-weight: bold;
    }
    .slider-btn {
      position: absolute;
      top: 45%;
      transform: translateY(-50%);
      background: var(--red-accent);
      color: white;
      border: none;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      cursor: pointer;
      z-index: 10;
      font-size: 1.2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background 0.3s;
    }
    .slider-btn:hover {
      background: white;
      color: var(--red-accent);
    }
    .slider-btn.prev { left: 0; }
    .slider-btn.next { right: 0; }
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
      <h1 class="reveal-up">Street Wear</h1>
      <div class="breadcrumb reveal-up" style="transition-delay: 0.1s;">
        <a href="index.php">Home</a> / Street Wear
      </div>
    </div>
  </section>

  <!-- Alimber Static Content Layout -->
  <section class="street-section" style="text-align: center; padding-top: 80px;">
    <div class="container reveal-up" style="max-width: 850px; margin: 0 auto;">
      <h2 style="font-size: clamp(1.8rem, 3vw, 2.5rem); margin-bottom: 20px; line-height: 1.3;">Discover Variety of Premium Options with<br>Street Wear Manufacturer.</h2>
      <p style="color: var(--text-secondary); font-size: 1.1rem; line-height: 1.6; margin-bottom: 40px;">
        Stay ahead of the curve with Primgar International' street wear solutions. We help bold and ambitious brands bring their edgy, urban visions to life through high-quality, fashion-forward apparel. From statement-making graphics to comfortable, wearable designs, our street wear expertise ensures your brand makes a lasting impact on the streets and in the market.
      </p>
      <a href="index.php#rfq" class="btn btn-primary" style="padding: 15px 40px; font-weight: bold;">GET QUOTE</a>
    </div>
  </section>

  <!-- Animated Product Scroller -->
  <div class="product-slider-wrapper reveal-up">
    <button class="slider-btn prev" id="sliderPrev">&#10094;</button>
    <button class="slider-btn next" id="sliderNext">&#10095;</button>
    
    <div class="static-product-scroller" id="productScroller">
      <!-- Original Set -->
      <div class="static-item">
        <img src="<?= htmlspecialchars($web_images['street_wear_products'][0]['image_path'] ?? 'images/cat_streetwear.png') ?>" alt="<?= htmlspecialchars($web_images['street_wear_products'][0]['alt_text'] ?? 'Oversize T-Shirt') ?>">
        <h3>Oversize T-Shirt</h3>
      </div>
      <div class="static-item">
        <img src="<?= htmlspecialchars($web_images['street_wear_products'][1]['image_path'] ?? 'images/embroidery.png') ?>" alt="<?= htmlspecialchars($web_images['street_wear_products'][1]['alt_text'] ?? 'Oversize Hoodie') ?>">
        <h3>Oversize Hoodie</h3>
      </div>
      <div class="static-item">
        <img src="<?= htmlspecialchars($web_images['street_wear_products'][2]['image_path'] ?? 'images/printing.png') ?>" alt="<?= htmlspecialchars($web_images['street_wear_products'][2]['alt_text'] ?? 'Oversize Acid-Wash Hoodie') ?>">
        <h3>Oversize Acid-Wash Hoodie</h3>
      </div>
      <div class="static-item">
        <img src="<?= htmlspecialchars($web_images['street_wear_products'][3]['image_path'] ?? 'images/patternmaking.png') ?>" alt="<?= htmlspecialchars($web_images['street_wear_products'][3]['alt_text'] ?? 'Cotton Denim Oversize Jacket') ?>">
        <h3>Cotton Denim Oversize Jacket</h3>
      </div>
      <div class="static-item">
        <img src="<?= htmlspecialchars($web_images['street_wear_products'][4]['image_path'] ?? 'images/finishing.jpg') ?>" alt="<?= htmlspecialchars($web_images['street_wear_products'][4]['alt_text'] ?? 'Cargo Pants') ?>">
        <h3>Cargo Pants</h3>
      </div>

      <!-- Duplicated Set for infinite loop -->
      <div class="static-item">
        <img src="<?= htmlspecialchars($web_images['street_wear_products'][0]['image_path'] ?? 'images/cat_streetwear.png') ?>" alt="<?= htmlspecialchars($web_images['street_wear_products'][0]['alt_text'] ?? 'Oversize T-Shirt') ?>">
        <h3>Oversize T-Shirt</h3>
      </div>
      <div class="static-item">
        <img src="<?= htmlspecialchars($web_images['street_wear_products'][1]['image_path'] ?? 'images/embroidery.png') ?>" alt="<?= htmlspecialchars($web_images['street_wear_products'][1]['alt_text'] ?? 'Oversize Hoodie') ?>">
        <h3>Oversize Hoodie</h3>
      </div>
      <div class="static-item">
        <img src="<?= htmlspecialchars($web_images['street_wear_products'][2]['image_path'] ?? 'images/printing.png') ?>" alt="<?= htmlspecialchars($web_images['street_wear_products'][2]['alt_text'] ?? 'Oversize Acid-Wash Hoodie') ?>">
        <h3>Oversize Acid-Wash Hoodie</h3>
      </div>
      <div class="static-item">
        <img src="<?= htmlspecialchars($web_images['street_wear_products'][3]['image_path'] ?? 'images/patternmaking.png') ?>" alt="<?= htmlspecialchars($web_images['street_wear_products'][3]['alt_text'] ?? 'Cotton Denim Oversize Jacket') ?>">
        <h3>Cotton Denim Oversize Jacket</h3>
      </div>
      <div class="static-item">
        <img src="<?= htmlspecialchars($web_images['street_wear_products'][4]['image_path'] ?? 'images/finishing.jpg') ?>" alt="<?= htmlspecialchars($web_images['street_wear_products'][4]['alt_text'] ?? 'Cargo Pants') ?>">
        <h3>Cargo Pants</h3>
      </div>
    </div>
  </div>

  <div style="height: 100px;"></div> <!-- Spacer before footer -->

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
        <h3 style="font-size: 1.5rem; font-weight: 800; margin-bottom: 4px;">Ready to Launch Your Streetwear Brand?</h3>
        <p style="color: rgba(255,255,255,0.75); font-size: 0.95rem;">Get a free quote within 12 hours. Min MOQ 10 pcs.</p>
      </div>
      <div style="display: flex; gap: 16px; flex-wrap: wrap;">
        <a href="https://wa.me/923147560683?text=Hi%2C%20I%27m%20interested%20in%20Street%20Wear%20manufacturing%20with%20Primgar%20Wears." target="_blank" rel="noopener noreferrer" class="btn-whatsapp-cta magnetic">
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
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const scroller = document.getElementById('productScroller');
      const prevBtn = document.getElementById('sliderPrev');
      const nextBtn = document.getElementById('sliderNext');
      const itemWidth = 310; // 280px width + 30px gap

      let animationId;
      let isPaused = false;

      function continuousScroll() {
        if (!scroller || isPaused) return;
        
        // If we reached the end, reset to start smoothly
        if (scroller.scrollLeft + scroller.clientWidth >= scroller.scrollWidth - 2) {
          scroller.scrollLeft = 0;
        } else {
          scroller.scrollLeft += 1.5; // Adjust speed here
        }
        
        animationId = requestAnimationFrame(continuousScroll);
      }

      function startScroll() {
        if (!isPaused) return;
        isPaused = false;
        animationId = requestAnimationFrame(continuousScroll);
      }

      function stopScroll() {
        isPaused = true;
        cancelAnimationFrame(animationId);
      }

      // Start initially (if paused flag is manually bypassed)
      isPaused = true; 
      startScroll();

      function moveRight() {
        if (!scroller) return;
        if (scroller.scrollLeft + scroller.clientWidth >= scroller.scrollWidth - 10) {
          scroller.scrollTo({ left: 0, behavior: 'smooth' });
        } else {
          scroller.scrollBy({ left: itemWidth, behavior: 'smooth' });
        }
      }

      function moveLeft() {
        if (!scroller) return;
        if (scroller.scrollLeft <= 0) {
          scroller.scrollTo({ left: scroller.scrollWidth, behavior: 'smooth' });
        } else {
          scroller.scrollBy({ left: -itemWidth, behavior: 'smooth' });
        }
      }

      function handleManualScroll(moveFunc) {
        stopScroll(); 
        moveFunc();   
        setTimeout(startScroll, 600); // Resume continuous scroll after smooth transition
      }

      if (nextBtn) {
        nextBtn.addEventListener('click', () => handleManualScroll(moveRight));
      }

      if (prevBtn) {
        prevBtn.addEventListener('click', () => handleManualScroll(moveLeft));
      }

      if (scroller) {
        scroller.addEventListener('mouseenter', stopScroll);
        scroller.addEventListener('mouseleave', startScroll);
        
        scroller.addEventListener('touchstart', stopScroll);
        scroller.addEventListener('touchend', () => setTimeout(startScroll, 600));
      }
    });
  </script>
</body>
</html>
