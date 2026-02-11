// script.js

// Wait for the DOM to fully load before executing the script
document.addEventListener('DOMContentLoaded', () => {
    init();
});

function init() {
    initCart();
    initWishlist();
    initSearch();
    initCountdown();
    initMobileMenu();
    initCarousel();
}

// --------------------------------------------------
// Mobile Menu Toggle
// --------------------------------------------------
function initMobileMenu() {
    const menuButton = document.querySelector('.lg\:hidden button');
    const mobileMenu = document.querySelector('.mobile-menu'); // Adjust selector as needed
    const body = document.body;

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden'); // Toggle menu visibility
        body.classList.toggle('menu-open'); // Add/remove class to body
    });

    // Close menu when clicking outside
    document.addEventListener('click', (event) => {
        if (!mobileMenu.contains(event.target) && !menuButton.contains(event.target)) {
            mobileMenu.classList.add('hidden');
            body.classList.remove('menu-open');
        }
    });

    // Close menu on ESC key
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            mobileMenu.classList.add('hidden');
            body.classList.remove('menu-open');
        }
    });
}

// --------------------------------------------------
// Shopping Cart System
// --------------------------------------------------
function initCart() {
    const cart = JSON.parse(localStorage.getItem('cart')) || {};
    const cartIcon = document.querySelector('.cart-icon'); // Adjust selector as needed

    document.querySelectorAll('.quick-add').forEach(button => {
        button.addEventListener('click', (event) => {
            const productCard = event.target.closest('.product-card'); // Adjust selector as needed
            const productName = productCard.querySelector('.product-name').innerText;
            const productPrice = parseFloat(productCard.querySelector('.product-price').innerText.replace('$', ''));
            const productImage = productCard.querySelector('.product-image').src;

            // Add product to cart
            if (cart[productName]) {
                cart[productName].quantity += 1; // Increase quantity if already in cart
            } else {
                cart[productName] = { price: productPrice, image: productImage, quantity: 1 };
            }

            localStorage.setItem('cart', JSON.stringify(cart));
            updateCartIcon(cart);
            console.log(cart); // For debugging
        });
    });
}

function updateCartIcon(cart) {
    const totalItems = Object.values(cart).reduce((acc, item) => acc + item.quantity, 0);
    const cartIcon = document.querySelector('.cart-icon'); // Adjust selector as needed
    cartIcon.innerText = totalItems;
}

// --------------------------------------------------
// Wishlist Toggle
// --------------------------------------------------
function initWishlist() {
    const wishlist = JSON.parse(localStorage.getItem('wishlist')) || {};

    document.querySelectorAll('.wishlist-icon').forEach(icon => {
        icon.addEventListener('click', (event) => {
            const productCard = event.target.closest('.product-card'); // Adjust selector as needed
            const productName = productCard.querySelector('.product-name').innerText;

            if (wishlist[productName]) {
                delete wishlist[productName]; // Remove from wishlist
                event.target.classList.remove('favorite');
            } else {
                wishlist[productName] = true; // Add to wishlist
                event.target.classList.add('favorite');
            }

            localStorage.setItem('wishlist', JSON.stringify(wishlist));
        });
    });
}

// --------------------------------------------------
// Search Functionality
// --------------------------------------------------
function initSearch() {
    const searchInput = document.querySelector('.search-input'); // Adjust selector as needed
    const productCards = document.querySelectorAll('.product-card'); // Adjust selector as needed

    searchInput.addEventListener('input', () => {
        const searchTerm = searchInput.value.toLowerCase();
        productCards.forEach(card => {
            const productName = card.querySelector('.product-name').innerText.toLowerCase();
            card.style.display = productName.includes(searchTerm) ? 'block' : 'none';
        });
    });
}

// --------------------------------------------------
// Countdown Timer
// --------------------------------------------------
function initCountdown() {
    const countdownElement = document.querySelector('.countdown'); // Adjust selector as needed
    let timeLeft = 12 * 60 * 60; // 12 hours in seconds

    const timer = setInterval(() => {
        if (timeLeft <= 0) {
            clearInterval(timer);
            countdownElement.innerText = 'Offer Expired';
            return;
        }
        timeLeft--;
        const hours = Math.floor(timeLeft / 3600);
        const minutes = Math.floor((timeLeft % 3600) / 60);
        const seconds = timeLeft % 60;
        countdownElement.innerText = `Ends in: ${hours}:${minutes}:${seconds}`;
    }, 1000);
}

// --------------------------------------------------
// Product Carousel Arrows
// --------------------------------------------------
function initCarousel() {
    const leftButton = document.querySelector('.carousel-left'); // Adjust selector as needed
    const rightButton = document.querySelector('.carousel-right'); // Adjust selector as needed
    const productGrid = document.querySelector('.product-grid'); // Adjust selector as needed

    leftButton.addEventListener('click', () => {
        productGrid.scrollBy({
            top: 0,
            left: -300,
            behavior: 'smooth'
        });
    });

    rightButton.addEventListener('click', () => {
        productGrid.scrollBy({
            top: 0,
            left: 300,
            behavior: 'smooth'
        });
    });
}

// --------------------------------------------------
// Dark Mode Toggle (Optional Enhancement)
// --------------------------------------------------
function initDarkMode() {
    const darkModeToggle = document.querySelector('.dark-mode-toggle'); // Adjust selector as needed
    const htmlElement = document.documentElement;

    darkModeToggle.addEventListener('click', () => {
        htmlElement.classList.toggle('dark');
        localStorage.setItem('darkMode', htmlElement.classList.contains('dark'));
    });

    // Check user preference on load
    if (localStorage.getItem('darkMode') === 'true') {
        htmlElement.classList.add('dark');
    }
}