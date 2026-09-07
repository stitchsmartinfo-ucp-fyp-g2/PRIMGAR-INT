// Smooth Header Scroll Effect
window.addEventListener('scroll', () => {
  const header = document.getElementById('main-header');
  if (window.scrollY > 50) {
    header.classList.add('scrolled');
  } else {
    header.classList.remove('scrolled');
  }
});

// FAQ Accordions Interaction
const faqQuestions = document.querySelectorAll('.faq-question');
faqQuestions.forEach(question => {
  question.addEventListener('click', () => {
    const item = question.parentElement;
    const isActive = item.classList.contains('active');
    
    // Close other items
    document.querySelectorAll('.faq-item').forEach(faq => {
      faq.classList.remove('active');
    });
    
    if (!isActive) {
      item.classList.add('active');
    }
  });
});

// MOQ & Pricing Calculator Logic
const calcCategory = document.getElementById('calc-category');
const calcQuantity = document.getElementById('calc-quantity');
const customPrint = document.getElementById('custom-print');
const customEmbroid = document.getElementById('custom-embroid');
const customLabel = document.getElementById('custom-label');

const estMoq = document.getElementById('est-moq');
const btnApplyEstimate = document.getElementById('btn-apply-estimate');
const rfqDetails = document.getElementById('rfq-details');
const rfqCategory = document.getElementById('rfq-category');
const rfqQuantity = document.getElementById('rfq-quantity');

function calculateEstimate() {
  const quantity = Math.max(10, parseInt(calcQuantity.value) || 10);
  
  // Update UI
  estMoq.innerText = `${quantity} pcs`;
  if (rfqCategory) rfqCategory.value = calcCategory.value;
  if (rfqQuantity) rfqQuantity.value = quantity;
}

// Attach change listeners
if (calcCategory && calcQuantity) {
  [calcCategory, calcQuantity, customPrint, customEmbroid, customLabel].forEach(elem => {
    elem.addEventListener('input', calculateEstimate);
    elem.addEventListener('change', calculateEstimate);
  });
  
  calculateEstimate(); // run initially
}

// Transfer estimate to RFQ form
if (btnApplyEstimate && rfqDetails) {
  btnApplyEstimate.addEventListener('click', () => {
    const qty = calcQuantity.value;
    const catName = calcCategory.options[calcCategory.selectedIndex].text;
        
    let specs = `Estimate Details:\n- Category: ${catName}\n- Quantity: ${qty} pcs\n\nCustomization options selected:\n`;
    specs += `- Custom Print: ${customPrint.checked ? 'Yes' : 'No'}\n`;
    specs += `- Custom Embroidery: ${customEmbroid.checked ? 'Yes' : 'No'}\n`;
    specs += `- Custom Labels: ${customLabel.checked ? 'Yes' : 'No'}\n`;
    
    rfqDetails.value = specs + "\nPlease send us physical samples / virtual mocks to get started.";
    
    // Smooth scroll to RFQ Form
    const formElement = document.getElementById('rfq-form-container');
    if (formElement) {
      formElement.scrollIntoView({ behavior: 'smooth' });
    }
  });
}

// =========================================
// MANUFACTURING JOURNEY — SCROLL DRIVER
// =========================================
(function initJourney() {
  const section   = document.getElementById('process');
  const bgImgs    = document.querySelectorAll('.journey-bg-img');
  const steps     = document.querySelectorAll('.journey-step');
  const contents  = document.querySelectorAll('.journey-step-content');

  if (!section || !bgImgs.length || !steps.length) return;

  let activeIndex = -1;

  function setActive(index) {
    if (index === activeIndex) return;

    // Update background image
    bgImgs.forEach((img, i) => {
      img.classList.toggle('active', i === index);
    });

    // Update text content simultaneously
    contents.forEach((content, i) => {
      content.classList.toggle('visible', i === index);
    });

    activeIndex = index;
  }

  function onScroll() {
    if (!section) return;
    const sectionTop = section.getBoundingClientRect().top;
    const sectionHeight = section.offsetHeight;

    // Use actual step height from DOM (not section/steps.length which is wrong)
    const stepHeight = steps[0].offsetHeight;

    // How far we've scrolled into the section
    const scrolled = -sectionTop;

    if (scrolled < 0) {
      // Before section starts — show first step
      setActive(0);
      return;
    }

    const stepIndex = Math.max(0, Math.min(
      Math.floor(scrolled / stepHeight),
      steps.length - 1
    ));

    setActive(stepIndex);
  }

  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll(); // run immediately on load
})();

// Mobile navigation
const mobileToggle = document.getElementById('mobile-toggle');
const navigationLinks = document.getElementById('nav-links');
if (mobileToggle && navigationLinks) {
  mobileToggle.addEventListener('click', () => {
    const isOpen = navigationLinks.classList.toggle('is-open');
    mobileToggle.classList.toggle('is-open', isOpen);
    mobileToggle.setAttribute('aria-expanded', String(isOpen));
  });
  navigationLinks.querySelectorAll('a').forEach(link => link.addEventListener('click', () => {
    navigationLinks.classList.remove('is-open');
    mobileToggle.classList.remove('is-open');
    mobileToggle.setAttribute('aria-expanded', 'false');
  }));
  document.addEventListener('keydown', event => {
    if (event.key === 'Escape' && navigationLinks.classList.contains('is-open')) {
      navigationLinks.classList.remove('is-open');
      mobileToggle.classList.remove('is-open');
      mobileToggle.setAttribute('aria-expanded', 'false');
      mobileToggle.focus();
    }
  });
}


// =========================================
// LUXURY HERO SECTION ANIMATIONS
// =========================================
document.addEventListener('DOMContentLoaded', () => {
  const luxHero = document.querySelector('.lux-hero');
  if (!luxHero) return;
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // 1. Trigger entrance animations
  setTimeout(() => luxHero.classList.add('is-loaded'), 100);

  // 2. Animate stat counters
  const counters = document.querySelectorAll('.lux-stat-num, #hero-counter-brands');
  counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');
    const suffix = counter.getAttribute('data-suffix') || '';
    const duration = 2000;
    const increment = target / (duration / 16); // 60fps

    if (prefersReducedMotion) {
      counter.innerText = target + suffix;
      return;
    }

    let current = 0;
    const updateCounter = () => {
      current += increment;
      if (current < target) {
        counter.innerText = Math.ceil(current) + suffix;
        requestAnimationFrame(updateCounter);
      } else {
        counter.innerText = target + suffix;
      }
    };
    
    // Start counter slightly delayed to sync with entrance
    setTimeout(updateCounter, 800);
  });

  // 3. Canvas Background Animation (Subtle red threads/particles)
  const canvas = document.getElementById('hero-canvas');
  if (prefersReducedMotion || !canvas) return;
  const ctx = canvas.getContext('2d');
  
  let width, height;
  let particles = [];

  function resize() {
    width = canvas.width = luxHero.offsetWidth;
    height = canvas.height = luxHero.offsetHeight;
  }
  
  window.addEventListener('resize', resize);
  resize();

  class Particle {
    constructor() {
      this.x = Math.random() * width;
      this.y = Math.random() * height;
      this.size = Math.random() * 1.5 + 0.5;
      this.speedX = (Math.random() - 0.5) * 0.5;
      this.speedY = (Math.random() - 0.5) * 0.5;
      this.opacity = Math.random() * 0.5 + 0.1;
    }
    update() {
      this.x += this.speedX;
      this.y += this.speedY;
      
      if (this.x < 0 || this.x > width) this.speedX *= -1;
      if (this.y < 0 || this.y > height) this.speedY *= -1;
    }
    draw() {
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(229, 26, 35, ${this.opacity})`;
      ctx.fill();
    }
  }

  function initParticles() {
    particles = [];
    const numParticles = Math.min(window.innerWidth / 15, 80); // Responsive amount
    for (let i = 0; i < numParticles; i++) {
      particles.push(new Particle());
    }
  }
  
  let animationFrame;
  function animateParticles() {
    ctx.clearRect(0, 0, width, height);
    
    particles.forEach(p => {
      p.update();
      p.draw();
    });
    
    // Draw connecting threads
    for (let i = 0; i < particles.length; i++) {
      for (let j = i; j < particles.length; j++) {
        const dx = particles[i].x - particles[j].x;
        const dy = particles[i].y - particles[j].y;
        const distance = Math.sqrt(dx*dx + dy*dy);
        
        if (distance < 120) {
          ctx.beginPath();
          ctx.strokeStyle = `rgba(229, 26, 35, ${0.1 - distance/1200})`;
          ctx.lineWidth = 0.5;
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.stroke();
        }
      }
    }
    
    animationFrame = requestAnimationFrame(animateParticles);
  }

  initParticles();
  animateParticles();

  document.addEventListener('visibilitychange', () => {
    if (document.hidden) cancelAnimationFrame(animationFrame);
    else animateParticles();
  });
});


// =========================================
// PREMIUM INTERACTIONS & ANIMATIONS
// =========================================

document.addEventListener('DOMContentLoaded', () => {

  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // 1. Initialize Lenis Smooth Scroll only when it is available and appropriate.
  const lenis = !prefersReducedMotion && typeof Lenis !== 'undefined' ? new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    direction: 'vertical',
    gestureDirection: 'vertical',
    smooth: true,
    mouseMultiplier: 1,
    smoothTouch: false,
    touchMultiplier: 2,
    infinite: false,
  }) : null;

  function raf(time) {
    lenis?.raf(time);
    if (lenis) requestAnimationFrame(raf);
  }
  if (lenis) requestAnimationFrame(raf);

  // Sync GSAP ScrollTrigger with Lenis
  if (lenis && typeof ScrollTrigger !== 'undefined' && typeof gsap !== 'undefined') {
    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => {
      lenis.raf(time * 1000);
    });
    gsap.ticker.lagSmoothing(0);
  }

  // 3. Magnetic Button Effect
  const magneticEls = prefersReducedMotion ? [] : document.querySelectorAll('.magnetic');
  magneticEls.forEach((el) => {
    el.addEventListener('mousemove', function (e) {
      const position = el.getBoundingClientRect();
      const x = e.clientX - position.left - position.width / 2;
      const y = e.clientY - position.top - position.height / 2;
      
      el.style.transform = `translate(${x * 0.3}px, ${y * 0.5}px)`;
    });

    el.addEventListener('mouseout', function () {
      el.style.transform = 'translate(0px, 0px)';
    });
  });

  // 4. GSAP Scroll Reveal Animations
  if (typeof gsap !== 'undefined' && typeof ScrollTrigger !== 'undefined') {
    gsap.registerPlugin(ScrollTrigger);

    // Reveal Up
    const revealUpElements = document.querySelectorAll('.reveal-up');
    revealUpElements.forEach((el) => {
      ScrollTrigger.create({
        trigger: el,
        start: 'top 85%',
        onEnter: () => el.classList.add('is-revealed'),
        once: true
      });
    });

    // Reveal Scale
    const revealScaleElements = document.querySelectorAll('.reveal-scale');
    revealScaleElements.forEach((el) => {
      ScrollTrigger.create({
        trigger: el,
        start: 'top 85%',
        onEnter: () => el.classList.add('is-revealed'),
        once: true
      });
    });
  }

  // Native observer fallback makes reveals work even when the animation CDN is unavailable.
  const revealElements = document.querySelectorAll('.reveal-up, .reveal-scale');
  if (prefersReducedMotion || !('IntersectionObserver' in window)) {
    revealElements.forEach(el => el.classList.add('is-revealed'));
  } else {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-revealed');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -6% 0px' });
    revealElements.forEach(el => revealObserver.observe(el));
  }

});

// =========================================
// SCROLL SPY — Active Nav Link Highlighter
// =========================================
(function initScrollSpy() {
  const navLinks = document.querySelectorAll('.nav-link[href^="#"]');
  
  // Build a map: sectionId -> navLink element
  const sectionMap = {};
  navLinks.forEach(link => {
    const id = link.getAttribute('href').replace('#', '');
    sectionMap[id] = link;
  });

  const sectionIds = Object.keys(sectionMap);

  function getActiveSection() {
    const scrollY = window.scrollY;
    const windowHeight = window.innerHeight;
    const docHeight = document.body.scrollHeight;

    // If near bottom of page, highlight the last section
    if (scrollY + windowHeight >= docHeight - 10) {
      return sectionIds[sectionIds.length - 1];
    }

    // Find the section whose top is closest to (but not below) the viewport center
    let activeId = null;
    const offset = 120; // header height offset

    for (let i = sectionIds.length - 1; i >= 0; i--) {
      const section = document.getElementById(sectionIds[i]);
      if (section && section.getBoundingClientRect().top <= offset) {
        activeId = sectionIds[i];
        break;
      }
    }
    return activeId;
  }

  function updateActiveLink() {
    const activeId = getActiveSection();

    navLinks.forEach(link => link.classList.remove('active'));

    if (activeId && sectionMap[activeId]) {
      sectionMap[activeId].classList.add('active');
    }
  }

  // Run on scroll with requestAnimationFrame for performance
  let ticking = false;
  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(() => {
        updateActiveLink();
        ticking = false;
      });
      ticking = true;
    }
  }, { passive: true });

  // Run once on load
  updateActiveLink();
})();

// =========================================
// ACCESSIBLE, PERFORMANCE-FIRST INTERACTION LAYER
// =========================================
document.addEventListener('DOMContentLoaded', () => {
  const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const finePointer = window.matchMedia('(hover: hover) and (pointer: fine)').matches;

  // Skip link and reading-progress indicator are shared by every page.
  const skipLink = document.createElement('a');
  skipLink.className = 'skip-link';
  skipLink.href = '#main-content';
  skipLink.textContent = 'Skip to content';
  document.body.prepend(skipLink);

  const main = document.querySelector('main') || document.querySelector('section');
  if (main && !main.id) main.id = 'main-content';

  const progress = document.createElement('div');
  progress.className = 'scroll-progress';
  progress.setAttribute('aria-hidden', 'true');
  document.body.prepend(progress);
  let progressQueued = false;
  const updateProgress = () => {
    const max = document.documentElement.scrollHeight - window.innerHeight;
    const amount = max > 0 ? Math.min(1, window.scrollY / max) : 0;
    progress.style.transform = `scaleX(${amount})`;
    progressQueued = false;
  };
  window.addEventListener('scroll', () => {
    if (!progressQueued) {
      progressQueued = true;
      requestAnimationFrame(updateProgress);
    }
  }, { passive: true });
  updateProgress();

  // Make existing FAQ markup keyboard-operable without changing its visual design.
  document.querySelectorAll('.faq-question').forEach((question, index) => {
    const answer = question.parentElement?.querySelector('.faq-answer');
    if (!answer) return;
    const answerId = answer.id || `faq-answer-${index + 1}`;
    answer.id = answerId;
    question.setAttribute('role', 'button');
    question.setAttribute('tabindex', '0');
    question.setAttribute('aria-controls', answerId);
    question.setAttribute('aria-expanded', String(question.parentElement.classList.contains('active')));
    question.addEventListener('keydown', event => {
      if (event.key === 'Enter' || event.key === ' ') {
        event.preventDefault();
        question.click();
      }
    });
  });

  document.querySelectorAll('.faq-question').forEach(question => question.addEventListener('click', () => {
    document.querySelectorAll('.faq-question').forEach(item => {
      item.setAttribute('aria-expanded', String(item === question && item.parentElement.classList.contains('active')));
    });
  }));

  // Button ripple feedback; disabled for reduced motion.
  if (!reduceMotion) {
    document.querySelectorAll('.btn, .lux-cta-primary, .lux-cta-ghost, .btn-whatsapp-cta').forEach(button => {
      button.addEventListener('pointerdown', event => {
        const bounds = button.getBoundingClientRect();
        const ripple = document.createElement('span');
        ripple.className = 'button-ripple';
        ripple.style.left = `${event.clientX - bounds.left}px`;
        ripple.style.top = `${event.clientY - bounds.top}px`;
        button.append(ripple);
        ripple.addEventListener('animationend', () => ripple.remove());
      });
    });
  }

  // Subtle GPU-friendly tilt for non-essential cards on desktop pointers only.
  if (finePointer && !reduceMotion) {
    document.querySelectorAll('.solution-card, .testimonial-card').forEach(card => {
      card.classList.add('tilt-card');
      card.addEventListener('pointermove', event => {
        const box = card.getBoundingClientRect();
        const x = (event.clientX - box.left) / box.width - 0.5;
        const y = (event.clientY - box.top) / box.height - 0.5;
        card.style.setProperty('--tilt-x', `${-y * 3}deg`);
        card.style.setProperty('--tilt-y', `${x * 3}deg`);
      });
      card.addEventListener('pointerleave', () => {
        card.style.removeProperty('--tilt-x');
        card.style.removeProperty('--tilt-y');
      });
    });

    // Cursor enhancement is desktop-only and is omitted for assistive/mobile users.
    const cursor = document.createElement('div');
    const follower = document.createElement('div');
    cursor.className = 'cursor';
    follower.className = 'cursor-follower';
    cursor.setAttribute('aria-hidden', 'true');
    follower.setAttribute('aria-hidden', 'true');
    document.body.append(cursor, follower);
    window.addEventListener('pointermove', event => {
      cursor.classList.add('is-visible'); follower.classList.add('is-visible');
      cursor.style.left = `${event.clientX}px`; cursor.style.top = `${event.clientY}px`;
      follower.style.left = `${event.clientX}px`; follower.style.top = `${event.clientY}px`;
    }, { passive: true });
    document.querySelectorAll('a, button, input, select, textarea, [role="button"]').forEach(item => {
      item.addEventListener('pointerenter', () => cursor.classList.add('hovering'));
      item.addEventListener('pointerleave', () => cursor.classList.remove('hovering'));
    });
  }

  // Lightweight page transitions for same-origin page navigation.
  document.documentElement.classList.add('page-ready');
  if (!reduceMotion) {
    const transition = document.createElement('div');
    transition.className = 'page-transition';
    transition.setAttribute('aria-hidden', 'true');
    document.body.append(transition);
    
    // Fix for bfcache (when user clicks back button)
    window.addEventListener('pageshow', (event) => {
      if (event.persisted) {
        transition.classList.remove('is-active');
      }
    });

    document.querySelectorAll('a[href]').forEach(link => link.addEventListener('click', event => {
      const destination = new URL(link.href, window.location.href);
      const isSameDocument = destination.pathname === window.location.pathname && destination.search === window.location.search;
      if (event.defaultPrevented || event.button !== 0 || event.metaKey || event.ctrlKey || event.shiftKey || event.altKey || link.target || link.hasAttribute('download') || destination.origin !== window.location.origin || isSameDocument) return;
      event.preventDefault();
      transition.classList.add('is-active');
      window.setTimeout(() => window.location.assign(destination.href), 220);
    }));
  }
});
