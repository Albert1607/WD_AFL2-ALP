// Fade-up on scroll via IntersectionObserver
document.addEventListener('DOMContentLoaded', () => {
    // Respect prefers-reduced-motion
    const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!prefersReduced) {
        const fadeEls = document.querySelectorAll('.fade-up');
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12 }
        );
        fadeEls.forEach((el) => observer.observe(el));
    }

    // Navbar: add glass blur class on scroll
    const navbar = document.getElementById('main-navbar');
    if (navbar) {
        const onScroll = () => {
            if (window.scrollY > 20) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        };
        window.addEventListener('scroll', onScroll, { passive: true });
    }

    // Mobile hamburger menu toggle
    const hamburger = document.getElementById('hamburger-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.toggle('hidden');
            hamburger.setAttribute('aria-expanded', String(!isOpen));
        });
    }
});
