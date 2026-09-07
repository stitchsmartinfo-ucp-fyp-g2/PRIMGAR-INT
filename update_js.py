with open('app.js', 'a') as f:
    f.write("""

// =========================================
// PREMIUM INTERACTIONS & ANIMATIONS
// =========================================

document.addEventListener('DOMContentLoaded', () => {

  // 1. Initialize Lenis Smooth Scroll
  const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    direction: 'vertical',
    gestureDirection: 'vertical',
    smooth: true,
    mouseMultiplier: 1,
    smoothTouch: false,
    touchMultiplier: 2,
    infinite: false,
  });

  function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);

  // Sync GSAP ScrollTrigger with Lenis
  if (typeof ScrollTrigger !== 'undefined') {
    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => {
      lenis.raf(time * 1000);
    });
    gsap.ticker.lagSmoothing(0);
  }

  // 2. Custom Cursor Logic
  const cursor = document.querySelector('.cursor');
  const follower = document.querySelector('.cursor-follower');
  
  if (cursor && follower) {
    let mouseX = window.innerWidth / 2;
    let mouseY = window.innerHeight / 2;
    let cursorX = mouseX;
    let cursorY = mouseY;
    let followerX = mouseX;
    let followerY = mouseY;

    window.addEventListener('mousemove', (e) => {
      mouseX = e.clientX;
      mouseY = e.clientY;
    });

    const renderCursor = () => {
      // Fast cursor
      cursorX += (mouseX - cursorX) * 0.2;
      cursorY += (mouseY - cursorY) * 0.2;
      // Slow follower
      followerX += (mouseX - followerX) * 0.1;
      followerY += (mouseY - followerY) * 0.1;

      cursor.style.transform = `translate(${cursorX}px, ${cursorY}px)`;
      follower.style.transform = `translate(${followerX}px, ${followerY}px)`;
      requestAnimationFrame(renderCursor);
    };
    requestAnimationFrame(renderCursor);

    // Hover effects on links/buttons
    const interactiveElements = document.querySelectorAll('a, button, .btn, .magnetic');
    interactiveElements.forEach((el) => {
      el.addEventListener('mouseenter', () => {
        cursor.classList.add('hovering');
        follower.classList.add('hovering');
      });
      el.addEventListener('mouseleave', () => {
        cursor.classList.remove('hovering');
        follower.classList.remove('hovering');
      });
    });
  }

  // 3. Magnetic Button Effect
  const magneticEls = document.querySelectorAll('.magnetic');
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

});
""")
print("Successfully appended premium interactions to app.js")
