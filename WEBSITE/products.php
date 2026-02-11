<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - GM Store</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Products Specific Styles */
        .products-header {
            background: linear-gradient(rgba(44, 62, 80, 0.9), rgba(44, 62, 80, 0.9));
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        
        .products-header h1 {
            font-size: 2.8rem;
            margin-bottom: 15px;
        }
        
        .products-header p {
            font-size: 1.1rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }
        
        .products-container {
            display: flex;
            max-width: 1400px;
            margin: 40px auto;
            padding: 0 20px;
            gap: 30px;
        }
        
        /* Sidebar Styles */
        .products-sidebar {
            width: 280px;
            flex-shrink: 0;
        }
        
        .sidebar-widget {
            background: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 25px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .sidebar-widget h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #2c3e50;
            padding-bottom: 10px;
            border-bottom: 2px solid #3498db;
        }
        
        .category-list {
            list-style: none;
        }
        
        .category-list li {
            margin-bottom: 12px;
        }
        
        .category-list a {
            color: #555;
            text-decoration: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px 0;
            transition: all 0.3s ease;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .category-list a:hover {
            color: #3498db;
            padding-left: 10px;
        }
        
        .category-list .count {
            background: #f0f0f0;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 0.85rem;
        }
        
        .price-filter {
            margin-top: 20px;
        }
        
        .price-range {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        
        .price-inputs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .price-inputs input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-align: center;
        }
        
        .filter-slider {
            height: 5px;
            background: #ddd;
            border-radius: 5px;
            position: relative;
            margin: 25px 0;
        }
        
        .filter-slider .progress {
            height: 100%;
            background: #3498db;
            border-radius: 5px;
            position: absolute;
        }
        
        .range-input {
            position: relative;
        }
        
        .range-input input {
            position: absolute;
            top: -5px;
            height: 5px;
            width: 100%;
            background: none;
            pointer-events: none;
            -webkit-appearance: none;
        }
        
        input[type="range"]::-webkit-slider-thumb {
            height: 17px;
            width: 17px;
            background: #3498db;
            border-radius: 50%;
            pointer-events: auto;
            -webkit-appearance: none;
        }
        
        .rating-filter .star-rating {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 10px;
        }
        
        .star-rating input[type="checkbox"] {
            margin-right: 10px;
        }
        
        .filter-btn-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .filter-btn-group button {
            padding: 10px;
            border: 2px solid #3498db;
            background: white;
            color: #3498db;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .filter-btn-group button:hover,
        .filter-btn-group button.active {
            background: #3498db;
            color: white;
        }
        
        /* Products Grid Styles */
        .products-main {
            flex: 1;
        }
        
        .products-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .products-count {
            color: #666;
        }
        
        .sort-options select {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background: white;
            color: #333;
        }
        
        .view-options {
            display: flex;
            gap: 10px;
        }
        
        .view-btn {
            width: 40px;
            height: 40px;
            border: 1px solid #ddd;
            background: white;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .view-btn.active,
        .view-btn:hover {
            background: #3498db;
            color: white;
            border-color: #3498db;
        }
        
        .products-grid-large {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .product-card-detailed {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
        }
        
        .product-card-detailed:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #e74c3c;
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 0.8rem;
            font-weight: bold;
            z-index: 1;
        }
        
        .product-image-detailed {
            height: 220px;
            background: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .product-image-detailed img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .product-info-detailed {
            padding: 20px;
        }
        
        .product-category {
            color: #3498db;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }
        
        .product-title {
            font-size: 1.1rem;
            margin-bottom: 10px;
            color: #2c3e50;
            line-height: 1.4;
        }
        
        .product-rating {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 10px;
            color: #f39c12;
        }
        
        .rating-count {
            color: #666;
            font-size: 0.9rem;
            margin-left: 5px;
        }
        
        .product-price-detailed {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 15px 0;
        }
        
        .current-price-detailed {
            font-size: 1.3rem;
            font-weight: bold;
            color: #e74c3c;
        }
        
        .original-price-detailed {
            text-decoration: line-through;
            color: #999;
        }
        
        .discount-percent {
            background: #27ae60;
            color: white;
            padding: 2px 8px;
            border-radius: 3px;
            font-size: 0.8rem;
        }
        
        .product-stock {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 10px 0;
            color: #666;
            font-size: 0.9rem;
        }
        
        .stock-available {
            color: #27ae60;
        }
        
        .stock-low {
            color: #f39c12;
        }
        
        .stock-out {
            color: #e74c3c;
        }
        
        .product-actions-detailed {
            display: flex;
            gap: 10px;
            margin-top: 20px;
        }
        
        .btn-icon {
            padding: 8px;
            border: 1px solid #ddd;
            background: white;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-icon:hover {
            background: #3498db;
            color: white;
            border-color: #3498db;
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 50px;
        }
        
        .pagination a, .pagination span {
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            color: #333;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        .pagination a:hover,
        .pagination .active {
            background: #3498db;
            color: white;
            border-color: #3498db;
        }
        
        @media (max-width: 992px) {
            .products-container {
                flex-direction: column;
            }
            
            .products-sidebar {
                width: 100%;
            }
            
            .products-grid-large {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .products-controls {
                flex-direction: column;
                gap: 20px;
                align-items: flex-start;
            }
            
            .products-grid-large {
                grid-template-columns: 1fr;
            }
            
            .pagination {
                flex-wrap: wrap;
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
                    <li><a href="products.php" class="active"><i class="fas fa-box"></i> Products</a></li>
                    <li><a href="deals.php"><i class="fas fa-tag"></i> Deals</a></li>
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

    <!-- Products Header -->
    <section class="products-header">
        <div class="container">
            <h1>All Products</h1>
            <p>Browse our complete collection of quality products at the best prices in Tanzania</p>
        </div>
    </section>
    <!-- Featured Images -->
    <section style="padding:24px 0;background:#fff;border-bottom:1px solid #f0f0f0">
        <div class="container" style="max-width:1100px;margin:0 auto;padding:0 20px">
            <h2 style="margin:0 0 12px">Featured Products</h2>
            <p style="margin:0 0 18px;color:#666">Hand-picked items and popular picks.</p>
            <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:14px">
                <div style="background:#f8f9fa;border-radius:8px;overflow:hidden;text-align:center;padding:8px">
                    <img src="https://images.unsplash.com/photo-1592286927505-1def25115558?w=420&h=280&fit=crop" alt="Smartphone X" style="width:100%;height:140px;object-fit:cover">
                    <div style="padding:8px"><strong>Smartphone X</strong><div style="color:#777;font-size:0.9rem">Tsh 850,000</div></div>
                </div>
                <div style="background:#f8f9fa;border-radius:8px;overflow:hidden;text-align:center;padding:8px">
                    <img src="https://images.unsplash.com/photo-1515378791036-0648a3ad77b0?w=420&h=280&fit=crop" alt="Laptop Pro" style="width:100%;height:140px;object-fit:cover">
                    <div style="padding:8px"><strong>Laptop Pro</strong><div style="color:#777;font-size:0.9rem">Tsh 2,500,000</div></div>
                </div>
                <div style="background:#f8f9fa;border-radius:8px;overflow:hidden;text-align:center;padding:8px">
                    <img src="https://images.unsplash.com/photo-1548036328-c9fa89d128fa?w=420&h=280&fit=crop" alt="Women's Handbag" style="width:100%;height:140px;object-fit:cover">
                    <div style="padding:8px"><strong>Women's Handbag</strong><div style="color:#777;font-size:0.9rem">Tsh 120,000</div></div>
                </div>
                <div style="background:#f8f9fa;border-radius:8px;overflow:hidden;text-align:center;padding:8px">
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=420&h=280&fit=crop" alt="Headphones" style="width:100%;height:140px;object-fit:cover">
                    <div style="padding:8px"><strong>Wireless Headphones</strong><div style="color:#777;font-size:0.9rem">Tsh 75,000</div></div>
                </div>
                <div style="background:#f8f9fa;border-radius:8px;overflow:hidden;text-align:center;padding:8px">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=420&h=280&fit=crop" alt="Smart Watch" style="width:100%;height:140px;object-fit:cover">
                    <div style="padding:8px"><strong>Smart Watch</strong><div style="color:#777;font-size:0.9rem">Tsh 120,000</div></div>
                </div>
                <div style="background:#f8f9fa;border-radius:8px;overflow:hidden;text-align:center;padding:8px">
                    <img src="https://images.unsplash.com/photo-1619525334978-7bed9f3d07f8?w=420&h=280&fit=crop" alt="Blender" style="width:100%;height:140px;object-fit:cover">
                    <div style="padding:8px"><strong>Kitchen Blender</strong><div style="color:#777;font-size:0.9rem">Tsh 95,000</div></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Container -->
    <div class="products-container">
        <!-- Sidebar -->
        <aside class="products-sidebar">
            <!-- Categories Filter -->
            <div class="sidebar-widget">
                <h3><i class="fas fa-filter"></i> Categories</h3>
                <ul class="category-list">
                    <li><a href="#">All Products <span class="count">156</span></a></li>
                    <li><a href="#">Electronics <span class="count">45</span></a></li>
                    <li><a href="#">Fashion <span class="count">62</span></a></li>
                    <li><a href="#">Home & Kitchen <span class="count">28</span></a></li>
                    <li><a href="#">Beauty & Health <span class="count">34</span></a></li>
                    <li><a href="#">Sports <span class="count">19</span></a></li>
                    <li><a href="#">Books & Stationery <span class="count">27</span></a></li>
                    <li><a href="#">Toys & Games <span class="count">15</span></a></li>
                </ul>
            </div>

            <!-- Price Filter -->
            <div class="sidebar-widget">
                <h3><i class="fas fa-tag"></i> Price Range</h3>
                <div class="price-filter">
                    <div class="price-range">
                        <span>Min: Tsh 5,000</span>
                        <span>Max: Tsh 5,000,000</span>
                    </div>
                    <div class="filter-slider">
                        <div class="progress"></div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="5000" max="5000000" value="5000" step="1000">
                            <input type="range" class="range-max" min="5000" max="5000000" value="5000000" step="1000">
                        </div>
                    </div>
                    <div class="price-inputs">
                        <input type="number" id="minPrice" placeholder="Min" value="5000">
                        <input type="number" id="maxPrice" placeholder="Max" value="5000000">
                    </div>
                    <button class="btn btn-primary btn-block" id="applyPrice">Apply Filter</button>
                </div>
            </div>

            <!-- Rating Filter -->
            <div class="sidebar-widget">
                <h3><i class="fas fa-star"></i> Customer Rating</h3>
                <div class="rating-filter">
                    <label class="star-rating">
                        <input type="checkbox">
                        <span>★★★★★</span>
                        <span>(4.5 & above)</span>
                    </label>
                    <label class="star-rating">
                        <input type="checkbox">
                        <span>★★★★☆</span>
                        <span>(4.0 & above)</span>
                    </label>
                    <label class="star-rating">
                        <input type="checkbox">
                        <span>★★★☆☆</span>
                        <span>(3.0 & above)</span>
                    </label>
                </div>
            </div>

            <!-- Availability Filter -->
            <div class="sidebar-widget">
                <h3><i class="fas fa-check-circle"></i> Availability</h3>
                <div class="filter-btn-group">
                    <button class="active">In Stock</button>
                    <button>Out of Stock</button>
                    <button>Pre-Order</button>
                </div>
            </div>

            <!-- Deals Filter -->
            <div class="sidebar-widget">
                <h3><i class="fas fa-fire"></i> Special Offers</h3>
                <div class="filter-btn-group">
                    <button>On Sale</button>
                    <button>Valentine's Deal</button>
                    <button>Clearance</button>
                    <button>Free Shipping</button>
                </div>
            </div>
        </aside>

        <!-- Main Products Area -->
        <main class="products-main">
            <!-- Products Controls -->
            <div class="products-controls">
                <div class="products-count">
                    Showing <strong>1-12</strong> of <strong>156</strong> products
                </div>
                
                <div class="sort-options">
                    <select id="sortSelect">
                        <option value="default">Sort by: Default</option>
                        <option value="price-low">Price: Low to High</option>
                        <option value="price-high">Price: High to Low</option>
                        <option value="name-asc">Name: A to Z</option>
                        <option value="name-desc">Name: Z to A</option>
                        <option value="rating">Highest Rated</option>
                        <option value="newest">Newest First</option>
                        <option value="bestseller">Best Selling</option>
                    </select>
                </div>
                
                <div class="view-options">
                    <button class="view-btn active" data-view="grid">
                        <i class="fas fa-th"></i>
                    </button>
                    <button class="view-btn" data-view="list">
                        <i class="fas fa-list"></i>
                    </button>
                </div>
            </div>

            <!-- Products Grid -->
            <div class="products-grid-large" id="productsGrid">
                <!-- Product 1 -->
                <div class="product-card-detailed" data-price="850000" data-rating="4.5" data-category="electronics">
                    <div class="product-badge">-15%</div>
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1592286927505-1def25115558?w=300&h=200&fit=crop" alt="Smartphone X Pro">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Electronics</div>
                        <h3 class="product-title">Smartphone X Pro 128GB</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(124)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 850,000</span>
                            <span class="original-price-detailed">Tsh 1,000,000</span>
                            <span class="discount-percent">-15%</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (45)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon" title="Add to Wishlist">
                                <i class="fas fa-heart"></i>
                            </a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 - Laptop -->
                <div class="product-card-detailed" data-price="2500000" data-rating="4.8" data-category="electronics">
                    <div class="product-badge">-20%</div>
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1515378791036-0648a3ad77b0?w=300&h=200&fit=crop" alt="Laptop Pro">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Electronics</div>
                        <h3 class="product-title">Laptop Pro 16GB RAM</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <span class="rating-count">(287)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 2,500,000</span>
                            <span class="original-price-detailed">Tsh 3,125,000</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (12)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon"><i class="fas fa-heart"></i></a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 - Headphones -->
                <div class="product-card-detailed" data-price="75000" data-rating="4.3" data-category="electronics">
                    <div class="product-badge">-10%</div>
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=200&fit=crop" alt="Headphones">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Electronics</div>
                        <h3 class="product-title">Wireless Headphones Pro</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(156)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 75,000</span>
                            <span class="original-price-detailed">Tsh 83,000</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (45)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon"><i class="fas fa-heart"></i></a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 - Women's Dress -->
                <div class="product-card-detailed" data-price="45000" data-rating="4.6" data-category="fashion">
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1595777712802-71614d17f996?w=300&h=200&fit=crop" alt="Women's Dress">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Fashion</div>
                        <h3 class="product-title">Elegant Women's Dress</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(98)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 45,000</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (28)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon"><i class="fas fa-heart"></i></a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 5 - Men's Shoes -->
                <div class="product-card-detailed" data-price="55000" data-rating="4.4" data-category="fashion">
                    <div class="product-badge">-12%</div>
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=300&h=200&fit=crop" alt="Men's Shoes">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Fashion</div>
                        <h3 class="product-title">Premium Men's Sneakers</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(142)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 55,000</span>
                            <span class="original-price-detailed">Tsh 62,500</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (35)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon"><i class="fas fa-heart"></i></a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 6 - Kitchen Blender -->
                <div class="product-card-detailed" data-price="95000" data-rating="4.7" data-category="home">
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1619525334978-7bed9f3d07f8?w=300&h=200&fit=crop" alt="Blender">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Home & Kitchen</div>
                        <h3 class="product-title">Kitchen Blender 1200W</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(201)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 95,000</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (18)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon"><i class="fas fa-heart"></i></a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 7 - Coffee Maker -->
                <div class="product-card-detailed" data-price="65000" data-rating="4.5" data-category="home">
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1517668808822-9ebb02ae2a0e?w=300&h=200&fit=crop" alt="Coffee Maker">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Home & Kitchen</div>
                        <h3 class="product-title">Professional Coffee Maker</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(87)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 65,000</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (22)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon"><i class="fas fa-heart"></i></a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 8 - Skincare Set -->
                <div class="product-card-detailed" data-price="35000" data-rating="4.4" data-category="beauty">
                    <div class="product-badge">-20%</div>
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1556228578-8c89e6adf883?w=300&h=200&fit=crop" alt="Skincare">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Beauty & Health</div>
                        <h3 class="product-title">Premium Skincare Set</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(165)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 35,000</span>
                            <span class="original-price-detailed">Tsh 43,750</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (52)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon"><i class="fas fa-heart"></i></a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 9 - Yoga Mat -->
                <div class="product-card-detailed" data-price="25000" data-rating="4.3" data-category="sports">
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1601925260368-ae2f83cf8b7f?w=300&h=200&fit=crop" alt="Yoga Mat">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Sports</div>
                        <h3 class="product-title">Premium Yoga Mat</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(134)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 25,000</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (64)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon"><i class="fas fa-heart"></i></a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 10 - Dumbbell Set -->
                <div class="product-card-detailed" data-price="85000" data-rating="4.6" data-category="sports">
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1596736372335-007bcb772213?w=300&h=200&fit=crop" alt="Dumbbells">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Sports</div>
                        <h3 class="product-title">Adjustable Dumbbell Set</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(189)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 85,000</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (16)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon"><i class="fas fa-heart"></i></a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 11 - Book Set -->
                <div class="product-card-detailed" data-price="32000" data-rating="4.5" data-category="books">
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1507842716117-8377185ec586?w=300&h=200&fit=crop" alt="Books">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Books & Stationery</div>
                        <h3 class="product-title">Fiction Book Collection</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(76)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 32,000</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (41)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon"><i class="fas fa-heart"></i></a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 12 - Notebook Set -->
                <div class="product-card-detailed" data-price="18000" data-rating="4.2" data-category="books">
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=300&h=200&fit=crop" alt="Notebooks">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Books & Stationery</div>
                        <h3 class="product-title">Premium Notebook Set (5pc)</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(93)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 18,000</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (78)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon"><i class="fas fa-heart"></i></a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 13 - Board Games -->
                <div class="product-card-detailed" data-price="28000" data-rating="4.4" data-category="toys">
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?w=300&h=200&fit=crop" alt="Board Games">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Toys & Games</div>
                        <h3 class="product-title">Family Board Game Set</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(112)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 28,000</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (33)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon"><i class="fas fa-heart"></i></a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <!-- Product 14 - Action Figures -->
                <div class="product-card-detailed" data-price="15000" data-rating="4.3" data-category="toys">
                    <div class="product-badge">-25%</div>
                    <div class="product-image-detailed">
                        <img src="https://images.unsplash.com/photo-1594787318286-3d835c1cab83?w=300&h=200&fit=crop" alt="Action Figures">
                    </div>
                    <div class="product-info-detailed">
                        <div class="product-category">Toys & Games</div>
                        <h3 class="product-title">Action Figure Collection</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(84)</span>
                        </div>
                        <div class="product-price-detailed">
                            <span class="current-price-detailed">Tsh 15,000</span>
                            <span class="original-price-detailed">Tsh 20,000</span>
                        </div>
                        <div class="product-stock">
                            <i class="fas fa-check-circle stock-available"></i>
                            <span class="stock-available">In Stock (47)</span>
                        </div>
                        <div class="product-actions-detailed">
                            <a href="#" class="btn-icon"><i class="fas fa-heart"></i></a>
                            <button class="btn btn-primary" style="flex:1">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <span class="active">1</span>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">Next →</a>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <footer style="background:#2c3e50;color:#fff;padding:40px 0;margin-top:40px;">
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
                    <li><a href="faq.php" style="color:#bdc3c7;text-decoration:none">FAQ</a></li>
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
    <script>
        // Add btn-add-to-cart class to all Add to Cart buttons
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('button');
            buttons.forEach(btn => {
                if (btn.textContent.includes('Add to Cart')) {
                    btn.classList.add('btn-add-to-cart');
                    // Add data-product-id if not already set
                    if (!btn.closest('.product-card-detailed').getAttribute('data-product-id')) {
                        btn.closest('.product-card-detailed').setAttribute('data-product-id', 'product-' + Math.random().toString(36).substr(2, 9));
                    }
                }
            });
        });
    </script>
</body>
</html>