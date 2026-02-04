
CREATE DATABASE Ecommerce_system.sql


1. USERS TABLE

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(25) NOT NULL,
    role ENUM('admin', 'customer') DEFAULT 'customer',
    phone_number VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


2. CATEGORIES TABLE

CREATE TABLE categories (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(50) NOT NULL,
    description TEXT
);


 3. PRODUCTS TABLE

CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    category_id INT NOT NULL,
    product_name VARCHAR(100) NOT NULL,
    description TEXT,
    price DECIMAL(12,2) NOT NULL,
    stock_quantity INT DEFAULT 0,
    product_image VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id)
        REFERENCES categories(category_id)
        ON DELETE CASCADE
);


4. ORDERS TABLE

CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    total_amount DECIMAL(12,2) NOT NULL,
    order_status ENUM('pending', 'paid', 'shipped', 'completed', 'cancelled')
        DEFAULT 'pending',
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id)
        REFERENCES users(user_id)
        ON DELETE CASCADE
);


5. ORDER ITEMS TABLE

CREATE TABLE order_items (
    order_item_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(12,2) NOT NULL,
    FOREIGN KEY (order_id)
        REFERENCES orders(order_id)
        ON DELETE CASCADE,
    FOREIGN KEY (product_id)
        REFERENCES products(product_id)
        ON DELETE CASCADE
);

6. CART TABLE

CREATE TABLE cart (
    cart_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (user_id)
        REFERENCES users(user_id)
        ON DELETE CASCADE,
    FOREIGN KEY (product_id)
        REFERENCES products(product_id)
        ON DELETE CASCADE
);