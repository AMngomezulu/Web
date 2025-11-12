<?php
	include 'db_connect.php';
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us | Discover Nkomazi</title>
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
              <a href="pricing.php" class="menu-link">
                <span class="material-symbols-rounded">money</span>
                <span class="menu-label">Pricing</span>
              </a>
            </li>
            <li class="menu-item">
              <a href="contact.php" class="menu-link active">
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

  <!-- ===== CONTACT SECTION ===== -->
  <section class="contact" id="contact">
    <h1>Contact Us</h1>
    <p>Have something to share, advertise, or ask? We’d love to hear from you!</p>

    <div class="contact-container">
      <!-- Contact Form -->
      <form action="https://api.web3forms.com/submit" method="POST" class="contact-form">
		<input type="hidden" name="access_key" value="3449a264-fb8d-4efd-b2ca-487cb814ff04">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="message">Your Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Type your message here..." required></textarea>

        <button type="submit">Send Message</button>
      </form>

      <!-- Contact Info -->
      <div class="contact-info">
        <h3>Get in Touch</h3>
        <p><strong>Email:</strong> discover@nkomazi.co.za</p>
        <p><strong>Phone:</strong> +27 72 555 9999</p>
        <p><strong>Location:</strong> Nkomazi, Mpumalanga, South Africa</p>

        <div class="social-links">
          <a href="#"><img src="icons/Facebook .png" alt="Facebook"></a>
          <a href="#"><img src="icons/Instagram .jpg" alt="Instagram"></a>
          <a href="#"><img src="icons/whatsapp.jpg" alt="WhatsApp"></a>
        </div>
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
