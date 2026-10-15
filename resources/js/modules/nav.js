export function initNav() {
    const header = document.querySelector('header[data-site-header]');
    const overlay = document.getElementById('nav-overlay');
    const hamburger = document.getElementById('nav-hamburger');
    const closeBtn = document.getElementById('nav-close');

    // 1. Header scroll listener
    if (header) {
        const updateHeader = () => {
            if (window.scrollY > 20) {
                header.classList.add('is-scrolled', 'bg-brand-cream/95', 'backdrop-blur-md', 'shadow-xs', 'border-b', 'border-brand-stone/60');
                header.classList.remove('bg-transparent');
            } else {
                header.classList.remove('is-scrolled', 'bg-brand-cream/95', 'backdrop-blur-md', 'shadow-xs', 'border-b', 'border-brand-stone/60');
                header.classList.add('bg-transparent');
            }
        };

        window.addEventListener('scroll', updateHeader, { passive: true });
        updateHeader();
    }

    // 2. Fullscreen Drawer Logic
    if (hamburger && overlay) {
        let isOpen = false;

        const openMenu = () => {
            if (isOpen) return;
            isOpen = true;

            overlay.classList.remove('pointer-events-none', 'opacity-0');
            overlay.classList.add('pointer-events-auto', 'opacity-100');
            overlay.setAttribute('aria-hidden', 'false');
            hamburger.setAttribute('aria-expanded', 'true');
            document.body.classList.add('overflow-hidden');

            // Stagger in links
            const links = overlay.querySelectorAll('.nav-overlay-link');
            links.forEach((link, idx) => {
                link.style.opacity = '0';
                link.style.transform = 'translateY(14px)';
                setTimeout(() => {
                    link.style.transition = 'opacity 0.35s cubic-bezier(0.22, 1, 0.36, 1), transform 0.35s cubic-bezier(0.22, 1, 0.36, 1)';
                    link.style.opacity = '1';
                    link.style.transform = 'translateY(0)';
                }, 50 + idx * 35);
            });
        };

        const closeMenu = () => {
            if (!isOpen) return;
            isOpen = false;

            overlay.classList.remove('pointer-events-auto', 'opacity-100');
            overlay.classList.add('opacity-0');
            overlay.setAttribute('aria-hidden', 'true');
            hamburger.setAttribute('aria-expanded', 'false');
            document.body.classList.remove('overflow-hidden');

            const links = overlay.querySelectorAll('.nav-overlay-link');
            links.forEach((link) => {
                link.style.opacity = '0';
                link.style.transform = 'translateY(14px)';
            });

            setTimeout(() => {
                if (!isOpen) {
                    overlay.classList.add('pointer-events-none');
                }
            }, 350);
        };

        // Attach listeners cleanly
        hamburger.onclick = (e) => {
            e.stopPropagation();
            isOpen ? closeMenu() : openMenu();
        };

        if (closeBtn) {
            closeBtn.onclick = (e) => {
                e.stopPropagation();
                closeMenu();
            };
        }

        // Close when clicking any link inside the overlay
        const allOverlayLinks = overlay.querySelectorAll('a');
        allOverlayLinks.forEach((link) => {
            link.onclick = () => {
                closeMenu();
            };
        });

        // Close on ESC
        window.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && isOpen) {
                closeMenu();
            }
        });

        // Close if clicking outside the inner content
        overlay.onclick = (e) => {
            if (e.target === overlay) {
                closeMenu();
            }
        };

        // Export helper to window so Swup transitions can safely close menu
        window.closeNavOverlay = closeMenu;
    }
}
