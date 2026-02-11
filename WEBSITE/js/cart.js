// Cart Management System using localStorage

class Cart {
    constructor() {
        this.storageKey = 'gm_store_cart';
        this.cart = this.loadCart();
    }

    loadCart() {
        const saved = localStorage.getItem(this.storageKey);
        return saved ? JSON.parse(saved) : [];
    }

    saveCart() {
        localStorage.setItem(this.storageKey, JSON.stringify(this.cart));
        this.updateCartCount();
    }

    addItem(productId, productTitle, price, image, quantity = 1) {
        const existingItem = this.cart.find(item => item.productId === productId);

        if (existingItem) {
            existingItem.quantity += quantity;
        } else {
            this.cart.push({
                productId: productId,
                title: productTitle,
                price: parseFloat(price),
                image: image,
                quantity: quantity,
                dateAdded: new Date().toISOString()
            });
        }
        this.saveCart();
        this.showNotification(`${productTitle} added to cart!`);
    }

    removeItem(productId) {
        this.cart = this.cart.filter(item => item.productId !== productId);
        this.saveCart();
    }

    updateQuantity(productId, quantity) {
        const item = this.cart.find(item => item.productId === productId);
        if (item) {
            if (quantity <= 0) {
                this.removeItem(productId);
            } else {
                item.quantity = parseInt(quantity);
                this.saveCart();
            }
        }
    }

    getCart() {
        return this.cart;
    }

    getItemCount() {
        return this.cart.reduce((total, item) => total + item.quantity, 0);
    }

    getTotalPrice() {
        return this.cart.reduce((total, item) => total + (item.price * item.quantity), 0);
    }

    clearCart() {
        this.cart = [];
        this.saveCart();
    }

    updateCartCount() {
        const count = this.getItemCount();
        const cartCountElements = document.querySelectorAll('.cart-count');
        cartCountElements.forEach(el => {
            el.textContent = count;
            el.style.display = count > 0 ? 'flex' : 'none';
        });
    }

    showNotification(message) {
        // Create notification if it doesn't exist
        let notification = document.getElementById('cart-notification');
        if (!notification) {
            notification = document.createElement('div');
            notification.id = 'cart-notification';
            notification.style.cssText = `
                position: fixed;
                top: 80px;
                right: 20px;
                background: #28a745;
                color: white;
                padding: 15px 25px;
                border-radius: 5px;
                z-index: 10000;
                box-shadow: 0 2px 10px rgba(0,0,0,0.2);
                animation: slideIn 0.3s ease-out;
            `;
            document.body.appendChild(notification);
        }
        notification.textContent = message;
        notification.style.display = 'block';
        
        setTimeout(() => {
            notification.style.display = 'none';
        }, 2000);
    }
}

// Initialize cart
const cart = new Cart();

// Update cart count on page load
document.addEventListener('DOMContentLoaded', function() {
    cart.updateCartCount();

    // Add event listeners to all "Add to Cart" buttons (Products page)
    const addToCartButtons = document.querySelectorAll('.btn-add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get product info from the card
            const card = this.closest('.product-card-detailed');
            if (card) {
                const productId = card.getAttribute('data-product-id') || 'product-' + Math.random().toString(36).substr(2, 9);
                const productTitle = card.querySelector('.product-title').textContent.trim();
                const priceText = card.querySelector('.current-price-detailed').textContent.replace('Tsh ', '').replace(/,/g, '');
                const image = card.querySelector('.product-image-detailed img').src;
                
                if (productTitle && priceText) {
                    cart.addItem(productId, productTitle, priceText, image);
                }
            }
        });
    });

    // Add event listeners to deals page "Add to Cart" links
    const dealAddToCartLinks = document.querySelectorAll('.add-to-cart');
    dealAddToCartLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Get product info from the deal card
            const card = this.closest('.deal-card');
            if (card) {
                const productId = this.getAttribute('data-id') || 'deal-' + Math.random().toString(36).substr(2, 9);
                const productTitle = card.querySelector('.deal-title')?.textContent.trim() || 'Deal Product';
                const priceText = card.querySelector('.deal-current-price')?.textContent.replace('Tsh ', '').replace(/,/g, '') || '0';
                const image = card.querySelector('.deal-image img')?.src || '';
                
                if (productTitle && priceText) {
                    cart.addItem(productId, productTitle, priceText, image);
                }
            }
        });
    });

    // Add event listeners to featured product buttons
    const featuredButtons = document.querySelectorAll('.featured-add-to-cart');
    featuredButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            const card = this.closest('.featured-product');
            if (card) {
                const productId = card.getAttribute('data-product-id') || 'featured-' + Math.random().toString(36).substr(2, 9);
                const productTitle = card.querySelector('h4')?.textContent.trim() || 'Featured Product';
                const priceText = card.querySelector('.featured-price')?.textContent.replace('Tsh ', '').replace(/,/g, '') || '0';
                const image = card.querySelector('img')?.src || '';
                
                if (productTitle && priceText) {
                    cart.addItem(productId, productTitle, priceText, image);
                }
            }
        });
    });
});

// Add CSS animation for notification
const style = document.createElement('style');
style.textContent = `
    @keyframes slideIn {
        from {
            transform: translateX(400px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }
`;
document.head.appendChild(style);
