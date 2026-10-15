import Lenis from 'lenis';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

let lenisInstance = null;
let rafCallback = null;

export function initSmoothScroll() {
    // If reduced motion is preferred, use native scroll
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return null;
    }

    if (lenisInstance) {
        lenisInstance.destroy();
    }

    lenisInstance = new Lenis({
        duration: 1.15,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        orientation: 'vertical',
        gestureOrientation: 'vertical',
        smoothWheel: true,
        wheelMultiplier: 1.0,
        touchMultiplier: 1.5,
    });

    lenisInstance.on('scroll', ScrollTrigger.update);

    if (rafCallback) {
        gsap.ticker.remove(rafCallback);
    }

    rafCallback = (time) => {
        lenisInstance.raf(time * 1000);
    };

    gsap.ticker.add(rafCallback);
    gsap.ticker.lagSmoothing(0);

    return lenisInstance;
}

export function getLenis() {
    return lenisInstance;
}

export function resetScroll() {
    if (lenisInstance) {
        lenisInstance.scrollTo(0, { immediate: true });
    } else {
        window.scrollTo(0, 0);
    }
}

export function destroySmoothScroll() {
    if (rafCallback) {
        gsap.ticker.remove(rafCallback);
        rafCallback = null;
    }
    if (lenisInstance) {
        lenisInstance.destroy();
        lenisInstance = null;
    }
}
