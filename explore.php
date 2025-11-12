<?php
	include 'db_connect.php';
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Explore Nkomazi</title>
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
              <a href="businesses.html" class="menu-link">
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
              <a href="explore.php" class="menu-link active">
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

  <!-- ===== EXPLORE SECTION ===== -->
  <section class="explore-section">
    <h2>🌄 Explore the Beauty of Nkomazi</h2>
    <p>Discover places to visit, relax, and learn about our beautiful culture.</p>

    <!-- Search -->
    <div class="explore-search">
      <input type="text" id="exploreSearchInput" placeholder="Search for a place or activity...">
      <button id="exploreSearchBtn">Search</button>
    </div>

    <!-- Explore cards -->
    <div class="explore-list">
      <div class="explore-card">
        <img src="images/kruger-gate.jpg" alt="Kruger National Park">
        <h3>Kruger National Park - Malelane Gate</h3>
        <p><strong>Location:</strong> Malelane</p>
        <p>One of Africa’s largest game reserves, home to the Big Five and stunning landscapes.</p>
        <a href="https://www.sanparks.org/parks/kruger/" target="_blank" class="explore-btn">Learn More</a>
      </div>

      <div class="explore-card">
        <img src="images/komati-river.jpg" alt="Komati River">
        <h3>Komati River Viewpoint</h3>
        <p><strong>Location:</strong> Komatipoort</p>
        <p>Enjoy scenic views, picnics, and fishing along the beautiful Komati River.</p>
        <a href="#" class="explore-btn">Learn More</a>
      </div>

      <div class="explore-card">
        <img src="images/Boat-cruise.jpg" alt="Sibongile Arts Centre">
        <h3>Driekoppies Dam Boat Cruise</h3>
        <p><strong>Location:</strong> Jeppies Reef</p>
        <p>Local artists display handmade crafts and cultural artworks that reflect Nkomazi’s heritage.</p>
        <a href="#" class="explore-btn">Learn More</a>
      </div>
    </div>
  </section>
  </div>

  <!-- ===== FOOTER ===== -->
  <footer>
    <p>© 2025 Discover Nkomazi | Designed by Aubrey Mngomezulu</p>
    <div class="socials">
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-whatsapp"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
  </footer>
  
  <script>
    document.getElementById('exploreSearchInput').addEventListener('keyup', function() {
      const filter = this.value.toLowerCase();
      const cards = document.querySelectorAll('.explore-card');

      cards.forEach(card => {
        const text = card.textContent.toLowerCase();
        card.style.display = text.includes(filter) ? '' : 'none';
      });
    });
  </script>

  <script src="script.js"></script>
</body>
</html>
