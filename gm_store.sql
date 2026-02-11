-- GM Store Database SQL File
-- Database: gm_store
-- Created: February 11, 2026

-- Create Database
CREATE DATABASE IF NOT EXISTS `gm_store` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `gm_store`;

-- ===========================
-- Table: categories
-- ===========================
CREATE TABLE IF NOT EXISTS `categories` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL UNIQUE,
  `description` TEXT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert Categories
INSERT INTO `categories` (`name`, `description`) VALUES
('Electronics', 'Phones, laptops, tablets, and electronic accessories'),
('Fashion', 'Clothing, shoes, and fashion accessories'),
('Home & Kitchen', 'Home appliances and kitchenware'),
('Beauty & Health', 'Beauty, skincare, and health products'),
('Sports', 'Sports equipment and fitness products'),
('Books & Stationery', 'Books, notebooks, and office supplies'),
('Toys & Games', 'Toys, games, and entertainment products');

-- ===========================
-- Table: products
-- ===========================
CREATE TABLE IF NOT EXISTS `products` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `category_id` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `description` TEXT,
  `price` DECIMAL(10, 2) NOT NULL,
  `original_price` DECIMAL(10, 2),
  `discount_percent` INT DEFAULT 0,
  `image_url` VARCHAR(500),
  `rating` DECIMAL(2, 1) DEFAULT 0,
  `reviews_count` INT DEFAULT 0,
  `stock` INT DEFAULT 0,
  `is_featured` BOOLEAN DEFAULT FALSE,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert Products
INSERT INTO `products` (`category_id`, `name`, `description`, `price`, `original_price`, `discount_percent`, `image_url`, `rating`, `reviews_count`, `stock`, `is_featured`) VALUES

-- Electronics (Category 1)
(1, 'Smartphone X Pro 128GB', 'Premium smartphone with 128GB storage and advanced camera', 850000, 1000000, 15, 'https://images.unsplash.com/photo-1592286927505-1def25115558?w=300&h=200&fit=crop', 4.5, 124, 45, TRUE),
(1, 'Laptop Pro 16GB', 'High-performance laptop with 16GB RAM and SSD', 2500000, 3125000, 20, 'https://images.unsplash.com/photo-1515378791036-0648a3ad77b0?w=300&h=200&fit=crop', 4.8, 87, 32, TRUE),
(1, 'Wireless Headphones', 'Noise-cancelling wireless headphones with 30-hour battery', 75000, 90000, 17, 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=300&h=200&fit=crop', 4.6, 156, 68, FALSE),

-- Fashion (Category 2)
(2, 'Women\'s Dress Premium Collection', 'Elegant women\'s dress perfect for any occasion', 45000, 60000, 25, 'https://images.unsplash.com/photo-1595777712802-71614d17f996?w=300&h=200&fit=crop', 4.3, 92, 38, FALSE),
(2, 'Men\'s Sneakers Premium', 'Comfortable and stylish men\'s sneakers for daily wear', 55000, 68000, 19, 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=300&h=200&fit=crop', 4.4, 145, 52, FALSE),

-- Home & Kitchen (Category 3)
(3, 'Blender 1200W Pro', 'Powerful blender perfect for smoothies and soups', 95000, 119000, 20, 'https://images.unsplash.com/photo-1619525334978-7bed9f3d07f8?w=300&h=200&fit=crop', 4.7, 178, 28, FALSE),
(3, 'Coffee Maker Automatic', 'Automatic coffee maker for 12 cups with timer', 65000, 85000, 24, 'https://images.unsplash.com/photo-1517668808822-9ebb02ae2a0e?w=300&h=200&fit=crop', 4.5, 203, 41, FALSE),

-- Beauty & Health (Category 4)
(4, 'Skincare Set Premium', 'Complete skincare set with face wash, toner, and moisturizer', 35000, 45000, 22, 'https://images.unsplash.com/photo-1556228578-8c89e6adf883?w=300&h=200&fit=crop', 4.6, 134, 55, FALSE),

-- Sports (Category 5)
(5, 'Yoga Mat Non-slip', 'Premium yoga mat with non-slip surface and carrying strap', 25000, 32000, 22, 'https://images.unsplash.com/photo-1601925260368-ae2f83cf8b7f?w=300&h=200&fit=crop', 4.2, 89, 72, FALSE),
(5, 'Dumbbell Set 20kg', 'Adjustable dumbbell set with storage stand', 85000, 106000, 20, 'https://images.unsplash.com/photo-1596736372335-007bcb772213?w=300&h=200&fit=crop', 4.7, 187, 35, FALSE),

-- Books & Stationery (Category 6)
(6, 'Fiction Book Collection', 'Set of 5 bestselling fiction novels', 32000, 42000, 24, 'https://images.unsplash.com/photo-1507842716117-8377185ec586?w=300&h=200&fit=crop', 4.5, 76, 48, FALSE),
(6, 'Notebook Set 100pcs', 'Pack of 100 premium quality notebooks', 18000, 22000, 18, 'https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?w=300&h=200&fit=crop', 4.4, 123, 62, FALSE),

-- Toys & Games (Category 7)
(7, 'Board Games Collection', 'Set of 3 popular board games for family entertainment', 28000, 35000, 20, 'https://images.unsplash.com/photo-1516975080664-ed2fc6a32937?w=300&h=200&fit=crop', 4.6, 214, 44, FALSE),
(7, 'Action Figures Set', 'Collection of 12 popular action figures', 15000, 20000, 25, 'https://images.unsplash.com/photo-1594787318286-3d835c1cab83?w=300&h=200&fit=crop', 4.3, 98, 78, FALSE);

-- ===========================
-- Table: users
-- ===========================
CREATE TABLE IF NOT EXISTS `users` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `email` VARCHAR(255) NOT NULL UNIQUE,
  `password` VARCHAR(255) NOT NULL,
  `full_name` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(20),
  `role` ENUM('customer', 'admin') DEFAULT 'customer',
  `is_active` BOOLEAN DEFAULT TRUE,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert Sample Users (passwords should be hashed in production)
INSERT INTO `users` (`email`, `password`, `full_name`, `phone`, `role`, `is_active`) VALUES
('customer@gmstore.com', 'password123', 'John Customer', '+255 763 537 100', 'customer', TRUE),
('admin@gmstore.com', 'admin123', 'Admin User', '+255 763 537 101', 'admin', TRUE),
('jane@example.com', 'pass456', 'Jane Doe', '+255 763 537 102', 'customer', TRUE);

-- ===========================
-- Table: orders
-- ===========================
CREATE TABLE IF NOT EXISTS `orders` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NOT NULL,
  `order_number` VARCHAR(50) UNIQUE,
  `total_amount` DECIMAL(10, 2) NOT NULL,
  `tax_amount` DECIMAL(10, 2) DEFAULT 0,
  `shipping_amount` DECIMAL(10, 2) DEFAULT 0,
  `status` ENUM('pending', 'confirmed', 'shipped', 'delivered', 'cancelled') DEFAULT 'pending',
  `payment_method` VARCHAR(50),
  `shipping_address` TEXT,
  `notes` TEXT,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert Sample Orders
INSERT INTO `orders` (`user_id`, `order_number`, `total_amount`, `tax_amount`, `shipping_amount`, `status`, `payment_method`, `shipping_address`) VALUES
(1, 'ORD-001-2026', 1003500.00, 180630.00, 0, 'delivered', 'Card', 'Dar es Salaam, Tanzania'),
(1, 'ORD-010-2026', 236300.00, 42534.00, 15000, 'shipped', 'Mobile Money', 'Dar es Salaam, Tanzania');

-- ===========================
-- Table: order_items
-- ===========================
CREATE TABLE IF NOT EXISTS `order_items` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `order_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  `quantity` INT NOT NULL,
  `unit_price` DECIMAL(10, 2) NOT NULL,
  `subtotal` DECIMAL(10, 2) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert Sample Order Items
INSERT INTO `order_items` (`order_id`, `product_id`, `quantity`, `unit_price`, `subtotal`) VALUES
(1, 1, 1, 850000, 850000),
(1, 3, 1, 75000, 75000),
(2, 4, 1, 45000, 45000),
(2, 8, 1, 85000, 85000),
(2, 9, 1, 25000, 25000);

-- ===========================
-- Table: wishlist
-- ===========================
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  `added_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  UNIQUE KEY `user_product` (`user_id`, `product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ===========================
-- Table: reviews
-- ===========================
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `product_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `rating` INT NOT NULL CHECK (`rating` >= 1 AND `rating` <= 5),
  `review_text` TEXT,
  `is_verified_purchase` BOOLEAN DEFAULT FALSE,
  `helpful_count` INT DEFAULT 0,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert Sample Reviews
INSERT INTO `reviews` (`product_id`, `user_id`, `rating`, `review_text`, `is_verified_purchase`, `helpful_count`) VALUES
(1, 1, 5, 'Excellent smartphone! Great camera and performance.', TRUE, 24),
(1, 3, 4, 'Good phone, battery life could be better.', TRUE, 12),
(2, 1, 5, 'Perfect laptop for work and gaming. Highly recommended!', TRUE, 31),
(3, 3, 4, 'Great sound quality and comfort.', TRUE, 18);

-- ===========================
-- Table: promo_codes
-- ===========================
CREATE TABLE IF NOT EXISTS `promo_codes` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `code` VARCHAR(50) NOT NULL UNIQUE,
  `description` VARCHAR(255),
  `discount_percent` INT,
  `discount_amount` DECIMAL(10, 2),
  `valid_from` DATETIME,
  `valid_until` DATETIME,
  `max_uses` INT,
  `current_uses` INT DEFAULT 0,
  `is_active` BOOLEAN DEFAULT TRUE,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Insert Sample Promo Codes
INSERT INTO `promo_codes` (`code`, `description`, `discount_percent`, `valid_from`, `valid_until`, `max_uses`, `is_active`) VALUES
('SAVE10', '10% discount on all products', 10, '2026-01-01', '2026-12-31', 1000, TRUE),
('SAVE20', '20% discount on orders over 500,000 Tsh', 20, '2026-02-01', '2026-02-28', 500, TRUE),
('WELCOME', '15% discount for new customers', 15, '2026-01-01', '2026-12-31', 999, TRUE),
('LOVE50', '50% discount on Valentine\'s Collection', 50, '2026-02-01', '2026-02-14', 1000, TRUE);

-- ===========================
-- Create Indexes for Better Performance
-- ===========================
CREATE INDEX idx_products_category ON `products` (`category_id`);
CREATE INDEX idx_products_rating ON `products` (`rating`);
CREATE INDEX idx_orders_user ON `orders` (`user_id`);
CREATE INDEX idx_orders_status ON `orders` (`status`);
CREATE INDEX idx_order_items_order ON `order_items` (`order_id`);
CREATE INDEX idx_order_items_product ON `order_items` (`product_id`);
CREATE INDEX idx_reviews_product ON `reviews` (`product_id`);
CREATE INDEX idx_reviews_user ON `reviews` (`user_id`);
CREATE INDEX idx_wishlist_user ON `wishlist` (`user_id`);

-- ===========================
-- Database Creation Complete
-- ===========================
-- This database includes:
-- 1. Categories (7 product categories)
-- 2. Products (13 products with details, images, ratings)
-- 3. Users (Customer and Admin accounts)
-- 4. Orders (Sample orders with status tracking)
-- 5. Order Items (Line items for each order)
-- 6. Wishlist (User wishlists)
-- 7. Reviews (Product reviews and ratings)
-- 8. Promo Codes (Discount codes for promotions)

-- Test Accounts:
-- Customer: customer@gmstore.com / password123
-- Admin: admin@gmstore.com / admin123
