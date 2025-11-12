<?php
	include 'db_connect.php';
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pricing | Discover Nkomazi</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Linking Google fonts for icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	
  </head>
  <body>
    <!-- Navbar -->
    <nav class="site-nav">
      <button class="sidebar-toggle">
        <span class="material-symbols-rounded">menu</span>
      </button>
    </nav>
    <div class="container">
      <!-- Sidebar -->
      <aside class="sidebar collapsed">
        <!-- Sidebar header -->
        <div class="sidebar-header">
          <button class="sidebar-toggle">
            <span class="material-symbols-rounded">chevron_left</span>
          </button>
        </div>
        <div class="sidebar-content">
          </form>
          <!-- Sidebar Menu -->
          <ul class="menu-list">
            <li class="menu-item">
              <a href="index.php" class="menu-link">
                <span class="material-symbols-rounded">home</span>
                <span class="menu-label">Home</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="jobs.php" class="menu-link">
                <span class="material-symbols-rounded">work</span>
                <span class="menu-label">Jobs</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="businesses.php" class="menu-link">
                <span class="material-symbols-rounded">storefront</span>
                <span class="menu-label">Businesses</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="events.php" class="menu-link">
                <span class="material-symbols-rounded">event</span>
                <span class="menu-label">Events</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="news.php" class="menu-link">
                <span class="material-symbols-rounded">news</span>
                <span class="menu-label">News</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="explore.php" class="menu-link">
                <span class="material-symbols-rounded">explore</span>
                <span class="menu-label">Explore</span>
              </a>
            </li>
			<li class="menu-item">
              <a href="pricing.php" class="menu-link active">
                <span class="material-symbols-rounded">money</span>
                <span class="menu-label">Pricing</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="contact.php" class="menu-link">
                <span class="material-symbols-rounded">phone</span>
                <span class="menu-label">Contact</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- Sidebar Footer -->
        <div class="sidebar-footer">
          <button class="theme-toggle">
            <div class="theme-label">
              <span class="theme-icon material-symbols-rounded">dark_mode</span>
              <span class="theme-text">Dark Mode</span>
            </div>
            <div class="theme-toggle-track">
              <div class="theme-toggle-indicator"></div>
            </div>
          </button>
        </div>
      </aside>

	<section class="pricing-section">
		<h2>💰 Advertising & Promotion Packages</h2>
		<p>Grow your business or event visibility in Nkomazi! Choose the package that fits your needs.</p>
			<br><br>

	<!-- Featured Business Packages -->
	<div class="pricing-list">
		<div class="card">
			<h3>Featured Business</h3>
    		<p>Highlight your business on our Businesses page</p>
    		<p class="price">R150 / month</p>
    <ul>
      <p>Top of Businesses page
      <br>Includes image & description
      <br>Homepage highlight</p>
    </ul>
    <a href="contact.html" class="button">Contact to Subscribe</a>
  </div>

  <!-- Event Promotion Packages -->
  <div class="card">
    <h3>Event Promotion</h3>
    <p>Make your event stand out</p>
    <p class="price">R100 / event</p>
    <ul>
      <p>Featured on Events page
      <br>Larger image
      <br>Optional homepage highlight</p>
    </ul>
    <a href="contact.html" class="button">Promote Your Event</a>
  </div>

  <!-- Banner Ads -->
  <div class="card">
    <h3>Homepage Banner</h3>
    <p>Advertise your business with a banner</p>
    <p class="price">R250 / month</p>
    <ul>
      <p>Top banner on homepage
      <br>Clickable link to your site or WhatsApp
      <br>High visibility</p>
    </ul>
    <a href="contact.html" class="button">Get Your Banner</a>
  </div>

</div>
</section>
</div>

<footer>
<p>© 2025 Discover Nkomazi | Designed by Aubrey Mngomezulu</p>
<div class="socials">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-whatsapp"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
</footer>

  <script src="script.js"></script>
</body>
</html>
