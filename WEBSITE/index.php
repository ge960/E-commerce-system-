<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GM Store - Your Trusted Online Shopping in Tanzania</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Additional Home Page Styles */
        .hero-section {
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.8)), 
                        url('https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1770&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 120px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 2;
        }
        
        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease;
        }
        
        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
            animation: fadeInUp 1s ease 0.3s both;
        }
        
        .hero-highlight {
            background: rgba(231, 76, 60, 0.9);
            padding: 15px 30px;
            border-radius: 30px;
            display: inline-block;
            margin-bottom: 30px;
            animation: pulse 2s infinite;
        }
        
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        /* Features Section */
        .features-section {
            padding: 80px 0;
            background: #f8f9fa;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        
        .feature-card {
            background: white;
            padding: 40px 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        
        .feature-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #3498db, #2c3e50);
        }
        
        .feature-icon {
            font-size: 3rem;
            color: #3498db;
            margin-bottom: 25px;
        }
        
        .feature-card h3 {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #2c3e50;
        }
        
        /* Testimonials Section */
        .testimonials-section {
            padding: 100px 0;
            background: white;
        }
        
        .testimonial-slider {
            max-width: 900px;
            margin: 50px auto 0;
            position: relative;
        }
        
        .testimonial-card {
            background: #f8f9fa;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            text-align: center;
            display: none;
        }
        
        .testimonial-card.active {
            display: block;
            animation: fadeIn 0.5s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .testimonial-content {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 30px;
            font-style: italic;
            position: relative;
        }
        
        .testimonial-content:before,
        .testimonial-content:after {
            content: '"';
            font-size: 4rem;
            color: #3498db;
            opacity: 0.3;
            position: absolute;
        }
        
        .testimonial-content:before {
            top: -20px;
            left: -10px;
        }
        
        .testimonial-content:after {
            bottom: -40px;
            right: -10px;
        }
        
        .testimonial-author {
            margin-top: 30px;
        }
        
        .testimonial-author img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 4px solid #3498db;
        }
        
        .testimonial-author h4 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: #2c3e50;
        }
        
        .testimonial-author span {
            color: #666;
            font-size: 0.9rem;
        }
        
        .slider-controls {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
        }
        
        .slider-btn {
            width: 50px;
            height: 50px;
            border: 2px solid #3498db;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #3498db;
        }
        
        .slider-btn:hover {
            background: #3498db;
            color: white;
            transform: scale(1.1);
        }
        
        .slider-dots {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 30px;
        }
        
        .slider-dot {
            width: 12px;
            height: 12px;
            background: #ddd;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .slider-dot.active {
            background: #3498db;
            transform: scale(1.3);
        }
        
        /* Newsletter Section */
        .newsletter-section {
            background: linear-gradient(135deg, #3498db 0%, #2c3e50 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
        }
        
        .newsletter-content {
            max-width: 600px;
            margin: 0 auto;
        }
        
        .newsletter-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }
        
        .newsletter-content p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 40px;
        }
        
        .newsletter-form {
            display: flex;
            gap: 15px;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .newsletter-form input {
            flex: 1;
            padding: 15px 20px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
        }
        
        .newsletter-form input:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
        }
        
        /* Popular Products */
        .popular-products {
            padding: 80px 0;
            background: #f8f9fa;
        }
        
        .products-slider {
            position: relative;
            margin-top: 50px;
            overflow: hidden;
        }
        
        .products-container {
            display: flex;
            gap: 30px;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 20px 10px;
            scrollbar-width: none; /* Firefox */
        }
        
        .products-container::-webkit-scrollbar {
            display: none; /* Chrome, Safari, Opera */
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .hero-content p {
                font-size: 1.1rem;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
            
            .testimonial-card {
                padding: 30px 20px;
            }
        }
        
        /* Valentine's Special Box */
        .valentine-special {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
            color: white;
            padding: 50px;
            border-radius: 20px;
            margin: 40px auto;
            max-width: 1200px;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(231, 76, 60, 0.3);
        }
        
        .valentine-special:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.1)"/></svg>');
            background-size: cover;
        }
        
        .valentine-special h2 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }
        
        .valentine-special .discount {
            font-size: 5rem;
            font-weight: bold;
            margin: 20px 0;
            text-shadow: 3px 3px 0 rgba(0, 0, 0, 0.2);
            position: relative;
            z-index: 1;
            animation: bounce 2s infinite;
        }
        
        .valentine-special p {
            font-size: 1.3rem;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
            opacity: 0.9;
        }
        
        .valentine-hearts {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 0;
        }
        
        .valentine-heart {
            position: absolute;
            color: rgba(255, 255, 255, 0.3);
            font-size: 2rem;
            animation: float 6s infinite linear;
        }
        
        @keyframes float {
            0% {
                transform: translateY(100px) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
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
            
            <!-- Search Bar -->
            <div class="search-bar">
                <input type="text" id="searchInput" placeholder="Search products...">
                <button id="searchBtn"><i class="fas fa-search"></i></button>
            </div>
            
            <!-- Navigation -->
            <nav class="nav">
                <ul>
                    <li><a href="index.php" class="active"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="categories.php"><i class="fas fa-th"></i> Categories</a></li>
                    <li><a href="products.php"><i class="fas fa-box"></i> Products</a></li>
                    <li><a href="deals.php"><i class="fas fa-tag"></i> Deals</a></li>
                    <li><a href="faq.php"><i class="fas fa-question-circle"></i> FAQ</a></li>
                    <li><a href="my account .php"><i class="fas fa-user"></i> My Account</a></li>
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
                <div class="user-menu" id="userMenu" style="display: none;">
                    <span id="userName">User</span>
                    <div class="dropdown">
                        <a href="my account .php"><i class="fas fa-user"></i> My Account</a>
                        <a href="#" id="logoutBtn"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1>Welcome to GM Store</h1>
                <div class="hero-highlight">
                    <h2>Valentine's sale up to 50% off</h2>
                </div>
                <p>Your trusted online shopping destination in Tanzania</p>
                <p>Featuring quality products curated by <strong>General Maungu, James Sanga, and Elizabeth Kimweri</strong></p>
                <div style="margin-top: 40px;">
                    <a href="products.php" class="btn btn-primary btn-large">Shop Now</a>
                    <a href="deals.php" class="btn btn-outline btn-large" style="margin-left: 15px; color: white; border-color: white;">View Deals</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Valentine's Special Section -->
    <div class="container">
        <div class="valentine-special">
            <div class="valentine-hearts">
                <!-- Hearts will be added by JavaScript -->
            </div>
            <h2>Valentine's Special</h2>
            <div class="discount">50% OFF</div>
            <p>Celebrate love with incredible discounts on selected items</p>
            <p>Use code: <strong style="font-size: 1.5rem; background: white; color: #e74c3c; padding: 5px 15px; border-radius: 30px;">LOVE50</strong></p>
            <a href="deals.php" class="btn btn-primary btn-large" style="background: white; color: #e74c3c; border: none;">Shop Valentine's Collection</a>
        </div>
    </div>

    <!-- Featured Categories -->
    <section class="categories">
        <div class="container">
            <h2 class="section-title">Shop by Category</h2>
            <p class="section-subtitle" style="text-align: center; color: #666; margin-bottom: 50px; max-width: 600px; margin-left: auto; margin-right: auto;">
                Browse our wide range of categories and find exactly what you're looking for
            </p>
            <div class="category-grid">
                <a href="products.php?category=electronics" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Electronics</h3>
                    <p>Latest gadgets & devices</p>
                    <span class="category-count">45+ Products</span>
                </a>
                <a href="products.php?category=fashion" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3>Fashion</h3>
                    <p>Trendy clothing & accessories</p>
                    <span class="category-count">62+ Products</span>
                </a>
                <a href="products.php?category=home" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Home & Kitchen</h3>
                    <p>Appliances & essentials</p>
                    <span class="category-count">28+ Products</span>
                </a>
                <a href="products.php?category=beauty" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h3>Beauty & Health</h3>
                    <p>Cosmetics & wellness</p>
                    <span class="category-count">34+ Products</span>
                </a>
            </div>
            <div style="text-align: center; margin-top: 50px;">
                <a href="categories.php" class="btn btn-outline">View All Categories</a>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products">
        <div class="container">
            <h2 class="section-title">Featured Products</h2>
            <p class="section-subtitle" style="text-align: center; color: #666; margin-bottom: 50px; max-width: 600px; margin-left: auto; margin-right: auto;">
                Discover our handpicked selection of best-selling products
            </p>
            <div class="products-grid" id="featuredProducts">
                <!-- Products will be loaded via JavaScript -->
            </div>
            <div style="text-align: center; margin-top: 50px;">
                <a href="products.php" class="btn btn-primary">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title">Why Shop With GM Store?</h2>
            <p class="section-subtitle" style="text-align: center; color: #666; margin-bottom: 50px; max-width: 600px; margin-left: auto; margin-right: auto;">
                We're committed to providing the best shopping experience in Tanzania
            </p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <h3>Free Shipping</h3>
                    <p>Free delivery on orders above Tsh 200,000 across Tanzania</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Secure Payment</h3>
                    <p>100% secure payment with mobile money and card options</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Round-the-clock customer support via phone, email & chat</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-undo"></i>
                    </div>
                    <h3>Easy Returns</h3>
                    <p>7-day return policy for all products, no questions asked</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Special Offers -->
    <section class="special-offers">
        <div class="container">
            <h2 class="section-title">Today's Best Deals</h2>
            <div class="offer-banner">
                <div class="offer-content">
                    <h3>FLASH SALE</h3>
                    <p>Limited time offers ending soon!</p>
                    <div class="offer-timer">
                        <div class="timer-item">
                            <span class="timer-value">02</span>
                            <span class="timer-label">HOURS</span>
                        </div>
                        <div class="timer-item">
                            <span class="timer-value">45</span>
                            <span class="timer-label">MINUTES</span>
                        </div>
                        <div class="timer-item">
                            <span class="timer-value">30</span>
                            <span class="timer-label">SECONDS</span>
                        </div>
                    </div>
                    <a href="deals.php" class="btn btn-primary">View All Deals</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Products -->
    <section class="popular-products">
        <div class="container">
            <h2 class="section-title">Popular This Week</h2>
            <div class="products-slider">
                <div class="products-container" id="popularProducts">
                    <!-- Popular products will be loaded via JavaScript -->
                </div>
                <button class="slider-btn prev-btn" id="prevBtn">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="slider-btn next-btn" id="nextBtn">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title">What Our Customers Say</h2>
            <p class="section-subtitle" style="text-align: center; color: #666; margin-bottom: 50px; max-width: 600px; margin-left: auto; margin-right: auto;">
                Join thousands of satisfied customers across Tanzania
            </p>
            
            <div class="testimonial-slider">
                <div class="testimonial-card active">
                    <div class="testimonial-content">
                        I've been shopping with GM Store for over a year now, and I'm always impressed with their service. The products are genuine, delivery is prompt, and prices are unbeatable. Highly recommended!
                    </div>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Customer">
                        <h4>John Michael</h4>
                        <span>Dar es Salaam</span>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        The Valentine's sale was amazing! Got a beautiful handbag at 50% off. Elizabeth from customer service was very helpful. GM Store is my go-to for online shopping in Tanzania.
                    </div>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Customer">
                        <h4>Sarah Johnson</h4>
                        <span>Arusha</span>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        Ordered a laptop and it arrived in perfect condition within 2 days. James from the operations team ensured everything was smooth. Great work GM Store team!
                    </div>
                    <div class="testimonial-author">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&auto=format&fit=crop&w=100&q=80" alt="Customer">
                        <h4>David Wilson</h4>
                        <span>Mwanza</span>
                    </div>
                </div>
            </div>
            
            <div class="slider-controls">
                <button class="slider-btn" id="prevTestimonial">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="slider-btn" id="nextTestimonial">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
            
            <div class="slider-dots">
                <span class="slider-dot active" data-index="0"></span>
                <span class="slider-dot" data-index="1"></span>
                <span class="slider-dot" data-index="2"></span>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <h2>Stay Updated</h2>
                <p>Subscribe to our newsletter and be the first to know about new arrivals, exclusive deals, and special offers.</p>
                
                <form class="newsletter-form" id="newsletterForm">
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
                
                <p style="margin-top: 20px; font-size: 0.9rem; opacity: 0.7;">
                    By subscribing, you agree to our Privacy Policy
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="contact-info">
        <div class="container">
            <h2 class="section-title" style="margin-bottom: 50px;">Get in Touch</h2>
            <div class="contact-grid">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Location</h3>
                    <p>Ilala, Dar es Salaam, Tanzania</p>
                    <p>Visit our store</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <h3>Contact</h3>
                    <p>+255 763 537 102</p>
                    <p>Mon-Sun: 8:00 AM - 10:00 PM</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p>info@gmstore.co.tz</p>
                    <p>support@gmstore.co.tz</p>
                </div>
                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <h3>Business Hours</h3>
                    <p>Monday - Sunday</p>
                    <p>8:00 AM - 10:00 PM</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>GM Store</h3>
                    <p>Your trusted online shopping destination in Tanzania. Quality products at affordable prices.</p>
                    <p style="margin-top: 15px; font-style: italic;">
                        Founded by General Maungu, James Sanga & Elizabeth Kimweri
                    </p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="categories.php">Categories</a></li>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="deals.php">Deals</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Help</h3>
                    <ul>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="my account .php">My Account</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Returns & Refunds</a></li>
                        <li><a href="about.php">About Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Ilala, Dar es Salaam</p>
                    <p><i class="fas fa-phone"></i> +255 763 537 102</p>
                    <p><i class="fas fa-envelope"></i> support@gmstore.co.tz</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 GM Store. All rights reserved. | Designed by General Maungu, James Sanga & Elizabeth Kimweri</p>
            </div>
        </div>
    </footer>

    <!-- Cart Sidebar -->
    <div class="cart-sidebar" id="cartSidebar">
        <div class="cart-header">
            <h3>Shopping Cart</h3>
            <button class="close-cart" id="closeCart">&times;</button>
        </div>
        <div class="cart-items" id="cartItems">
            <!-- Cart items will be loaded here -->
        </div>
        <div class="cart-footer">
            <div class="cart-total">
                <span>Total:</span>
                <span id="cartTotal">Tsh 0</span>
            </div>
            <button class="btn btn-primary btn-block">Checkout</button>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="js/main.js"></script>
    <script>
        // Check login status
        function checkLoginStatus() {
            const token = localStorage.getItem('token');
            const userData = JSON.parse(localStorage.getItem('userData'));
            
            if (token && userData) {
                document.getElementById('authButtons').style.display = 'none';
                document.getElementById('userMenu').style.display = 'flex';
                document.getElementById('userName').textContent = userData.username || 'User';
            }
        }
        
        // Featured Products Data
        const featuredProducts = [
            {
                id: 1,
                name: 'Smartphone X Pro',
                price: 850000,
                originalPrice: 1000000,
                discount: 15,
                image: 'https://images.unsplash.com/photo-1598327105666-5b89351aff97?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                category: 'Electronics',
                rating: 4.5,
                reviews: 124
            },
            {
                id: 2,
                name: 'Laptop EliteBook Pro',
                price: 3200000,
                originalPrice: 3550000,
                discount: 10,
                image: 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                category: 'Electronics',
                rating: 4.8,
                reviews: 89
            },
            {
                id: 3,
                name: "Women's Leather Handbag",
                price: 120000,
                originalPrice: 160000,
                discount: 25,
                image: 'https://images.unsplash.com/photo-1584917865442-de89df76afd3?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                category: 'Fashion',
                rating: 4.7,
                reviews: 103
            },
            {
                id: 4,
                name: 'Running Shoes Air Cushion',
                price: 95000,
                originalPrice: 135000,
                discount: 30,
                image: 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                category: 'Sports',
                rating: 4.9,
                reviews: 212
            }
        ];
        
        // Popular Products Data
        const popularProducts = [
            {
                id: 5,
                name: 'Smart Watch',
                price: 280000,
                image: 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                category: 'Electronics'
            },
            {
                id: 6,
                name: 'Premium Perfume Set',
                price: 215000,
                image: 'https://images.unsplash.com/photo-1541643600914-78b084683601?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                category: 'Beauty'
            },
            {
                id: 7,
                name: 'Blender Master 1000W',
                price: 185000,
                image: 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                category: 'Home'
            },
            {
                id: 8,
                name: "Men's Formal Shirt",
                price: 45000,
                image: 'https://images.unsplash.com/photo-1596755094514-f87e34085b2c?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                category: 'Fashion'
            },
            {
                id: 9,
                name: 'Wireless Headphones',
                price: 150000,
                image: 'https://images.unsplash.com/photo-1484704849700-f032a568e944?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                category: 'Electronics'
            },
            {
                id: 10,
                name: 'Office Chair',
                price: 250000,
                image: 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80',
                category: 'Home'
            }
        ];
        
        // Load Featured Products
        function loadFeaturedProducts() {
            const featuredContainer = document.getElementById('featuredProducts');
            
            featuredContainer.innerphp = featuredProducts.map(product => `
                <div class="product-card">
                    <div class="product-image">
                        <img src="${product.image}" alt="${product.name}">
                        ${product.discount > 0 ? `<span class="discount-badge">${product.discount}% OFF</span>` : ''}
                        <button class="wishlist-btn" title="Add to Wishlist">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <span class="product-category">${product.category}</span>
                        <h3 class="product-name">${product.name}</h3>
                        <div class="product-rating">
                            ${Array.from({length: 5}, (_, i) => 
                                `<i class="fas fa-star${i < Math.floor(product.rating) ? '' : i < product.rating ? '-half-alt' : ''}"></i>`
                            ).join('')}
                            <span class="rating-count">(${product.reviews})</span>
                        </div>
                        <div class="product-price">
                            <span class="current-price">Tsh ${product.price.toLocaleString()}</span>
                            ${product.originalPrice > product.price ? 
                                `<span class="original-price">Tsh ${product.originalPrice.toLocaleString()}</span>` : ''}
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-outline quick-view" data-id="${product.id}">
                                <i class="fas fa-eye"></i>
                            </button>
                            <button class="btn btn-primary add-to-cart" data-id="${product.id}">
                                <i class="fas fa-cart-plus"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');
            
            // Add event listeners for add to cart buttons
            document.querySelectorAll('.add-to-cart').forEach(button => {
                button.addEventListener('click', function() {
                    const productId = parseInt(this.getAttribute('data-id'));
                    const product = featuredProducts.find(p => p.id === productId);
                    
                    if (product) {
                        addToCart(product);
                    }
                });
            });
        }
        
        // Load Popular Products
        function loadPopularProducts() {
            const popularContainer = document.getElementById('popularProducts');
            
            popularContainer.innerphp = popularProducts.map(product => `
                <div class="product-card" style="min-width: 280px;">
                    <div class="product-image">
                        <img src="${product.image}" alt="${product.name}">
                        <button class="wishlist-btn" title="Add to Wishlist">
                            <i class="far fa-heart"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <span class="product-category">${product.category}</span>
                        <h3 class="product-name">${product.name}</h3>
                        <div class="product-price">
                            <span class="current-price">Tsh ${product.price.toLocaleString()}</span>
                        </div>
                        <div class="product-actions">
                            <button class="btn btn-primary add-to-cart-popular" data-id="${product.id}">
                                <i class="fas fa-cart-plus"></i> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');
            
            // Add event listeners for popular products
            document.querySelectorAll('.add-to-cart-popular').forEach(button => {
                button.addEventListener('click', function() {
                    const productId = parseInt(this.getAttribute('data-id'));
                    const product = popularProducts.find(p => p.id === productId);
                    
                    if (product) {
                        addToCart(product);
                    }
                });
            });
        }
        
        // Add to Cart Function
        function addToCart(product) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            
            const existingItem = cart.find(item => item.id === product.id);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    id: product.id,
                    name: product.name,
                    price: product.price,
                    image: product.image,
                    quantity: 1
                });
            }
            
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            showNotification('Added to cart: ' + product.name);
        }
        
        // Update Cart Count
        function updateCartCount() {
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
            document.querySelector('.cart-count').textContent = totalItems;
        }
        
        // Show Notification
        function showNotification(message) {
            const notification = document.createElement('div');
            notification.className = 'notification';
            notification.textContent = message;
            notification.style.cssText = `
                position: fixed;
                top: 20px;
                right: 20px;
                background: #27ae60;
                color: white;
                padding: 15px 25px;
                border-radius: 8px;
                box-shadow: 0 5px 15px rgba(0,0,0,0.3);
                z-index: 1002;
                animation: slideIn 0.3s ease;
            `;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.animation = 'slideOut 0.3s ease';
                setTimeout(() => notification.remove(), 300);
            }, 3000);
        }
        
        // Testimonial Slider
        let currentTestimonial = 0;
        const testimonials = document.querySelectorAll('.testimonial-card');
        const dots = document.querySelectorAll('.slider-dot');
        
        function showTestimonial(index) {
            testimonials.forEach(card => card.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            testimonials[index].classList.add('active');
            dots[index].classList.add('active');
            currentTestimonial = index;
        }
        
        // Next testimonial
        document.getElementById('nextTestimonial').addEventListener('click', () => {
            let nextIndex = currentTestimonial + 1;
            if (nextIndex >= testimonials.length) nextIndex = 0;
            showTestimonial(nextIndex);
        });
        
        // Previous testimonial
        document.getElementById('prevTestimonial').addEventListener('click', () => {
            let prevIndex = currentTestimonial - 1;
            if (prevIndex < 0) prevIndex = testimonials.length - 1;
            showTestimonial(prevIndex);
        });
        
        // Dot click events
        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                const index = parseInt(this.getAttribute('data-index'));
                showTestimonial(index);
            });
        });
        
        // Auto slide testimonials
        setInterval(() => {
            let nextIndex = currentTestimonial + 1;
            if (nextIndex >= testimonials.length) nextIndex = 0;
            showTestimonial(nextIndex);
        }, 5000);
        
        // Popular Products Slider
        const popularContainer = document.getElementById('popularProducts');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        
        prevBtn.addEventListener('click', () => {
            popularContainer.scrollBy({
                left: -300,
                behavior: 'smooth'
            });
        });
        
        nextBtn.addEventListener('click', () => {
            popularContainer.scrollBy({
                left: 300,
                behavior: 'smooth'
            });
        });
        
        // Create floating hearts for Valentine's section
        function createHearts() {
            const heartsContainer = document.querySelector('.valentine-hearts');
            for (let i = 0; i < 20; i++) {
                const heart = document.createElement('i');
                heart.className = 'fas fa-heart valentine-heart';
                heart.style.left = `${Math.random() * 100}%`;
                heart.style.animationDelay = `${Math.random() * 5}s`;
                heart.style.fontSize = `${Math.random() * 20 + 15}px`;
                heartsContainer.appendChild(heart);
            }
        }
        
        // Newsletter Form
        document.getElementById('newsletterForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            if (email) {
                showNotification('Thank you for subscribing to our newsletter!');
                this.reset();
            }
        });
        
        // Search Functionality
        document.getElementById('searchBtn').addEventListener('click', () => {
            const query = document.getElementById('searchInput').value.trim();
            if (query) {
                window.location.href = `products.php?search=${encodeURIComponent(query)}`;
            }
        });
        
        document.getElementById('searchInput').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                document.getElementById('searchBtn').click();
            }
        });
        
        // Cart Sidebar Functionality
        document.getElementById('cartBtn').addEventListener('click', (e) => {
            e.preventDefault();
            document.getElementById('cartSidebar').classList.add('active');
            updateCartDisplay();
        });
        
        document.getElementById('closeCart').addEventListener('click', () => {
            document.getElementById('cartSidebar').classList.remove('active');
        });
        
        // Update Cart Display
        function updateCartDisplay() {
            const cartItems = document.getElementById('cartItems');
            const cartTotal = document.getElementById('cartTotal');
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            
            cartItems.innerphp = '';
            let total = 0;
            
            cart.forEach(item => {
                total += item.price * item.quantity;
                
                const itemElement = document.createElement('div');
                itemElement.className = 'cart-item';
                itemElement.innerphp = `
                    <div class="cart-item-image">
                        <img src="${item.image}" alt="${item.name}">
                    </div>
                    <div class="cart-item-details">
                        <div class="cart-item-name">${item.name}</div>
                        <div class="cart-item-price">Tsh ${item.price.toLocaleString()}</div>
                        <div class="cart-item-actions">
                            <button class="quantity-btn decrease" data-id="${item.id}">-</button>
                            <span class="quantity">${item.quantity}</span>
                            <button class="quantity-btn increase" data-id="${item.id}">+</button>
                            <button class="remove-item" data-id="${item.id}">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                `;
                cartItems.appendChild(itemElement);
            });
            
            cartTotal.textContent = `Tsh ${total.toLocaleString()}`;
            
            // Add event listeners to cart buttons
            document.querySelectorAll('.decrease').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const id = parseInt(e.target.dataset.id);
                    updateQuantity(id, -1);
                });
            });
            
            document.querySelectorAll('.increase').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const id = parseInt(e.target.dataset.id);
                    updateQuantity(id, 1);
                });
            });
            
            document.querySelectorAll('.remove-item').forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const id = parseInt(e.target.closest('button').dataset.id);
                    removeFromCart(id);
                });
            });
        }
        
        // Update Quantity
        function updateQuantity(productId, change) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            const item = cart.find(item => item.id === productId);
            
            if (item) {
                item.quantity += change;
                if (item.quantity <= 0) {
                    cart = cart.filter(item => item.id !== productId);
                }
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartCount();
                updateCartDisplay();
            }
        }
        
        // Remove from Cart
        function removeFromCart(productId) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart = cart.filter(item => item.id !== productId);
            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartCount();
            updateCartDisplay();
            showNotification('Product removed from cart');
        }
        
        // Timer for Flash Sale
        function updateFlashTimer() {
            const hours = document.querySelector('.timer-item:nth-child(1) .timer-value');
            const minutes = document.querySelector('.timer-item:nth-child(2) .timer-value');
            const seconds = document.querySelector('.timer-item:nth-child(3) .timer-value');
            
            let h = parseInt(hours.textContent);
            let m = parseInt(minutes.textContent);
            let s = parseInt(seconds.textContent);
            
            s--;
            
            if (s < 0) {
                s = 59;
                m--;
                if (m < 0) {
                    m = 59;
                    h--;
                    if (h < 0) {
                        h = 23;
                    }
                }
            }
            
            hours.textContent = h.toString().padStart(2, '0');
            minutes.textContent = m.toString().padStart(2, '0');
            seconds.textContent = s.toString().padStart(2, '0');
        }
        
        // Initialize everything when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            checkLoginStatus();
            updateCartCount();
            loadFeaturedProducts();
            loadPopularProducts();
            createHearts();
            
            // Start flash sale timer
            setInterval(updateFlashTimer, 1000);
            
            // Add animation styles
            const style = document.createElement('style');
            style.textContent = `
                @keyframes slideIn {
                    from { transform: translateX(100%); opacity: 0; }
                    to { transform: translateX(0); opacity: 1; }
                }
                @keyframes slideOut {
                    from { transform: translateX(0); opacity: 1; }
                    to { transform: translateX(100%); opacity: 0; }
                }
                
                /* Category Card Styles */
                .category-card {
                    background: white;
                    padding: 40px 20px;
                    border-radius: var(--border-radius);
                    text-align: center;
                    transition: var(--transition);
                    cursor: pointer;
                    text-decoration: none;
                    color: inherit;
                    display: block;
                }
                
                .category-card:hover {
                    transform: translateY(-10px);
                    box-shadow: var(--box-shadow);
                    background: var(--secondary-color);
                    color: white;
                }
                
                .category-card:hover .category-icon i {
                    color: white;
                }
                
                .category-card:hover .category-count {
                    background: rgba(255, 255, 255, 0.2);
                    color: white;
                }
                
                .category-icon i {
                    font-size: 3rem;
                    margin-bottom: 20px;
                    color: var(--secondary-color);
                    transition: var(--transition);
                }
                
                .category-card h3 {
                    font-size: 1.5rem;
                    margin-bottom: 10px;
                }
                
                .category-count {
                    background: #f0f0f0;
                    padding: 5px 15px;
                    border-radius: 20px;
                    font-size: 0.9rem;
                    display: inline-block;
                    margin-top: 15px;
                    transition: var(--transition);
                }
                
                /* Product Card Enhancements */
                .product-image {
                    position: relative;
                }
                
                .wishlist-btn {
                    position: absolute;
                    top: 15px;
                    right: 15px;
                    background: white;
                    border: none;
                    width: 40px;
                    height: 40px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    cursor: pointer;
                    transition: all 0.3s ease;
                    color: #666;
                }
                
                .wishlist-btn:hover {
                    background: var(--accent-color);
                    color: white;
                    transform: scale(1.1);
                }
                
                .quick-view {
                    padding: 8px 15px;
                }
                
                /* Offer Timer Styles */
                .offer-timer {
                    display: flex;
                    justify-content: center;
                    gap: 20px;
                    margin: 30px 0;
                }
                
                .timer-item {
                    background: rgba(255, 255, 255, 0.2);
                    padding: 15px;
                    border-radius: 10px;
                    text-align: center;
                    min-width: 80px;
                }
                
                .timer-value {
                    font-size: 2.5rem;
                    font-weight: bold;
                    display: block;
                    line-height: 1;
                }
                
                .timer-label {
                    font-size: 0.9rem;
                    opacity: 0.9;
                }
                
                /* Section Subtitle */
                .section-subtitle {
                    font-size: 1.1rem;
                    line-height: 1.6;
                }
            `;
            document.head.appendChild(style);
        });
    </script>
    <script src="js/cart.js"></script>
</body>
</html>