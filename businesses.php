<?php
	include 'db_connect.php';
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nkomazi Business Directory</title>
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
              <a href="businesses.php" class="menu-link active">
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

  <!-- ===== BUSINESS SECTION ===== -->
  <section class="business-section">
    <h2>🏢 Local Businesses in Nkomazi</h2>
    <p>Find services, shops, and entrepreneurs near you.</p>

    <!-- Business search -->
    <div class="business-search">
      <input type="text" id="businessSearchInput" placeholder="Search businesses...">
      <button id="businessSearchBtn">Search</button>
    </div>

    <!-- Business cards -->
    <div class="business-list">
	<?php
    $sql = "SELECT * FROM businesses ORDER BY created_at DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "
        <div class='business-card'>
          <h3>{$row['name']}</h3>
          <p><strong>Category:</strong> {$row['category']}</p>
		  <p><strong>Location:</strong> {$row['location']}</p>
		  <p>{$row['description']}</p>
		  <p><strong>Contact:</strong> {$row['contact']}</p>
		  <a href='#' target='_blank' class='contact-btn'><i class='fab fa-whatsapp'></i> Whatsapp</a>
        </div>
        ";
      }
    } else {
      echo "<p style='text-align:center; color:#777;'>No job opportunities available right now.</p>";
    }
  ?>
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
    document.getElementById('businessSearchInput').addEventListener('keyup', function() {
      const filter = this.value.toLowerCase();
      const cards = document.querySelectorAll('.business-card');

      cards.forEach(card => {
        const text = card.textContent.toLowerCase();
        card.style.display = text.includes(filter) ? '' : 'none';
      });
    });
  </script>

  <script src="script.js"></script>
</body>
</html>
