// ============================================================
// MIRAI PACKAGING LLP — CORE JAVASCRIPT 2.0
// Smooth Animations, Packaging Calculator & Interactions
// ============================================================

document.addEventListener('DOMContentLoaded', function () {

  // ── NAVBAR SCROLL EFFECT ──
  const navbar = document.getElementById('navbar');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 30) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  }, { passive: true });

  // ── MOBILE MENU DRAWER ──
  const hamburger = document.getElementById('hamburger');
  const drawer = document.getElementById('mobileDrawer');
  const overlay = document.getElementById('drawerOverlay');
  const drawerClose = document.getElementById('drawerClose');

  function openDrawer() {
    if (!drawer) return;
    drawer.classList.add('open');
    overlay?.classList.add('open');
    hamburger?.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeDrawer() {
    if (!drawer) return;
    drawer.classList.remove('open');
    overlay?.classList.remove('open');
    hamburger?.classList.remove('open');
    document.body.style.overflow = '';
  }

  hamburger?.addEventListener('click', openDrawer);
  drawerClose?.addEventListener('click', closeDrawer);
  overlay?.addEventListener('click', closeDrawer);

  document.querySelectorAll('.drawer-link').forEach(function (link) {
    link.addEventListener('click', closeDrawer);
  });

  // ── SCROLL REVEAL (INTERSECTION OBSERVER) ──
  const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
  if (revealElements.length && 'IntersectionObserver' in window) {
    const revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -40px 0px'
    });

    revealElements.forEach(function (el) {
      revealObserver.observe(el);
    });
  } else {
    // Fallback if no IntersectionObserver
    revealElements.forEach(function (el) { el.classList.add('visible'); });
  }

  // ── NUMBER COUNTER ANIMATION ──
  const counterElements = document.querySelectorAll('[data-target]');
  if (counterElements.length && 'IntersectionObserver' in window) {
    const counterObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCount(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.3 });

    counterElements.forEach(function (counter) {
      counterObserver.observe(counter);
    });
  }

  function animateCount(el) {
    const target = parseInt(el.dataset.target, 10);
    const suffix = el.dataset.suffix || '';
    const duration = 1800;
    const start = performance.now();

    function step(currentTime) {
      const elapsed = currentTime - start;
      const progress = Math.min(elapsed / duration, 1);
      // Ease out cubic
      const easeOut = 1 - Math.pow(1 - progress, 3);
      const currentVal = Math.floor(easeOut * target);

      el.textContent = currentVal.toLocaleString() + suffix;

      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        el.textContent = target.toLocaleString() + suffix;
      }
    }

    requestAnimationFrame(step);
  }

  // ── INTERACTIVE PACKAGING CALCULATOR ──
  const calcLength = document.getElementById('calcLength');
  const calcWidth = document.getElementById('calcWidth');
  const calcHeight = document.getElementById('calcHeight');
  const calcPly = document.getElementById('calcPly');
  const resVolWeight = document.getElementById('resVolWeight');
  const resSheetSize = document.getElementById('resSheetSize');
  const resSheetArea = document.getElementById('resSheetArea');
  const resFlute = document.getElementById('resFlute');
  const resBCT = document.getElementById('resBCT');

  function calculatePackaging() {
    if (!calcLength || !calcWidth || !calcHeight) return;

    // Box dimensions in mm
    const l = parseFloat(calcLength.value) || 400;
    const w = parseFloat(calcWidth.value) || 300;
    const h = parseFloat(calcHeight.value) || 250;
    const ply = calcPly ? calcPly.value : '5ply';

    // Volumetric weight in kg (L x W x H in mm / 5,000,000)
    const volWeight = ((l * w * h) / 5000000).toFixed(2);
    if (resVolWeight) resVolWeight.textContent = volWeight + ' kg';

    // Corrugated Sheet Size & Area Calculation (Standard RSC Box in mm)
    // Joint flap & creasing allowances based on ply structure
    let jointFlap = 40; // mm allowance for glue/stitch flap
    let creaseAllow = 10; // mm allowance for crease height

    if (ply === '3ply') {
      jointFlap = 35;
      creaseAllow = 6;
    } else if (ply === '5ply') {
      jointFlap = 40;
      creaseAllow = 10;
    } else if (ply === '7ply') {
      jointFlap = 50;
      creaseAllow = 15;
    }

    const sheetLength = Math.round(2 * (l + w) + jointFlap);
    const sheetWidth = Math.round(w + h + creaseAllow);
    const sheetAreaSqM = ((sheetLength * sheetWidth) / 1000000).toFixed(2);
    const sheetAreaSqFt = (sheetAreaSqM * 10.7639).toFixed(1);

    if (resSheetSize) resSheetSize.textContent = sheetLength + ' × ' + sheetWidth + ' mm';
    if (resSheetArea) resSheetArea.textContent = sheetAreaSqM + ' m² (' + sheetAreaSqFt + ' sq.ft)';

    // Flute recommendation
    let flute = 'C-Flute (Single Wall)';
    let bctStrength = '350 - 450 kgf';

    if (ply === '3ply') {
      flute = (l + w < 400) ? 'E-Flute (Micro)' : 'B-Flute (Durable)';
      bctStrength = '220 - 320 kgf';
    } else if (ply === '5ply') {
      flute = 'BC-Flute (Double Wall)';
      bctStrength = '480 - 650 kgf';
    } else if (ply === '7ply') {
      flute = 'AAA Heavy Duty (Triple Wall)';
      bctStrength = '850 - 1200 kgf';
    }

    if (resFlute) resFlute.textContent = flute;
    if (resBCT) resBCT.textContent = bctStrength;
  }

  if (calcLength) {
    [calcLength, calcWidth, calcHeight, calcPly].forEach(function (input) {
      if (input) {
        input.addEventListener('input', calculatePackaging);
        input.addEventListener('change', calculatePackaging);
      }
    });
    calculatePackaging();
  }

  // ── FAQ ACCORDION ──
  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(function (item) {
    const questionBtn = item.querySelector('.faq-question');
    questionBtn?.addEventListener('click', function () {
      const isActive = item.classList.contains('active');
      // Close other accordions
      faqItems.forEach(function (other) { other.classList.remove('active'); });
      // Toggle clicked accordion
      if (!isActive) {
        item.classList.add('active');
      }
    });
  });

  // ── PRODUCT FILTER TABS (HOME & PRODUCTS PAGE) ──
  const filterBtns = document.querySelectorAll('.product-filter-btn, .filter-tab-btn');
  const productCards = document.querySelectorAll('.product-filter-card, .product-card');

  filterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      filterBtns.forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');

      const filter = btn.dataset.filter;
      productCards.forEach(function (card) {
        if (filter === 'all' || card.dataset.category === filter) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
      });
    });
  });

  // ── CONTACT FORM HANDLING ──
  const contactForm = document.getElementById('contactForm');
  const submitBtn = document.getElementById('submitBtn');

  contactForm?.addEventListener('submit', function (e) {
    e.preventDefault();
    if (!submitBtn) return;

    const originalText = submitBtn.innerHTML;
    submitBtn.innerHTML = 'Sending Enquiry...';
    submitBtn.disabled = true;

    setTimeout(function () {
      submitBtn.innerHTML = 'Enquiry Sent Successfully!';
      submitBtn.style.background = '#16a34a';
      contactForm.reset();

      setTimeout(function () {
        submitBtn.innerHTML = originalText;
        submitBtn.style.background = '';
        submitBtn.disabled = false;
      }, 4000);
    }, 1000);
  });

  // ── SCROLL TO TOP BUTTON ──
  const scrollTopBtn = document.getElementById('scrollTop');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 450) {
      scrollTopBtn?.classList.add('visible');
    } else {
      scrollTopBtn?.classList.remove('visible');
    }
  }, { passive: true });

  scrollTopBtn?.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

});
