import Alpine from 'alpinejs';
import { initSmoothScroll } from './modules/smooth-scroll';
import { initReveals } from './modules/reveals';
import { initCustomCursor } from './modules/cursor';
import { initNav } from './modules/nav';
import { initTransitions } from './modules/transitions';

window.Alpine = Alpine;
Alpine.start();

document.addEventListener('DOMContentLoaded', () => {
    // 1. Initialize Smooth Scrolling
    initSmoothScroll();

    // 2. Initialize Navigation and Header states
    initNav();

    // 3. Initialize GSAP & ScrollTrigger reveals
    initReveals();

    // 4. Initialize Desktop Subtle Cursor
    initCustomCursor();

    // 5. Initialize Swup Page Transitions
    initTransitions();
});
