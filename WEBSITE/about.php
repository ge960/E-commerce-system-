<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>About - GM Store</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .about-container{max-width:900px;margin:40px auto;padding:0 20px}
    .about-hero{background:#fff;padding:24px;border-radius:10px;box-shadow:0 8px 20px rgba(0,0,0,.05)}
    .about-section{margin-top:18px;color:#555}
  </style>
</head>
<body>
  <header style="background:#f7f7f7;padding:14px 20px">
    <nav style="max-width:1100px;margin:0 auto;display:flex;gap:14px;align-items:center">
      <a href="index.php" style="font-weight:700;color:#333;text-decoration:none">GM Store</a>
      <div style="margin-left:24px;display:flex;gap:12px">
        <a href="index.php">Home</a>
        <a href="categories.php">Categories</a>
        <a href="products.php">Products</a>
        <a href="deals.php">Deals</a>
        <a href="faq.php">FAQ</a>
        <a href="about.php">About</a>
      </div>
      <div style="margin-left:auto;display:flex;gap:14px;align-items:center">
        <a href="login.php">Login</a>
        <a href="cart.php" style="font-size:1.3rem;color:#d35400;position:relative">
          <i class="fas fa-shopping-cart"></i>
          <span class="cart-count" style="display:none;background:#e74c3c;color:white;border-radius:50%;width:18px;height:18px;font-size:0.75rem;align-items:center;justify-content:center;position:absolute;right:-8px;top:-8px">0</span>
        </a>
      </div>
    </nav>
  </header>

  <main class="about-container">
    <div class="about-hero">
      <h1>About GM Store</h1>
      <p style="color:#666">GM Store is a local online marketplace dedicated to bringing quality products to Tanzania at competitive prices. We focus on excellent customer service, fast shipping, and a trustworthy shopping experience.</p>
    </div>

    <section class="about-section">
      <h2>Our Mission</h2>
      <p>To make shopping simple and enjoyable for everyone by offering a wide selection of products and reliable service.</p>

      <h2>Our Team</h2>
      <p>We are a small team of dedicated professionals based in Dar es Salaam committed to serving our customers.</p>

      <h2>Contact</h2>
      <p>Email: support@gmstore.com — Phone: +255 763 537 102</p>
    </section>
  </main>

  <footer style="text-align:center;padding:28px;color:#777">&copy; 2026 GM Store</footer>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="js/cart.js"></script>
</body>
</html>
