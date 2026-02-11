<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart - GM Store</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .cart-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }

        .cart-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .cart-grid {
                grid-template-columns: 1fr;
            }
        }

        .cart-items {
            background: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
        }

        .cart-item {
            display: grid;
            grid-template-columns: 100px 1fr 80px 80px;
            gap: 15px;
            padding: 20px;
            border-bottom: 1px solid #e0e0e0;
            align-items: center;
            background: white;
            margin-bottom: 10px;
            border-radius: 5px;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item-image {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }

        .cart-item-details h3 {
            margin: 0 0 8px 0;
            font-size: 16px;
        }

        .cart-item-details p {
            margin: 0;
            color: #666;
            font-size: 14px;
        }

        .cart-item-quantity {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .cart-item-quantity input {
            width: 50px;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 3px;
            text-align: center;
        }

        .cart-item-price {
            font-size: 16px;
            font-weight: bold;
            color: #d35400;
            text-align: right;
        }

        .cart-item-remove {
            text-align: right;
        }

        .cart-item-remove button {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 3px;
            cursor: pointer;
            font-size: 14px;
        }

        .cart-item-remove button:hover {
            background: #c0392b;
        }

        .cart-summary {
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #eee;
        }

        .summary-row:last-child {
            border-bottom: none;
            font-size: 18px;
            font-weight: bold;
            color: #d35400;
            padding-top: 20px;
        }

        .checkout-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #d35400, #e67e22);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
            transition: all 0.3s ease;
        }

        .checkout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(211, 84, 0, 0.3);
        }

        .continue-shopping-btn {
            width: 100%;
            padding: 12px;
            background: #34495e;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            text-decoration: none;
            display: block;
            text-align: center;
        }

        .continue-shopping-btn:hover {
            background: #2c3e50;
        }

        .empty-cart {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-cart i {
            font-size: 80px;
            color: #bdc3c7;
            margin-bottom: 20px;
        }

        .empty-cart p {
            font-size: 18px;
            color: #7f8c8d;
            margin-bottom: 30px;
        }

        .promo-section {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .promo-input-group {
            display: flex;
            gap: 10px;
        }

        .promo-input-group input {
            flex: 1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        .promo-input-group button {
            padding: 10px 20px;
            background: #3498db;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .promo-input-group button:hover {
            background: #2980b9;
        }

        .order-summary {
            background: #ecf0f1;
            padding: 15px;
            border-radius: 5px;
            margin-top: 15px;
            font-size: 13px;
        }

        .breadcrumb {
            margin-bottom: 20px;
            color: #7f8c8d;
        }

        .breadcrumb a {
            color: #d35400;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <a href="index.php" class="nav-logo">
                <i class="fas fa-shopping-bag"></i> GM Store
            </a>
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="deals.php">Deals</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="about.php">About</a></li>
                <li class="dropdown">
                    <a href="#">More <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="my account .php?role=customer">My Account</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </li>
                <li>
                    <a href="cart.php" class="cart-link">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="cart-count" style="display:none;">0</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Cart Page -->
    <div class="cart-container">
        <div class="breadcrumb">
            <a href="index.php">Home</a> / <a href="products.php">Products</a> / Shopping Cart
        </div>

        <h1>Shopping Cart</h1>

        <div id="cart-content">
            <!-- Cart items will be loaded here by JavaScript -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>About GM Store</h3>
                <p>Your one-stop shop for quality products at unbeatable prices.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Info</h3>
                <p>Email: support@gmstore.com</p>
                <p>Phone: +255 123 456 789</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 GM Store. All rights reserved.</p>
        </div>
    </footer>

    <script src="js/cart.js"></script>
    <script>
        function renderCart() {
            const cartContent = document.getElementById('cart-content');
            const items = cart.getCart();

            if (items.length === 0) {
                cartContent.innerHTML = `
                    <div class="empty-cart">
                        <i class="fas fa-shopping-cart"></i>
                        <p>Your cart is empty</p>
                        <a href="products.php" class="continue-shopping-btn">Continue Shopping</a>
                    </div>
                `;
                return;
            }

            let cartHTML = `
                <div class="cart-grid">
                    <div class="cart-items">
            `;

            items.forEach(item => {
                const itemTotal = (item.price * item.quantity).toLocaleString('en-US', {minimumFractionDigits: 0, maximumFractionDigits: 0});
                cartHTML += `
                    <div class="cart-item">
                        <img src="${item.image}" alt="${item.title}" class="cart-item-image">
                        <div class="cart-item-details">
                            <h3>${item.title}</h3>
                            <p>Price: <strong>Tsh ${item.price.toLocaleString()}</strong></p>
                        </div>
                        <div class="cart-item-quantity">
                            <button onclick="updateItemQuantity('${item.productId}', ${item.quantity - 1})" style="background:#ecf0f1;border:none;width:30px;height:30px;cursor:pointer;border-radius:3px;">-</button>
                            <input type="number" value="${item.quantity}" min="1" onchange="updateItemQuantity('${item.productId}', this.value)">
                            <button onclick="updateItemQuantity('${item.productId}', ${item.quantity + 1})" style="background:#ecf0f1;border:none;width:30px;height:30px;cursor:pointer;border-radius:3px;">+</button>
                        </div>
                        <div class="cart-item-price">Tsh ${itemTotal}</div>
                        <div class="cart-item-remove">
                            <button onclick="removeFromCart('${item.productId}')"><i class="fas fa-trash"></i></button>
                        </div>
                    </div>
                `;
            });

            const subtotal = cart.getTotalPrice();
            const tax = subtotal * 0.18; // 18% VAT
            const shipping = subtotal > 500000 ? 0 : 15000;
            const total = subtotal + tax + shipping;

            cartHTML += `
                    </div>
                    <div class="cart-summary">
                        <h2>Order Summary</h2>
                        <div class="summary-row">
                            <span>Subtotal:</span>
                            <span>Tsh ${subtotal.toLocaleString('en-US', {minimumFractionDigits: 0})}</span>
                        </div>
                        <div class="summary-row">
                            <span>Tax (18%):</span>
                            <span>Tsh ${tax.toLocaleString('en-US', {minimumFractionDigits: 0})}</span>
                        </div>
                        <div class="summary-row">
                            <span>Shipping:</span>
                            <span>${shipping === 0 ? 'FREE' : 'Tsh ' + shipping.toLocaleString()}</span>
                        </div>
                        <div class="summary-row">
                            <span>Total:</span>
                            <span>Tsh ${total.toLocaleString('en-US', {minimumFractionDigits: 0})}</span>
                        </div>

                        <div class="promo-section">
                            <p><strong>Have a promo code?</strong></p>
                            <div class="promo-input-group">
                                <input type="text" placeholder="Enter promo code" id="promo-code">
                                <button onclick="applyPromo()">Apply</button>
                            </div>
                        </div>

                        <button class="checkout-btn" onclick="proceedToCheckout()">Proceed to Checkout</button>
                        <a href="products.php" class="continue-shopping-btn">Continue Shopping</a>
                    </div>
                </div>
            `;

            cartContent.innerHTML = cartHTML;
        }

        function removeFromCart(productId) {
            if (confirm('Remove this item from cart?')) {
                cart.removeItem(productId);
                renderCart();
            }
        }

        function updateItemQuantity(productId, quantity) {
            cart.updateQuantity(productId, quantity);
            renderCart();
        }

        function applyPromo() {
            const code = document.getElementById('promo-code').value.toUpperCase();
            const promoCodes = {
                'SAVE10': 0.10,
                'SAVE20': 0.20,
                'WELCOME': 0.15
            };

            if (promoCodes[code]) {
                alert(`Promo code "${code}" applied! ${promoCodes[code] * 100}% discount`);
            } else {
                alert('Invalid promo code');
            }
        }

        function proceedToCheckout() {
            alert('Checkout feature coming soon! Order would be: Tsh ' + cart.getTotalPrice().toLocaleString());
            // In a real implementation, this would redirect to a checkout page with payment processing
        }

        // Load cart on page load
        document.addEventListener('DOMContentLoaded', function() {
            renderCart();
        });
    </script>
</body>
</html>
