// ============================================================
// MIRAI PACKAGING LLP — CORE JAVASCRIPT 2.0
// Smooth Animations, Packaging Calculator & Interactions
// ============================================================

document.addEventListener('DOMContentLoaded', function () {

  // Helper selector function
  const id = function (elementId) {
    return document.getElementById(elementId);
  };

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

  // ── HOME AUTOMATIC IMAGE SHOWCASE SLIDER (3 SEC AUTO SLIDE) ──
  const sliderTrack = id('sliderTrack');
  const homeAutoSlider = id('homeAutoSlider');
  if (sliderTrack && homeAutoSlider) {
    const slides = sliderTrack.querySelectorAll('.auto-slide');
    const prevBtn = id('sliderPrev');
    const nextBtn = id('sliderNext');
    const dotsContainer = id('sliderDots');

    if (slides.length > 0) {
      let currentSlide = 0;
      let autoSlideTimer = null;
      const INTERVAL_TIME = 3000; // 3 seconds

      // Create dots dynamically
      if (dotsContainer) {
        dotsContainer.innerHTML = '';
        slides.forEach(function (_, index) {
          const dot = document.createElement('button');
          dot.className = 'slider-dot' + (index === 0 ? ' active' : '');
          dot.setAttribute('aria-label', 'Go to slide ' + (index + 1));
          dot.addEventListener('click', function () {
            goToSlide(index);
            resetAutoSlide();
          });
          dotsContainer.appendChild(dot);
        });
      }

      function updateSlides() {
        slides.forEach(function (slide, idx) {
          if (idx === currentSlide) {
            slide.classList.add('active');
          } else {
            slide.classList.remove('active');
          }
        });

        if (dotsContainer) {
          const dots = dotsContainer.querySelectorAll('.slider-dot');
          dots.forEach(function (dot, idx) {
            if (idx === currentSlide) {
              dot.classList.add('active');
            } else {
              dot.classList.remove('active');
            }
          });
        }
      }

      function goToSlide(index) {
        currentSlide = (index + slides.length) % slides.length;
        updateSlides();
      }

      function nextSlide() {
        goToSlide(currentSlide + 1);
      }

      function prevSlide() {
        goToSlide(currentSlide - 1);
      }

      function startAutoSlide() {
        if (!autoSlideTimer) {
          autoSlideTimer = setInterval(nextSlide, INTERVAL_TIME);
        }
      }

      function stopAutoSlide() {
        if (autoSlideTimer) {
          clearInterval(autoSlideTimer);
          autoSlideTimer = null;
        }
      }

      function resetAutoSlide() {
        stopAutoSlide();
        startAutoSlide();
      }

      if (nextBtn) {
        nextBtn.addEventListener('click', function () {
          nextSlide();
          resetAutoSlide();
        });
      }

      if (prevBtn) {
        prevBtn.addEventListener('click', function () {
          prevSlide();
          resetAutoSlide();
        });
      }

      // Pause auto-slide on hover
      homeAutoSlider.addEventListener('mouseenter', stopAutoSlide);
      homeAutoSlider.addEventListener('mouseleave', startAutoSlide);

      // Touch / Swipe support for mobile
      let touchStartX = 0;
      let touchEndX = 0;

      homeAutoSlider.addEventListener('touchstart', function (e) {
        touchStartX = e.changedTouches[0].screenX;
        stopAutoSlide();
      }, { passive: true });

      homeAutoSlider.addEventListener('touchend', function (e) {
        touchEndX = e.changedTouches[0].screenX;
        if (touchStartX - touchEndX > 50) {
          nextSlide(); // Swipe Left
        } else if (touchEndX - touchStartX > 50) {
          prevSlide(); // Swipe Right
        }
        startAutoSlide();
      }, { passive: true });

      // Start initial auto timer
      startAutoSlide();
    }
  }

  // ── HERO RIGHT-SIDE AUTOMATIC IMAGE CAROUSEL (3 SEC AUTO SLIDE) ──
  const heroSliderTrack = id('heroSliderTrack');
  const heroSliderCard = id('heroSliderCard');
  if (heroSliderTrack && heroSliderCard) {
    const heroSlides = heroSliderTrack.querySelectorAll('.hero-slide');
    const heroPrev = id('heroPrev');
    const heroNext = id('heroNext');
    const heroDots = id('heroDots');

    if (heroSlides.length > 0) {
      let currentHeroIndex = 0;
      let heroTimer = null;
      const HERO_INTERVAL = 3000; // 3 seconds

      if (heroDots) {
        heroDots.innerHTML = '';
        heroSlides.forEach(function (_, idx) {
          const dot = document.createElement('button');
          dot.className = 'hero-dot' + (idx === 0 ? ' active' : '');
          dot.setAttribute('aria-label', 'Hero slide ' + (idx + 1));
          dot.addEventListener('click', function () {
            setHeroSlide(idx);
            resetHeroTimer();
          });
          heroDots.appendChild(dot);
        });
      }

      function updateHeroSlides() {
        heroSlides.forEach(function (slide, idx) {
          if (idx === currentHeroIndex) {
            slide.classList.add('active');
          } else {
            slide.classList.remove('active');
          }
        });

        if (heroDots) {
          const dots = heroDots.querySelectorAll('.hero-dot');
          dots.forEach(function (dot, idx) {
            if (idx === currentHeroIndex) {
              dot.classList.add('active');
            } else {
              dot.classList.remove('active');
            }
          });
        }
      }

      function setHeroSlide(idx) {
        currentHeroIndex = (idx + heroSlides.length) % heroSlides.length;
        updateHeroSlides();
      }

      function nextHeroSlide() {
        setHeroSlide(currentHeroIndex + 1);
      }

      function prevHeroSlide() {
        setHeroSlide(currentHeroIndex - 1);
      }

      function startHeroTimer() {
        if (!heroTimer) {
          heroTimer = setInterval(nextHeroSlide, HERO_INTERVAL);
        }
      }

      function stopHeroTimer() {
        if (heroTimer) {
          clearInterval(heroTimer);
          heroTimer = null;
        }
      }

      function resetHeroTimer() {
        stopHeroTimer();
        startHeroTimer();
      }

      if (heroNext) {
        heroNext.addEventListener('click', function () {
          nextHeroSlide();
          resetHeroTimer();
        });
      }

      if (heroPrev) {
        heroPrev.addEventListener('click', function () {
          prevHeroSlide();
          resetHeroTimer();
        });
      }

      heroSliderCard.addEventListener('mouseenter', stopHeroTimer);
      heroSliderCard.addEventListener('mouseleave', startHeroTimer);

      startHeroTimer();
    }
  }

  // ── DYNAMIC IMAGE LIGHTBOX MODAL (FULLSCREEN ZOOM ON CLICK) ──
  let lightboxModal = document.getElementById('imageLightboxModal');
  if (!lightboxModal) {
    lightboxModal = document.createElement('div');
    lightboxModal.id = 'imageLightboxModal';
    lightboxModal.className = 'lightbox-modal';
    lightboxModal.innerHTML = `
      <div class="lightbox-overlay" id="lightboxOverlay"></div>
      <div class="lightbox-content">
        <button class="lightbox-close" id="lightboxClose" aria-label="Close Lightbox">&times;</button>
        <img src="" alt="" id="lightboxImg" class="lightbox-img"/>
        <div class="lightbox-caption" id="lightboxCaption"></div>
      </div>
    `;
    document.body.appendChild(lightboxModal);
  }

  const lightboxImg = document.getElementById('lightboxImg');
  const lightboxCaption = document.getElementById('lightboxCaption');
  const lightboxClose = document.getElementById('lightboxClose');
  const lightboxOverlay = document.getElementById('lightboxOverlay');

  function openLightbox(src, altText) {
    if (!lightboxModal || !lightboxImg) return;
    lightboxImg.src = src;
    lightboxImg.alt = altText || 'Product Image';
    lightboxImg.classList.remove('zoomed');
    if (lightboxCaption) lightboxCaption.textContent = altText || '';
    lightboxModal.classList.add('active');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    if (!lightboxModal) return;
    if (lightboxImg) lightboxImg.classList.remove('zoomed');
    lightboxModal.classList.remove('active');
    document.body.style.overflow = '';
  }

  // Click / Tap image inside Lightbox to toggle 2.2x zoom
  lightboxImg?.addEventListener('click', function (e) {
    e.stopPropagation();
    lightboxImg.classList.toggle('zoomed');
  });

  lightboxClose?.addEventListener('click', closeLightbox);
  lightboxOverlay?.addEventListener('click', closeLightbox);

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && lightboxModal?.classList.contains('active')) {
      closeLightbox();
    }
  });

  // Attach click listener to all product photos, sliders, and gallery thumbs
  document.addEventListener('click', function (e) {
    const target = e.target;
    if (target && target.tagName === 'IMG') {
      const isZoomable = target.closest('.product-thumb, .product-card, .auto-slide, .hero-slide, .infra-thumb, .product-detail-card, .product-filter-card, .grid-2col-thumbs');
      if (isZoomable || target.classList.contains('zoomable-img')) {
        openLightbox(target.src, target.alt || target.title);
      }
    }
  });

});
