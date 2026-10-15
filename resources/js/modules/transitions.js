import Swup from 'swup';
import { initReveals, cleanupReveals } from './reveals';
import { resetScroll } from './smooth-scroll';
import { initNav } from './nav';

let swupInstance = null;

export function initTransitions() {
    if (swupInstance) {
        return swupInstance;
    }

    const swupContainer = document.querySelector('#swup');
    if (!swupContainer) {
        return null;
    }

    swupInstance = new Swup({
        containers: ['#swup'],
        animationSelector: '[class*="transition-"]',
        cache: true,
        linkSelector: 'a[href^="/"]:not([data-no-swup]):not([target="_blank"]):not([href*="#"]):not([href^="/#"])',
    });

    swupInstance.hooks.on('visit:start', () => {
        if (typeof window.closeNavOverlay === 'function') {
            window.closeNavOverlay();
        }
    });

    swupInstance.hooks.on('content:replace', () => {
        // 1. Reset scroll to top
        resetScroll();

        // 2. Tear down old GSAP ScrollTriggers & init new ones
        cleanupReveals();
        setTimeout(() => {
            initReveals();
        }, 50);

        // 3. Rebind nav & cursors
        initNav();
        window.dispatchEvent(new CustomEvent('rebind-cursor'));

        // 4. Update active states on navigation links
        updateNavActiveStates();
    });

    return swupInstance;
}

function updateNavActiveStates() {
    const currentPath = window.location.pathname;
    const desktopLinks = document.querySelectorAll('header nav a');
    desktopLinks.forEach((link) => {
        const href = link.getAttribute('href');
        if (href === currentPath || (href !== '/' && currentPath.startsWith(href))) {
            link.classList.add('text-brand-gold', 'font-semibold');
        } else {
            link.classList.remove('text-brand-gold', 'font-semibold');
        }
    });
}
