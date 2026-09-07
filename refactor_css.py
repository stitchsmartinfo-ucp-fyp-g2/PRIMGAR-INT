import re

with open('index.css', 'r') as f:
    css = f.read()

# 1. Update font-sizes to fluid variables
# Simple heuristic: map px to closest fluid variable
fs_map = {
    r'font-size:\s*1[2-4]px;': 'font-size: var(--fs-xs);',
    r'font-size:\s*1[5-6]px;': 'font-size: var(--fs-sm);',
    r'font-size:\s*1[7-8]px;': 'font-size: var(--fs-base);',
    r'font-size:\s*2[0-4]px;': 'font-size: var(--fs-lg);',
    r'font-size:\s*2[5-9]px;': 'font-size: var(--fs-xl);',
    r'font-size:\s*3[0-9]px;': 'font-size: var(--fs-2xl);',
    r'font-size:\s*4[0-9]px;': 'font-size: var(--fs-3xl);',
    r'font-size:\s*5[0-9]px;': 'font-size: var(--fs-4xl);',
    r'font-size:\s*6[0-9]px;': 'font-size: var(--fs-5xl);',
    r'font-size:\s*[7-9][0-9]px;': 'font-size: var(--fs-5xl);'
}

for pattern, replacement in fs_map.items():
    css = re.sub(pattern, replacement, css)

# 2. Update .container
css = re.sub(
    r'\.container\s*\{[^}]*\}',
    '.container {\n  width: 100%;\n  max-width: var(--max-width);\n  margin: 0 auto;\n  padding: 0 var(--space-md);\n}',
    css
)

# 3. Add Custom Cursor and Reveal Animations at the end
animations = """
/* =========================================
   PREMIUM INTERACTIONS & ANIMATIONS
   ========================================= */

/* Lenis Smooth Scroll */
html.lenis {
  height: auto;
}
.lenis.lenis-smooth {
  scroll-behavior: auto;
}
.lenis.lenis-smooth [data-lenis-prevent] {
  overscroll-behavior: contain;
}
.lenis.lenis-stopped {
  overflow: hidden;
}

/* Custom Cursor */
.cursor {
  position: fixed;
  top: 0; left: 0;
  width: 8px; height: 8px;
  background-color: var(--red-accent);
  border-radius: 50%;
  pointer-events: none;
  z-index: 9999;
  transform: translate(-50%, -50%);
  transition: width 0.3s, height 0.3s, background-color 0.3s;
}

.cursor-follower {
  position: fixed;
  top: 0; left: 0;
  width: 40px; height: 40px;
  border: 1px solid rgba(229, 26, 35, 0.5);
  border-radius: 50%;
  pointer-events: none;
  z-index: 9998;
  transform: translate(-50%, -50%);
  transition: transform 0.1s ease-out, width 0.3s, height 0.3s, background-color 0.3s;
}

body:hover .cursor { opacity: 1; }
body:hover .cursor-follower { opacity: 1; }

.cursor.hovering {
  width: 60px;
  height: 60px;
  background-color: rgba(229, 26, 35, 0.1);
  mix-blend-mode: exclusion;
}
.cursor-follower.hovering {
  opacity: 0;
}

/* Scroll Reveals (GSAP will toggle these) */
.reveal-up {
  opacity: 0;
  transform: translateY(40px);
  transition: opacity 1s cubic-bezier(0.16, 1, 0.3, 1), transform 1s cubic-bezier(0.16, 1, 0.3, 1);
}
.reveal-up.is-revealed {
  opacity: 1;
  transform: translateY(0);
}

.reveal-scale {
  opacity: 0;
  transform: scale(0.95);
  transition: opacity 1.2s cubic-bezier(0.16, 1, 0.3, 1), transform 1.2s cubic-bezier(0.16, 1, 0.3, 1);
}
.reveal-scale.is-revealed {
  opacity: 1;
  transform: scale(1);
}

/* Magnetic Button Hover State */
.magnetic {
  display: inline-block;
  transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

/* Fluid Typography overrides for specific elements that had em/rem hardcoded */
.hero-title { font-size: var(--fs-5xl) !important; }
.section-title { font-size: var(--fs-4xl) !important; }
h3 { font-size: var(--fs-2xl) !important; }
"""

css += animations

with open('index.css', 'w') as f:
    f.write(css)

print("Refactored index.css successfully.")
