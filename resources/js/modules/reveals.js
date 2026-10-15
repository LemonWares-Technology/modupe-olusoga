import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

let activeTriggers = [];

export function initReveals() {
    cleanupReveals();

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // 1. Hero Entrance Animations
    const heroElements = document.querySelectorAll('[data-reveal-hero]');
    if (heroElements.length > 0) {
        if (prefersReducedMotion) {
            heroElements.forEach((el) => {
                el.style.opacity = '1';
                el.style.transform = 'none';
            });
        } else {
            gsap.fromTo(
                heroElements,
                {
                    opacity: 0,
                    y: 28,
                },
                {
                    opacity: 1,
                    y: 0,
                    duration: 1.05,
                    ease: 'power3.out',
                    stagger: 0.12,
                    delay: 0.15,
                }
            );
        }
    }

    // 2. Hero Image Entrance
    const heroImages = document.querySelectorAll('[data-reveal-image]');
    if (heroImages.length > 0 && !prefersReducedMotion) {
        gsap.fromTo(
            heroImages,
            {
                opacity: 0,
                scale: 1.05,
            },
            {
                opacity: 1,
                scale: 1.0,
                duration: 1.4,
                ease: 'power2.out',
                delay: 0.25,
            }
        );
    }

    // 3. ScrollTrigger Generic Reveals
    const revealElements = document.querySelectorAll('[data-reveal]');
    revealElements.forEach((el) => {
        if (prefersReducedMotion) {
            el.style.opacity = '1';
            el.style.transform = 'none';
            return;
        }

        const delay = parseFloat(el.getAttribute('data-delay') || 0);

        const tween = gsap.fromTo(
            el,
            {
                opacity: 0,
                y: 32,
            },
            {
                opacity: 1,
                y: 0,
                duration: 0.95,
                delay: delay,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 88%',
                    toggleActions: 'play none none none',
                    once: true,
                },
            }
        );

        if (tween.scrollTrigger) {
            activeTriggers.push(tween.scrollTrigger);
        }
    });

    // 4. Staggered Group Reveals
    const staggerGroups = document.querySelectorAll('[data-stagger-group]');
    staggerGroups.forEach((group) => {
        const items = group.querySelectorAll('[data-stagger-item]');
        if (items.length === 0) return;

        if (prefersReducedMotion) {
            items.forEach((item) => {
                item.style.opacity = '1';
                item.style.transform = 'none';
            });
            return;
        }

        const tween = gsap.fromTo(
            items,
            {
                opacity: 0,
                y: 24,
            },
            {
                opacity: 1,
                y: 0,
                duration: 0.85,
                stagger: 0.1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: group,
                    start: 'top 85%',
                    toggleActions: 'play none none none',
                    once: true,
                },
            }
        );

        if (tween.scrollTrigger) {
            activeTriggers.push(tween.scrollTrigger);
        }
    });

    // 5. Subtle Parallax Imagery
    const parallaxImages = document.querySelectorAll('[data-parallax]');
    parallaxImages.forEach((img) => {
        if (prefersReducedMotion) return;

        const speed = parseFloat(img.getAttribute('data-parallax-speed') || 0.15);

        const tween = gsap.to(img, {
            yPercent: speed * 100,
            ease: 'none',
            scrollTrigger: {
                trigger: img,
                start: 'top bottom',
                end: 'bottom top',
                scrub: true,
            },
        });

        if (tween.scrollTrigger) {
            activeTriggers.push(tween.scrollTrigger);
        }
    });

    ScrollTrigger.refresh();
}

export function cleanupReveals() {
    activeTriggers.forEach((trigger) => {
        if (trigger && typeof trigger.kill === 'function') {
            trigger.kill();
        }
    });
    activeTriggers = [];
    ScrollTrigger.getAll().forEach((trigger) => trigger.kill());
}
