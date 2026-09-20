<?php
$page = 'home';
$page_title = 'Mirai Packaging LLP | Corrugated Boxes, Industrial Epoxy & Turnkey Solutions Bengaluru';
$meta_desc = 'Mirai Packaging LLP is Bangalore\'s premier manufacturer of 2 to 9 ply corrugated boxes, BOPP tapes, wooden pallets, industrial epoxy flooring, and turnkey office & warehouse infrastructure.';
include 'header.php';
?>

<!-- HERO SECTION -->
<section class="hero" id="hero">
  <div class="container">
    <div class="hero-grid">
      <div class="hero-content">
        <div class="hero-badge">
          <span class="hero-badge-dot"></span>
          ISO 9001:2015 Certified • Bengaluru Manufacturing Unit
        </div>
        <div class="hero-float-badge">
          Direct Factory Pricing &bull; 50+ Custom Sizes in Stock &bull; Express Dispatch
        </div>
        <h1 class="hero-title">
          Serving All Packaging Needs <span>Under One Roof</span>
        </h1>
        <p class="hero-desc">
          Mirai Packaging LLP is an ISO 9001:2015 certified, Bangalore-based manufacturing and wholesale enterprise specializing in end-to-end industrial packaging and material handling solutions. The company eliminates multi-vendor procurement bottlenecks by delivering custom-engineered protective packaging, storage systems, and transit security on a single platform.
        </p>
        
        <div class="hero-chips">
          <span class="hero-chip">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
            2 Ply to 9 Ply Heavy Duty Cartons
          </span>
          <span class="hero-chip">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
            Tamper-Proof Courier Flyers &amp; POD
          </span>
          <span class="hero-chip">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
            In-House BCT &amp; Bursting Testing Lab
          </span>
          <span class="hero-chip">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
            Committed Dispatch on TAT
          </span>
        </div>

        <div class="hero-btns">
          <a href="products.php" class="btn btn-orange btn-lg">
            View Product Catalog
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <a href="#calculator" class="btn btn-outline-white btn-lg">
            Box Dimension Estimator
          </a>
        </div>

        <div class="hero-stats">
          <div>
            <div class="hero-stat-num">
              <span data-target="500" data-suffix="+">500+</span>
            </div>
            <div class="hero-stat-lbl">Active Packaging SKUs</div>
          </div>
          <div>
            <div class="hero-stat-num">
              <span data-target="42" data-suffix="+">42+</span>
            </div>
            <div class="hero-stat-lbl">Enterprise Clients</div>
          </div>
          <div>
            <div class="hero-stat-num">
              <span data-target="30" data-suffix="+">30+</span>
            </div>
            <div class="hero-stat-lbl">Cities Served Pan-India</div>
          </div>
        </div>
      </div>

      <div class="hero-visual">
        <div class="hero-img-card" id="heroSliderCard">
          <div class="hero-slider-track" id="heroSliderTrack">
            
            <div class="hero-slide active">
              <img src="images/hero_composite_wide.jpg" alt="All-in-One Industrial Packaging &amp; Dispatch Kits"/>
              <div class="hero-slide-badge">All-in-One Packaging &amp; Dispatch Kits</div>
              <div class="hero-slide-desc">Complete 2-ply to 9-ply corrugated cartons, tamper-proof courier mailers, BOPP tapes &amp; stretch wrap.</div>
            </div>

            <div class="hero-slide">
              <img src="images/ai_corrugated_boxes_wide.jpg" alt="Heavy Duty Corrugated Master Cartons"/>
              <div class="hero-slide-badge">Heavy-Duty RSC Master Cartons</div>
              <div class="hero-slide-desc">3-Ply, 5-Ply &amp; 7-Ply corrugated boxes custom engineered for high bursting strength &amp; stacking.</div>
            </div>

            <div class="hero-slide">
              <img src="images/tape_rolls_wide.jpg" alt="Industrial BOPP Packaging Tapes &amp; Poly Mailers"/>
              <div class="hero-slide-badge">High-Tack BOPP Tapes &amp; Courier Flyers</div>
              <div class="hero-slide-desc">Heavy-duty self-adhesive BOPP sealing tapes &amp; tamper-evident poly mailers for secure transit.</div>
            </div>

            <div class="hero-slide">
              <img src="images/bubble_wrap_wide.jpg" alt="Protective Air Bubble Rolls &amp; Stretch Wrap"/>
              <div class="hero-slide-badge">Air Bubble Cushioning &amp; Pallet Wrap</div>
              <div class="hero-slide-desc">Multi-layer air bubble rolls &amp; LLDPE stretch film for fragile item protection &amp; pallet stabilization.</div>
            </div>

          </div>

          <!-- Slide Controls -->
          <button class="hero-slider-arrow hero-prev" id="heroPrev" aria-label="Previous image">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 19l-7-7 7-7"/></svg>
          </button>
          <button class="hero-slider-arrow hero-next" id="heroNext" aria-label="Next image">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 5l7 7-7 7"/></svg>
          </button>

          <!-- Slide Dots -->
          <div class="hero-slider-dots" id="heroDots"></div>

          <div class="hero-img-caption">
            <div>
              <strong style="color:var(--white); font-weight:700; font-size:0.88rem;">Complete Supply Chain Range</strong>
              <div style="color:#94a3b8; font-size:0.75rem;">Cartons • Courier Mailers • Tapes • Stretch Wrap • Security Seals</div>
            </div>
            <a href="contact.php" class="btn btn-orange btn-sm" style="flex-shrink:0;">Enquire Now</a>
          </div>
        </div>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:14px; margin-top:14px;">
          <div style="background:rgba(255,255,255,0.06); backdrop-filter:blur(10px); border:1px solid rgba(255,255,255,0.12); padding:16px; border-radius:var(--radius-sm); text-align:center;">
            <div style="font-family:var(--font-heading); font-weight:800; font-size:1.3rem; color:var(--orange);">ISO 9001:2015</div>
            <div style="font-size:0.75rem; color:#94a3b8; text-transform:uppercase; letter-spacing:0.5px; margin-top:2px;">QC System Audited</div>
          </div>
          <div style="background:rgba(255,255,255,0.06); backdrop-filter:blur(10px); border:1px solid rgba(255,255,255,0.12); padding:16px; border-radius:var(--radius-sm); text-align:center;">
            <div style="font-family:var(--font-heading); font-weight:800; font-size:1.3rem; color:#38bdf8;">100% Recyclable</div>
            <div style="font-size:0.75rem; color:#94a3b8; text-transform:uppercase; letter-spacing:0.5px; margin-top:2px;">Eco Kraft Options</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- AUTOMATIC IMAGE SHOWCASE SLIDER (12 IMAGES - 3 SEC AUTO SLIDE) -->
<section class="section-pad bg-surface" id="gallery-slider">
  <div class="container">
    <div class="section-header text-center">
      <span class="sub-title">Visual Showcase</span>
      <h2 class="section-title">Manufacturing Infrastructure &amp; <span>Packaging Gallery</span></h2>
      <p class="section-desc">
        Take a visual tour of our Bengaluru corrugation plant, automated conversion machinery, testing laboratory, and full range of packaging products.
      </p>
    </div>

    <div class="auto-slider-wrapper" id="homeAutoSlider">
      <div class="auto-slider-track" id="sliderTrack">
        
        <!-- Slide 1 -->
        <div class="auto-slide active">
          <img src="images/corrugated_lineup_wide.jpg" alt="Corrugated Box Manufacturing Lineup"/>
          <div class="slide-caption">
            <span class="slide-badge">Corrugation Plant</span>
            <h3>Custom 3-Ply &amp; 5-Ply Master Cartons</h3>
            <p>Automated slotting and die-cutting for high-volume corrugated boxes.</p>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="auto-slide">
          <img src="images/wooden_pallets_wide.jpg" alt="ISPM-15 Heat Treated Wooden Pallets"/>
          <div class="slide-caption">
            <span class="slide-badge">Export Packaging</span>
            <h3>ISPM-15 Heat-Treated Wooden Pallets</h3>
            <p>Pinewood and hardwood heavy-duty pallets with thermal pest eradication certification.</p>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="auto-slide">
          <img src="images/pp_box_wide.jpg" alt="PP Corrugated Flute Boxes"/>
          <div class="slide-caption">
            <span class="slide-badge">Returnable Packaging</span>
            <h3>PP Flute Corrugated Reusable Boxes</h3>
            <p>Waterproof, chemical-resistant twin-wall polypropylene boxes for closed-loop logistics.</p>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="auto-slide">
          <img src="images/modern_machinery_wide.jpg" alt="High-Speed Corrugation Machine Plant"/>
          <div class="slide-caption">
            <span class="slide-badge">Machinery &amp; Automation</span>
            <h3>High-Speed Corrugator &amp; Converting Plant</h3>
            <p>Computerized rotary sheer cutters and 4-color flexo folder-gluers.</p>
          </div>
        </div>

        <!-- Slide 5 -->
        <div class="auto-slide">
          <img src="images/courier_bag_wide.jpg" alt="Co-Ex Tamper-Evident Courier Bags"/>
          <div class="slide-caption">
            <span class="slide-badge">E-Commerce Mailers</span>
            <h3>Co-Ex Tamper-Evident Courier Flyer Bags</h3>
            <p>High-tear resistance multi-layer polyethylene bags with permanent hot-melt adhesive strip.</p>
          </div>
        </div>

        <!-- Slide 6 -->
        <div class="auto-slide">
          <img src="images/tape_rolls_wide.jpg" alt="Industrial BOPP Packaging Tapes"/>
          <div class="slide-caption">
            <span class="slide-badge">Tapes &amp; Adhesives</span>
            <h3>High-Tack Industrial BOPP Packaging Tapes</h3>
            <p>Custom printed and clear 40–50 micron acrylic tapes for instant box sealing.</p>
          </div>
        </div>

        <!-- Slide 7 -->
        <div class="auto-slide">
          <img src="images/quality_testing_wide.jpg" alt="Quality Testing Laboratory"/>
          <div class="slide-caption">
            <span class="slide-badge">Quality Assurance</span>
            <h3>In-House Box Compression (BCT) &amp; Bursting QC Lab</h3>
            <p>Strict batch sampling for Mullen burst factor and compression load resistance.</p>
          </div>
        </div>

        <!-- Slide 8 -->
        <div class="auto-slide">
          <img src="images/stretch_film_wide.jpg" alt="Cast LLDPE Stretch Film Rolls"/>
          <div class="slide-caption">
            <span class="slide-badge">Pallet Securing</span>
            <h3>Cast LLDPE Machine &amp; Manual Stretch Film</h3>
            <p>High elongation stretch wrap providing dust and moisture protection during transit.</p>
          </div>
        </div>

        <!-- Slide 9 -->
        <div class="auto-slide">
          <img src="images/bubble_wrap_wide.jpg" alt="Air Bubble Protective Rolls"/>
          <div class="slide-caption">
            <span class="slide-badge">Cushioning Protection</span>
            <h3>Multi-Layer Shock Absorption Air Bubble Rolls</h3>
            <p>10mm bubble diameter protective cushioning for fragile glass, electronics, and cosmetics.</p>
          </div>
        </div>

        <!-- Slide 10 -->
        <div class="auto-slide">
          <img src="images/about_factory_wide.jpg" alt="Mirai Packaging Distribution Warehouse"/>
          <div class="slide-caption">
            <span class="slide-badge">Warehousing &amp; Fleet</span>
            <h3>Bengaluru Central Distribution &amp; Logistics Hub</h3>
            <p>Ready buffer inventory and daily fleet dispatches across industrial hubs.</p>
          </div>
        </div>

        <!-- Slide 11 -->
        <div class="auto-slide">
          <img src="images/plastic_pallets_wide.jpg" alt="Heavy-Duty Plastic Pallets"/>
          <div class="slide-caption">
            <span class="slide-badge">Material Handling</span>
            <h3>Heavy-Duty HDPE Racking Plastic Pallets</h3>
            <p>Hygienic, washable plastic pallets for pharmaceutical and food storage.</p>
          </div>
        </div>

        <!-- Slide 12 -->
        <div class="auto-slide">
          <img src="images/security_seal_wide.jpg" alt="High Security Seals"/>
          <div class="slide-caption">
            <span class="slide-badge">Logistics Security</span>
            <h3>Laser-Numbered Security Pull-Tight Seals</h3>
            <p>Tamper-proof polypropylene and bolt seals for cargo container verification.</p>
          </div>
        </div>

      </div>

      <!-- Navigation Arrows -->
      <button class="slider-btn prev-btn" id="sliderPrev" aria-label="Previous Slide">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M15 19l-7-7 7-7"/></svg>
      </button>
      <button class="slider-btn next-btn" id="sliderNext" aria-label="Next Slide">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 5l7 7-7 7"/></svg>
      </button>

      <!-- Pagination Dots -->
      <div class="slider-dots" id="sliderDots"></div>
    </div>
  </div>
</section>

<!-- CLIENT LOGO TICKER -->
<section class="ticker-section">
  <div class="container">
    <div class="ticker-header">
      <span>TRUSTED BY 42+ INDUSTRY LEADERS ACROSS INDIA</span>
    </div>
    
    <div class="ticker-track">
      <div class="ticker-card">
        <div class="ticker-card-top">
          <span class="brand-name">BigBasket</span>
          <span class="brand-tag">Grocery Leader</span>
        </div>
        <span class="brand-sector">E-Commerce &amp; Quick Retail</span>
      </div>

      <div class="ticker-card">
        <div class="ticker-card-top">
          <span class="brand-name">Zomato Hyperpure</span>
          <span class="brand-tag">Food Supply</span>
        </div>
        <span class="brand-sector">HoReCa Bulk Supplies</span>
      </div>

      <div class="ticker-card">
        <div class="ticker-card-top">
          <span class="brand-name">JioMart</span>
          <span class="brand-tag">Retail Fleet</span>
        </div>
        <span class="brand-sector">Pan-India Logistics</span>
      </div>

      <div class="ticker-card">
        <div class="ticker-card-top">
          <span class="brand-name">Delhivery</span>
          <span class="brand-tag">Logistics Partner</span>
        </div>
        <span class="brand-sector">Express Transit Mailers</span>
      </div>

      <div class="ticker-card">
        <div class="ticker-card-top">
          <span class="brand-name">Amazon India</span>
          <span class="brand-tag">Seller Network</span>
        </div>
        <span class="brand-sector">E-Commerce Cartons</span>
      </div>

      <div class="ticker-card">
        <div class="ticker-card-top">
          <span class="brand-name">Flipkart</span>
          <span class="brand-tag">Supply Chain</span>
        </div>
        <span class="brand-sector">Warehouse Shippers</span>
      </div>

      <div class="ticker-card">
        <div class="ticker-card-top">
          <span class="brand-name">Master Chow</span>
          <span class="brand-tag">Transit Safe</span>
        </div>
        <span class="brand-sector">D2C Gourmet Food</span>
      </div>

      <div class="ticker-card">
        <div class="ticker-card-top">
          <span class="brand-name">HealthFarm</span>
          <span class="brand-tag">Clean Pack</span>
        </div>
        <span class="brand-sector">Sports Nutrition</span>
      </div>
    </div>
  </div>
</section>

<!-- PRODUCT SHOWCASE MATRIX -->
<section class="section-pad bg-neutral" id="products">
  <div class="container">
    <div class="section-header text-center">
      <span class="sub-title">Manufactured Product Range</span>
      <h2 class="section-title">Engineered Products for <span>Modern Supply Chains</span></h2>
      <p class="section-desc">
        Produced with premium virgin &amp; recycled kraft liners, high-shear polymer adhesives, and strict bursting strength quality assurance.
      </p>
    </div>

    <!-- CATEGORY FILTER TABS -->
    <div class="filter-tabs">
      <button class="filter-tab-btn active" data-filter="all">All Products (12)</button>
      <button class="filter-tab-btn" data-filter="boxes">Boxes &amp; Mailers</button>
      <button class="filter-tab-btn" data-filter="tapes">Tapes &amp; Films</button>
      <button class="filter-tab-btn" data-filter="warehouse">Warehouse &amp; Pallets</button>
      <button class="filter-tab-btn" data-filter="industrial">Industrial Solutions</button>
    </div>

    <div class="products-grid">
      <!-- 1. Corrugated Boxes -->
      <div class="product-card" data-category="boxes">
        <div class="product-thumb">
          <img src="images/ai_corrugated_boxes.jpg" alt="Corrugated Packaging Shipping Boxes Lineup"/>
          <span class="product-thumb-tag">Master Cartons</span>
          <span class="product-badge-accent">2 to 9 Ply</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">Corrugated Shipping &amp; Die-Cut Boxes</h3>
          <p class="product-desc">
            RSC standard cartons, die-cut self-locking mailers, partition boxes, and heavy-duty 7/9 ply export shippers engineered for high stacking compression.
          </p>
          <div class="product-specs">
            <span class="spec-pill">GSM: <strong>120 – 350 GSM</strong></span>
            <span class="spec-pill">Flute: <strong>B, C, E, BC, AAA</strong></span>
            <span class="spec-pill">Bursting: <strong>14 – 32 kg/cm²</strong></span>
            <span class="spec-pill">Print: <strong>1-4 Color Flexo</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.php#corrugated" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="contact.php?prod=corrugated" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

      <!-- 2. Courier Bags -->
      <div class="product-card" data-category="boxes">
        <div class="product-thumb">
          <img src="images/ai_courier_mailers.jpg" alt="Tamper-Proof Poly Courier Mailer Bags"/>
          <span class="product-thumb-tag">E-Commerce Flyers</span>
          <span class="product-badge-accent">Tamper Proof</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">Tamper-Evident Courier &amp; Poly Bags</h3>
          <p class="product-desc">
            Co-extruded multilayer LDPE bags with permanent hot-melt adhesive lip, POD airway bill receipt jacket, bubble-lined interior options, and opaque black inner.
          </p>
          <div class="product-specs">
            <span class="spec-pill">Thickness: <strong>50 – 80 Microns</strong></span>
            <span class="spec-pill">Seal: <strong>Hot-Melt Void Strip</strong></span>
            <span class="spec-pill">Type: <strong>POD Jacket / Bubble</strong></span>
            <span class="spec-pill">Waterproof: <strong>100% Co-Ex</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.php#courier" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="contact.php?prod=courier" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

      <!-- 3. Packaging Tapes -->
      <div class="product-card" data-category="tapes">
        <div class="product-thumb">
          <img src="images/tape_rolls.jpg" alt="Industrial BOPP Packaging Tapes and Custom Printed Rolls"/>
          <span class="product-thumb-tag">Adhesive Tapes</span>
          <span class="product-badge-accent">High Tack</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">BOPP &amp; Custom Printed Tapes</h3>
          <p class="product-desc">
            High-shear acrylic and hot-melt BOPP tapes in clear, brown, and custom logo printed rolls designed for manual dispensers or high-speed automated taping machines.
          </p>
          <div class="product-specs">
            <span class="spec-pill">Thickness: <strong>40 – 52 Microns</strong></span>
            <span class="spec-pill">Width: <strong>24mm, 48mm, 72mm</strong></span>
            <span class="spec-pill">Roll Length: <strong>50m – 650m</strong></span>
            <span class="spec-pill">Custom: <strong>Brand Logo Print</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.php#tapes" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="contact.php?prod=tapes" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

      <!-- 4. Eco Kraft Bags & Honeycomb -->
      <div class="product-card" data-category="boxes">
        <div class="product-thumb">
          <img src="images/ai_kraft_mailers.jpg" alt="Eco Friendly Kraft Paper Bags and Honeycomb Cushioning Roll"/>
          <span class="product-thumb-tag">Sustainable Packaging</span>
          <span class="product-badge-accent">100% Eco</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">Eco Kraft Bags &amp; Honeycomb Cushioning</h3>
          <p class="product-desc">
            FSC-certified biodegradable brown kraft retail shopping bags with twisted handles, paired with expanding honeycomb paper wrap replacing plastic bubble wrap.
          </p>
          <div class="product-specs">
            <span class="spec-pill">Material: <strong>Virgin Kraft Paper</strong></span>
            <span class="spec-pill">Grammage: <strong>90 – 180 GSM</strong></span>
            <span class="spec-pill">Cushion: <strong>Hexagonal Mesh</strong></span>
            <span class="spec-pill">Eco: <strong>100% Biodegradable</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.php#ecopack" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="contact.php?prod=ecopack" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

      <!-- 5. Stretch Film Rolls -->
      <div class="product-card" data-category="tapes">
        <div class="product-thumb">
          <img src="images/stretch_film.jpg" alt="Industrial LLDPE Stretch Film Rolls and Pallet Wrap"/>
          <span class="product-thumb-tag">Pallet Unitization</span>
          <span class="product-badge-accent">Cast LLDPE</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">Industrial Stretch Film &amp; Pallet Wrap</h3>
          <p class="product-desc">
            High-clarity cast multi-layer LLDPE film rolls offering superior elongation up to 300%, puncture resistance, and load stability for palletized transport.
          </p>
          <div class="product-specs">
            <span class="spec-pill">Thickness: <strong>17 – 35 Microns</strong></span>
            <span class="spec-pill">Elongation: <strong>Up to 300%</strong></span>
            <span class="spec-pill">Width: <strong>500mm (20 Inch)</strong></span>
            <span class="spec-pill">Type: <strong>Hand &amp; Machine Grade</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.php#stretch" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="contact.php?prod=stretch" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

      <!-- 6. Security Seals & Envelopes -->
      <div class="product-card" data-category="industrial">
        <div class="product-thumb">
          <img src="images/security_seal.jpg" alt="Tamper Proof Security Seals and Barcoded Envelopes"/>
          <span class="product-thumb-tag">Transit Security</span>
          <span class="product-badge-accent">Laser Numbered</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">Security Seals, STEB Bags &amp; Envelopes</h3>
          <p class="product-desc">
            Sequential laser-serialized pull-tight PP seals, bolt container locks, gold loan tamper envelopes, and high-security currency transit bags for banks and logistics.
          </p>
          <div class="product-specs">
            <span class="spec-pill">Material: <strong>High Impact PP &amp; Steel</strong></span>
            <span class="spec-pill">Serial: <strong>Laser Barcode / Number</strong></span>
            <span class="spec-pill">Tensile: <strong>15 – 45 kg Break</strong></span>
            <span class="spec-pill">Security: <strong>ISO 17712 Compliant</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.php#security" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="contact.php?prod=security" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

      <!-- 7. Heavy Duty Storage Racks -->
      <div class="product-card" data-category="warehouse">
        <div class="product-thumb">
          <img src="images/heavy_duty_rack.jpg" alt="Heavy Duty Industrial Pallet Racking System"/>
          <span class="product-thumb-tag">Warehouse Infra</span>
          <span class="product-badge-accent">Heavy Load</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">Heavy Duty Storage Racks &amp; Pallet Racking</h3>
          <p class="product-desc">
            Cold-rolled high tensile steel beam racks engineered for heavy industrial warehouse storage, maximum vertical density, and multi-tier pallet placement.
          </p>
          <div class="product-specs">
            <span class="spec-pill">Load: <strong>500 – 3000 kg/Level</strong></span>
            <span class="spec-pill">Steel: <strong>IS 2062 Grade</strong></span>
            <span class="spec-pill">Finish: <strong>Powder Coated</strong></span>
            <span class="spec-pill">Adjust: <strong>50mm Pitch</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.php#racks" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="contact.php?prod=racks" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

      <!-- 8. Wooden & Plastic Pallets, Crates & PP Boxes -->
      <div class="product-card" data-category="warehouse">
        <div class="product-thumb">
          <img src="images/plastic_pallets.jpg" alt="Industrial Wooden and Plastic Pallets and Crates"/>
          <span class="product-thumb-tag">Material Handling</span>
          <span class="product-badge-accent">ISPM-15 &amp; HDPE</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">Pallets, Crates &amp; PP Corrugated Boxes</h3>
          <p class="product-desc">
            ISPM-15 heat-treated wooden pallets, virgin HDPE heavy plastic pallets, stackable crates with lids, and waterproof reusable PP flute corrugated boxes.
          </p>
          <div class="product-specs">
            <span class="spec-pill">Pallets: <strong>Wooden &amp; Plastic</strong></span>
            <span class="spec-pill">Crates: <strong>HDPE Stackable</strong></span>
            <span class="spec-pill">PP Box: <strong>2 – 10mm Flute</strong></span>
            <span class="spec-pill">Entry: <strong>2-Way &amp; 4-Way</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.php#pallets" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="contact.php?prod=pallets" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

      <!-- 8B. Dedicated Plastic Storage Crates with Lids -->
      <div class="product-card" data-category="warehouse">
        <div class="product-thumb">
          <img src="images/product_photo_4.jpg" alt="Plastic Storage Crate with Lid"/>
          <span class="product-thumb-tag">Industrial Storage</span>
          <span class="product-badge-accent">HDPE &amp; PP Virgin</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">Plastic Storage Crates with Lids</h3>
          <p class="product-desc">
            Heavy-duty stackable and nestable plastic storage crates with attached/detachable locking lids. Engineered from high-density virgin HDPE for closed-loop industrial material handling and inventory storage.
          </p>
          <div class="product-specs">
            <span class="spec-pill">Material: <strong>100% Virgin HDPE</strong></span>
            <span class="spec-pill">Design: <strong>Stackable &amp; Lid Lock</strong></span>
            <span class="spec-pill">Capacity: <strong>Up to 50 kg/crate</strong></span>
            <span class="spec-pill">Usage: <strong>Auto &amp; Retail Supply</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.php#plastic-crates" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="contact.php?prod=plastic-crates" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

      <!-- 8C. Dedicated Polypropylene (PP) Corrugated Flute Box -->
      <div class="product-card" data-category="warehouse">
        <div class="product-thumb">
          <img src="images/product_photo_5.jpg" alt="Polypropylene (PP) Corrugated Flute Box"/>
          <span class="product-thumb-tag">Returnable Packaging</span>
          <span class="product-badge-accent">100% Waterproof &amp; Reusable</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">Polypropylene (PP) Corrugated Flute Boxes</h3>
          <p class="product-desc">
            Lightweight, chemical-resistant twin-wall PP flute boxes custom fabricated with ultrasonic spot welding, plastic corner reinforcements, and velcro/strap closures for closed-loop internal plant movement.
          </p>
          <div class="product-specs">
            <span class="spec-pill">Flute Thickness: <strong>2mm – 10mm (250–2000 GSM)</strong></span>
            <span class="spec-pill">Construction: <strong>Ultrasonic Welded &amp; Riveted</strong></span>
            <span class="spec-pill">Features: <strong>Waterproof, Washable &amp; ESD Safe</strong></span>
            <span class="spec-pill">Life Cycle: <strong>50+ Reusable Returns</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.php#pp-boxes" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="contact.php?prod=pp-boxes" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

      <!-- 9. Industrial Epoxy Flooring -->
      <div class="product-card" data-category="industrial">
        <div class="product-thumb">
          <img src="images/epoxy_flooring_warehouse.jpg" alt="Industrial Epoxy Flooring &amp; 5S Line Marking Solutions"/>
          <span class="product-thumb-tag">Epoxy Flooring</span>
          <span class="product-badge-accent">5S Line Marking</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">Industrial Epoxy Flooring &amp; 5S Line Marking</h3>
          <p class="product-desc">
            Designed to perfectly complement your Heavy-Duty Storage Racks and Plastic Crates, our epoxy flooring &amp; 5S line marking solutions create a clean, safe, and organized industrial space built for high forklift traffic and chemical resistance.
          </p>
          <div class="product-specs">
            <span class="spec-pill">Ideal For: <strong>Racks &amp; Plastic Crates</strong></span>
            <span class="spec-pill">Thickness: <strong>1.5 – 4.0 mm Epoxy</strong></span>
            <span class="spec-pill">Surface: <strong>Anti-Slip &amp; Oil Resistant</strong></span>
            <span class="spec-pill">Safety: <strong>5S Line Marking</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.php#flooring" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="contact.php?prod=flooring" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

      <!-- 10. Air Bubble Wrap & Cushioning Rolls -->
      <div class="product-card" data-category="tapes">
        <div class="product-thumb">
          <img src="images/bubble_wrap.jpg" alt="Air Bubble Wrap Rolls and Inflatable Air Cushioning"/>
          <span class="product-thumb-tag">Shock Cushioning</span>
          <span class="product-badge-accent">2-Layer &amp; 3-Layer Heavy Duty</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">Air Bubble Wrap &amp; Shock Cushioning Rolls</h3>
          <p class="product-desc">
            High-density poly air bubble wrap rolls (10mm &amp; 25mm jumbo bubble size), 2-layer &amp; 3-layer laminated barrier cushioning, and anti-static ESD pink bubble rolls engineered for high-impact transit protection.
          </p>
          <div class="product-specs">
            <span class="spec-pill">Bubble Size: <strong>10mm &amp; 25mm Jumbo</strong></span>
            <span class="spec-pill">Grammage: <strong>40 – 150 GSM</strong></span>
            <span class="spec-pill">Roll Width: <strong>0.5m – 1.5m</strong></span>
            <span class="spec-pill">Layer: <strong>2-Layer / 3-Layer Laminated</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.php#bubble" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="contact.php?prod=bubble" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

      <!-- 11. All-in-One Industrial Packaging & Dispatch Supplies -->
      <div class="product-card" data-category="industrial">
        <div class="product-thumb">
          <img src="images/hero_composite.jpg" alt="All-in-One Industrial Packaging & Dispatch Supplies"/>
          <span class="product-thumb-tag">Dispatch Kits</span>
          <span class="product-badge-accent">All-in-One Range</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">All-in-One Industrial Packaging &amp; Dispatch Kits</h3>
          <p class="product-desc">
            Comprehensive range of corrugated shippers, tamper-evident courier mailers, high-tack BOPP sealing tapes, air bubble rolls, and binding supplies for complete warehouse dispatch operations.
          </p>
          <div class="product-specs">
            <span class="spec-pill">Range: <strong>Cartons, Tapes &amp; Mailers</strong></span>
            <span class="spec-pill">Quality: <strong>ISO 9001:2015 Standards</strong></span>
            <span class="spec-pill">Dispatch: <strong>Committed Delivery TAT</strong></span>
            <span class="spec-pill">Supply: <strong>Pan-India E-Com &amp; Retail</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.html#strapping" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </a>
            <a href="contact.html?prod=dispatch-kits" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

      <!-- 12. Hydraulic Hand Pallet Trucks -->
      <div class="product-card" data-category="warehouse">
        <div class="product-thumb">
          <img src="images/pallet_truck.jpg" alt="Industrial Hydraulic Hand Pallet Truck"/>
          <span class="product-thumb-tag">Forklift &amp; Dock</span>
          <span class="product-badge-accent">2.5T &amp; 3.0T Load</span>
        </div>
        <div class="product-body">
          <h3 class="product-title">Hydraulic Hand Pallet Trucks &amp; Stackers</h3>
          <p class="product-desc">
            Heavy-duty hydraulic hand pallet jacks built with high-tensile steel chassis, leak-proof hydraulic pumps, and durable polyurethane/nylon dual tandem load rollers.
          </p>
          <div class="product-specs">
            <span class="spec-pill">Capacity: <strong>2500kg – 3000kg</strong></span>
            <span class="spec-pill">Fork Length: <strong>1150mm / 1220mm</strong></span>
            <span class="spec-pill">Wheels: <strong>Dual Tandem PU</strong></span>
            <span class="spec-pill">Pump: <strong>Integral Cast Iron</strong></span>
          </div>
          <div class="product-footer">
            <a href="products.php#pallettruck" class="product-cta-link">
              View Technical Specs
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="contact.php?prod=pallettruck" class="product-inquiry-btn">Enquire Bulk</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- INTERACTIVE PACKAGING CALCULATOR SECTION -->
<section class="calc-section" id="calculator">
  <div class="container">
    <div class="calc-container">
      <div class="calc-info">
        <span class="sub-title" style="color:#0284c7;">Engineering Tool</span>
        <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.8rem; margin-bottom:14px; color:#0f172a;">
          Interactive Box Sheet Size &amp;<br/>Weight Calculator
        </h2>
        <p style="font-size:0.92rem; color:#334155; line-height:1.65; margin-bottom:20px;">
          Calculate required corrugated sheet blank size (in mm), total sheet area (m² / sq.ft), volumetric freight weight, and recommended flute structure.
        </p>

        <div style="background:#e0f2fe; padding:16px; border-radius:var(--radius-sm); border:1px solid #bae6fd; margin-bottom:16px;">
          <div style="font-size:0.84rem; color:#0284c7; font-weight:700; margin-bottom:6px;">CORRUGATED SHEET FORMULAS (RSC BOX):</div>
          <div style="font-size:0.82rem; color:#334155; line-height:1.6;">
            • <strong>Sheet Cut Length:</strong> 2 × (Length + Width) + Joint Flap (35–50mm)<br/>
            • <strong>Sheet Cut Width:</strong> Width + Height + Crease Allowance (6–15mm)<br/>
            • <strong>Sheet Area:</strong> (Sheet Length × Sheet Width) / 1,000,000 m²
          </div>
        </div>
      </div>

      <div class="calc-form-card">
        <h3 style="font-family:var(--font-heading); font-weight:700; font-size:1.15rem; color:var(--text-primary); margin-bottom:16px;">
          Carton Dimension Parameters (mm)
        </h3>

        <div class="calc-form-grid">
          <div class="form-group">
            <label class="form-label" for="calcLength">Length (mm)</label>
            <input type="number" id="calcLength" class="form-control" value="400" min="50" max="2500" step="5"/>
          </div>
          <div class="form-group">
            <label class="form-label" for="calcWidth">Width (mm)</label>
            <input type="number" id="calcWidth" class="form-control" value="300" min="50" max="2000" step="5"/>
          </div>
          <div class="form-group">
            <label class="form-label" for="calcHeight">Height (mm)</label>
            <input type="number" id="calcHeight" class="form-control" value="250" min="50" max="2000" step="5"/>
          </div>
          <div class="form-group">
            <label class="form-label" for="calcPly">Target Ply Structure</label>
            <select id="calcPly" class="form-control">
              <option value="3ply">3-Ply Single Wall (Light Duty)</option>
              <option value="5ply" selected>5-Ply Double Wall (Standard Export)</option>
              <option value="7ply">7-Ply Triple Wall (Heavy Industrial)</option>
            </select>
          </div>
        </div>

        <div class="calc-result-box">
          <div class="calc-res-item">
            <span class="calc-res-val" id="resSheetSize" style="font-size:1.1rem;">1440 × 560 mm</span>
            <span class="calc-res-lbl">Sheet Size (Blank)</span>
          </div>
          <div class="calc-res-item">
            <span class="calc-res-val" id="resSheetArea" style="font-size:1.05rem;">0.81 m²</span>
            <span class="calc-res-lbl">Sheet Area</span>
          </div>
          <div class="calc-res-item">
            <span class="calc-res-val" id="resVolWeight">3.00 kg</span>
            <span class="calc-res-lbl">Volumetric Weight</span>
          </div>
          <div class="calc-res-item">
            <span class="calc-res-val" id="resFlute" style="font-size:1rem;">BC-Flute</span>
            <span class="calc-res-lbl">Suggested Flute</span>
          </div>
          <div class="calc-res-item">
            <span class="calc-res-val" id="resBCT">480 - 650 kgf</span>
            <span class="calc-res-lbl">Est. BCT Strength</span>
          </div>
        </div>

        <div style="margin-top:20px;">
          <a href="contact.php?calc=true" class="btn btn-orange" style="width:100%;justify-content:center;">
            Request Bulk Quotation for this Size
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- TURNKEY INDUSTRIAL PROJECTS & COMMERCIAL OFFICE WORKS SHOWCASE -->
<section class="section-pad bg-neutral" id="turnkey">
  <div class="container">
    <div class="section-header text-center">
      <span class="sub-title">Infrastructure &amp; Fitout Services</span>
      <h2 class="section-title">Turnkey Industrial Projects &amp; <span>Commercial Office Works</span></h2>
      <p class="section-desc">
        End-to-end site execution from heavy industrial plant flooring &amp; racking setup to high-end corporate office interior fitouts across Bengaluru.
      </p>
    </div>

    <div style="display:grid; grid-template-columns:repeat(3, 1fr); gap:24px;">
      <div style="background:var(--white); border-radius:var(--radius-md); border:1px solid var(--border-subtle); overflow:hidden; box-shadow:var(--shadow-xs);">
        <img src="images/epoxy_flooring.jpg" alt="Industrial Epoxy Flooring" style="width:100%; height:200px; object-fit:contain; background:#f8fafc;"/>
        <div style="padding:22px;">
          <h3 style="font-family:var(--font-heading); font-weight:700; font-size:1.15rem; margin-bottom:8px; color:var(--text-primary);">Industrial Epoxy &amp; ESD Flooring</h3>
          <p style="font-size:0.88rem; color:var(--text-secondary); line-height:1.6; margin-bottom:14px;">
            Self-leveling 3-layer resinous epoxy floor hardeners, ESD conductive coatings for cleanrooms, and high-contrast 5S walkway line markings.
          </p>
          <a href="products.php#flooring" class="product-cta-link">View Epoxy Specs &rarr;</a>
        </div>
      </div>

      <div style="background:var(--white); border-radius:var(--radius-md); border:1px solid var(--border-subtle); overflow:hidden; box-shadow:var(--shadow-xs);">
        <img src="images/heavy_duty_rack.jpg" alt="Turnkey Warehouse Racking Setup" style="width:100%; height:200px; object-fit:contain; background:#f8fafc;"/>
        <div style="padding:22px;">
          <h3 style="font-family:var(--font-heading); font-weight:700; font-size:1.15rem; margin-bottom:8px; color:var(--text-primary);">Turnkey Warehouse Setup</h3>
          <p style="font-size:0.88rem; color:var(--text-secondary); line-height:1.6; margin-bottom:14px;">
            Heavy-duty multi-tier pallet racking systems, steel mezzanine floors, dock leveler integration, and industrial storage layout engineering.
          </p>
          <a href="products.php#racks" class="product-cta-link">View Racking Specs &rarr;</a>
        </div>
      </div>

      <div style="background:var(--white); border-radius:var(--radius-md); border:1px solid var(--border-subtle); overflow:hidden; box-shadow:var(--shadow-xs);">
        <img src="images/office_fitout.jpg" alt="Turnkey Commercial Office Fitout" style="width:100%; height:200px; object-fit:contain; background:#f8fafc;"/>
        <div style="padding:22px;">
          <h3 style="font-family:var(--font-heading); font-weight:700; font-size:1.15rem; margin-bottom:8px; color:var(--text-primary);">Commercial Office Fitouts</h3>
          <p style="font-size:0.88rem; color:var(--text-secondary); line-height:1.6; margin-bottom:14px;">
            Corporate office interior design, workstation partitions, acoustic ceilings, glass dividers, and turnkey office space execution.
          </p>
          <a href="contact.php?turnkey=office" class="product-cta-link">Enquire Office Project &rarr;</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- HIGH-IMPACT CTA BANNER -->
<section class="cta-banner">
  <div class="container">
    <div class="cta-inner">
      <div>
        <h2 class="cta-title">Upgrade Your Supply Chain With Precision Packaging</h2>
        <p class="cta-desc">
          Speak with our packaging specialists today for volume purchase pricing, CAD die-lines, and sample kits.
        </p>
      </div>
      <div class="cta-btns">
        <a href="contact.php" class="btn btn-white btn-lg">
          Get Bulk Pricing
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="tel:+919491436494" class="btn btn-outline-white btn-lg">
          Call: +91-9491436494
        </a>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
