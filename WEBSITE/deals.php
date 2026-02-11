<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deals & Offers - GM Store</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Deals Specific Styles */
        .deals-header {
            background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .deals-header:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.1)"/></svg>');
            background-size: cover;
        }
        
        .deals-header h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
            animation: bounce 1s ease;
        }
        
        .deals-header p {
            font-size: 1.3rem;
            max-width: 600px;
            margin: 0 auto 30px;
            opacity: 0.9;
            position: relative;
            z-index: 1;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
            40% {transform: translateY(-20px);}
            60% {transform: translateY(-10px);}
        }
        
        .deals-countdown {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            display: inline-block;
            margin-top: 30px;
            position: relative;
            z-index: 1;
        }
        
        .countdown-title {
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        
        .countdown-timer {
            display: flex;
            gap: 20px;
            justify-content: center;
        }
        
        .countdown-item {
            text-align: center;
            background: white;
            color: #e74c3c;
            padding: 15px;
            border-radius: 10px;
            min-width: 80px;
        }
        
        .countdown-value {
            font-size: 2rem;
            font-weight: bold;
            line-height: 1;
        }
        
        .countdown-label {
            font-size: 0.9rem;
            margin-top: 5px;
        }
        
        /* Deals Grid */
        .deals-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
            max-width: 1400px;
            margin: 60px auto;
            padding: 0 20px;
        }
        
        .deal-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .deal-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }
        
        .deal-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: #e74c3c;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-weight: bold;
            font-size: 0.9rem;
            z-index: 2;
        }
        
        .deal-image {
            height: 220px;
            position: relative;
            overflow: hidden;
        }
        
        .deal-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .deal-card:hover .deal-image img {
            transform: scale(1.1);
        }
        
        .deal-content {
            padding: 25px;
        }
        
        .deal-category {
            color: #3498db;
            font-size: 0.9rem;
            margin-bottom: 8px;
            display: block;
        }
        
        .deal-title {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: #2c3e50;
            line-height: 1.4;
        }
        
        .deal-price {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 20px;
        }
        
        .deal-current-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #e74c3c;
        }
        
        .deal-original-price {
            text-decoration: line-through;
            color: #999;
            font-size: 1.1rem;
        }
        
        .deal-discount {
            background: #27ae60;
            color: white;
            padding: 4px 10px;
            border-radius: 4px;
            font-size: 0.9rem;
            font-weight: bold;
        }
        
        .deal-stats {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
            color: #666;
            font-size: 0.9rem;
        }
        
        .deal-progress {
            margin-bottom: 25px;
        }
        
        .deal-progress-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: #666;
        }
        
        .progress-bar {
            height: 8px;
            background: #f0f0f0;
            border-radius: 4px;
            overflow: hidden;
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #e74c3c, #f39c12);
            border-radius: 4px;
            transition: width 1s ease;
        }
        
        .deal-actions {
            display: flex;
            gap: 10px;
        }
        
        .btn-deal {
            flex: 1;
            padding: 12px;
            text-align: center;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-deal-primary {
            background: #e74c3c;
            color: white;
        }
        
        .btn-deal-primary:hover {
            background: #c0392b;
            transform: translateY(-2px);
        }
        
        .btn-deal-outline {
            border: 2px solid #e74c3c;
            color: #e74c3c;
            background: white;
        }
        
        .btn-deal-outline:hover {
            background: #e74c3c;
            color: white;
        }
        
        /* Valentine's Special Section */
        .valentine-section {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
            color: white;
            padding: 80px 0;
            margin: 60px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .valentine-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.1)"/></svg>');
            background-size: cover;
        }
        
        .valentine-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }
        
        .valentine-content h2 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        
        .valentine-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }
        
        .valentine-code {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            padding: 20px;
            border-radius: 15px;
            display: inline-block;
            margin: 30px 0;
        }
        
        .valentine-code h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        
        .coupon-code {
            font-size: 2rem;
            font-weight: bold;
            background: white;
            color: #e74c3c;
            padding: 15px 30px;
            border-radius: 10px;
            display: inline-block;
            margin: 10px 0;
            letter-spacing: 3px;
        }
        
        /* Flash Sales */
        .flash-sales {
            padding: 60px 0;
            background: #f8f9fa;
        }
        
        .flash-header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .flash-header h2 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        
        .flash-timer {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        
        .flash-timer-item {
            background: #e74c3c;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
        }
        
        .flash-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .flash-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .flash-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .flash-image {
            height: 180px;
            background: #f0f0f0;
            position: relative;
            overflow: hidden;
        }
        
        .flash-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .flash-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: #e74c3c;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 0.8rem;
            font-weight: bold;
        }
        
        .flash-info {
            padding: 15px;
        }
        
        .flash-price {
            font-size: 1.2rem;
            font-weight: bold;
            color: #e74c3c;
            margin-bottom: 10px;
        }
        
        .flash-sold {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
            font-size: 0.9rem;
            color: #666;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .deals-header h1 {
                font-size: 2.5rem;
            }
            
            .deals-grid {
                grid-template-columns: 1fr;
            }
            
            .countdown-timer {
                flex-wrap: wrap;
            }
            
            .valentine-content h2 {
                font-size: 2.2rem;
            }
            
            .coupon-code {
                font-size: 1.5rem;
                padding: 10px 20px;
            }
            
            .flash-grid {
                grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            }
        }
    </style>
</head>
<body>
    <!-- Valentine's Sale Banner -->
    <div class="sale-banner">
        <div class="sale-content">
            <i class="fas fa-heart"></i>
            <span>Valentine's sale up to 50% off</span>
            <i class="fas fa-heart"></i>
        </div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <h1><i class="fas fa-store"></i> GM Store</h1>
            </div>
            
            <!-- Navigation -->
            <nav class="nav">
                <ul>
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="categories.php"><i class="fas fa-th"></i> Categories</a></li>
                    <li><a href="products.php"><i class="fas fa-box"></i> Products</a></li>
                    <li><a href="deals.php" class="active"><i class="fas fa-tag"></i> Deals</a></li>
                    <li><a href="faq.php"><i class="fas fa-question-circle"></i> FAQ</a></li>
                    <li><a href="about.php"><i class="fas fa-info-circle"></i> About</a></li>
                </ul>
            </nav>
            
            <!-- User Actions -->
            <div class="user-actions">
                <a href="cart.php" id="cartBtn" class="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count" style="display:none;">0</span>
                </a>
                <div class="auth-buttons" id="authButtons">
                    <a href="login.php" class="btn btn-outline">Login</a>
                    <a href="register.php" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Deals Header -->
    <section class="deals-header">
        <div class="container">
            <h1>Exclusive Deals & Offers</h1>
            <p>Don't miss out on our limited-time offers and special discounts. Shop now and save big!</p>
            
            <div class="deals-countdown">
                <div class="countdown-title">Deals End In:</div>
                <div class="countdown-timer">
                    <div class="countdown-item">
                        <div class="countdown-value" id="days">05</div>
                        <div class="countdown-label">Days</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-value" id="hours">12</div>
                        <div class="countdown-label">Hours</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-value" id="minutes">45</div>
                        <div class="countdown-label">Minutes</div>
                    </div>
                    <div class="countdown-item">
                        <div class="countdown-value" id="seconds">30</div>
                        <div class="countdown-label">Seconds</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Valentine's Special Section -->
    <section class="valentine-section">
        <div class="valentine-content">
            <h2>Valentine's Special Sale</h2>
            <p>Celebrate love with incredible discounts up to 50% off on selected items. Perfect gifts for your loved ones!</p>
            
            <div class="valentine-code">
                <h3>Use Coupon Code:</h3>
                <div class="coupon-code">LOVE50</div>
                <p>Get 50% off on Valentine's collection</p>
                <p>Valid until February 14, 2024</p>
            </div>
            
            <a href="#valentine-deals" class="btn btn-primary btn-large">Shop Valentine's Deals</a>
        </div>
    </section>

    <!-- Featured Deals -->
    <section class="deals-featured">
        <div class="container">
            <h2 class="section-title">Featured Deals</h2>
            <div class="deals-grid">
                <!-- Deal 1 -->
                <div class="deal-card">
                    <div class="deal-badge">Limited Time</div>
                    <div class="deal-image">
                        <img src="https://images.unsplash.com/photo-1592286927505-1def25115558?w=400&h=300&fit=crop" alt="Smartphone X Pro">
                    </div>
                    <div class="deal-content">
                        <span class="deal-category">Electronics</span>
                        <h3 class="deal-title">Smartphone X Pro 128GB - Valentine's Edition</h3>
                        <div class="deal-price">
                            <span class="deal-current-price">Tsh 850,000</span>
                            <span class="deal-original-price">Tsh 1,000,000</span>
                            <span class="deal-discount">15% OFF</span>
                        </div>
                        <div class="deal-stats">
                            <span><i class="fas fa-star"></i> 4.5 (124 reviews)</span>
                            <span><i class="fas fa-shopping-cart"></i> 42 sold</span>
                        </div>
                        <div class="deal-progress">
                            <div class="deal-progress-info">
                                <span>Sold: 42/100</span>
                                <span>42%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 42%"></div>
                            </div>
                        </div>
                        <div class="deal-actions">
                            <a href="#" class="btn-deal btn-deal-primary add-to-cart" data-id="1">Add to Cart</a>
                            <a href="#" class="btn-deal btn-deal-outline">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Deal 2 -->
                <div class="deal-card">
                    <div class="deal-badge">Hot Deal</div>
                    <div class="deal-image">
                        <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=400&h=300&fit=crop" alt="Women's Handbag">
                    </div>
                    <div class="deal-content">
                        <span class="deal-category">Fashion</span>
                        <h3 class="deal-title">Women's Leather Handbag - Valentine's Special</h3>
                        <div class="deal-price">
                            <span class="deal-current-price">Tsh 120,000</span>
                            <span class="deal-original-price">Tsh 160,000</span>
                            <span class="deal-discount">25% OFF</span>
                        </div>
                        <div class="deal-stats">
                            <span><i class="fas fa-star"></i> 4.7 (103 reviews)</span>
                            <span><i class="fas fa-shopping-cart"></i> 68 sold</span>
                        </div>
                        <div class="deal-progress">
                            <div class="deal-progress-info">
                                <span>Sold: 68/150</span>
                                <span>45%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 45%"></div>
                            </div>
                        </div>
                        <div class="deal-actions">
                        </div>
                    </div>
                </div>

                <!-- Deal 3 -->
                <div class="deal-card">
                    <div class="deal-badge">-30%</div>
                    <div class="deal-image">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=300&fit=crop" alt="Smartwatch">
                    </div>
                    <div class="deal-content">
                        <span class="deal-category">Electronics</span>
                        <h3 class="deal-title">Premium Smartwatch - Tech Deal</h3>
                        <div class="deal-price">
                            <span class="deal-current-price">Tsh 89,000</span>
                            <span class="deal-original-price">Tsh 128,000</span>
                            <span class="deal-discount">30% OFF</span>
                        </div>
                        <div class="deal-stats">
                            <span><i class="fas fa-star"></i> 4.6 (89 reviews)</span>
                            <span><i class="fas fa-shopping-cart"></i> 156 sold</span>
                        </div>
                        <div class="deal-progress">
                            <div class="deal-progress-info">
                                <span>Sold: 156/200</span>
                                <span>78%</span>
                            </div>
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 78%"></div>
                            </div>
                        </div>
                        <div class="deal-actions">
                            <a href="#" class="btn-deal btn-deal-primary add-to-cart" data-id="5">Add to Cart</a>
                            <a href="#" class="btn-deal btn-deal-outline">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer style="background:#2c3e50;color:#fff;padding:40px 0;margin-top:60px;">
        <div style="max-width:1200px;margin:0 auto;padding:0 20px;display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:30px;">
            <div>
                <h3>About GM Store</h3>
                <p>Your trusted online shopping destination in Tanzania.</p>
            </div>
            <div>
                <h3>Quick Links</h3>
                <ul style="list-style:none;padding:0">
                    <li><a href="index.php" style="color:#bdc3c7;text-decoration:none">Home</a></li>
                    <li><a href="products.php" style="color:#bdc3c7;text-decoration:none">Products</a></li>
                    <li><a href="deals.php" style="color:#bdc3c7;text-decoration:none">Deals</a></li>
                </ul>
            </div>
            <div>
                <h3>Contact</h3>
                <p style="color:#bdc3c7">Phone: +255 763 537 102<br>Email: support@gmstore.com</p>
            </div>
        </div>
        <div style="text-align:center;padding-top:20px;border-top:1px solid #444;margin-top:20px;color:#bdc3c7">
            &copy; 2026 GM Store. All rights reserved.
        </div>
    </footer>
    <script src="js/cart.js"></script>
</body>
</html>