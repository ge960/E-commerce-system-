<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Categories - GM Store</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .categories-container{max-width:1100px;margin:40px auto;padding:0 20px}
    .categories-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:18px}
    .category-card{background:#fff;border-radius:10px;padding:18px;box-shadow:0 6px 18px rgba(0,0,0,.06)}
    .category-card h3{margin:0 0 8px;font-size:1.05rem}
    .category-card p{margin:0;color:#666;font-size:.95rem}
    .category-card a{display:inline-block;margin-top:12px;color:#3498db;text-decoration:none}
  </style>
</head>
<body>  <header>
    <nav style="display:flex;justify-content:space-between;align-items:center;padding:16px;background:#f7f7f7">
      <ul style="list-style:none;display:flex;gap:12px;margin:0;padding:0">
        <li><a href="index.php">Home</a></li>
        <li><a href="categories.php">Categories</a></li>
        <li><a href="products.php">Products</a></li>
        <li><a href="deals.php">Deals</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
      <a href="cart.php" style="font-size:1.3rem;color:#d35400">
        <i class="fas fa-shopping-cart"></i>
        <span class="cart-count" style="display:none;background:#e74c3c;color:white;border-radius:50%;width:20px;height:20px;font-size:0.8rem;align-items:center;justify-content:center;position:absolute;margin-left:-12px;margin-top:-8px">0</span>
      </a>
    </nav>
  </header>

  <main class="categories-container">
    <h1>Shop by Category</h1>
    <p style="color:#555">Browse popular categories to find products faster.</p>

    <section class="categories-grid" aria-label="Categories">
      <article class="category-card">
        <h3>Electronics</h3>
        <p>Phones, accessories, and consumer electronics.</p>
        <a href="products.php?category=electronics">View products →</a>
      </article>

      <article class="category-card">
        <h3>Fashion</h3>
        <p>Clothing, shoes and accessories for all genders.</p>
        <a href="products.php?category=fashion">View products →</a>
      </article>

      <article class="category-card">
        <h3>Home &amp; Kitchen</h3>
        <p>Appliances, cookware, and home essentials.</p>
        <a href="products.php?category=home-kitchen">View products →</a>
      </article>

      <article class="category-card">
        <h3>Beauty &amp; Health</h3>
        <p>Personal care, skincare and wellness products.</p>
        <a href="products.php?category=beauty-health">View products →</a>
      </article>

      <article class="category-card">
        <h3>Sports</h3>
        <p>Fitness equipment, apparel and outdoor gear.</p>
        <a href="products.php?category=sports">View products →</a>
      </article>

      <article class="category-card">
        <h3>Books &amp; Stationery</h3>
        <p>Books, notebooks and office supplies.</p>
        <a href="products.php?category=books-stationery">View products →</a>
      </article>

      <article class="category-card">
        <h3>Toys &amp; Games</h3>
        <p>Toys, puzzles and games for children and families.</p>
        <a href="products.php?category=toys-games">View products →</a>
      </article>
    </section>
  </main>

  <footer style="text-align:center;padding:30px;color:#777">
    &copy; 2026 GM Store
  </footer>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="js/cart.js"></script>
</body>
</html>
