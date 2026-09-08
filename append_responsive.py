import os

responsive_css = """
/* ==========================================================================
   GLOBAL MOBILE RESPONSIVE OVERRIDES
   ========================================================================== */
@media (max-width: 992px) {
  /* Force grids to single column on tablet/mobile */
  .hero-container,
  .grid-3,
  .product-grid,
  .footer-grid,
  .calculator-rfq-grid,
  .stats-strip,
  .services-grid,
  .features-grid,
  .gallery-grid,
  .category-grid,
  .timeline-grid {
    grid-template-columns: 1fr !important;
    gap: 24px !important;
  }
  
  /* Ensure images do not break layouts */
  img, video, iframe {
    max-width: 100% !important;
    height: auto !important;
  }
  
  /* Prevent horizontal scrolling globally */
  html, body {
    overflow-x: hidden !important;
    width: 100% !important;
    max-width: 100vw !important;
  }
  
  /* Reduce excessive paddings */
  section, .section-padding {
    padding-left: 16px !important;
    padding-right: 16px !important;
  }
  
  /* Adjust timeline for mobile */
  .timeline::after {
    left: 20px !important;
  }
  .timeline-item {
    width: 100% !important;
    padding-left: 50px !important;
    padding-right: 16px !important;
  }
  .timeline-item.right {
    left: 0 !important;
  }
  .timeline-item::after {
    left: 11px !important;
  }
  
  /* Center text on hero sections */
  .hero-content {
    text-align: center !important;
    margin: 0 auto !important;
  }
  
  /* Make floating buttons manageable */
  .chatbot-container {
    bottom: 16px !important;
    right: 16px !important;
  }
  .chatbot-window {
    width: calc(100vw - 32px) !important;
    right: 0 !important;
    bottom: 70px !important;
  }
}

@media (max-width: 576px) {
  /* Adjust font sizes slightly on very small screens */
  h1 { font-size: 2.2rem !important; line-height: 1.2 !important; }
  h2 { font-size: 1.8rem !important; }
  h3 { font-size: 1.5rem !important; }
  
  .glass-card, .product-card, .category-card {
    padding: 16px !important;
  }
  
  /* Make all inputs full width */
  input, select, textarea, button {
    width: 100% !important;
    box-sizing: border-box !important;
  }
  
  /* Buttons stacking */
  .hero-ctas, .button-group {
    flex-direction: column !important;
    gap: 12px !important;
  }
}
"""

targets = [
    '/Applications/xampp/xamppfiles/htdocs/PRIMGAR int/index.css',
    '/Applications/xampp/xamppfiles/htdocs/PRIMGAR int/next-app/app/globals.css',
    '/Applications/xampp/xamppfiles/htdocs/PRIMGAR int/next-app/src/app/globals.css'
]

for filepath in targets:
    if os.path.exists(filepath):
        with open(filepath, 'a') as f:
            f.write(responsive_css)
        print(f"Appended responsive CSS to {filepath}")

