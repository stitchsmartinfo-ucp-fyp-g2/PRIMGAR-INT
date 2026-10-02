<?php
// Safe defaults so the page never breaks if the controller doesn't pass these.
$web_images = $web_images ?? [];
$csrfToken  = $csrfToken ?? '';
function hero_img($key, $i, $fallback, $field = 'image_path') {
    global $web_images;
    $v = $web_images[$key][$i][$field] ?? '';
    return htmlspecialchars($v !== '' ? $v : $fallback, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Premium B2B Apparel Manufacturer & Clothing Supplier | Primgar International</title>
  <meta name="description" content="Primgar International is a premium B2B clothing manufacturer for custom streetwear, fashion wear, sportswear and private label brands worldwide.">
  <link rel="canonical" href="https://primgarinternational.com/">
  <script>document.documentElement.classList.add('js')</script>
  <style>
    :root {
      --bg-deep: #0a0a0b;
      --bg-card: #141416;
      --text: #f5f5f6;
      --text-secondary: #a8a8b0;
      --border-color: rgba(255,255,255,.1);
      --red-accent: #e11d2e;
      --red-bright: #ff3b4a;
      --red-glow: rgba(225,29,46,.35);
      --font-display: "Segoe UI", system-ui, -apple-system, Roboto, Helvetica, Arial, sans-serif;
      --header-h: 76px;
    }
    *, *::before, *::after { box-sizing: border-box; }
    html { scroll-behavior: smooth; }
    body { margin: 0; background: var(--bg-deep); color: var(--text); font-family: var(--font-display); line-height: 1.5; }
    a { color: inherit; text-decoration: none; }
    img { max-width: 100%; display: block; }
    .container { width: min(1200px, 100% - 40px); margin-inline: auto; }

    /* ---------- Header ---------- */
    #main-header { position: fixed; inset: 0 0 auto 0; z-index: 1000; height: var(--header-h); display: flex; align-items: center; transition: background .3s, border-color .3s; border-bottom: 1px solid transparent; }
    #main-header.scrolled { background: rgba(10,10,11,.88); backdrop-filter: blur(12px); border-color: var(--border-color); }
    .nav-container { display: flex; align-items: center; justify-content: space-between; gap: 24px; }
    .logo img { height: 45px; width: auto; }
    .nav-menu { display: flex; gap: 28px; list-style: none; margin: 0; padding: 0; }
    .nav-link { font-size: .92rem; color: var(--text-secondary); transition: color .2s; }
    .nav-link:hover { color: var(--text); }
    .lux-cta-primary { display: inline-flex; align-items: center; gap: 10px; padding: 14px 28px; border-radius: 8px; background: var(--red-accent); color: #fff; font-weight: 700; border: 0; cursor: pointer; transition: background .2s, transform .2s; }
    .lux-cta-primary:hover { background: var(--red-bright); transform: translateY(-2px); }
    .lux-cta-ghost { display: inline-flex; align-items: center; gap: 10px; padding: 14px 24px; border-radius: 8px; border: 1px solid var(--border-color); color: var(--text); font-weight: 600; transition: border-color .2s, background .2s; }
    .lux-cta-ghost:hover { border-color: var(--red-bright); background: rgba(255,255,255,.04); }
    .mobile-menu-toggle { display: none; background: none; border: 0; padding: 8px; cursor: pointer; }
    .mobile-menu-toggle span { display: block; width: 24px; height: 2px; background: var(--text); margin: 5px 0; }

    /* ---------- Hero ---------- */
    .lux-hero { position: relative; isolation: isolate; overflow: hidden; min-height: 100vh; padding-top: calc(var(--header-h) + 40px); display: flex; flex-direction: column; justify-content: space-between; background: radial-gradient(1200px 600px at 80% 20%, rgba(225,29,46,.14), transparent 60%), var(--bg-deep); }
    .lux-hero__canvas { position: absolute; inset: 0; width: 100%; height: 100%; z-index: -1; pointer-events: none; }
    .lux-orb { position: absolute; border-radius: 50%; filter: blur(90px); z-index: -1; pointer-events: none; background: var(--red-glow); }
    .lux-orb--1 { width: 420px; height: 420px; top: -120px; right: -80px; }
    .lux-orb--2 { width: 300px; height: 300px; bottom: 60px; left: -100px; opacity: .6; }
    .lux-orb--3 { width: 220px; height: 220px; top: 40%; left: 45%; opacity: .35; }

    .lux-hero__inner { display: grid; grid-template-columns: 1.1fr .9fr; gap: 56px; align-items: center; padding-block: 32px 48px; }
    .lux-hero__badge { display: inline-flex; align-items: center; gap: 10px; padding: 8px 16px; border: 1px solid var(--border-color); border-radius: 999px; font-size: .75rem; letter-spacing: .08em; color: var(--text-secondary); margin-bottom: 24px; }
    .lux-hero__badge-dot { width: 8px; height: 8px; border-radius: 50%; background: var(--red-bright); box-shadow: 0 0 0 4px var(--red-glow); }
    .lux-hero__title { font-size: clamp(2.4rem, 5.6vw, 4.6rem); line-height: 1.04; font-weight: 800; letter-spacing: -.02em; margin: 0 0 24px; }
    .lux-word--red { color: var(--red-bright); }
    .lux-word--stroke { color: transparent; -webkit-text-stroke: 2px var(--text); }
    .lux-hero__desc { max-width: 520px; color: var(--text-secondary); font-size: 1.08rem; margin: 0 0 32px; }
    .lux-hero__ctas { display: flex; flex-wrap: wrap; gap: 14px; margin-bottom: 32px; }
    .lux-trust-row { display: flex; flex-wrap: wrap; gap: 12px; }
    .lux-trust-chip { display: inline-flex; align-items: center; gap: 8px; padding: 8px 14px; border-radius: 999px; background: rgba(255,255,255,.05); font-size: .82rem; color: var(--text-secondary); }

    /* Visual stack */
    .lux-hero__visual { position: relative; height: 540px; }
    .lux-card { position: absolute; overflow: hidden; border-radius: 18px; background: linear-gradient(135deg, #1d1d21, #101012); border: 1px solid var(--border-color); box-shadow: 0 24px 60px rgba(0,0,0,.5); }
    .lux-card img { width: 100%; height: 100%; object-fit: cover; }
    .lux-card--main { inset: 0 0 70px 56px; }
    .lux-card--tl { width: 150px; height: 150px; top: -10px; right: -10px; border-radius: 14px; }
    .lux-card--br { width: 170px; height: 170px; bottom: 0; left: 0; border-radius: 14px; }
    .lux-card__label { position: absolute; left: 12px; bottom: 12px; display: inline-flex; align-items: center; gap: 8px; padding: 6px 12px; border-radius: 999px; background: rgba(10,10,11,.75); backdrop-filter: blur(6px); font-size: .78rem; font-weight: 600; }
    .lux-card__label-dot { width: 7px; height: 7px; border-radius: 50%; background: var(--red-bright); }
    .lux-stat-bubble { position: absolute; right: 18px; bottom: 20px; width: 118px; height: 118px; border-radius: 50%; background: var(--red-accent); display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; box-shadow: 0 12px 40px var(--red-glow); }
    .lux-stat-bubble strong { font-size: 1.7rem; line-height: 1; }
    .lux-stat-bubble span { font-size: .72rem; line-height: 1.2; margin-top: 4px; }
    .lux-vert-text { position: absolute; left: -34px; top: 50%; transform: translateY(-50%) rotate(180deg); writing-mode: vertical-rl; font-size: .62rem; letter-spacing: .25em; color: var(--text-secondary); white-space: nowrap; }

    /* Stats strip */
    .lux-hero__stats { display: flex; align-items: center; justify-content: space-around; gap: 16px; padding: 28px 20px; border-top: 1px solid var(--border-color); background: rgba(10,10,11,.6); backdrop-filter: blur(8px); }
    .lux-stat-item { display: flex; flex-direction: column; align-items: center; text-align: center; }
    .lux-stat-num { font-size: 2rem; font-weight: 800; color: var(--red-bright); line-height: 1.1; }
    .lux-stat-label { font-size: .8rem; color: var(--text-secondary); }
    .lux-stat-sep { width: 1px; height: 40px; background: var(--border-color); }

    /* Reveal animation: hidden only while JS is on, never if JS fails */
    .js [data-anim] { opacity: 0; transition: opacity .7s ease, transform .7s cubic-bezier(.2,.7,.2,1); }
    .js [data-anim="fade-up"] { transform: translateY(24px); }
    .js [data-anim="fade-left"] { transform: translateX(32px); }
    .js [data-anim="word"] { display: inline-block; transform: translateY(32px); }
    .js [data-anim].is-in { opacity: 1; transform: none; }

    /* ---------- Responsive ---------- */
    @media (max-width: 960px) {
      .lux-hero__inner { grid-template-columns: 1fr; gap: 40px; }
      .lux-hero__visual { height: 420px; }
      .lux-vert-text { display: none; }
      .lux-hero__stats { flex-wrap: wrap; justify-content: center; }
      .lux-stat-sep { display: none; }
      .lux-stat-item { flex: 1 1 40%; padding: 8px; }
      .mobile-menu-toggle { display: block; }
      #btn-header-cta { display: none; }
      .nav-menu { position: fixed; inset: var(--header-h) 0 auto 0; flex-direction: column; gap: 0; background: rgba(10,10,11,.97); border-bottom: 1px solid var(--border-color); max-height: 0; overflow: hidden; transition: max-height .3s; }
      .nav-menu.open { max-height: 420px; }
      .nav-menu a { display: block; padding: 16px 24px; }
    }
    @media (prefers-reduced-motion: reduce) {
      html { scroll-behavior: auto; }
      .js [data-anim] { transition: none; }
    }
  </style>
</head>
<body>

  <header id="main-header">
    <div class="container nav-container">
      <a href="#" class="logo" id="header-logo">
        <img src="<?= hero_img('home_hero', 0, 'images/primgar-logo.png') ?>" alt="<?= hero_img('home_hero', 0, 'Primgar International Logo', 'alt_text') ?>">
      </a>
      <nav aria-label="Main Navigation">
        <ul class="nav-menu" id="nav-links">
          <li><a href="#about" class="nav-link">About</a></li>
          <li><a href="#products" class="nav-link">Products</a></li>
          <li><a href="#services" class="nav-link">Services</a></li>
          <li><a href="#process" class="nav-link">Process</a></li>
          <li><a href="#fabrics" class="nav-link">Fabric Library</a></li>
          <li><a href="#rfq" class="nav-link">RFQ Calculator</a></li>
          <li><a href="#faq" class="nav-link">FAQs</a></li>
        </ul>
      </nav>
      <a href="#rfq" class="lux-cta-primary" id="btn-header-cta" style="padding:10px 20px;font-size:.9rem;">Get Quote</a>
      <button class="mobile-menu-toggle" id="mobile-toggle" type="button" aria-label="Open navigation" aria-controls="nav-links" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <section class="lux-hero" id="hero">
    <canvas id="hero-canvas" class="lux-hero__canvas" aria-hidden="true"></canvas>
    <div class="lux-orb lux-orb--1" aria-hidden="true"></div>
    <div class="lux-orb lux-orb--2" aria-hidden="true"></div>
    <div class="lux-orb lux-orb--3" aria-hidden="true"></div>

    <div class="lux-hero__inner container">
      <div class="lux-hero__copy">
        <div class="lux-hero__badge" data-anim="fade-up" data-delay="0">
          <span class="lux-hero__badge-dot"></span>
          SIALKOT, PAKISTAN · EST. MANUFACTURING EXCELLENCE
        </div>

        <h1 class="lux-hero__title" aria-label="Premium Apparel Manufacturing For Modern Brands">
          <span class="lux-word" data-anim="word" data-delay="120">Premium</span>
          <span class="lux-word" data-anim="word" data-delay="210">Apparel</span><br>
          <span class="lux-word lux-word--red" data-anim="word" data-delay="320">Manufacturing</span><br>
          <span class="lux-word" data-anim="word" data-delay="430">For</span>
          <span class="lux-word" data-anim="word" data-delay="500">Modern</span>
          <span class="lux-word lux-word--stroke" data-anim="word" data-delay="590">Brands</span>
        </h1>

        <p class="lux-hero__desc" data-anim="fade-up" data-delay="700">
          From concept to creation, we engineer high-quality garments that define your brand. Trusted by 1,000+ labels across 50+ countries.
        </p>

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

        <div class="lux-trust-row" data-anim="fade-up" data-delay="1020">
          <div class="lux-trust-chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ff3b4a" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Low MOQ · 100 pcs</div>
          <div class="lux-trust-chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ff3b4a" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Private Label Ready</div>
          <div class="lux-trust-chip"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#ff3b4a" stroke-width="2.5"><path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Global Shipping</div>
        </div>
      </div>

      <div class="lux-hero__visual" data-anim="fade-left" data-delay="400">
        <div class="lux-card lux-card--main">
          <img src="<?= hero_img('home_services', 0, 'images/embroidery.png') ?>" alt="<?= hero_img('home_services', 0, 'Premium embroidery on custom garment', 'alt_text') ?>" loading="eager">
          <div class="lux-card__label"><span class="lux-card__label-dot"></span>Precision Embroidery</div>
        </div>
        <div class="lux-card lux-card--tl">
          <img src="<?= hero_img('home_services', 1, 'images/screenprinting.png') ?>" alt="<?= hero_img('home_services', 1, 'Screen printing process', 'alt_text') ?>" loading="lazy">
          <div class="lux-card__label">Screen Print</div>
        </div>
        <div class="lux-card lux-card--br">
          <img src="<?= hero_img('home_services', 2, 'images/patternmaking.png') ?>" alt="<?= hero_img('home_services', 2, 'Pattern cutting', 'alt_text') ?>" loading="lazy">
          <div class="lux-card__label">Pattern Cut</div>
        </div>
        <div class="lux-stat-bubble">
          <strong data-target="1000" data-suffix="+">1000+</strong>
          <span>Brands<br>Served</span>
        </div>
        <div class="lux-vert-text" aria-hidden="true">PRIMGAR · INTERNATIONAL · CERTIFIED ·</div>
      </div>
    </div>

    <div class="lux-hero__stats">
      <div class="lux-stat-item"><span class="lux-stat-num" data-target="50" data-suffix="+">50+</span><span class="lux-stat-label">Countries Served</span></div>
      <div class="lux-stat-sep"></div>
      <div class="lux-stat-item"><span class="lux-stat-num" data-target="1000" data-suffix="+">1000+</span><span class="lux-stat-label">Brands Trust Us</span></div>
      <div class="lux-stat-sep"></div>
      <div class="lux-stat-item"><span class="lux-stat-num" data-target="5" data-suffix="M+">5M+</span><span class="lux-stat-label">Garments Produced</span></div>
      <div class="lux-stat-sep"></div>
      <div class="lux-stat-item"><span class="lux-stat-num" data-target="99" data-suffix="%">99%</span><span class="lux-stat-label">On-Time Delivery</span></div>
    </div>
  </section>

  <!-- Paste the rest of your sections (About, Products, ... footer) below this line -->

  <script>
  (function () {
    'use strict';
    var reduce = window.matchMedia && matchMedia('(prefers-reduced-motion: reduce)').matches;

    /* Header: background on scroll + mobile menu */
    var header = document.getElementById('main-header');
    function onScroll() { header.classList.toggle('scrolled', window.scrollY > 20); }
    onScroll(); window.addEventListener('scroll', onScroll, { passive: true });

    var toggle = document.getElementById('mobile-toggle');
    var menu = document.getElementById('nav-links');
    toggle.addEventListener('click', function () {
      var open = menu.classList.toggle('open');
      toggle.setAttribute('aria-expanded', open);
    });
    menu.addEventListener('click', function (e) {
      if (e.target.closest('a')) { menu.classList.remove('open'); toggle.setAttribute('aria-expanded', 'false'); }
    });

    /* Hero reveal, staggered by data-delay. Safety timer guarantees visibility. */
    var items = document.querySelectorAll('.lux-hero [data-anim]');
    function reveal(el) {
      el.style.transitionDelay = (reduce ? 0 : (parseInt(el.getAttribute('data-delay'), 10) || 0)) + 'ms';
      el.classList.add('is-in');
    }
    requestAnimationFrame(function () { requestAnimationFrame(function () { items.forEach(reveal); }); });
    setTimeout(function () { items.forEach(function (el) { el.classList.add('is-in'); }); }, 2500);

    /* Count-up numbers */
    function count(el) {
      if (el.dataset.counted) return;
      el.dataset.counted = '1';
      var target = parseFloat(el.dataset.target) || 0, suffix = el.dataset.suffix || '';
      if (reduce) { el.textContent = target + suffix; return; }
      var start = null;
      function step(ts) {
        if (start === null) start = ts;
        var p = Math.min((ts - start) / 1600, 1);
        el.textContent = Math.round(target * (1 - Math.pow(1 - p, 3))) + suffix;
        if (p < 1) requestAnimationFrame(step);
      }
      el.textContent = '0' + suffix;
      requestAnimationFrame(step);
    }
    var counters = document.querySelectorAll('.lux-hero [data-target]');
    if ('IntersectionObserver' in window) {
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (en) { if (en.isIntersecting) { count(en.target); io.unobserve(en.target); } });
      }, { threshold: 0.4 });
      counters.forEach(function (el) { io.observe(el); });
    }

    /* Hero canvas: drifting red threads */
    var canvas = document.getElementById('hero-canvas');
    if (!canvas || reduce) return;
    var ctx = canvas.getContext('2d'), w, h, pts = [];
    function size() {
      var r = canvas.getBoundingClientRect(), dpr = Math.min(window.devicePixelRatio || 1, 2);
      w = r.width; h = r.height; canvas.width = w * dpr; canvas.height = h * dpr;
      ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
      pts = []; for (var i = 0; i < Math.max(24, Math.min(60, w / 24)); i++)
        pts.push({ x: Math.random() * w, y: Math.random() * h, vx: (Math.random() - .5) * .35, vy: (Math.random() - .5) * .35 });
    }
    function draw() {
      ctx.clearRect(0, 0, w, h);
      for (var i = 0; i < pts.length; i++) {
        var a = pts[i]; a.x += a.vx; a.y += a.vy;
        if (a.x < 0 || a.x > w) a.vx *= -1; if (a.y < 0 || a.y > h) a.vy *= -1;
        for (var j = i + 1; j < pts.length; j++) {
          var b = pts[j], d = Math.hypot(a.x - b.x, a.y - b.y);
          if (d < 140) { ctx.strokeStyle = 'rgba(255,59,74,' + (0.18 * (1 - d / 140)) + ')'; ctx.beginPath(); ctx.moveTo(a.x, a.y); ctx.lineTo(b.x, b.y); ctx.stroke(); }
        }
        ctx.fillStyle = 'rgba(255,59,74,.5)'; ctx.beginPath(); ctx.arc(a.x, a.y, 1.6, 0, 6.283); ctx.fill();
      }
      requestAnimationFrame(draw);
    }
    size(); draw(); window.addEventListener('resize', size);
  })();
  </script>
</body>
</html>
