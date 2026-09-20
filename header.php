<?php
if (!isset($page)) $page = 'home';
if (!isset($page_title)) $page_title = 'Mirai Packaging LLP | Corrugated Boxes & Industrial Packaging Manufacturer Bengaluru';
if (!isset($meta_desc)) $meta_desc = 'Mirai Packaging LLP is Bangalore\'s premier manufacturer of 2 to 9 ply corrugated boxes, tamper-proof courier mailers, BOPP tapes, wooden pallets, and industrial packaging solutions.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>"/>
  <link rel="icon" type="image/png" href="images/favicon.png"/>
  <link rel="stylesheet" href="style.css"/>
</head>
<body>

<!-- TOPBAR -->
<div class="topbar">
  <div class="container">
    <div class="topbar-inner">
      <div class="topbar-left">
        <span class="topbar-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          Add-1091, 8th Cross Road, Jai Marathi Nagar, Bengaluru Urban, Karnataka – 560086
        </span>
        <span class="topbar-item">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          miraipackagingllp@gmail.com
        </span>
        <span class="topbar-badge">GSTIN: 29AAUFM9272M1Z2</span>
      </div>
      <div class="topbar-right">
        <span class="topbar-item">Mon – Sat: 9:00 AM – 7:00 PM IST</span>
        <a href="tel:+919491436494" class="topbar-phone">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width:14px;height:14px;"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg>
          +91-9491436494
        </a>
      </div>
    </div>
  </div>
</div>

<!-- NAVBAR -->
<header class="navbar" id="navbar">
  <div class="container">
    <div class="nav-inner">
      <a href="index.php" class="nav-logo" id="navLogo">
        <img src="images/logo.png" alt="Mirai Packaging LLP" class="nav-logo-img"/>
        <div class="nav-logo-text">
          <span class="brand-name">MIRAI</span>
          <span class="brand-tag">PACKAGING LLP</span>
          <span class="brand-motto">Flexible Packaging Solutions</span>
        </div>
      </a>
      <nav class="nav-menu" id="navMenu">
        <a href="index.php" class="nav-link <?php if ($page === 'home') echo 'active'; ?>">Home</a>
        <a href="about.php" class="nav-link <?php if ($page === 'about') echo 'active'; ?>">About Us</a>
        <a href="products.php" class="nav-link <?php if ($page === 'products') echo 'active'; ?>">Products</a>
        <a href="clients.php" class="nav-link <?php if ($page === 'clients') echo 'active'; ?>">Clients</a>
        <a href="contact.php" class="nav-link <?php if ($page === 'contact') echo 'active'; ?>">Contact</a>
      </nav>
      <div class="nav-actions">
        <a href="contact.php" class="btn btn-orange btn-sm nav-cta">
          Request Quote
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <button class="hamburger" id="hamburger" aria-label="Open navigation menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </div>
</header>

<!-- MOBILE DRAWER -->
<div class="drawer-overlay" id="drawerOverlay"></div>
<nav class="mobile-drawer" id="mobileDrawer">
  <div class="drawer-header">
    <div class="nav-logo">
      <img src="images/logo.png" alt="Mirai Packaging LLP" style="height:50px;"/>
      <div class="nav-logo-text">
        <span class="brand-name" style="font-size:1.3rem;">MIRAI</span>
        <span class="brand-tag">PACKAGING LLP</span>
      </div>
    </div>
    <div class="drawer-close" id="drawerClose">&#x2715;</div>
  </div>
  <div class="drawer-nav">
    <a href="index.php" class="drawer-link <?php if ($page === 'home') echo 'active'; ?>">Home</a>
    <a href="about.php" class="drawer-link <?php if ($page === 'about') echo 'active'; ?>">About Us</a>
    <a href="products.php" class="drawer-link <?php if ($page === 'products') echo 'active'; ?>">Products &amp; Specs</a>
    <a href="clients.php" class="drawer-link <?php if ($page === 'clients') echo 'active'; ?>">Our Clients</a>
    <a href="contact.php" class="drawer-link <?php if ($page === 'contact') echo 'active'; ?>">Contact &amp; Enquiry</a>
  </div>
  <div class="drawer-footer">
    <a href="tel:+919491436494" class="btn btn-outline" style="width:100%;margin-bottom:8px;justify-content:center;">
      Call: +91 9491436494
    </a>
    <a href="contact.php" class="btn btn-orange" style="width:100%;justify-content:center;">Get Bulk Pricing</a>
  </div>
</nav>
