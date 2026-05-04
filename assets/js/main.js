// Simple JS for navbar scroll effect
window.addEventListener('scroll', () => {
    const nav = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});

// Page Loader Logic
window.addEventListener('load', () => {
    const loader = document.getElementById('page-loader');
    if (loader) {
        // Small delay to ensure smooth transition
        setTimeout(() => {
            loader.classList.add('hidden');
        }, 400); // 400ms delay to make the animation visible briefly
    }
});

// Toast Notification System
function showToast(message, type = 'success') {
    const container = document.getElementById('toast-container');
    if (!container) return;
    
    const toast = document.createElement('div');
    toast.className = `toast toast-${type}`;
    
    let iconClass = 'fa-check-circle';
    if (type === 'error') iconClass = 'fa-circle-xmark';
    else if (type === 'info') iconClass = 'fa-circle-info';
    
    toast.innerHTML = `
        <i class="fa-solid ${iconClass}"></i>
        <span>${message}</span>
    `;
    
    container.appendChild(toast);
    
    // Trigger reflow for animation
    setTimeout(() => toast.classList.add('show'), 10);
    
    // Remove after 3 seconds
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => toast.remove(), 300); // Wait for transition
    }, 3000);
}

// Mobile Menu Logic
function toggleMenu() {
    const navMenu = document.getElementById('nav-menu');
    if (navMenu) {
        navMenu.classList.toggle('active');
    }
}

// Close mobile menu when a link is clicked
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        const navMenu = document.getElementById('nav-menu');
        if (navMenu && navMenu.classList.contains('active')) {
            navMenu.classList.remove('active');
        }
    });
});
