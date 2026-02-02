/**
 * Main JavaScript File
 * Handles core functionality and interactions
 */

document.addEventListener('DOMContentLoaded', function () {

    // ===========================
    // Navbar Scroll Effect
    // ===========================
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // ===========================
    // Scroll to Top Button
    // ===========================
    const scrollTopBtn = document.getElementById('scrollTop');

    if (scrollTopBtn) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.add('show');
            } else {
                scrollTopBtn.classList.remove('show');
            }
        });

        scrollTopBtn.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    // ===========================
    // Initialize AOS (Animate on Scroll)
    // ===========================
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 100
        });
    }

    // ===========================
    // Form Validation Enhancement
    // ===========================
    const forms = document.querySelectorAll('.needs-validation');

    Array.from(forms).forEach(form => {
        form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            } else {
                // Form is valid, show loading state
                const submitBtn = form.querySelector('button[type="submit"]');
                if (submitBtn) {
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Processing...';
                    // Do NOT disable immediately to ensure submission triggers
                    submitBtn.classList.add('disabled');
                    // submitBtn.disabled = true; // Can sometimes block submission if too fast
                }
            }

            form.classList.add('was-validated');
        }, false);
    });

    // ===========================
    // Mobile Menu Close on Link Click
    // ===========================
    const navLinks = document.querySelectorAll('.nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    navLinks.forEach(link => {
        link.addEventListener('click', function () {
            if (window.innerWidth < 992) {
                const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                if (bsCollapse) {
                    bsCollapse.hide();
                }
            }
        });
    });

    // ===========================
    // Add Active Class to Current Page
    // ===========================
    const currentPage = window.location.pathname.split('/').pop();
    navLinks.forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active');
        }
    });

    // ===========================
    // Smooth Scroll for Anchor Links
    // ===========================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '#!') {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });

    // ===========================
    // Lazy Loading Images
    // ===========================
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        const lazyImages = document.querySelectorAll('img.lazy');
        lazyImages.forEach(img => imageObserver.observe(img));
    }

    // ===========================
    // Remove Alert Messages After 5 Seconds
    // ===========================
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            const bsAlert = bootstrap.Alert.getInstance(alert);
            if (bsAlert) {
                bsAlert.close();
            } else {
                alert.classList.add('fade');
                setTimeout(() => alert.remove(), 150);
            }
        }, 5000);
    });

    // ===========================
    // Parallax Effect for Hero Section
    // ===========================
    const heroSection = document.querySelector('.hero-section');
    if (heroSection) {
        window.addEventListener('scroll', function () {
            const scrolled = window.scrollY;
            const parallaxSpeed = 0.5;
            heroSection.style.transform = `translateY(${scrolled * parallaxSpeed}px)`;
        });
    }

    // ===========================
    // Console Welcome Message
    // ===========================
    console.log('%c🚀 Hyper2 Enterprise', 'color: #6366f1; font-size: 24px; font-weight: bold;');
    console.log('%cWelcome to our website!', 'color: #64748b; font-size: 14px;');


    // ===========================
    // Carousel Animation Trigger 
    // ===========================
    // ===========================
    // Carousel Animation Trigger & Auto-Play Force
    // ===========================
    const heroCarouselElement = document.getElementById('productSlider');
    if (heroCarouselElement) {
        // Explicitly initialize with options to force auto-play
        var carousel = new bootstrap.Carousel(heroCarouselElement, {
            interval: 3000,
            ride: 'carousel',
            pause: false, // Don't pause on hover
            wrap: true
        });

        // Start the carousel
        carousel.cycle();

        // Change slide immediately when mouse enters
        heroCarouselElement.addEventListener('mouseenter', function () {
            carousel.next();
        });

        heroCarouselElement.addEventListener('slide.bs.carousel', function (e) {
            const nextSlide = e.relatedTarget;
            const animatedElements = nextSlide.querySelectorAll('.animate__animated');

            animatedElements.forEach(el => {
                // Remove animations
                el.classList.remove('animate__fadeInDown', 'animate__fadeInUp');
                // Trigger reflow to restart animation
                void el.offsetWidth;
                // Add animations back
                if (el.tagName === 'H1') {
                    el.classList.add('animate__fadeInDown');
                } else {
                    el.classList.add('animate__fadeInUp');
                }
            });
        });
    }

});

// ===========================
// Utility Functions
// ===========================

// Format Number with Commas
function formatNumber(num) {
    return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// Debounce Function
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Check if Element is in Viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}
