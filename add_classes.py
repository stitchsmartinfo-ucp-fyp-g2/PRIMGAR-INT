import re

with open('index.php', 'r') as f:
    html = f.read()

# Make buttons and nav links magnetic
html = re.sub(r'class="([^"]*\bbtn\b[^"]*)"', r'class="\1 magnetic"', html)
html = re.sub(r'class="([^"]*\bnav-link\b[^"]*)"', r'class="\1 magnetic"', html)

# Add reveal-up to specific structural classes
reveal_classes = ['hero-content', 'features-grid', 'solution-card', 'library-grid', 'rfq-container', 'faq-item', 'client-logo-placeholder', 'footer-col']

for cls in reveal_classes:
    html = re.sub(fr'class="([^"]*\b{cls}\b[^"]*)"', fr'class="\1 reveal-up"', html)

with open('index.php', 'w') as f:
    f.write(html)

print("Added magnetic and reveal-up classes to index.php")
