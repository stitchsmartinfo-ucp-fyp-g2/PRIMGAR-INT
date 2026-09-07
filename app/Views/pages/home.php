<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Primary Meta Tags -->
  <title>Premium B2B Apparel Manufacturer & Clothing Supplier | Primgar International</title>
  <meta name="title" content="Premium B2B Apparel Manufacturer & Clothing Supplier | Primgar International">
  <meta name="description" content="Primgar International is a world-class premium B2B clothing manufacturer specializing in custom streetwear, fashion wear, sportswear, and private label services. Globally trusted supplier for brands in USA, UK, Canada, & Europe.">
  <meta name="keywords" content="B2B clothing manufacturer, apparel production, custom streetwear manufacturer, private label clothing manufacturer, wholesale clothing supplier, sportswear factory, apparel sourcing, Primgar International">
  <meta name="robots" content="index, follow">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://primgarinternational.com/">
  <meta property="og:title" content="Premium B2B Apparel Manufacturer | Primgar International">
  <meta property="og:description" content="Premium private label apparel manufacturer for global streetwear, sportswear, and fashion brands. State-of-the-art sewing & fabric sourcing.">
  <meta property="og:image" content="https://primgarinternational.com/images/cat_streetwear.png">

  <!-- Canonical URL -->
  <link rel="canonical" href="https://primgarinternational.com/">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="index.css">

  <!-- Structured Data / Schema.org -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "https://primgarinternational.com/#organization",
        "name": "Primgar International",
        "url": "https://primgarinternational.com/",
        "logo": "https://primgarinternational.com/images/cat_streetwear.png",
        "sameAs": [
          "https://www.linkedin.com/company/102901404",
          "https://www.instagram.com/primgar_intl/",
          "https://www.tiktok.com/@primgar_intl",
          "https://www.facebook.com/PRIMGARINTERNATIONAL"
        ]
      },
      {
        "@type": "LocalBusiness",
        "@id": "https://primgarinternational.com/#localbusiness",
        "name": "Primgar International Headquarters",
        "image": "https://primgarinternational.com/images/stitching2.jpg",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Shah street moh nasir road",
          "addressLocality": "Sialkot",
          "addressRegion": "Punjab",
          "postalCode": "51310",
          "addressCountry": "PK"
        },
        "telephone": "+923147560683",
        "priceRange": "$$$$"
      }
    ]
  }
  </script>
</head>
<body class="smooth-scroll">

  <?php if (!empty($successMessage) || !empty($errorMessage)): ?>
    <div style="background: <?= !empty($errorMessage) ? '#7f1d1d' : 'var(--red-glow-strong)' ?>; border-bottom: 2px solid var(--red-bright); padding: 16px; text-align: center; font-weight: 600; font-family: var(--font-display); position: fixed; top: 0; left: 0; width: 100%; z-index: 2000; color: white;">
      <?= htmlspecialchars($successMessage ?: $errorMessage, ENT_QUOTES, 'UTF-8') ?>
      <button type="button" onclick="this.parentElement.style.display='none'" style="margin-left: 20px; background: transparent; border: none; color: white; cursor: pointer; font-size: 1.2rem;">&times;</button>
    </div>
  <?php endif; ?>

  <!-- Sticky Header -->
  <header id="main-header">
    <div class="container nav-container">
      <a href="#" class="logo" id="header-logo" style="display: flex; align-items: center;">
        <img src="<?= htmlspecialchars($web_images['home_hero'][0]['image_path'] ?? 'images/primgar-logo.png') ?>" alt="<?= htmlspecialchars($web_images['home_hero'][0]['alt_text'] ?? 'Primgar International Logo') ?>" style="height: 45px; width: auto;">
      </a>
      <nav aria-label="Main Navigation">
        <ul class="nav-menu" id="nav-links">
          <li><a href="#about" class="nav-link magnetic">About</a></li>
          <li><a href="#products" class="nav-link magnetic">Products</a></li>
          <li><a href="#services" class="nav-link magnetic">Services</a></li>
          <li><a href="#process" class="nav-link magnetic">Process</a></li>
          <li><a href="#fabrics" class="nav-link magnetic">Fabric Library</a></li>
          <li><a href="#rfq" class="nav-link magnetic">RFQ Calculator</a></li>
          <li><a href="#faq" class="nav-link magnetic">FAQs</a></li>
        </ul>
      </nav>
      <a href="#rfq" class="lux-cta-primary magnetic" id="btn-header-cta" style="padding: 10px 20px; font-size: 0.9rem;">Get Quote</a>
      <button class="mobile-menu-toggle" id="mobile-toggle" type="button" aria-label="Open navigation" aria-controls="nav-links" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <!-- ===================== HERO ===================== -->
  <section class="lux-hero" id="hero">

    <!-- Animated canvas background (threads/particles drawn via JS) -->
    <canvas id="hero-canvas" class="lux-hero__canvas" aria-hidden="true"></canvas>

    <!-- Floating red glow orbs -->
    <div class="lux-orb lux-orb--1" aria-hidden="true"></div>
    <div class="lux-orb lux-orb--2" aria-hidden="true"></div>
    <div class="lux-orb lux-orb--3" aria-hidden="true"></div>

    <div class="lux-hero__inner container">

      <!-- ── Left: Copy ── -->
      <div class="lux-hero__copy">

        <!-- Pill badge -->
        <div class="lux-hero__badge" data-anim="fade-up" data-delay="0">
          <span class="lux-hero__badge-dot"></span>
          SIALKOT, PAKISTAN · EST. MANUFACTURING EXCELLENCE
        </div>

        <!-- Kinetic headline -->
        <h1 class="lux-hero__title" aria-label="Premium Apparel Manufacturing For Modern Brands">
          <span class="lux-word" data-anim="word" data-delay="120">Premium</span>
          <span class="lux-word" data-anim="word" data-delay="210">Apparel</span><br>
          <span class="lux-word lux-word--red" data-anim="word" data-delay="320">Manufacturing</span><br>
          <span class="lux-word" data-anim="word" data-delay="430">For</span>
          <span class="lux-word" data-anim="word" data-delay="500">Modern</span>
          <span class="lux-word lux-word--stroke" data-anim="word" data-delay="590">Brands</span>
        </h1>

        <!-- Descriptor -->
        <p class="lux-hero__desc" data-anim="fade-up" data-delay="700">
          From concept to creation — we engineer high-quality garments that define your brand. Trusted by 1,000+ labels across 50+ countries.
        </p>

        <!-- CTAs -->
        <div class="lux-hero__ctas" data-anim="fade-up" data-delay="860">
          <a href="#rfq" class="lux-cta-primary" id="btn-hero-rfq">
            <span>Get Instant Quote</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#process" class="lux-cta-ghost" id="btn-hero-tour">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M10 8l6 4-6 4V8z" fill="currentColor"/></svg>
            <span>Watch Process</span>
          </a>
        </div>

        <!-- Floating trust chips -->
        <div class="lux-trust-row" data-anim="fade-up" data-delay="1020">
          <div class="lux-trust-chip">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--red-bright)"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            Low MOQ · 100 pcs
          </div>
          <div class="lux-trust-chip">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--red-bright)"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            Private Label Ready
          </div>
          <div class="lux-trust-chip">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="var(--red-bright)"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            Global Shipping
          </div>
        </div>

      </div>

      <!-- ── Right: Visual Stack ── -->
      <div class="lux-hero__visual" data-anim="fade-left" data-delay="400">

        <!-- Main large card -->
        <div class="lux-card lux-card--main">
          <img src="<?= htmlspecialchars($web_images['home_services'][0]['image_path'] ?? 'images/embroidery.png') ?>" alt="<?= htmlspecialchars($web_images['home_services'][0]['alt_text'] ?? 'Premium embroidery on custom garment') ?>" loading="eager">
          <div class="lux-card__label">
            <span class="lux-card__label-dot"></span>
            Precision Embroidery
          </div>
        </div>

        <!-- Floating mini card top-right -->
        <div class="lux-card lux-card--float lux-card--tl">
          <img src="<?= htmlspecialchars($web_images['home_services'][1]['image_path'] ?? 'images/screenprinting.png') ?>" alt="<?= htmlspecialchars($web_images['home_services'][1]['alt_text'] ?? 'Screen printing process') ?>" loading="lazy">
          <div class="lux-card__label">Screen Print</div>
        </div>

        <!-- Floating mini card bottom-left -->
        <div class="lux-card lux-card--float lux-card--br">
          <img src="<?= htmlspecialchars($web_images['home_services'][2]['image_path'] ?? 'images/patternmaking.png') ?>" alt="<?= htmlspecialchars($web_images['home_services'][2]['alt_text'] ?? 'Pattern cutting') ?>" loading="lazy">
          <div class="lux-card__label">Pattern Cut</div>
        </div>

        <!-- Stat bubble -->
        <div class="lux-stat-bubble">
          <strong id="hero-counter-brands" data-target="1000" data-suffix="+">0</strong>
          <span>Brands<br>Served</span>
        </div>

        <!-- Vertical text decoration -->
        <div class="lux-vert-text" aria-hidden="true">PRIMGAR · INTERNATIONAL · 2024 · PKG · CERTIFIED ·</div>

      </div>

    </div>

    <!-- Stats bottom strip -->
    <div class="lux-hero__stats">
      <div class="lux-stat-item">
        <span class="lux-stat-num" data-target="50" data-suffix="+">0</span>
        <span class="lux-stat-label">Countries Served</span>
      </div>
      <div class="lux-stat-sep"></div>
      <div class="lux-stat-item">
        <span class="lux-stat-num" data-target="1000" data-suffix="+">0</span>
        <span class="lux-stat-label">Brands Trust Us</span>
      </div>
      <div class="lux-stat-sep"></div>
      <div class="lux-stat-item">
        <span class="lux-stat-num" data-target="5" data-suffix="M+">0</span>
        <span class="lux-stat-label">Garments Produced</span>
      </div>
      <div class="lux-stat-sep"></div>
      <div class="lux-stat-item">
        <span class="lux-stat-num" data-target="99" data-suffix="%">0</span>
        <span class="lux-stat-label">On-Time Delivery</span>
      </div>
    </div>

  </section>




  <!-- What We Do Section -->
  <section class="section solutions-section" id="about" style="border-top: 1px solid var(--border-color); background: var(--bg-deep);">
    <div class="container">
      <div class="solutions-heading" style="text-align: center; margin-bottom: 60px;">
        <span style="color: var(--red-accent); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.12em;">WHAT WE DO</span>
        <h2 style="font-weight: 800; margin-top: 6px;">End-to-End Manufacturing Solutions</h2>
        <p style="color: var(--text-secondary); font-size: 0.95rem; max-width: 600px; margin: 10px auto 0;">Everything you need to build a successful clothing brand.</p>
      </div>
      
      <div class="solutions-grid">
        <div class="solution-card reveal-up">
          <svg class="solution-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.656 48.656 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3M12 3v18m0-18L9 6m3-3l3 3M4.5 12l3 3m-3-3l-3 3"></path></svg>
          <h3>OEM Manufacturing</h3>
          <p>Bring your designs, we'll handle the rest.</p>
        </div>
        <div class="solution-card reveal-up">
          <svg class="solution-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
          <h3>Custom Design & Sampling</h3>
          <p>From tech pack to perfect sample.</p>
        </div>
        <div class="solution-card reveal-up">
          <svg class="solution-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
          <h3>Printing & Embroidery</h3>
          <p>DTG, Screen, Sublimation, Embroidery & more.</p>
        </div>
        <div class="solution-card reveal-up">
          <svg class="solution-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 7h10M7 12h10m-3 5h3M4 6h16a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2z"></path></svg>
          <h3>Private Label</h3>
          <p>Build your brand with our expert team.</p>
        </div>
        <div class="solution-card reveal-up">
          <svg class="solution-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
          <h3>Packaging Solutions</h3>
          <p>Custom labels, tags & packaging.</p>
        </div>
        <div class="solution-card reveal-up">
          <svg class="solution-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h1.5A1.5 1.5 0 0018 10.5V9.75A2.75 2.75 0 0120.75 7h.045M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path></svg>
          <h3>Global Logistics</h3>
          <p>Worldwide shipping made simple.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Categories Showcase Section -->
  <section class="section bg-red-alt" id="products">
    <div class="container">
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: var(--red-accent); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.12em;">OUR CATEGORIES</span>
        <h2 style="font-weight: 800; margin-top: 6px;">Crafted For Every Style</h2>
        <p style="color: var(--text-secondary); font-size: 0.95rem;">Premium quality apparel for every niche and need.</p>
      </div>
      
      <div class="cat-showcase-grid">

        <!-- STREET WEAR -->
        <a href="street-wear.php" class="cat-showcase-card" id="cat-streetwear">
          <div class="cat-showcase-bg" style="background-image:url('images/cat_streetwear.png');"></div>
          <div class="cat-showcase-overlay"></div>
          <div class="cat-showcase-content">
            <div class="cat-showcase-top">
              <span class="cat-badge">Street Wear</span>
              <span class="cat-explore-arrow">Explore →</span>
            </div>
            <div class="cat-scroller-wrap">
              <div class="cat-scroller">
                <span>Hoodies</span><span class="sep">✦</span>
                <span>Sweatshirts</span><span class="sep">✦</span>
                <span>Oversized T-Shirts</span><span class="sep">✦</span>
                <span>Crewneck Sweatshirts</span><span class="sep">✦</span>
                <span>Zip-Up Hoodies</span><span class="sep">✦</span>
                <span>Pullover Hoodies</span><span class="sep">✦</span>
                <span>Jogger Pants</span><span class="sep">✦</span>
                <span>Cargo Pants</span><span class="sep">✦</span>
                <span>Cargo Shorts</span><span class="sep">✦</span>
                <span>Track Pants</span><span class="sep">✦</span>
                <span>Sweatpants</span><span class="sep">✦</span>
                <span>Bomber Jackets</span><span class="sep">✦</span>
                <span>Varsity Jackets</span><span class="sep">✦</span>
                <span>Windbreakers</span><span class="sep">✦</span>
                <span>Quarter-Zip Pullovers</span><span class="sep">✦</span>
                <span>Beanies</span><span class="sep">✦</span>
                <!-- duplicate for seamless loop -->
                <span>Hoodies</span><span class="sep">✦</span>
                <span>Sweatshirts</span><span class="sep">✦</span>
                <span>Oversized T-Shirts</span><span class="sep">✦</span>
                <span>Crewneck Sweatshirts</span><span class="sep">✦</span>
                <span>Zip-Up Hoodies</span><span class="sep">✦</span>
                <span>Pullover Hoodies</span><span class="sep">✦</span>
                <span>Jogger Pants</span><span class="sep">✦</span>
                <span>Cargo Pants</span><span class="sep">✦</span>
              </div>
            </div>
          </div>
        </a>

        <!-- FASHION WEAR -->
        <a href="fashion-wear.php" class="cat-showcase-card" id="cat-fashionwear">
          <div class="cat-showcase-bg" style="background-image:url('images/cat_fashionwear.png');"></div>
          <div class="cat-showcase-overlay"></div>
          <div class="cat-showcase-content">
            <div class="cat-showcase-top">
              <span class="cat-badge">Fashion Wear</span>
              <span class="cat-explore-arrow">Explore →</span>
            </div>
            <div class="cat-scroller-wrap">
              <div class="cat-scroller">
                <span>Blazers</span><span class="sep">✦</span>
                <span>Co-ord Sets</span><span class="sep">✦</span>
                <span>Cropped Jackets</span><span class="sep">✦</span>
                <span>Dress Shirts</span><span class="sep">✦</span>
                <span>Formal Trousers</span><span class="sep">✦</span>
                <span>Wide-Leg Pants</span><span class="sep">✦</span>
                <span>Straight-Leg Jeans</span><span class="sep">✦</span>
                <span>Maxi Dresses</span><span class="sep">✦</span>
                <span>Mini Dresses</span><span class="sep">✦</span>
                <span>Polo Shirts</span><span class="sep">✦</span>
                <span>Button-Down Shirts</span><span class="sep">✦</span>
                <span>Knit Tops</span><span class="sep">✦</span>
                <span>Skirts</span><span class="sep">✦</span>
                <span>Blouses</span><span class="sep">✦</span>
                <span>Cardigans</span><span class="sep">✦</span>
                <span>Vests</span><span class="sep">✦</span>
                <!-- duplicate -->
                <span>Blazers</span><span class="sep">✦</span>
                <span>Co-ord Sets</span><span class="sep">✦</span>
                <span>Cropped Jackets</span><span class="sep">✦</span>
                <span>Dress Shirts</span><span class="sep">✦</span>
                <span>Formal Trousers</span><span class="sep">✦</span>
                <span>Wide-Leg Pants</span><span class="sep">✦</span>
              </div>
            </div>
          </div>
        </a>

        <!-- SPORTS WEAR -->
        <a href="sports-wear.php" class="cat-showcase-card" id="cat-sportswear">
          <div class="cat-showcase-bg" style="background-image:url('images/cat_sportswear.png');"></div>
          <div class="cat-showcase-overlay"></div>
          <div class="cat-showcase-content">
            <div class="cat-showcase-top">
              <span class="cat-badge">Sports Wear</span>
              <span class="cat-explore-arrow">Explore →</span>
            </div>
            <div class="cat-scroller-wrap">
              <div class="cat-scroller">
                <span>Training Shorts</span><span class="sep">✦</span>
                <span>Compression Tights</span><span class="sep">✦</span>
                <span>Performance T-Shirts</span><span class="sep">✦</span>
                <span>Sports Bras</span><span class="sep">✦</span>
                <span>Gym Leggings</span><span class="sep">✦</span>
                <span>Track Suits</span><span class="sep">✦</span>
                <span>Cycling Jerseys</span><span class="sep">✦</span>
                <span>Football Jerseys</span><span class="sep">✦</span>
                <span>Basketball Uniforms</span><span class="sep">✦</span>
                <span>Running Jackets</span><span class="sep">✦</span>
                <span>Tank Tops</span><span class="sep">✦</span>
                <span>Polo Sports Shirts</span><span class="sep">✦</span>
                <span>Hooded Training Tops</span><span class="sep">✦</span>
                <span>Zip-Up Sports Jackets</span><span class="sep">✦</span>
                <span>Swimwear</span><span class="sep">✦</span>
                <!-- duplicate -->
                <span>Training Shorts</span><span class="sep">✦</span>
                <span>Compression Tights</span><span class="sep">✦</span>
                <span>Performance T-Shirts</span><span class="sep">✦</span>
                <span>Sports Bras</span><span class="sep">✦</span>
                <span>Gym Leggings</span><span class="sep">✦</span>
              </div>
            </div>
          </div>
        </a>

        <!-- WORK WEAR -->
        <a href="work-wear.php" class="cat-showcase-card" id="cat-workwear">
          <div class="cat-showcase-bg" style="background-image:url('images/cat_workwear.png');"></div>
          <div class="cat-showcase-overlay"></div>
          <div class="cat-showcase-content">
            <div class="cat-showcase-top">
              <span class="cat-badge">Work Wear</span>
              <span class="cat-explore-arrow">Explore →</span>
            </div>
            <div class="cat-scroller-wrap">
              <div class="cat-scroller">
                <span>Cargo Work Pants</span><span class="sep">✦</span>
                <span>Hi-Vis Jackets</span><span class="sep">✦</span>
                <span>Coveralls</span><span class="sep">✦</span>
                <span>Work Shirts</span><span class="sep">✦</span>
                <span>Safety Vests</span><span class="sep">✦</span>
                <span>Chef Uniforms</span><span class="sep">✦</span>
                <span>Medical Scrubs</span><span class="sep">✦</span>
                <span>Security Uniforms</span><span class="sep">✦</span>
                <span>Mechanic Overalls</span><span class="sep">✦</span>
                <span>Polo Work Shirts</span><span class="sep">✦</span>
                <span>Fleece Work Jackets</span><span class="sep">✦</span>
                <span>Aprons</span><span class="sep">✦</span>
                <span>Boiler Suits</span><span class="sep">✦</span>
                <span>Corporate Shirts</span><span class="sep">✦</span>
                <span>Warehouse Jackets</span><span class="sep">✦</span>
                <!-- duplicate -->
                <span>Cargo Work Pants</span><span class="sep">✦</span>
                <span>Hi-Vis Jackets</span><span class="sep">✦</span>
                <span>Coveralls</span><span class="sep">✦</span>
                <span>Work Shirts</span><span class="sep">✦</span>
                <span>Safety Vests</span><span class="sep">✦</span>
              </div>
            </div>
          </div>
        </a>

      </div>

      <!-- Features Strip -->
      <div class="features-strip">
        <div class="feature-strip-item">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--red-bright);"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
          <div>
            <h4>LOW MOQ</h4>
            <p>Flexible quantity for all brands</p>
          </div>
        </div>
        <div class="feature-strip-item">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--red-bright);"><circle cx="12" cy="12" r="10"></circle><path d="M12 8v4l3 3"></path></svg>
          <div>
            <h4>PREMIUM QUALITY</h4>
            <p>International standards</p>
          </div>
        </div>
        <div class="feature-strip-item">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--red-bright);"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
          <div>
            <h4>FAST PRODUCTION</h4>
            <p>On-time delivery setup</p>
          </div>
        </div>
        <div class="feature-strip-item">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--red-bright);"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
          <div>
            <h4>GLOBAL SHIPPING</h4>
            <p>Worldwide door-to-door delivery</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section class="section" id="services">
    <div class="container">
      <div style="text-align: center; margin-bottom: 60px;">
        <span style="color: var(--red-accent); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.1em;">Custom Customizations</span>
        <h2>Our Manufacturing Capabilities</h2>
      </div>
      
      <div class="customization-grid">
        <!-- Card 1 -->
        <a href="#rfq" class="customization-card">
          <div class="customization-img-wrapper">
            <img src="<?= htmlspecialchars($web_images['home_customization'][0]['image_path'] ?? 'images/embroidery.png') ?>" alt="<?= htmlspecialchars($web_images['home_customization'][0]['alt_text'] ?? 'Custom 3D puff embroidery on black fleece garment') ?>" loading="lazy">
          </div>
          <div class="customization-info">
            <h3 class="customization-title">Custom Embroidery</h3>
            <span class="customization-action">Learn More &rarr;</span>
          </div>
        </a>

        <!-- Card 2 -->
        <a href="#" onclick="openLabelModal(); return false;" class="customization-card">
          <div class="customization-img-wrapper">
            <img src="<?= htmlspecialchars($web_images['home_customization'][1]['image_path'] ?? 'images/labeling.png') ?>" alt="<?= htmlspecialchars($web_images['home_customization'][1]['alt_text'] ?? 'Premium private labeling cardboard hang tags') ?>" loading="lazy">
          </div>
          <div class="customization-info">
            <h3 class="customization-title">Private Labeling</h3>
            <span class="customization-action">View Options &rarr;</span>
          </div>
        </a>

        <!-- Card 3 -->
        <a href="#rfq" class="customization-card">
          <div class="customization-img-wrapper">
            <img src="<?= htmlspecialchars($web_images['home_customization'][2]['image_path'] ?? 'images/printing.png') ?>" alt="<?= htmlspecialchars($web_images['home_customization'][2]['alt_text'] ?? 'Sublimation printing on high-performance athletic apparel') ?>" loading="lazy">
          </div>
          <div class="customization-info">
            <h3 class="customization-title">Sublimation Printing</h3>
            <span class="customization-action">Learn More &rarr;</span>
          </div>
        </a>

        <!-- Card 4 -->
        <a href="#rfq" class="customization-card">
          <div class="customization-img-wrapper">
            <img src="<?= htmlspecialchars($web_images['home_customization'][3]['image_path'] ?? 'images/screenprinting.png') ?>" alt="<?= htmlspecialchars($web_images['home_customization'][3]['alt_text'] ?? 'Manual screen printing press applying red ink') ?>" loading="lazy">
          </div>
          <div class="customization-info">
            <h3 class="customization-title">Screen Printing</h3>
            <span class="customization-action">Learn More &rarr;</span>
          </div>
        </a>

        <!-- Card 5 -->
        <a href="#rfq" class="customization-card">
          <div class="customization-img-wrapper">
            <img src="<?= htmlspecialchars($web_images['home_customization'][4]['image_path'] ?? 'images/patternmaking.png') ?>" alt="<?= htmlspecialchars($web_images['home_customization'][4]['alt_text'] ?? 'Precision fashion pattern drafting and sizing') ?>" loading="lazy">
          </div>
          <div class="customization-info">
            <h3 class="customization-title">Custom Sizing & Patterns</h3>
            <span class="customization-action">Learn More &rarr;</span>
          </div>
        </a>

        <!-- Card 6 -->
        <a href="#rfq" class="customization-card">
          <div class="customization-img-wrapper">
            <img src="<?= htmlspecialchars($web_images['home_customization'][5]['image_path'] ?? 'images/packaging.png') ?>" alt="<?= htmlspecialchars($web_images['home_customization'][5]['alt_text'] ?? 'Frosted custom brand polybag packaging') ?>" loading="lazy">
          </div>
          <div class="customization-info">
            <h3 class="customization-title">Custom Packaging</h3>
            <span class="customization-action">Learn More &rarr;</span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- Our Clients Section -->
  <section class="clients-section">
    <div class="container" style="text-align: center;">
      <h3 class="clients-title">Our Clients / Trusted By Global Brands</h3>
      <div class="clients-flex">
        <span class="client-logo-placeholder reveal-up">AETHER</span>
        <span class="client-logo-placeholder reveal-up">ALTITUDE</span>
        <span class="client-logo-placeholder reveal-up">VELOCITY</span>
        <span class="client-logo-placeholder reveal-up">BIKELIFE</span>
        <span class="client-logo-placeholder reveal-up">STREETMONK</span>
      </div>
    </div>
  </section>

  <!-- Manufacturing Journey — Scroll-Driven Sticky Section -->
  <section id="process" class="journey-section bg-red-alt">
    <!-- Sticky background image container -->
    <div class="journey-bg-wrap" id="journey-bg-wrap">
      <div class="journey-bg-img active" id="jbg-0" style="background-image:url('images/order_trigger.jpg')"></div>
      <div class="journey-bg-img" id="jbg-1" style="background-image:url('images/sourcing.jpg')"></div>
      <div class="journey-bg-img" id="jbg-2" style="background-image:url('images/cutting.jpg')"></div>
      <div class="journey-bg-img" id="jbg-3" style="background-image:url('images/stitching2.jpg')"></div>
      <div class="journey-bg-img" id="jbg-4" style="background-image:url('images/embroidery_print.jpg')"></div>
      <div class="journey-bg-img" id="jbg-5" style="background-image:url('images/finishing.jpg')"></div>
      <div class="journey-bg-img" id="jbg-6" style="background-image:url('images/labeling.png')"></div>
      <div class="journey-bg-img" id="jbg-7" style="background-image:url('images/delivery.jpg')"></div>
      <div class="journey-overlay"></div>
    </div>

    <!-- Scroll steps — each step occupies 100vh of scroll space -->
    <div class="journey-steps" id="journey-steps">

      <div class="journey-step" data-step="0">
        <div class="journey-step-content">
          <div class="journey-step-number">01</div>
          <div class="journey-step-tag">YOUR JOURNEY BEGINS</div>
          <h2 class="journey-step-title">Order Trigger</h2>
          <p class="journey-step-desc">You share your concept, tech pack, or inspiration. We confirm your MOQ, timeline, and material requirements within 24 hours.</p>
          <div class="journey-step-line"></div>
        </div>
      </div>

      <div class="journey-step" data-step="1">
        <div class="journey-step-content">
          <div class="journey-step-number">02</div>
          <div class="journey-step-tag">MATERIAL SELECTION</div>
          <h2 class="journey-step-title">Raw Material Sourcing</h2>
          <p class="journey-step-desc">We source premium fabrics — Loopback Fleece, Combed Cotton, GOTS Organic — from certified suppliers, matched to your GSM & color spec.</p>
          <div class="journey-step-line"></div>
        </div>
      </div>

      <div class="journey-step" data-step="2">
        <div class="journey-step-content">
          <div class="journey-step-number">03</div>
          <div class="journey-step-tag">PRECISION CRAFT</div>
          <h2 class="journey-step-title">Pattern Cutting</h2>
          <p class="journey-step-desc">Digital patterns are drafted and laser-cut with zero-waste precision. Size grading and marker efficiency are optimized for bulk runs.</p>
          <div class="journey-step-line"></div>
        </div>
      </div>

      <div class="journey-step" data-step="3">
        <div class="journey-step-content">
          <div class="journey-step-number">04</div>
          <div class="journey-step-tag">ASSEMBLY LINE</div>
          <h2 class="journey-step-title">Stitching</h2>
          <p class="journey-step-desc">Expert machinists assemble each garment panel by panel — flat-lock seams, overlock finishing, and chain-stitch reinforcement on stress points.</p>
          <div class="journey-step-line"></div>
        </div>
      </div>

      <div class="journey-step" data-step="4">
        <div class="journey-step-content">
          <div class="journey-step-number">05</div>
          <div class="journey-step-tag">CUSTOMIZATION</div>
          <h2 class="journey-step-title">Embroidery &amp; Screen Printing</h2>
          <p class="journey-step-desc">From 3D puff embroidery to DTG, sublimation, and 12-colour screen printing — your branding comes to life with stunning durability.</p>
          <div class="journey-step-line"></div>
        </div>
      </div>

      <div class="journey-step" data-step="5">
        <div class="journey-step-content">
          <div class="journey-step-number">06</div>
          <div class="journey-step-tag">FINISHING</div>
          <h2 class="journey-step-title">Pressing &amp; Finishing</h2>
          <p class="journey-step-desc">Each garment is steam-pressed, thread-trimmed, measured, and inspected to ensure retail-ready presentation before any packing begins.</p>
          <div class="journey-step-line"></div>
        </div>
      </div>

      <div class="journey-step" data-step="6">
        <div class="journey-step-content">
          <div class="journey-step-number">07</div>
          <div class="journey-step-tag">BRAND IDENTITY</div>
          <h2 class="journey-step-title">Packing &amp; Labeling</h2>
          <p class="journey-step-desc">Custom hangtags, woven labels, polybags, and barcode stickers applied. Your brand identity is consistent from factory floor to end customer.</p>
          <div class="journey-step-line"></div>
        </div>
      </div>

      <div class="journey-step" data-step="7">
        <div class="journey-step-content">
          <div class="journey-step-number">08</div>
          <div class="journey-step-tag">GLOBAL DELIVERY</div>
          <h2 class="journey-step-title">Delivered to Customer</h2>
          <p class="journey-step-desc">Door-to-door bulk shipping to 50+ countries via DHL, FedEx, and sea freight. Real-time tracking from our factory gate to your warehouse.</p>
          <a href="#rfq" class="btn btn-primary magnetic" style="margin-top: 20px; display: inline-block;">Start Your Order &rarr;</a>
          <div class="journey-step-line"></div>
        </div>
      </div>

    </div>
  </section>

  <!-- Fabric Library -->
  <section class="section" id="fabrics">
    <div class="container">
      <div style="text-align: center; margin-bottom: 60px;">
        <span style="color: var(--red-accent); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.1em;">Quality Sourcing</span>
        <h2>Premium Fabric Library & Specifications</h2>
      </div>
      <div class="grid-3">
        <div class="glass-card">
          <h4 style="margin-bottom: 8px;">Heavyweight Loopback Fleece</h4>
          <span style="font-size: 0.8rem; color: var(--red-accent); font-weight: bold; display: block; margin-bottom: 12px;">380 - 500 GSM | 100% Cotton</span>
          <p style="font-size: 0.9rem;">Ideal for luxury streetwear hoodies and sweatpants. Excellent drape, custom color fastness, and low shrinkage.</p>
        </div>
        <div class="glass-card">
          <h4 style="margin-bottom: 8px;">Organic Combed Cotton Jersey</h4>
          <span style="font-size: 0.8rem; color: var(--red-accent); font-weight: bold; display: block; margin-bottom: 12px;">180 - 240 GSM | GOTS Certified</span>
          <p style="font-size: 0.9rem;">Super soft touch and premium weight. Best suited for high-end boutique brand t-shirts and luxury lounge garments.</p>
        </div>
        <div class="glass-card">
          <h4 style="margin-bottom: 8px;">Nylon Spandex Blends</h4>
          <span style="font-size: 0.8rem; color: var(--red-accent); font-weight: bold; display: block; margin-bottom: 12px;">220 - 320 GSM | Moisture-Wicking</span>
          <p style="font-size: 0.9rem;">Designed for sportswear. Features active compression, 4-way stretch stability, and breathable properties.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- RFQ Section with MOQ Calculator -->
  <section class="section bg-red-alt" id="rfq">
    <div class="container">
      <div style="text-align: center; margin-bottom: 60px;">
        <span style="color: var(--red-accent); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.1em;">Instant Estimate</span>
        <h2>MOQ & RFQ Request</h2>
      </div>
      <div class="calculator-rfq-grid">
        <div class="glass-card">
          <h3 style="margin-bottom: 24px;">MOQ Estimator</h3>
          <div class="form-group">
            <label class="form-label" for="calc-category">Garment Category</label>
            <select class="form-control" id="calc-category">
              <option value="streetwear">Streetwear (Hoodies/Sweats)</option>
              <option value="fashionwear">Fashion Wear (T-shirts/Tops)</option>
              <option value="casualwear">Casual Wear (Polos/Chinos)</option>
              <option value="sportswear">Sportswear (Leggings/Athletic)</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label" for="calc-quantity">Quantity (Minimum 10 pcs)</label>
            <input type="number" class="form-control" id="calc-quantity" min="10" value="10">
          </div>
          <div class="form-group">
            <label class="form-label" for="calc-custom">Customizations Needed</label>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 8px;">
              <label style="font-size: 0.85rem; display: flex; align-items: center; gap: 8px; color: var(--text-secondary);">
                <input type="checkbox" id="custom-print" checked> Custom Print
              </label>
              <label style="font-size: 0.85rem; display: flex; align-items: center; gap: 8px; color: var(--text-secondary);">
                <input type="checkbox" id="custom-embroid"> Custom Embroidery
              </label>
              <label style="font-size: 0.85rem; display: flex; align-items: center; gap: 8px; color: var(--text-secondary); cursor: pointer;" onclick="openLabelModal()">
                <input type="checkbox" id="custom-label" checked> <span style="text-decoration: underline; color: var(--red-bright);">Custom Label</span>
              </label>
            </div>
          </div>
          <div style="margin-top: 32px; padding-top: 24px; border-top: 1px solid var(--border-color);">
            <div style="display: flex; justify-content: space-between; margin-bottom: 24px;">
              <span>Estimated MOQ:</span>
              <span style="font-weight: 700; color: var(--red-bright); font-size: 1.3rem;" id="est-moq">10 pcs</span>
            </div>
            <button class="btn btn-primary magnetic" style="width: 100%;" id="btn-apply-estimate">Apply to RFQ</button>
          </div>
        </div>

        <div class="glass-card" id="rfq-form-container">
          <h3 style="margin-bottom: 24px;">Request an Instant Bulk Quote</h3>
          <form id="rfq-form" method="POST" action="rfq">
            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrfToken, ENT_QUOTES, 'UTF-8') ?>">
            <input type="hidden" name="category" id="rfq-category" value="streetwear">
            <input type="hidden" name="quantity" id="rfq-quantity" value="10">
            <div class="form-honeypot" aria-hidden="true">
              <label for="rfq-website">Website</label>
              <input type="text" name="website" id="rfq-website" tabindex="-1" autocomplete="off">
            </div>
            <div class="form-group">
              <label class="form-label" for="rfq-name">Your Name</label>
              <input type="text" class="form-control" name="name" id="rfq-name" required placeholder="John Doe">
            </div>
            <div class="form-group">
              <label class="form-label" for="rfq-email">Business Email</label>
              <input type="email" class="form-control" name="email" id="rfq-email" required placeholder="john@brandname.com">
            </div>
            <div class="form-group">
              <label class="form-label" for="rfq-phone">Phone Number (Optional)</label>
              <input type="tel" class="form-control" name="phone" id="rfq-phone" placeholder="+1 (555) 000-0000">
            </div>
            <div class="form-group">
              <label class="form-label" for="rfq-details">Project Specifications</label>
              <textarea class="form-control" name="details" id="rfq-details" rows="4" required maxlength="3000" placeholder="Mention fabrics, GSM requirements, print ideas, size charts, or any other specifications..."></textarea>
            </div>
            <button type="submit" class="btn btn-primary magnetic" style="width: 100%;">Submit RFQ Request</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <section class="section" id="faq">
    <div class="container">
      <div style="text-align: center;">
        <span style="color: var(--red-accent); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.1em;">Answers to Common Questions</span>
        <h2>Frequently Asked Questions (FAQs)</h2>
        <p>Get direct, accurate answers for AI search engines and brand inquiries.</p>
      </div>

      <div class="faq-container">
        <?php foreach ($faqs as $faq): ?>
        <div class="faq-item reveal-up">
          <div class="faq-question">
            <h3><?= htmlspecialchars($faq['question']) ?></h3>
            <span class="faq-icon">+</span>
          </div>
          <div class="faq-answer">
            <p><?= nl2br(htmlspecialchars($faq['answer'])) ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="section bg-red-alt" id="testimonials">
    <div class="container">
      <div style="text-align: center; margin-bottom: 60px;">
        <span style="color: var(--red-accent); font-weight: 700; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.12em;">CLIENT REVIEWS</span>
        <h2 style="font-weight: 800; margin-top: 6px;">What Our Clients Say</h2>
        <p style="color: var(--text-secondary); font-size: 0.95rem;">Trusted by brands across 50+ countries.</p>
      </div>
      <div class="testimonials-grid">
        <?php foreach ($testimonials as $test): ?>
        <div class="testimonial-card">
          <div class="testimonial-stars">★★★★★</div>
          <p class="testimonial-text">"<?= nl2br(htmlspecialchars($test['review'])) ?>"</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar"><?= htmlspecialchars($test['initials']) ?></div>
            <div>
              <strong><?= htmlspecialchars($test['author']) ?></strong>
              <span><?= htmlspecialchars($test['position']) ?></span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- WhatsApp CTA Banner -->
  <section class="whatsapp-cta-banner">
    <div class="container" style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 24px;">
      <div>
        <h3 style="font-size: 1.5rem; font-weight: 800; margin-bottom: 4px;">Ready to Start Manufacturing?</h3>
        <p style="color: rgba(255,255,255,0.75); font-size: 0.95rem;">Chat directly on WhatsApp for instant quotes and sampling discussions.</p>
      </div>
      <div style="display: flex; gap: 16px; flex-wrap: wrap;">
        <a href="https://wa.me/923147560683?text=Hi%2C%20I%27m%20interested%20in%20bulk%20manufacturing%20with%20Primgar%20Wears." target="_blank" rel="noopener noreferrer" class="btn-whatsapp-cta magnetic">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink:0;"><path d="M12 2C6.477 2 2 6.477 2 12c0 1.884.52 3.654 1.423 5.176L2.04 21.724a.5.5 0 00.636.636l4.548-1.383A9.957 9.957 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm0 18c-1.505 0-2.927-.41-4.147-1.12l-.29-.17-3.007.915.929-2.947-.19-.302A7.96 7.96 0 014 12c0-4.411 3.589-8 8-8s8 3.589 8 8-3.589 8-8 8zm4.406-5.845c-.242-.121-1.428-.704-1.65-.784-.22-.082-.382-.121-.541.121-.16.242-.623.784-.764.944-.14.16-.28.18-.523.061-.242-.121-1.023-.377-1.948-1.202-.72-.642-1.207-1.435-1.349-1.677-.14-.242-.015-.372.106-.493.109-.108.242-.282.363-.422.12-.141.16-.242.241-.404.08-.16.04-.302-.02-.422-.061-.12-.542-1.307-.742-1.789-.196-.47-.396-.405-.541-.413l-.461-.008c-.16 0-.42.06-.641.303-.22.242-.84.822-.84 2.004 0 1.182.86 2.325.98 2.486.12.16 1.693 2.585 4.1 3.623.573.247 1.02.395 1.369.505.575.183 1.099.157 1.512.095.462-.069 1.428-.584 1.63-1.148.2-.564.2-1.046.14-1.147-.059-.101-.22-.16-.462-.282z"/></svg>
          WhatsApp Us Now
        </a>
        <a href="mailto:primgarinternational@gmail.com" class="lux-cta-ghost magnetic" style="border-radius: 8px; padding: 14px 28px;">
          ✉ Send an Email
        </a>
      </div>
    </div>
  </section>

  <!-- Automated Chatbot Widget -->
  <div class="chatbot-container" id="chatbot-container">
    <button class="chatbot-toggle" id="chatbot-toggle" aria-label="Open Chat">
      <svg width="28" height="28" viewBox="0 0 24 24" fill="currentColor">
        <path d="M12 2C6.477 2 2 6.477 2 12c0 1.884.52 3.654 1.423 5.176L2.04 21.724a.5.5 0 00.636.636l4.548-1.383A9.957 9.957 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2zm.05 18.25c-1.573 0-3.094-.416-4.44-1.207a.5.5 0 00-.472-.036l-2.9 0.883 0.883-2.9a.5.5 0 00-.036-.472c-.791-1.346-1.207-2.867-1.207-4.44 0-4.825 3.925-8.75 8.75-8.75s8.75 3.925 8.75 8.75-3.925 8.75-8.75 8.75z"/>
      </svg>
    </button>
    
    <div class="chatbot-window" id="chatbot-window">
      <div class="chatbot-header">
        <div class="chatbot-agent-info">
          <div class="chatbot-avatar"></div>
          <div>
            <strong>Primgar International Support</strong>
            <span>Typically replies instantly</span>
          </div>
        </div>
        <button class="chatbot-close" id="chatbot-close">&times;</button>
      </div>
      
      <div class="chatbot-body" id="chatbot-body">
        <div class="chat-message bot typing" id="chat-typing-1" style="display: none;">
          <div class="typing-dots"><span></span><span></span><span></span></div>
        </div>
        <div class="chat-message bot text" id="chat-msg-1" style="display: none;">
          Hi! Welcome to Primgar International. 👋
        </div>
        <div class="chat-message bot typing" id="chat-typing-2" style="display: none;">
          <div class="typing-dots"><span></span><span></span><span></span></div>
        </div>
        <div class="chat-message bot text" id="chat-msg-2" style="display: none;">
          Please leave your email, WhatsApp number, and your question. Our team will contact you shortly!
        </div>
        
        <form id="chatbot-form" style="display: none;">
          <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrfToken, ENT_QUOTES, 'UTF-8') ?>">
          <div class="form-group" style="margin-bottom: 10px;">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required style="font-size: 0.85rem; padding: 10px;">
          </div>
          <div class="form-group" style="margin-bottom: 10px;">
            <input type="tel" name="whatsapp" class="form-control" placeholder="WhatsApp Number" required style="font-size: 0.85rem; padding: 10px;">
          </div>
          <div class="form-group" style="margin-bottom: 10px;">
            <textarea name="message" class="form-control" placeholder="How can we help?" rows="2" required style="font-size: 0.85rem; padding: 10px;"></textarea>
          </div>
          <button type="submit" class="lux-cta-primary" style="width: 100%; padding: 10px; font-size: 0.85rem; border-radius: 6px; justify-content: center;">Send Message</button>
          <div id="chatbot-response" style="margin-top: 10px; font-size: 0.8rem; text-align: center; display: none;"></div>
        </form>
      </div>
    </div>
  </div>

  <!-- Custom Label Modal -->
  <div class="custom-label-modal" id="custom-label-modal">
    <div class="custom-label-modal-content">
      <button class="custom-label-modal-close" onclick="closeLabelModal()">&times;</button>
      <div style="text-align: left; margin-bottom: 20px;">
        <h2 style="font-size: 2rem; margin-bottom: 10px;">Premium Woven Label</h2>
        <p style="color: var(--text-secondary);">Select from our premium custom woven labels for your garments.</p>
      </div>
      <div class="label-slider-wrapper" style="position: relative; display: flex; align-items: center;">
        <button onclick="scrollLabel(-1)" style="position: absolute; left: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10094;</button>
        
        <div class="label-slider-container" id="labelScrollContainer" style="overflow-x: hidden; scroll-behavior: smooth; width: 100%; display: flex;">
          <div class="label-slider" style="display: flex; gap: 15px;">
            <img src="<?= htmlspecialchars($web_images['home_woven_label_modal'][0]['image_path'] ?? 'images/woven_label_1.jpg') ?>" alt="<?= htmlspecialchars($web_images['home_woven_label_modal'][0]['alt_text'] ?? 'Premium Woven Label 1') ?>" class="label-slider-img">
            <img src="<?= htmlspecialchars($web_images['home_woven_label_modal'][1]['image_path'] ?? 'images/woven_label_2.jpg') ?>" alt="<?= htmlspecialchars($web_images['home_woven_label_modal'][1]['alt_text'] ?? 'Premium Woven Label 2') ?>" class="label-slider-img">
            <img src="<?= htmlspecialchars($web_images['home_woven_label_modal'][2]['image_path'] ?? 'images/woven_label_3.jpg') ?>" alt="<?= htmlspecialchars($web_images['home_woven_label_modal'][2]['alt_text'] ?? 'Premium Woven Label 3') ?>" class="label-slider-img">
            <!-- Duplicates for infinite scrolling illusion -->
            <img src="<?= htmlspecialchars($web_images['home_woven_label_modal'][0]['image_path'] ?? 'images/woven_label_1.jpg') ?>" alt="<?= htmlspecialchars($web_images['home_woven_label_modal'][0]['alt_text'] ?? 'Premium Woven Label 1') ?>" class="label-slider-img">
            <img src="<?= htmlspecialchars($web_images['home_woven_label_modal'][1]['image_path'] ?? 'images/woven_label_2.jpg') ?>" alt="<?= htmlspecialchars($web_images['home_woven_label_modal'][1]['alt_text'] ?? 'Premium Woven Label 2') ?>" class="label-slider-img">
          </div>
        </div>

        <button onclick="scrollLabel(1)" style="position: absolute; right: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10095;</button>
      </div>
      <div style="text-align: left; margin-top: 30px; margin-bottom: 20px;">
        <h3 style="font-size: 1.5rem; margin-bottom: 10px;">Cotton Label</h3>
        <p style="color: var(--text-secondary);">We also offer high-quality custom cotton labels for a softer feel.</p>
      </div>

      <div class="label-slider-wrapper" style="position: relative; display: flex; align-items: center; margin-bottom: 20px;">
        <button onclick="scrollCottonLabel(-1)" style="position: absolute; left: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10094;</button>
        
        <div class="label-slider-container" id="cottonLabelScrollContainer" style="overflow-x: hidden; scroll-behavior: smooth; width: 100%; display: flex;">
          <div class="label-slider" style="display: flex; gap: 15px;">
            <img src="images/cotton_label_1.jpg" alt="Cotton Label 1" class="label-slider-img">
            <img src="images/cotton_label_2.jpg" alt="Cotton Label 2" class="label-slider-img">
            <img src="images/cotton_label_3.jpg" alt="Cotton Label 3" class="label-slider-img">
            <!-- Duplicates for infinite scrolling illusion -->
            <img src="images/cotton_label_1.jpg" alt="Cotton Label 1" class="label-slider-img">
            <img src="images/cotton_label_2.jpg" alt="Cotton Label 2" class="label-slider-img">
          </div>
        </div>

        <button onclick="scrollCottonLabel(1)" style="position: absolute; right: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10095;</button>
      </div>

      <div style="text-align: left; margin-top: 30px; margin-bottom: 20px;">
        <h3 style="font-size: 1.5rem; margin-bottom: 10px;">Custom Care Label</h3>
        <p style="color: var(--text-secondary);">Clearly communicate washing and care instructions with our high-quality custom care labels.</p>
      </div>

      <div class="label-slider-wrapper" style="position: relative; display: flex; align-items: center; margin-bottom: 20px;">
        <button onclick="scrollCareLabel(-1)" style="position: absolute; left: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10094;</button>
        
        <div class="label-slider-container" id="careLabelScrollContainer" style="overflow-x: hidden; scroll-behavior: smooth; width: 100%; display: flex;">
          <div class="label-slider" style="display: flex; gap: 15px;">
            <img src="images/care_label_1.jpg" alt="Care Label 1" class="label-slider-img">
            <img src="images/care_label_2.jpg" alt="Care Label 2" class="label-slider-img">
            <img src="images/care_label_3.jpg" alt="Care Label 3" class="label-slider-img">
            <!-- Duplicates for infinite scrolling illusion -->
            <img src="images/care_label_1.jpg" alt="Care Label 1" class="label-slider-img">
            <img src="images/care_label_2.jpg" alt="Care Label 2" class="label-slider-img">
          </div>
        </div>

        <button onclick="scrollCareLabel(1)" style="position: absolute; right: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10095;</button>
      </div>

      <div style="text-align: left; margin-top: 30px; margin-bottom: 20px;">
        <h3 style="font-size: 1.5rem; margin-bottom: 10px;">Leather Label</h3>
        <p style="color: var(--text-secondary);">Add a premium, rugged touch to your garments with our custom leather labels.</p>
      </div>

      <div class="label-slider-wrapper" style="position: relative; display: flex; align-items: center; margin-bottom: 20px;">
        <button onclick="scrollLeatherLabel(-1)" style="position: absolute; left: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10094;</button>
        
        <div class="label-slider-container" id="leatherLabelScrollContainer" style="overflow-x: hidden; scroll-behavior: smooth; width: 100%; display: flex;">
          <div class="label-slider" style="display: flex; gap: 15px;">
            <img src="images/leather_label_1.jpg" alt="Leather Label 1" class="label-slider-img">
            <img src="images/leather_label_2.jpg" alt="Leather Label 2" class="label-slider-img">
            <img src="images/leather_label_3.jpg" alt="Leather Label 3" class="label-slider-img">
            <!-- Duplicates for infinite scrolling illusion -->
            <img src="images/leather_label_1.jpg" alt="Leather Label 1" class="label-slider-img">
          </div>
        </div>

        <button onclick="scrollLeatherLabel(1)" style="position: absolute; right: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10095;</button>
      </div>

      <div style="text-align: left; margin-top: 30px; margin-bottom: 20px;">
        <h3 style="font-size: 1.5rem; margin-bottom: 10px;">Satin Label</h3>
        <p style="color: var(--text-secondary);">Give your products a sleek, luxurious finish with our smooth and silky custom satin labels.</p>
      </div>

      <div class="label-slider-wrapper" style="position: relative; display: flex; align-items: center; margin-bottom: 20px;">
        <button onclick="scrollSatinLabel(-1)" style="position: absolute; left: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10094;</button>
        
        <div class="label-slider-container" id="satinLabelScrollContainer" style="overflow-x: hidden; scroll-behavior: smooth; width: 100%; display: flex;">
          <div class="label-slider" style="display: flex; gap: 15px;">
            <img src="images/satin_label_1.jpg" alt="Satin Label 1" class="label-slider-img">
            <img src="images/satin_label_2.jpg" alt="Satin Label 2" class="label-slider-img">
            <img src="images/satin_label_3.jpg" alt="Satin Label 3" class="label-slider-img">
            <!-- Duplicates for infinite scrolling illusion -->
            <img src="images/satin_label_1.jpg" alt="Satin Label 1" class="label-slider-img">
            <img src="images/satin_label_2.jpg" alt="Satin Label 2" class="label-slider-img">
          </div>
        </div>

        <button onclick="scrollSatinLabel(1)" style="position: absolute; right: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10095;</button>
      </div>

      <div style="text-align: left; margin-top: 30px; margin-bottom: 20px;">
        <h3 style="font-size: 1.5rem; margin-bottom: 10px;">Hem Label</h3>
        <p style="color: var(--text-secondary);">Subtle yet impactful, our hem labels provide the perfect branded finishing touch to the edges of your garments.</p>
      </div>

      <div class="label-slider-wrapper" style="position: relative; display: flex; align-items: center; margin-bottom: 20px;">
        <button onclick="scrollHemLabel(-1)" style="position: absolute; left: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10094;</button>
        
        <div class="label-slider-container" id="hemLabelScrollContainer" style="overflow-x: hidden; scroll-behavior: smooth; width: 100%; display: flex;">
          <div class="label-slider" style="display: flex; gap: 15px;">
            <img src="images/hem_label_1.jpg" alt="Hem Label 1" class="label-slider-img">
            <img src="images/hem_label_2.jpg" alt="Hem Label 2" class="label-slider-img">
            <img src="images/hem_label_3.jpg" alt="Hem Label 3" class="label-slider-img">
            <!-- Duplicates for infinite scrolling illusion -->
            <img src="images/hem_label_1.jpg" alt="Hem Label 1" class="label-slider-img">
            <img src="images/hem_label_2.jpg" alt="Hem Label 2" class="label-slider-img">
          </div>
        </div>

        <button onclick="scrollHemLabel(1)" style="position: absolute; right: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10095;</button>
      </div>

      <div style="text-align: left; margin-top: 30px; margin-bottom: 20px;">
        <h3 style="font-size: 1.5rem; margin-bottom: 10px;">Heat Transfer Label</h3>
        <p style="color: var(--text-secondary);">Seamless and comfortable tagless labels that transfer directly onto the fabric, perfect for athletic wear and sensitive skin.</p>
      </div>

      <div class="label-slider-wrapper" style="position: relative; display: flex; align-items: center; margin-bottom: 20px;">
        <button onclick="scrollHeatLabel(-1)" style="position: absolute; left: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10094;</button>
        
        <div class="label-slider-container" id="heatLabelScrollContainer" style="overflow-x: hidden; scroll-behavior: smooth; width: 100%; display: flex;">
          <div class="label-slider" style="display: flex; gap: 15px;">
            <img src="images/heat_label_1.jpg" alt="Heat Transfer Label 1" class="label-slider-img">
            <img src="images/heat_label_2.jpg" alt="Heat Transfer Label 2" class="label-slider-img">
            <img src="images/heat_label_3.jpg" alt="Heat Transfer Label 3" class="label-slider-img">
            <!-- Duplicates for infinite scrolling illusion -->
            <img src="images/heat_label_1.jpg" alt="Heat Transfer Label 1" class="label-slider-img">
            <img src="images/heat_label_2.jpg" alt="Heat Transfer Label 2" class="label-slider-img">
          </div>
        </div>

        <button onclick="scrollHeatLabel(1)" style="position: absolute; right: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10095;</button>
      </div>

      <div style="text-align: left; margin-top: 30px; margin-bottom: 20px;">
        <h3 style="font-size: 1.5rem; margin-bottom: 10px;">Tag Card Label</h3>
        <p style="color: var(--text-secondary);">Elevate your brand presentation with premium custom tag cards, adding a professional touch and conveying essential product details.</p>
      </div>

      <div class="label-slider-wrapper" style="position: relative; display: flex; align-items: center; margin-bottom: 20px;">
        <button onclick="scrollTagCardLabel(-1)" style="position: absolute; left: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10094;</button>
        
        <div class="label-slider-container" id="tagCardLabelScrollContainer" style="overflow-x: hidden; scroll-behavior: smooth; width: 100%; display: flex;">
          <div class="label-slider" style="display: flex; gap: 15px;">
            <img src="images/tag_card_1.png" alt="Tag Card Label 1" class="label-slider-img">
            <img src="images/tag_card_2.png" alt="Tag Card Label 2" class="label-slider-img">
            <img src="images/tag_card_3.png" alt="Tag Card Label 3" class="label-slider-img">
            <!-- Duplicates for infinite scrolling illusion -->
            <img src="images/tag_card_1.png" alt="Tag Card Label 1" class="label-slider-img">
            <img src="images/tag_card_2.png" alt="Tag Card Label 2" class="label-slider-img">
          </div>
        </div>

        <button onclick="scrollTagCardLabel(1)" style="position: absolute; right: -15px; z-index: 10; background: var(--red-bright); color: white; border: none; width: 40px; height: 40px; border-radius: 50%; font-size: 1.2rem; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.5);">&#10095;</button>
      </div>

    </div>
  </div>

  <script>
    let labelScrollInterval;
    let cottonScrollInterval;
    let careScrollInterval;
    let leatherScrollInterval;
    let satinScrollInterval;
    let hemScrollInterval;
    let heatScrollInterval;
    let tagCardScrollInterval;
    const scrollContainer = document.getElementById('labelScrollContainer');
    const cottonContainer = document.getElementById('cottonLabelScrollContainer');
    const careContainer = document.getElementById('careLabelScrollContainer');
    const leatherContainer = document.getElementById('leatherLabelScrollContainer');
    const satinContainer = document.getElementById('satinLabelScrollContainer');
    const hemContainer = document.getElementById('hemLabelScrollContainer');
    const heatContainer = document.getElementById('heatLabelScrollContainer');
    const tagCardContainer = document.getElementById('tagCardLabelScrollContainer');

    function openLabelModal() {
      document.getElementById('custom-label-modal').classList.add('open');
      startLabelAutoScroll();
      startCottonAutoScroll();
      startCareAutoScroll();
      startLeatherAutoScroll();
      startSatinAutoScroll();
      startHemAutoScroll();
      startHeatAutoScroll();
      startTagCardAutoScroll();
    }
    
    function closeLabelModal() {
      document.getElementById('custom-label-modal').classList.remove('open');
      stopLabelAutoScroll();
      stopCottonAutoScroll();
      stopCareAutoScroll();
      stopLeatherAutoScroll();
      stopSatinAutoScroll();
      stopHemAutoScroll();
      stopHeatAutoScroll();
      stopTagCardAutoScroll();
    }
    
    function startLabelAutoScroll() {
      stopLabelAutoScroll();
      labelScrollInterval = setInterval(() => { scrollLabel(1); }, 2500);
    }
    
    function stopLabelAutoScroll() {
      if(labelScrollInterval) clearInterval(labelScrollInterval);
    }
    
    function startCottonAutoScroll() {
      stopCottonAutoScroll();
      cottonScrollInterval = setInterval(() => { scrollCottonLabel(1); }, 2500);
    }
    
    function stopCottonAutoScroll() {
      if(cottonScrollInterval) clearInterval(cottonScrollInterval);
    }

    function startCareAutoScroll() {
      stopCareAutoScroll();
      careScrollInterval = setInterval(() => { scrollCareLabel(1); }, 2500);
    }
    
    function stopCareAutoScroll() {
      if(careScrollInterval) clearInterval(careScrollInterval);
    }

    function startLeatherAutoScroll() {
      stopLeatherAutoScroll();
      leatherScrollInterval = setInterval(() => { scrollLeatherLabel(1); }, 2500);
    }
    
    function stopLeatherAutoScroll() {
      if(leatherScrollInterval) clearInterval(leatherScrollInterval);
    }

    function startSatinAutoScroll() {
      stopSatinAutoScroll();
      satinScrollInterval = setInterval(() => { scrollSatinLabel(1); }, 2500);
    }
    
    function stopSatinAutoScroll() {
      if(satinScrollInterval) clearInterval(satinScrollInterval);
    }

    function startHemAutoScroll() {
      stopHemAutoScroll();
      hemScrollInterval = setInterval(() => { scrollHemLabel(1); }, 2500);
    }
    
    function stopHemAutoScroll() {
      if(hemScrollInterval) clearInterval(hemScrollInterval);
    }

    function startHeatAutoScroll() {
      stopHeatAutoScroll();
      heatScrollInterval = setInterval(() => { scrollHeatLabel(1); }, 2500);
    }
    
    function stopHeatAutoScroll() {
      if(heatScrollInterval) clearInterval(heatScrollInterval);
    }

    function startTagCardAutoScroll() {
      stopTagCardAutoScroll();
      tagCardScrollInterval = setInterval(() => { scrollTagCardLabel(1); }, 2500);
    }
    
    function stopTagCardAutoScroll() {
      if(tagCardScrollInterval) clearInterval(tagCardScrollInterval);
    }

    function scrollLabel(direction) {
      if (!scrollContainer) return;
      const scrollAmount = 315;
      scrollContainer.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
      setTimeout(() => {
        if (direction === 1 && scrollContainer.scrollLeft + scrollContainer.clientWidth >= scrollContainer.scrollWidth - 20) {
          scrollContainer.style.scrollBehavior = 'auto';
          scrollContainer.scrollLeft = 0;
          scrollContainer.style.scrollBehavior = 'smooth';
        } else if (direction === -1 && scrollContainer.scrollLeft <= 0) {
          scrollContainer.style.scrollBehavior = 'auto';
          scrollContainer.scrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;
          scrollContainer.style.scrollBehavior = 'smooth';
        }
      }, 500);
      if (document.getElementById('custom-label-modal').classList.contains('open')) {
        startLabelAutoScroll();
      }
    }

    function scrollCottonLabel(direction) {
      if (!cottonContainer) return;
      const scrollAmount = 315;
      cottonContainer.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
      setTimeout(() => {
        if (direction === 1 && cottonContainer.scrollLeft + cottonContainer.clientWidth >= cottonContainer.scrollWidth - 20) {
          cottonContainer.style.scrollBehavior = 'auto';
          cottonContainer.scrollLeft = 0;
          cottonContainer.style.scrollBehavior = 'smooth';
        } else if (direction === -1 && cottonContainer.scrollLeft <= 0) {
          cottonContainer.style.scrollBehavior = 'auto';
          cottonContainer.scrollLeft = cottonContainer.scrollWidth - cottonContainer.clientWidth;
          cottonContainer.style.scrollBehavior = 'smooth';
        }
      }, 500);
      if (document.getElementById('custom-label-modal').classList.contains('open')) {
        startCottonAutoScroll();
      }
    }

    function scrollCareLabel(direction) {
      if (!careContainer) return;
      const scrollAmount = 315;
      careContainer.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
      setTimeout(() => {
        if (direction === 1 && careContainer.scrollLeft + careContainer.clientWidth >= careContainer.scrollWidth - 20) {
          careContainer.style.scrollBehavior = 'auto';
          careContainer.scrollLeft = 0;
          careContainer.style.scrollBehavior = 'smooth';
        } else if (direction === -1 && careContainer.scrollLeft <= 0) {
          careContainer.style.scrollBehavior = 'auto';
          careContainer.scrollLeft = careContainer.scrollWidth - careContainer.clientWidth;
          careContainer.style.scrollBehavior = 'smooth';
        }
      }, 500);
      if (document.getElementById('custom-label-modal').classList.contains('open')) {
        startCareAutoScroll();
      }
    }

    function scrollLeatherLabel(direction) {
      if (!leatherContainer) return;
      const scrollAmount = 315;
      leatherContainer.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
      setTimeout(() => {
        if (direction === 1 && leatherContainer.scrollLeft + leatherContainer.clientWidth >= leatherContainer.scrollWidth - 20) {
          leatherContainer.style.scrollBehavior = 'auto';
          leatherContainer.scrollLeft = 0;
          leatherContainer.style.scrollBehavior = 'smooth';
        } else if (direction === -1 && leatherContainer.scrollLeft <= 0) {
          leatherContainer.style.scrollBehavior = 'auto';
          leatherContainer.scrollLeft = leatherContainer.scrollWidth - leatherContainer.clientWidth;
          leatherContainer.style.scrollBehavior = 'smooth';
        }
      }, 500);
      if (document.getElementById('custom-label-modal').classList.contains('open')) {
        startLeatherAutoScroll();
      }
    }

    function scrollSatinLabel(direction) {
      if (!satinContainer) return;
      const scrollAmount = 315;
      satinContainer.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
      setTimeout(() => {
        if (direction === 1 && satinContainer.scrollLeft + satinContainer.clientWidth >= satinContainer.scrollWidth - 20) {
          satinContainer.style.scrollBehavior = 'auto';
          satinContainer.scrollLeft = 0;
          satinContainer.style.scrollBehavior = 'smooth';
        } else if (direction === -1 && satinContainer.scrollLeft <= 0) {
          satinContainer.style.scrollBehavior = 'auto';
          satinContainer.scrollLeft = satinContainer.scrollWidth - satinContainer.clientWidth;
          satinContainer.style.scrollBehavior = 'smooth';
        }
      }, 500);
      if (document.getElementById('custom-label-modal').classList.contains('open')) {
        startSatinAutoScroll();
      }
    }

    function scrollHemLabel(direction) {
      if (!hemContainer) return;
      const scrollAmount = 315;
      hemContainer.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
      setTimeout(() => {
        if (direction === 1 && hemContainer.scrollLeft + hemContainer.clientWidth >= hemContainer.scrollWidth - 20) {
          hemContainer.style.scrollBehavior = 'auto';
          hemContainer.scrollLeft = 0;
          hemContainer.style.scrollBehavior = 'smooth';
        } else if (direction === -1 && hemContainer.scrollLeft <= 0) {
          hemContainer.style.scrollBehavior = 'auto';
          hemContainer.scrollLeft = hemContainer.scrollWidth - hemContainer.clientWidth;
          hemContainer.style.scrollBehavior = 'smooth';
        }
      }, 500);
      if (document.getElementById('custom-label-modal').classList.contains('open')) {
        startHemAutoScroll();
      }
    }

    function scrollHeatLabel(direction) {
      if (!heatContainer) return;
      const scrollAmount = 315;
      heatContainer.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
      setTimeout(() => {
        if (direction === 1 && heatContainer.scrollLeft + heatContainer.clientWidth >= heatContainer.scrollWidth - 20) {
          heatContainer.style.scrollBehavior = 'auto';
          heatContainer.scrollLeft = 0;
          heatContainer.style.scrollBehavior = 'smooth';
        } else if (direction === -1 && heatContainer.scrollLeft <= 0) {
          heatContainer.style.scrollBehavior = 'auto';
          heatContainer.scrollLeft = heatContainer.scrollWidth - heatContainer.clientWidth;
          heatContainer.style.scrollBehavior = 'smooth';
        }
      }, 500);
      if (document.getElementById('custom-label-modal').classList.contains('open')) {
        startHeatAutoScroll();
      }
    }

    function scrollTagCardLabel(direction) {
      if (!tagCardContainer) return;
      const scrollAmount = 315;
      tagCardContainer.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
      setTimeout(() => {
        if (direction === 1 && tagCardContainer.scrollLeft + tagCardContainer.clientWidth >= tagCardContainer.scrollWidth - 20) {
          tagCardContainer.style.scrollBehavior = 'auto';
          tagCardContainer.scrollLeft = 0;
          tagCardContainer.style.scrollBehavior = 'smooth';
        } else if (direction === -1 && tagCardContainer.scrollLeft <= 0) {
          tagCardContainer.style.scrollBehavior = 'auto';
          tagCardContainer.scrollLeft = tagCardContainer.scrollWidth - tagCardContainer.clientWidth;
          tagCardContainer.style.scrollBehavior = 'smooth';
        }
      }, 500);
      if (document.getElementById('custom-label-modal').classList.contains('open')) {
        startTagCardAutoScroll();
      }
    }
  </script>

  <!-- Chatbot Logic -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const chatToggle = document.getElementById('chatbot-toggle');
      const chatClose = document.getElementById('chatbot-close');
      const chatWindow = document.getElementById('chatbot-window');
      const chatBody = document.getElementById('chatbot-body');
      const typing1 = document.getElementById('chat-typing-1');
      const msg1 = document.getElementById('chat-msg-1');
      const typing2 = document.getElementById('chat-typing-2');
      const msg2 = document.getElementById('chat-msg-2');
      const chatForm = document.getElementById('chatbot-form');
      const chatResponse = document.getElementById('chatbot-response');
      
      let sequenceStarted = false;

      function scrollToBottom() {
        chatBody.scrollTop = chatBody.scrollHeight;
      }

      function startSequence() {
        if (sequenceStarted) return;
        sequenceStarted = true;
        chatWindow.classList.add('open');
        
        // Typing 1
        setTimeout(() => {
          typing1.style.display = 'flex';
          scrollToBottom();
          
          // Msg 1
          setTimeout(() => {
            typing1.style.display = 'none';
            msg1.style.display = 'block';
            scrollToBottom();
            
            // Typing 2
            setTimeout(() => {
              typing2.style.display = 'flex';
              scrollToBottom();
              
              // Msg 2 & Form
              setTimeout(() => {
                typing2.style.display = 'none';
                msg2.style.display = 'block';
                chatForm.style.display = 'block';
                scrollToBottom();
              }, 1800);
            }, 1000);
          }, 1500);
        }, 500);
      }

      // Start sequence automatically after 3.5 seconds
      setTimeout(() => {
        if(!sequenceStarted) startSequence();
      }, 3500);

      chatToggle.addEventListener('click', () => {
        if (!sequenceStarted) {
          startSequence();
        } else {
          chatWindow.classList.toggle('open');
        }
      });
      
      chatClose.addEventListener('click', () => {
        chatWindow.classList.remove('open');
      });

      chatForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(chatForm);
        const submitBtn = chatForm.querySelector('button');
        submitBtn.disabled = true;
        submitBtn.textContent = 'Sending...';
        
        try {
          const res = await fetch('chat-submit', {
            method: 'POST',
            body: formData
          });
          const data = await res.json();
          
          chatResponse.style.display = 'block';
          if (data.success) {
            chatResponse.style.color = '#25D366';
            chatResponse.textContent = data.message;
            chatForm.reset();
            chatForm.querySelectorAll('.form-group').forEach(el => el.style.display = 'none');
            submitBtn.style.display = 'none';
          } else {
            chatResponse.style.color = 'var(--red-bright)';
            chatResponse.textContent = data.error || 'Something went wrong.';
            submitBtn.disabled = false;
            submitBtn.textContent = 'Send Message';
          }
        } catch (err) {
          chatResponse.style.display = 'block';
          chatResponse.style.color = 'var(--red-bright)';
          chatResponse.textContent = 'Network error. Please try again.';
          submitBtn.disabled = false;
          submitBtn.textContent = 'Send Message';
        }
        scrollToBottom();
      });
    });
  </script>
  <!-- Footer -->
  <?php include __DIR__ . '/../partials/footer.php'; ?>

  <!-- Scripts -->
  <!-- GSAP & Lenis for premium smooth scroll and cinematic animations -->
  <script src="https://cdn.jsdelivr.net/npm/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

  <script src="app.js"></script>
</body>
</html>

