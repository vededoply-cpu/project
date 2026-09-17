<?php
$page = 'products';
$page_title = 'Products & Technical Specifications | Mirai Packaging LLP';
$meta_desc = 'Technical specifications, paper grammage, flute constructions, and burst strength specifications across our manufactured range of boxes, tapes, pallets, and epoxy flooring.';
include 'header.php';
?>

<!-- PAGE HERO -->
<section style="background-color:var(--navy-dark); color:var(--white); padding:50px 0 54px 0; border-bottom:1px solid rgba(255,255,255,0.08);">
  <div class="container">
    <div style="font-size:0.82rem; color:#94a3b8; margin-bottom:10px; display:flex; gap:8px; align-items:center;">
      <a href="index.php" style="color:#94a3b8;">Home</a>
      <span>/</span>
      <span style="color:#38bdf8; font-weight:600;">Products &amp; Technical Specifications</span>
    </div>
    <h1 style="font-family:var(--font-heading); font-weight:900; font-size:clamp(2rem, 3.6vw, 3rem); line-height:1.15; margin-bottom:12px;">
      Industrial Packaging Catalog &amp; Technical Specifications
    </h1>
    <p style="font-size:1.05rem; color:#cbd5e1; max-width:680px; line-height:1.65;">
      Technical parameters, paper grammage, flute constructions, and burst strength specifications across our manufactured range.
    </p>
  </div>
</section>

<!-- PRODUCT FILTER BUTTONS -->
<div style="background:var(--bg-neutral); padding:12px 0; border-bottom:1px solid var(--border-subtle); position:sticky; top:66px; z-index:90; max-width:100vw; overflow-x:hidden;">
  <div class="container">
    <div class="product-filter-bar">
      <button class="btn btn-sm product-filter-btn active" data-filter="all">All Products (12)</button>
      <button class="btn btn-sm product-filter-btn" data-filter="boxes">Corrugated Boxes</button>
      <button class="btn btn-sm product-filter-btn" data-filter="courier">Courier Bags</button>
      <button class="btn btn-sm product-filter-btn" data-filter="tapes">BOPP Tapes</button>
      <button class="btn btn-sm product-filter-btn" data-filter="eco">Eco &amp; Cushioning</button>
      <button class="btn btn-sm product-filter-btn" data-filter="stretch">Stretch &amp; Strapping</button>
      <button class="btn btn-sm product-filter-btn" data-filter="racks">Storage Racks</button>
      <button class="btn btn-sm product-filter-btn" data-filter="pallets">Wooden &amp; Plastic Pallets</button>
      <button class="btn btn-sm product-filter-btn" data-filter="flooring">Epoxy Flooring</button>
    </div>
  </div>
</div>

<!-- PRODUCTS LIST -->
<section class="section-pad">
  <div class="container">
    
    <!-- 1. CORRUGATED BOXES -->
    <div class="product-filter-card" data-category="boxes" id="corrugated" style="margin-bottom:60px;">
      <div class="product-detail-card">
        <div class="product-gallery-box">
          <div class="product-main-view">
            <img src="images/ai_corrugated_boxes.jpg" alt="Corrugated Box Sizes Lineup" class="main-gallery-img" id="mainGalleryImg1_php"/>
            <span class="gallery-zoom-badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/><path d="M11 8v6M8 11h6"/></svg>
              HD Preview
            </span>
          </div>
          <div class="product-thumbs-row">
            <div class="thumb-item active" onclick="switchGalleryImg(this, 'mainGalleryImg1_php')">
              <img src="images/ai_corrugated_boxes.jpg" alt="Lineup View"/>
            </div>
            <div class="thumb-item" onclick="switchGalleryImg(this, 'mainGalleryImg1_php')">
              <img src="images/corrugated_box.jpg" alt="Open RSC Box"/>
            </div>
            <div class="thumb-item" onclick="switchGalleryImg(this, 'mainGalleryImg1_php')">
              <img src="images/modern_machinery.jpg" alt="Factory Machine"/>
            </div>
          </div>
        </div>

        <div>
          <span class="sub-title">Shipping &amp; Storage</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">Corrugated Shipping &amp; Die-Cut Boxes</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            Manufactured from high-grade virgin kraft liners and high-burst test fluted corrugated boards. Designed for maximum vertical stacking strength, high humidity resistance, and heavy export transit payloads.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>Parameter</th>
                  <th>Specifications</th>
                  <th>Testing Standard</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Ply Structures</td>
                  <td>2 Ply (Single Face Roll), 3 Ply, 5 Ply, 7 Ply &amp; 9 Ply AAA</td>
                  <td style="color:var(--text-muted);">IS: 2771 / TAPPI T 810</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Flute Profiles</td>
                  <td>E-Flute (Micro), B-Flute, C-Flute, BC Double Wall, AAA Heavy</td>
                  <td style="color:var(--text-muted);">Custom Flute Height &amp; Pitch</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Paper Grammage</td>
                  <td>120 GSM to 350 GSM Virgin / Recycled Kraft Liners</td>
                  <td style="color:var(--text-muted);">ISO 536 Calibrated</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Bursting Strength</td>
                  <td>14 kg/cm² up to 32 kg/cm²</td>
                  <td style="color:var(--text-muted);">Digital Mullen Tester Validated</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Custom Printing</td>
                  <td>1 to 4 Colors Water-Based Flexo / Screen</td>
                  <td style="color:var(--text-muted);">Eco-Friendly Non-Toxic Inks</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=corrugated" class="btn btn-orange">
              Request Box Quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="https://wa.me/919044129477?text=Hi,%20I%20need%20a%20quotation%20for%20corrugated%20boxes." target="_blank" rel="noopener" class="btn btn-outline">
              WhatsApp Technical Spec Sheet
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 2. COURIER & POLY BAGS -->
    <div class="product-filter-card" data-category="courier" id="courier" style="margin-bottom:60px;">
      <div class="product-detail-card">
        <div>
          <div style="border-radius:var(--radius-sm); overflow:hidden; margin-bottom:16px; border:1px solid var(--border-subtle);">
            <img src="images/ai_courier_mailers.jpg" alt="Tamper Proof Poly Courier Bags" style="width:100%; height:290px; object-fit:contain; background:#ffffff;"/>
          </div>
          <div style="border-radius:var(--radius-xs); overflow:hidden; border:1px solid var(--border-subtle);">
            <img src="images/hero_composite.jpg" alt="Packaging Bags and Flyers" style="height:120px; width:100%; object-fit:contain; background:#ffffff;"/>
          </div>
        </div>

        <div>
          <span class="sub-title">E-Commerce Dispatch</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">Tamper-Evident Courier Flyer Bags</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            Co-extruded multilayer LDPE bags engineered for e-commerce, banking, and courier logistics. Features an aggressive permanent hot-melt adhesive strip that destroys the lip upon any unauthorized opening attempt.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>Parameter</th>
                  <th>Specifications</th>
                  <th>Performance Feature</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Film Thickness</td>
                  <td>50, 60, 70 &amp; 80 Microns</td>
                  <td style="color:var(--text-muted);">High Tear &amp; Puncture Resistance</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Adhesive Seal</td>
                  <td>Hot-Melt PSA with Silicon Release Liner</td>
                  <td style="color:var(--text-muted);">Permanent Void Destruction Seal</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Inner Layer</td>
                  <td>High-Opacity Black / Charcoal Inner</td>
                  <td style="color:var(--text-muted);">100% Confidential Non-Transparent</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">POD Pocket</td>
                  <td>Transparent Airway Bill / Invoice Jacket</td>
                  <td style="color:var(--text-muted);">Barcode Scanner Readable</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Standard Sizes</td>
                  <td>6x8", 8x10", 10x12", 12x14", 14x16", 16x20"</td>
                  <td style="color:var(--text-muted);">Custom dimensions available</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=courier" class="btn btn-orange">
              Request Courier Bag Quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="https://wa.me/919044129477?text=Hi,%20I%20need%20pricing%20for%20courier%20flyer%20bags." target="_blank" rel="noopener" class="btn btn-outline">
              WhatsApp Technical Spec Sheet
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 3. PACKAGING TAPES -->
    <div class="product-filter-card" data-category="tapes" id="tapes" style="margin-bottom:60px;">
      <div class="product-detail-card">
        <div>
          <div style="border-radius:var(--radius-sm); overflow:hidden; border:1px solid var(--border-subtle);">
            <img src="images/tape_rolls.jpg" alt="Industrial BOPP Adhesive Tapes" style="width:100%; height:290px; object-fit:contain; background:#ffffff;"/>
          </div>
        </div>

        <div>
          <span class="sub-title">Carton Sealing</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">BOPP Packaging &amp; Custom Printed Tapes</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            Biaxially Oriented Polypropylene (BOPP) film coated with emulsion acrylic or hot-melt adhesive. Delivers instant shear grab and high tensile holding strength on virgin and recycled kraft cartons.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>Parameter</th>
                  <th>Specifications</th>
                  <th>Application Context</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Total Thickness</td>
                  <td>40, 42, 45, 48 &amp; 52 Microns</td>
                  <td style="color:var(--text-muted);">Medium &amp; Heavy Carton Sealing</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Available Widths</td>
                  <td>24mm (1"), 48mm (2"), 72mm (3")</td>
                  <td style="color:var(--text-muted);">Standard dispenser compatible</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Colors</td>
                  <td>Transparent Clear, Brown Kraft, White, Red, Blue</td>
                  <td style="color:var(--text-muted);">Identification &amp; Security</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Custom Logo Print</td>
                  <td>1 to 3 Color Gravure Surface / Reverse Printing</td>
                  <td style="color:var(--text-muted);">Brand Identity &amp; Anti-Theft</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Roll Lengths</td>
                  <td>50m, 65m, 100m, 650m (Machine Rolls)</td>
                  <td style="color:var(--text-muted);">Manual or Automatic Taping Lines</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- BOPP TAPE MANUFACTURING PROCESS BREAKDOWN -->
          <div style="background:var(--bg-subtle, #f8fafc); border:1px solid var(--border-subtle, #e2e8f0); border-radius:var(--radius-sm); padding:18px; margin:20px 0;">
            <h4 style="font-family:var(--font-heading); font-weight:700; font-size:1.05rem; color:var(--text-primary); margin-bottom:10px; display:flex; align-items:center; gap:8px;">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;color:var(--blue-brand);"><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"/><circle cx="12" cy="12" r="3"/></svg>
              BOPP Tape Manufacturing &amp; Coating Technology
            </h4>
            <div style="font-size:0.88rem; color:var(--text-secondary); line-height:1.6; display:grid; grid-template-columns:1fr 1fr; gap:12px;">
              <div>
                <strong>1. Biaxial Film Stretching:</strong> Polypropylene film is stretched simultaneously in machine and transverse directions to create ultra-high tensile strength and tear resistance.
              </div>
              <div>
                <strong>2. High-Shear PSA Coating:</strong> Reverse-roll coaters apply a uniform 18-24µ layer of pure water-based acrylic emulsion or hot-melt adhesive for instant carton grab.
              </div>
              <div>
                <strong>3. Rotogravure Brand Printing:</strong> High-speed 1-4 color surface or reverse printing for custom logo tapes ensuring tamper-evident brand security.
              </div>
              <div>
                <strong>4. High-Speed Slitting:</strong> Automated turret slitters convert 1.28m jumbo parent rolls into precise 48mm/72mm hand rolls and 650m machine rolls.
              </div>
            </div>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=tapes" class="btn btn-orange">
              Request Tape Quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 4. ECO & CUSHIONING -->
    <div class="product-filter-card" data-category="eco" id="ecopack" style="margin-bottom:60px;">
      <div class="product-detail-card">
        <div>
          <div style="border-radius:var(--radius-sm); overflow:hidden; margin-bottom:16px; border:1px solid var(--border-subtle);">
            <img src="images/ai_kraft_mailers.jpg" alt="Eco Friendly Kraft Paper Bags and Honeycomb Paper" style="width:100%; height:290px; object-fit:contain; background:#ffffff;"/>
          </div>
          <div style="border-radius:var(--radius-xs); overflow:hidden; border:1px solid var(--border-subtle);">
            <img src="images/bubble_wrap.jpg" alt="Air Bubble Protective Wrap Roll" style="height:120px; width:100%; object-fit:contain; background:#ffffff;"/>
          </div>
        </div>

        <div>
          <span class="sub-title">Sustainable Packaging</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">Kraft Paper Bags &amp; Honeycomb Cushioning</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            100% biodegradable FSC-certified virgin kraft paper shopping bags paired with expandable die-cut honeycomb paper wrap designed to replace plastic bubble wrap.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>Item</th>
                  <th>Specifications</th>
                  <th>Sustainability Rating</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Kraft Bags</td>
                  <td>90 – 180 GSM Brown / White Kraft Paper</td>
                  <td style="color:var(--text-muted);">100% Recyclable &amp; Compostable</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Handle Types</td>
                  <td>Twisted Paper Handle, Flat Paper Handle</td>
                  <td style="color:var(--text-muted);">Reinforced Patch Patching</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Honeycomb Wrap</td>
                  <td>80 GSM Kraft Paper Expanding Mesh Roll</td>
                  <td style="color:var(--text-muted);">Zero Plastic Protective Wrap</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=eco" class="btn btn-orange">
              Request Eco Pack Quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 5. STRETCH FILM & SECURITY SEALS -->
    <div class="product-filter-card" data-category="stretch" id="stretch" style="margin-bottom:60px;">
      <div class="product-detail-card">
        <div>
          <div style="border-radius:var(--radius-sm); overflow:hidden; margin-bottom:16px; border:1px solid var(--border-subtle);">
            <img src="images/stretch_film.jpg" alt="Industrial Stretch Wrap Rolls" style="width:100%; height:290px; object-fit:contain; background:#ffffff;"/>
          </div>
          <div style="border-radius:var(--radius-xs); overflow:hidden; border:1px solid var(--border-subtle);">
            <img src="images/security_seal.jpg" alt="Tamper Evident Security Seals" style="height:120px; width:100%; object-fit:contain; background:#ffffff;"/>
          </div>
        </div>

        <div>
          <span class="sub-title">Unitization &amp; Vault Security</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">Industrial Stretch Film &amp; Security Seals</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            High-tensile cast LLDPE stretch film for automated pallet wrappers, paired with sequential laser-numbered security seals, padlocks, and gold loan tamper envelopes.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>Parameter</th>
                  <th>Specifications</th>
                  <th>Regulatory Standard</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Stretch Film Resin</td>
                  <td>100% Virgin Cast LLDPE (Linear Low Density)</td>
                  <td style="color:var(--text-muted);">High Optical Clarity &amp; Puncture Proof</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Thickness Microns</td>
                  <td>17µ, 23µ, 29µ, 35µ (Microns)</td>
                  <td style="color:var(--text-muted);">Up to 300% Pre-Stretch Capability</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Security Seal Locking</td>
                  <td>Stainless Steel Spring-Lock Insert</td>
                  <td style="color:var(--text-muted);">Pull-tight adjustable strap</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Identification</td>
                  <td>Permanent Laser Etched Serial Numbers &amp; 2D QR</td>
                  <td style="color:var(--text-muted);">ISO 17712 Freight Standard</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=stretch" class="btn btn-orange">
              Request Stretch &amp; Seals Quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 6. HEAVY DUTY STORAGE RACKS & WAREHOUSE RACKING -->
    <div class="product-filter-card" data-category="racks" id="racks" style="margin-bottom:60px;">
      <div class="product-detail-card">
        <div class="product-gallery-box">
          <div class="product-main-view">
            <img src="images/heavy_duty_rack.jpg" alt="Heavy Duty Industrial Pallet Rack" class="main-gallery-img" id="mainGalleryImgRacks_php"/>
            <span class="gallery-zoom-badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/><path d="M11 8v6M8 11h6"/></svg>
              HD Preview
            </span>
          </div>
          <div class="product-thumbs-row">
            <div class="thumb-item active" onclick="switchGalleryImg(this, 'mainGalleryImgRacks_php')">
              <img src="images/heavy_duty_rack.jpg" alt="Rack Unit View"/>
            </div>
            <div class="thumb-item" onclick="switchGalleryImg(this, 'mainGalleryImgRacks_php')">
              <img src="images/heavy_duty_rack_row.jpg" alt="Warehouse Aisle View"/>
            </div>
          </div>
        </div>

        <div>
          <span class="sub-title">Warehouse Infrastructure</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">Heavy Duty Storage Racks &amp; Pallet Racking Systems</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            High-grade cold-rolled structural steel heavy-duty racking systems engineered for distribution centers, manufacturing warehouses, and cold storage logistics.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>System Component</th>
                  <th>Technical Specifications</th>
                  <th>Engineering Standard</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Column Uprights</td>
                  <td>IS 2062 High Tensile Cold Formed Steel Profiles</td>
                  <td style="color:var(--text-muted);">50mm / 75mm Pitch Adjustable</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Load Capacity</td>
                  <td>500 kg to 3500 kg per Beam Level</td>
                  <td style="color:var(--text-muted);">FEM 10.2.02 / IS 800 Compliant</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Surface Finish</td>
                  <td>7-Tank Degreased &amp; Pure Epoxy Powder Coated</td>
                  <td style="color:var(--text-muted);">Corrosion Resistant (Yellow/Blue)</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=racks" class="btn btn-orange">
              Request Racking Quotation
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 7A. ISPM-15 CERTIFIED WOODEN PALLETS -->
    <div class="product-filter-card" data-category="pallets" id="wooden-pallets" style="margin-bottom:60px;">
      <div class="product-detail-card">
        <div>
          <div style="border-radius:var(--radius-sm); overflow:hidden; margin-bottom:16px; border:1px solid var(--border-subtle); background:#ffffff;">
            <img src="images/wooden_pallets.jpg" alt="ISPM-15 Heat Treated Wooden Pallet" style="width:100%; height:290px; object-fit:contain; background:#ffffff;" class="zoomable-img"/>
          </div>
          <div class="grid-2col-thumbs">
            <img src="images/about_factory.jpg" alt="Wooden Pallet Kiln Drying Facility" style="border-radius:var(--radius-xs); height:120px; width:100%; object-fit:cover; background:#ffffff; border:1px solid var(--border-subtle);" class="zoomable-img"/>
            <img src="images/modern_machinery.jpg" alt="Automated Pallet Nailing Line" style="border-radius:var(--radius-xs); height:120px; width:100%; object-fit:cover; background:#ffffff; border:1px solid var(--border-subtle);" class="zoomable-img"/>
          </div>
        </div>

        <div>
          <span class="sub-title">Export &amp; Heavy Warehouse Logistics</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">ISPM-15 Certified Wooden Pallets (2-Way &amp; 4-Way Entry)</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            Manufactured from high-grade seasoned Pinewood, Rubberwood, and Jungle Hardwood. Kiln-dried and heat treated to ISPM-15 international phytosanitary standards for global export shipping and heavy industrial storage.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>Parameter</th>
                  <th>Specifications</th>
                  <th>Compliance / Industry Standard</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Wood Timber Grade</td>
                  <td>Pinewood, Rubberwood, Jungle Hardwood</td>
                  <td style="color:var(--text-muted);">Kiln-Dried Moisture Content &lt;18%</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Entry Construction</td>
                  <td>2-Way Flush Deck / 4-Way Block &amp; Stringer Pallet</td>
                  <td style="color:var(--text-muted);">Forklift &amp; Hand Pallet Truck Friendly</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Phytosanitary Certification</td>
                  <td>ISPM-15 Heat Treatment (HT Stamp Verified)</td>
                  <td style="color:var(--text-muted);">56°C Core Temp for 30 Mins (Export Approved)</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Load Carrying Capacity</td>
                  <td>Static: 1,500 kg to 5,000 kg | Dynamic: 1,000 kg to 2,500 kg</td>
                  <td style="color:var(--text-muted);">Heavy Racking &amp; Multi-Tier Stacking</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Standard Sizes</td>
                  <td>1200 x 1000 mm, 1200 x 800 mm (Euro), Custom Sizes</td>
                  <td style="color:var(--text-muted);">Standard Container &amp; Truck Bed Loading</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=wooden-pallets" class="btn btn-orange">
              Request Wooden Pallets Quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="https://wa.me/919044129477?text=Hi,%20I%20need%20a%20quotation%20for%20ISPM-15%20Wooden%20Pallets." target="_blank" rel="noopener" class="btn btn-outline">
              WhatsApp Spec Sheet
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 7B. INDUSTRIAL PLASTIC PALLETS, CRATES & PP BOXES -->
    <div class="product-filter-card" data-category="pallets" id="pallets" style="margin-bottom:60px;">
      <div class="product-detail-card">
        <div>
          <div style="border-radius:var(--radius-sm); overflow:hidden; margin-bottom:16px; border:1px solid var(--border-subtle);">
            <img src="images/plastic_pallets.jpg" alt="Heavy Duty Plastic Pallets Stack" style="width:100%; height:290px; object-fit:contain; background:#ffffff;"/>
          </div>
          <div class="grid-2col-thumbs">
            <img src="images/wooden_pallets.jpg" alt="ISPM-15 Heat Treated Wooden Pallet" style="border-radius:var(--radius-xs); height:120px; width:100%; object-fit:contain; background:#ffffff; border:1px solid var(--border-subtle);"/>
            <img src="images/plastic_crate.jpg" alt="Plastic Storage Crate with Lid" style="border-radius:var(--radius-xs); height:120px; width:100%; object-fit:contain; background:#ffffff; border:1px solid var(--border-subtle);"/>
          </div>
          <div style="display:grid; grid-template-columns:1fr 1fr; gap:10px; margin-top:10px;">
            <img src="images/pp_box.jpg" alt="PP Flute Corrugated Reusable Boxes" style="border-radius:var(--radius-xs); height:120px; width:100%; object-fit:contain; background:#ffffff; border:1px solid var(--border-subtle);"/>
            <img src="images/pallet_truck.jpg" alt="Hydraulic Pallet Jack Truck" style="border-radius:var(--radius-xs); height:120px; width:100%; object-fit:contain; background:#ffffff; border:1px solid var(--border-subtle);"/>
          </div>
        </div>

        <div>
          <span class="sub-title">Material Handling &amp; Returnable Packaging</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">Wooden &amp; Plastic Pallets, Industrial Crates &amp; PP Boxes</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            Comprehensive range of ISPM-15 certified wooden pallets, heavy-duty HDPE plastic pallets, stackable plastic storage crates, and water-proof Polypropylene (PP) flute corrugated boxes for automotive and retail logistics.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>Product Category</th>
                  <th>Key Specs &amp; Construction</th>
                  <th>Primary Application</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Wooden Pallets</td>
                  <td>ISPM-15 Heat Treated Pine / Hardwood (2-Way &amp; 4-Way)</td>
                  <td style="color:var(--text-muted);">Export shipments &amp; heavy logistics</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Plastic Pallets</td>
                  <td>HDPE Virgin Material, Static: 4 Ton / Dynamic: 1.5 Ton</td>
                  <td style="color:var(--text-muted);">Clean room, pharma &amp; food processing</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Plastic Crates</td>
                  <td>High-Impact Polypropylene stackable / nestable with lids</td>
                  <td style="color:var(--text-muted);">Auto components &amp; retail supply chain</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">PP Flute Boxes</td>
                  <td>2mm to 10mm Polypropylene hollow sheet boxes</td>
                  <td style="color:var(--text-muted);">Returnable closed-loop transit packaging</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- WOODEN PALLETS & PP BOX MANUFACTURING DEEP DIVE -->
          <div style="background:var(--bg-subtle, #f8fafc); border:1px solid var(--border-subtle, #e2e8f0); border-radius:var(--radius-sm); padding:18px; margin:20px 0;">
            <h4 style="font-family:var(--font-heading); font-weight:700; font-size:1.05rem; color:var(--text-primary); margin-bottom:10px; display:flex; align-items:center; gap:8px;">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;color:var(--orange);"><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"/><circle cx="12" cy="12" r="3"/></svg>
              Manufacturing Engineering: Wooden Pallets &amp; PP Flute Boxes
            </h4>
            <div style="font-size:0.88rem; color:var(--text-secondary); line-height:1.6; display:grid; grid-template-columns:1fr 1fr; gap:14px;">
              <div>
                <strong style="color:var(--text-primary);">Wooden Pallet Manufacturing &amp; ISPM-15 Heat Treatment:</strong>
                <ul style="margin:4px 0 0 16px; padding:0; list-style-type:disc;">
                  <li><strong>Wood Selection:</strong> Premium Pinewood, Jungle Hardwood &amp; Rubberwood timber inspected for moisture (&lt;18%).</li>
                  <li><strong>ISPM-15 Kiln Drying:</strong> Thermal treatment chamber reaches core temp of 56°C for 30 minutes to eradicate pests for export compliance.</li>
                  <li><strong>Automated Assembly:</strong> CNC board re-sawing, bottom deck chamfering, and pneumatic ring-shank nailing for maximum load bearing.</li>
                </ul>
              </div>
              <div>
                <strong style="color:var(--text-primary);">PP Corrugated Flute Box Manufacturing:</strong>
                <ul style="margin:4px 0 0 16px; padding:0; list-style-type:disc;">
                  <li><strong>Twin-Wall Extrusion:</strong> Copolymer polypropylene resin extruded into twin-wall hollow fluted sheets (2mm to 10mm thickness, 250–2000 GSM).</li>
                  <li><strong>Corona Surface Treatment:</strong> Treated to 44 dynes/cm for long-lasting screen printing &amp; brand graphics.</li>
                  <li><strong>Ultrasonic Welding &amp; Edge Seal:</strong> Ultrasonic spot-welded joints, plastic rivet reinforcement, and sealed flutes for 100% washable returnable totes.</li>
                </ul>
              </div>
            </div>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=pallets" class="btn btn-orange">
              Request Pallet &amp; Crate Quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 7C. INDUSTRIAL PLASTIC STORAGE CRATES WITH LIDS -->
    <div class="product-filter-card" data-category="pallets" id="plastic-crates" style="margin-bottom:60px;">
      <div class="product-detail-card">
        <div>
          <div style="border-radius:var(--radius-sm); overflow:hidden; margin-bottom:16px; border:1px solid var(--border-subtle);">
            <img src="images/product_photo_4.jpg" alt="Plastic Storage Crate with Lid" style="width:100%; height:290px; object-fit:contain; background:#ffffff;"/>
          </div>
          <div class="grid-2col-thumbs">
            <img src="images/plastic_crate.jpg" alt="HDPE Stackable Plastic Storage Crate with Lid" style="border-radius:var(--radius-xs); height:120px; width:100%; object-fit:contain; background:#ffffff; border:1px solid var(--border-subtle);"/>
            <img src="images/plastic_pallets.jpg" alt="Industrial HDPE Plastic Pallets" style="border-radius:var(--radius-xs); height:120px; width:100%; object-fit:contain; background:#ffffff; border:1px solid var(--border-subtle);"/>
          </div>
        </div>

        <div>
          <span class="sub-title">Material Handling &amp; Industrial Storage</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">Heavy-Duty Plastic Storage Crates with Lids</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            High-grade 100% virgin HDPE stackable industrial storage crates with integrated or detachable locking lids. Engineered for closed-loop supply chains, automotive component movement, electronics assembly, and organized warehouse storage.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>Feature / Specification</th>
                  <th>Technical Description</th>
                  <th>Industrial Benefit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Material Composition</td>
                  <td>100% High-Density Polyethylene (HDPE) / PP Virgin Grade</td>
                  <td style="color:var(--text-muted);">High impact strength, oil &amp; chemical resistant</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Lid System</td>
                  <td>Hinged Interlocking Lid / Snap-Fit Detachable Lid</td>
                  <td style="color:var(--text-muted);">Tamper-evident, dust-proof &amp; stack security</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Stacking &amp; Nesting</td>
                  <td>1+5 Vertical Stacking Load Capacity (Up to 250 kg total stack)</td>
                  <td style="color:var(--text-muted);">Maximizes warehouse floor &amp; racking space</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Standard Sizes Available</td>
                  <td>600x400x325mm, 500x350x275mm, 400x300x220mm (Custom sizes on request)</td>
                  <td style="color:var(--text-muted);">Fits standard ISO plastic pallets &amp; rack shelves</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- PLASTIC CRATE MANUFACTURING DEEP DIVE -->
          <div style="background:var(--bg-subtle, #f8fafc); border:1px solid var(--border-subtle, #e2e8f0); border-radius:var(--radius-sm); padding:18px; margin:20px 0;">
            <h4 style="font-family:var(--font-heading); font-weight:700; font-size:1.05rem; color:var(--text-primary); margin-bottom:10px; display:flex; align-items:center; gap:8px;">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;color:var(--orange);"><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"/><circle cx="12" cy="12" r="3"/></svg>
              Engineering &amp; Customization Features:
            </h4>
            <div style="font-size:0.88rem; color:var(--text-secondary); line-height:1.6; display:grid; grid-template-columns:1fr 1fr; gap:14px;">
              <div>
                <strong style="color:var(--text-primary);">Heavy Duty Structural Ribbing:</strong>
                <ul style="margin:4px 0 0 16px; padding:0; list-style-type:disc;">
                  <li>Reinforced base grid prevents bowing under heavy payload.</li>
                  <li>Ergonomic hand-holds for safe manual lifting and handling.</li>
                  <li>Built-in card holders for RFID tags, barcode labels &amp; kanban routing.</li>
                </ul>
              </div>
              <div>
                <strong style="color:var(--text-primary);">Security &amp; Logistics Efficiency:</strong>
                <ul style="margin:4px 0 0 16px; padding:0; list-style-type:disc;">
                  <li>Integrated security seal holes for tamper-evident cable / zip ties.</li>
                  <li>Smooth interior surfaces for easy cleaning &amp; protection of contents.</li>
                  <li>Temperature resistant from -20°C to +60°C for cold storage compatibility.</li>
                </ul>
              </div>
            </div>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=plastic-crates" class="btn btn-orange">
              Request Plastic Crate Quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 7D. POLYPROPYLENE (PP) CORRUGATED FLUTE BOXES -->
    <div class="product-filter-card" data-category="pallets" id="pp-boxes" style="margin-bottom:60px;">
      <div class="product-detail-card">
        <div>
          <div style="border-radius:var(--radius-sm); overflow:hidden; margin-bottom:16px; border:1px solid var(--border-subtle);">
            <img src="images/product_photo_5.jpg" alt="Polypropylene PP Flute Corrugated Box" style="width:100%; height:290px; object-fit:contain; background:#ffffff;"/>
          </div>
          <div class="grid-2col-thumbs">
            <img src="images/pp_box.jpg" alt="PP Flute Reusable Totes" style="border-radius:var(--radius-xs); height:120px; width:100%; object-fit:contain; background:#ffffff; border:1px solid var(--border-subtle);"/>
            <img src="images/corrugated_box.jpg" alt="Heavy Duty Corrugated Box" style="border-radius:var(--radius-xs); height:120px; width:100%; object-fit:contain; background:#ffffff; border:1px solid var(--border-subtle);"/>
          </div>
        </div>

        <div>
          <span class="sub-title">Returnable Packaging &amp; Closed-Loop Logistics</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">Polypropylene (PP) Corrugated Flute Boxes</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            Engineered twin-wall polypropylene hollow fluted sheet boxes designed as a lightweight, 100% waterproof, and reusable alternative to traditional paper corrugated cartons. Custom manufactured with ultrasonic spot welding, corner edge protectors, velcro flaps, and ESD anti-static treatment for automotive, electronics, and pharmaceutical plant logistics.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>Property / Feature</th>
                  <th>Technical Specification</th>
                  <th>Application Benefit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Sheet Thickness &amp; GSM</td>
                  <td>2.0 mm to 10.0 mm (250 GSM up to 2000 GSM)</td>
                  <td style="color:var(--text-muted);">High tear &amp; puncture resistance for heavy loads</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Joint Construction</td>
                  <td>Ultrasonic Spot Welded / Heavy Plastic Rivets</td>
                  <td style="color:var(--text-muted);">100% seam integrity with 50+ trip return lifespan</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Surface Treatment</td>
                  <td>Corona Treated (44 Dynes) / Conductive ESD Option</td>
                  <td style="color:var(--text-muted);">Screen-printed graphics &amp; sensitive electronics safety</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Environmental Resistance</td>
                  <td>100% Waterproof, Washable, Oil &amp; Chemical Proof</td>
                  <td style="color:var(--text-muted);">Zero degradation in wet or greasy plant environments</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- PP BOX MANUFACTURING DEEP DIVE -->
          <div style="background:var(--bg-subtle, #f8fafc); border:1px solid var(--border-subtle, #e2e8f0); border-radius:var(--radius-sm); padding:18px; margin:20px 0;">
            <h4 style="font-family:var(--font-heading); font-weight:700; font-size:1.05rem; color:var(--text-primary); margin-bottom:10px; display:flex; align-items:center; gap:8px;">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:18px;height:18px;color:var(--orange);"><path d="M19.4 15a1.65 1.65 0 00.33 1.82l.06.06a2 2 0 010 2.83 2 2 0 01-2.83 0l-.06-.06a1.65 1.65 0 00-1.82-.33 1.65 1.65 0 00-1 1.51V21a2 2 0 01-2 2 2 2 0 01-2-2v-.09A1.65 1.65 0 009 19.4a1.65 1.65 0 00-1.82.33l-.06.06a2 2 0 01-2.83 0 2 2 0 010-2.83l.06-.06a1.65 1.65 0 00.33-1.82 1.65 1.65 0 00-1.51-1H3a2 2 0 01-2-2 2 2 0 012-2h.09A1.65 1.65 0 004.6 9a1.65 1.65 0 00-.33-1.82l-.06-.06a2 2 0 010-2.83 2 2 0 012.83 0l.06.06a1.65 1.65 0 001.82.33H9a1.65 1.65 0 001-1.51V3a2 2 0 012-2 2 2 0 012 2v.09a1.65 1.65 0 001 1.51 1.65 1.65 0 001.82-.33l.06-.06a2 2 0 012.83 0 2 2 0 010 2.83l-.06.06a1.65 1.65 0 00-.33 1.82V9a1.65 1.65 0 001.51 1H21a2 2 0 012 2 2 2 0 01-2 2h-.09a1.65 1.65 0 00-1.51 1z"/><circle cx="12" cy="12" r="3"/></svg>
              Manufacturing &amp; Fabrication Highlights:
            </h4>
            <div style="font-size:0.88rem; color:var(--text-secondary); line-height:1.6; display:grid; grid-template-columns:1fr 1fr; gap:14px;">
              <div>
                <strong style="color:var(--text-primary);">Custom Box Styles:</strong>
                <ul style="margin:4px 0 0 16px; padding:0; list-style-type:disc;">
                  <li>Regular Slotted Container (RSC) style with top &amp; bottom flaps.</li>
                  <li>Collapsible Tote style with corner stacker profiles &amp; handles.</li>
                  <li>ESD conductive totes for PCB assembly &amp; semiconductor storage.</li>
                </ul>
              </div>
              <div>
                <strong style="color:var(--text-primary);">Hardware Accessories:</strong>
                <ul style="margin:4px 0 0 16px; padding:0; list-style-type:disc;">
                  <li>Velcro straps, plastic latch buckles &amp; document card pockets.</li>
                  <li>Reinforced aluminum / PVC top edge rim profiles.</li>
                  <li>Custom die-cut foam inserts for internal component partitions.</li>
                </ul>
              </div>
            </div>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=pp-boxes" class="btn btn-orange">
              Request PP Box Quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 8. INDUSTRIAL EPOXY FLOORING -->
    <div class="product-filter-card" data-category="flooring" id="flooring" style="margin-bottom:30px;">
      <div class="product-detail-card">
        <div class="product-gallery-box">
          <div class="product-main-view">
            <img src="images/epoxy_flooring_warehouse.jpg" alt="Industrial Epoxy Flooring &amp; 5S Line Marking Solutions" class="main-gallery-img" id="mainGalleryImgEpoxy_php"/>
            <span class="gallery-zoom-badge">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/><path d="M11 8v6M8 11h6"/></svg>
              HD Preview
            </span>
          </div>
          <div class="product-thumbs-row">
            <div class="thumb-item active" onclick="switchGalleryImg(this, 'mainGalleryImgEpoxy_php')">
              <img src="images/epoxy_flooring.jpg" alt="Infographic Banner"/>
            </div>
            <div class="thumb-item" onclick="switchGalleryImg(this, 'mainGalleryImgEpoxy_php')">
              <img src="images/epoxy_flooring_warehouse.jpg" alt="Seamless Floor"/>
            </div>
            <div class="thumb-item" onclick="switchGalleryImg(this, 'mainGalleryImgEpoxy_php')">
              <img src="images/heavy_duty_rack_row.jpg" alt="Racks &amp; Flooring"/>
            </div>
            <div class="thumb-item" onclick="switchGalleryImg(this, 'mainGalleryImgEpoxy_php')">
              <img src="images/about_factory.jpg" alt="Plant Floor"/>
            </div>
          </div>
        </div>

        <div>
          <span class="sub-title">Facility Infrastructure</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">Industrial Epoxy Flooring &amp; Safety Line Marking</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            Designed to seamlessly complement your heavy-duty Storage Racks and stackable Plastic Crates, our industrial epoxy flooring and 5S safety line marking solutions create a clean, safe, and organized warehouse environment. Built to withstand high-impact forklift movement, oil spills, and chemical exposure.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>Property</th>
                  <th>Technical Parameter</th>
                  <th>Industrial Benefit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Coating Thickness</td>
                  <td>1.5 mm to 4.0 mm Self-Leveling Epoxy Layer</td>
                  <td style="color:var(--text-muted);">Heavy forklift traffic durability</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Compressive Strength</td>
                  <td>&gt; 65 N/mm² (High Load Resistance)</td>
                  <td style="color:var(--text-muted);">Prevents concrete cracking &amp; dusting</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Chemical Resistance</td>
                  <td>Resistant to Acids, Oils, Solvents &amp; Alkalies</td>
                  <td style="color:var(--text-muted);">Easy maintenance &amp; washdown</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Safety Line Marking</td>
                  <td>Polyurethane High-Visibility Yellow &amp; Blue Lanes</td>
                  <td style="color:var(--text-muted);">EHS &amp; 5S Safety Compliance</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- TURNKEY INDUSTRIAL PROJECTS & COMMERCIAL OFFICE WORKS BREAKDOWN -->
          <div style="background:var(--bg-subtle, #f8fafc); border:1px solid var(--border-subtle, #e2e8f0); border-radius:var(--radius-sm); padding:20px; margin:20px 0;">
            <h4 style="font-family:var(--font-heading); font-weight:700; font-size:1.1rem; color:var(--text-primary); margin-bottom:14px; display:flex; align-items:center; gap:8px;">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:20px;height:20px;color:var(--orange-brand);"><path d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h9m-9 0V9a2 2 0 012-2h2a2 2 0 012 2v12m-6 0h6"/></svg>
              Turnkey Industrial Projects &amp; Commercial Office Works
            </h4>

            <!-- Visual Project Showcase Gallery Grid (4 Images) -->
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:14px; margin-bottom:18px;">
              <div style="border-radius:var(--radius-xs); overflow:hidden; border:1px solid var(--border-subtle); position:relative; background:#ffffff;">
                <img src="images/office_fitout.jpg" alt="Commercial Office Interior Design &amp; Workstations" style="width:100%; height:150px; object-fit:cover; display:block;" />
                <div style="position:absolute; bottom:0; left:0; right:0; background:rgba(15,23,42,0.85); color:#fff; font-size:0.72rem; font-weight:700; padding:4px 8px; text-transform:uppercase;">Office Interior Fitouts</div>
              </div>
              <div style="border-radius:var(--radius-xs); overflow:hidden; border:1px solid var(--border-subtle); position:relative; background:#ffffff;">
                <img src="images/office_glass_partition.jpg" alt="Glass &amp; Aluminum Office Dividers" style="width:100%; height:150px; object-fit:cover; display:block;" />
                <div style="position:absolute; bottom:0; left:0; right:0; background:rgba(15,23,42,0.85); color:#fff; font-size:0.72rem; font-weight:700; padding:4px 8px; text-transform:uppercase;">Glass Partitions</div>
              </div>
              <div style="border-radius:var(--radius-xs); overflow:hidden; border:1px solid var(--border-subtle); position:relative; background:#ffffff;">
                <img src="images/office_executive_cabin.jpg" alt="Executive Cabins &amp; Commercial Flooring" style="width:100%; height:150px; object-fit:cover; display:block;" />
                <div style="position:absolute; bottom:0; left:0; right:0; background:rgba(15,23,42,0.85); color:#fff; font-size:0.72rem; font-weight:700; padding:4px 8px; text-transform:uppercase;">Executive Cabins</div>
              </div>
              <div style="border-radius:var(--radius-xs); overflow:hidden; border:1px solid var(--border-subtle); position:relative; background:#ffffff;">
                <img src="images/industrial_warehouse_infra.jpg" alt="Warehouse Racks &amp; Factory Epoxy Flooring" style="width:100%; height:150px; object-fit:cover; display:block;" />
                <div style="position:absolute; bottom:0; left:0; right:0; background:rgba(15,23,42,0.85); color:#fff; font-size:0.72rem; font-weight:700; padding:4px 8px; text-transform:uppercase;">Warehouse Racking &amp; Infra</div>
              </div>
            </div>

            <div style="font-size:0.88rem; color:var(--text-secondary); line-height:1.6; display:grid; grid-template-columns:1fr 1fr; gap:14px;">
              <div>
                <strong style="color:var(--text-primary);">Turnkey Commercial Office Works &amp; Fitouts:</strong>
                <ul style="margin:4px 0 0 16px; padding:0; list-style-type:disc;">
                  <li><strong>Office Interior Design &amp; Execution:</strong> Executive cabins, workstation layouts, false ceiling, and acoustic wall panels.</li>
                  <li><strong>Commercial Floorings:</strong> High-gloss resinous epoxy, ESD conductive flooring for IT server rooms &amp; anti-slip polyurethane coatings.</li>
                  <li><strong>Glass &amp; Aluminum Partitions:</strong> Modular office dividers, frosted glass conference rooms, and soundproof partitions.</li>
                </ul>
              </div>
              <div>
                <strong style="color:var(--text-primary);">Industrial Plant &amp; Warehouse Infrastructure:</strong>
                <ul style="margin:4px 0 0 16px; padding:0; list-style-type:disc;">
                  <li><strong>Heavy Storage Racking:</strong> Multi-tier pallet racking, mezzanine floor steel structures, and heavy cantilever racks.</li>
                  <li><strong>Factory Floor Epoxy:</strong> Heavy-duty self-leveling resinous floor hardeners for forklift traffic &amp; anti-dusting.</li>
                  <li><strong>EHS 5S Line Marking:</strong> High-contrast polyurethane safety lanes, pedestrian walkways, and hazard zonation.</li>
                </ul>
              </div>
            </div>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=flooring" class="btn btn-orange">
              Request Turnkey &amp; Site Survey Quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="https://wa.me/919044129477?text=Hi,%20I%20want%20to%20discuss%20an%20industrial%20epoxy%20or%20turnkey%20office%20project." target="_blank" rel="noopener" class="btn btn-outline">
              WhatsApp Turnkey Consultation
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 10. AIR BUBBLE WRAP & CUSHIONING ROLLS -->
    <div class="product-filter-card" data-category="eco" id="bubble" style="margin-bottom:60px;">
      <div class="product-detail-card">
        <div>
          <div style="border-radius:var(--radius-sm); overflow:hidden; margin-bottom:16px; border:1px solid var(--border-subtle);">
            <img src="images/bubble_wrap.jpg" alt="Air Bubble Wrap Packaging Rolls" style="width:100%; height:290px; object-fit:contain; background:#ffffff;"/>
          </div>
        </div>

        <div>
          <span class="sub-title">Transit Cushioning</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">Air Bubble Wrap &amp; Shock Absorption Rolls</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            High-grade poly air bubble rolls engineered to absorb shock, vibration, and impact during courier transit. Available in standard clear, anti-static ESD pink, and heavy-duty 3-layer laminated options.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>Parameter</th>
                  <th>Specifications</th>
                  <th>Performance Feature</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Bubble Diameter</td>
                  <td>10mm (Standard) &amp; 20mm (Jumbo)</td>
                  <td style="color:var(--text-muted);">High Air Retention Bursting Resistance</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Grammage Range</td>
                  <td>40 GSM to 120 GSM</td>
                  <td style="color:var(--text-muted);">Flexible Light Duty to Industrial Heavy Duty</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Special Variants</td>
                  <td>Anti-Static ESD Pink &amp; Laminated Kraft/Alu</td>
                  <td style="color:var(--text-muted);">Electronic Component Static Shielding</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Standard Roll Width</td>
                  <td>0.5 Meter, 1.0 Meter &amp; 1.5 Meter</td>
                  <td style="color:var(--text-muted);">Custom pre-cut sheets &amp; pouches available</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=bubble" class="btn btn-orange">
              Request Bubble Wrap Quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="https://wa.me/919044129477?text=Hi,%20I%20need%20pricing%20for%20air%20bubble%20wrap%20rolls." target="_blank" rel="noopener" class="btn btn-outline">
              WhatsApp Technical Spec Sheet
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 11. PP STRAPPING ROLLS & PET HEAVY STRAPS -->
    <div class="product-filter-card" data-category="stretch" id="strapping" style="margin-bottom:60px;">
      <div class="product-detail-card">
        <div>
          <div style="border-radius:var(--radius-sm); overflow:hidden; margin-bottom:16px; border:1px solid var(--border-subtle);">
            <img src="images/hero_composite.jpg" alt="PP Strapping Rolls and PET Green Straps" style="width:100%; height:290px; object-fit:contain; background:#ffffff;"/>
          </div>
        </div>

        <div>
          <span class="sub-title">Pallet &amp; Bundle Binding</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">PP Strapping Rolls &amp; High-Tensile PET Straps</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            Engineered polypropylene (PP) strapping rolls for heat-sealing automatic machines and green embossed PET polyester straps for heavy pallet load stabilization, replacing steel banding.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>Parameter</th>
                  <th>Specifications</th>
                  <th>Performance Feature</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Strap Width</td>
                  <td>9mm, 12mm, 15mm &amp; 19mm</td>
                  <td style="color:var(--text-muted);">Compatible with standard tensioners &amp; sealers</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Break Strength</td>
                  <td>120 kgf to 550 kgf</td>
                  <td style="color:var(--text-muted);">High shock absorption retention</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Material Grade</td>
                  <td>Virgin PP &amp; High-Tensile Embossed PET</td>
                  <td style="color:var(--text-muted);">Rust-free, weather resistant, recyclable</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=strapping" class="btn btn-orange">
              Request Strapping Quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="https://wa.me/919044129477?text=Hi,%20I%20need%20pricing%20for%20PP%20and%20PET%20strapping%20rolls." target="_blank" rel="noopener" class="btn btn-outline">
              WhatsApp Technical Spec Sheet
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- 12. HYDRAULIC HAND PALLET TRUCKS -->
    <div class="product-filter-card" data-category="pallets" id="pallettruck" style="margin-bottom:60px;">
      <div class="product-detail-card">
        <div>
          <div style="border-radius:var(--radius-sm); overflow:hidden; margin-bottom:16px; border:1px solid var(--border-subtle);">
            <img src="images/pallet_truck.jpg" alt="Industrial Hydraulic Hand Pallet Truck" style="width:100%; height:290px; object-fit:contain; background:#ffffff;"/>
          </div>
        </div>

        <div>
          <span class="sub-title">Dock &amp; Warehouse Equipment</span>
          <h2 style="font-family:var(--font-heading); font-weight:800; font-size:1.75rem; color:var(--text-primary); margin-bottom:10px;">Hydraulic Hand Pallet Trucks &amp; Manual Stackers</h2>
          <p style="font-size:0.92rem; color:var(--text-secondary); line-height:1.65; margin-bottom:18px;">
            Heavy-duty 2.5Ton and 3.0Ton hydraulic hand pallet jacks featuring leak-proof integrated hydraulic pump valves, heavy C-channel steel forks, and smooth tandem Polyurethane/Nylon rollers.
          </p>

          <div class="specs-table-wrap">
            <table class="specs-table">
              <thead>
                <tr>
                  <th>Parameter</th>
                  <th>Specifications</th>
                  <th>Performance Feature</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="font-weight:600;">Load Capacity</td>
                  <td>2500 kg (2.5T) &amp; 3000 kg (3.0T)</td>
                  <td style="color:var(--text-muted);">Heavy industrial load moving rating</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Fork Dimensions</td>
                  <td>1150 x 550 mm &amp; 1220 x 685 mm</td>
                  <td style="color:var(--text-muted);">Standard Euro &amp; ISO pallet compatibility</td>
                </tr>
                <tr>
                  <td style="font-weight:600;">Load Rollers</td>
                  <td>Dual Tandem PU / Nylon Wheels</td>
                  <td style="color:var(--text-muted);">Low noise, non-marking floor protection</td>
                </tr>
              </tbody>
            </table>
          </div>

          <div style="display:flex; gap:12px; align-items:center; flex-wrap:wrap;">
            <a href="contact.php?prod=pallettruck" class="btn btn-orange">
              Request Pallet Truck Quote
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="https://wa.me/919044129477?text=Hi,%20I%20need%20pricing%20for%20hydraulic%20hand%20pallet%20trucks." target="_blank" rel="noopener" class="btn btn-outline">
              WhatsApp Technical Spec Sheet
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include 'footer.php'; ?>
