<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>FAQ - GM Store</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    .faq-container{max-width:900px;margin:40px auto;padding:0 20px}
    .faq-item{background:#fff;border-radius:8px;padding:18px;margin-bottom:12px;box-shadow:0 6px 16px rgba(0,0,0,.05)}
    .faq-question{font-weight:600;margin:0 0 8px}
    .faq-answer{margin:0;color:#555}
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

  <main class="faq-container">
    <h1>Frequently Asked Questions</h1>

    <div class="faq-item">
      <div class="faq-question">How do I place an order?</div>
      <div class="faq-answer">Browse products, add to cart, and follow checkout steps to place your order.</div>
    </div>

    <div class="faq-item">
      <div class="faq-question">What payment methods do you accept?</div>
      <div class="faq-answer">We accept mobile money, card payments, and cash on delivery where available.</div>
    </div>

    <div class="faq-item">
      <div class="faq-question">How do I track my order?</div>
      <div class="faq-answer">After placing an order you'll receive tracking info via email or in your account page.</div>
    </div>

    <div class="faq-item">
      <div class="faq-question">What is your return policy?</div>
      <div class="faq-answer">Returns are accepted within 7 days for eligible products. Contact support to initiate a return.</div>
    </div>

  </main>

  <footer style="text-align:center;padding:28px;color:#777">&copy; 2026 GM Store</footer>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="js/cart.js"></script>
</body>
</html>
