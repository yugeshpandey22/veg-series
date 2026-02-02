/**
 * Counter Animation Script
 * Animates numbers when they come into view
 */

document.addEventListener('DOMContentLoaded', function () {

    const counters = document.querySelectorAll('.counter');
    const speed = 200; // Animation speed

    if (counters.length > 0) {
        // Check if IntersectionObserver is supported
        if ('IntersectionObserver' in window) {
            const counterObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const counter = entry.target;
                        animateCounter(counter);
                        observer.unobserve(counter);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => {
                counterObserver.observe(counter);
            });
        } else {
            // Fallback for browsers that don't support IntersectionObserver
            window.addEventListener('scroll', checkCounters);
            checkCounters();
        }
    }

    function animateCounter(counter) {
        const target = parseInt(counter.getAttribute('data-target'));
        const increment = target / speed;
        let current = 0;

        const updateCounter = () => {
            current += increment;

            if (current < target) {
                counter.innerText = Math.ceil(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.innerText = target;

                // Add plus sign for certain counters
                if (target >= 100) {
                    counter.innerText = target + '+';
                }
            }
        };

        updateCounter();
    }

    function checkCounters() {
        counters.forEach(counter => {
            const rect = counter.getBoundingClientRect();
            const windowHeight = window.innerHeight || document.documentElement.clientHeight;

            if (rect.top >= 0 && rect.bottom <= windowHeight) {
                animateCounter(counter);
                window.removeEventListener('scroll', checkCounters);
            }
        });
    }

});
