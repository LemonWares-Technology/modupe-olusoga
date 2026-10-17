import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

// Track ALL active tweens, not just scroll triggers
let activeTweens = [];
let activeTriggers = [];

export function initReveals() {
    cleanupReveals();

    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // ─────────────────────────────────────────────────────────
    // 1. HERO H1 ENTRANCE — simple stagger per line
    //    No word-wrapping, no CSS default state that hides text.
    //    Text is always visible; GSAP enhances it, doesn't gate it.
    // ─────────────────────────────────────────────────────────
    const heroHeadings = document.querySelectorAll('[data-hero-heading]');

    heroHeadings.forEach((el) => {
        if (prefersReducedMotion) return;

        // Animate the heading as a whole — clean, reliable
        const tween = gsap.fromTo(
            el,
            { opacity: 0, y: 32, skewY: 1 },
            {
                opacity: 1,
                y: 0,
                skewY: 0,
                duration: 1.1,
                ease: 'power4.out',
                delay: 0.1,
                clearProps: 'opacity,transform,visibility',
            }
        );
        activeTweens.push(tween);
    });

    // ─────────────────────────────────────────────────────────
    // 2. HERO SUPPORTING ELEMENTS (top bar, meta, CTA row)
    // ─────────────────────────────────────────────────────────
    const heroElements = document.querySelectorAll('[data-reveal-hero]');

    if (heroElements.length > 0 && !prefersReducedMotion) {
        const tween = gsap.fromTo(
            heroElements,
            { opacity: 0, y: 16 },
            {
                opacity: 1,
                y: 0,
                duration: 0.85,
                ease: 'power3.out',
                stagger: 0.08,
                delay: 0.3,
                clearProps: 'opacity,transform,visibility',
            }
        );
        activeTweens.push(tween);
    }

    // ─────────────────────────────────────────────────────────
    // 3. IMAGE WIPE — left-to-right clip-path reveal
    //    Hero images fire immediately; all others on scroll.
    // ─────────────────────────────────────────────────────────
    const imageWipeEls = document.querySelectorAll('[data-image-wipe]');

    imageWipeEls.forEach((container) => {
        if (prefersReducedMotion) return;

        const isHero = container.closest('#hero') !== null;

        if (isHero) {
            const tween = gsap.fromTo(
                container,
                { clipPath: 'inset(0 100% 0 0)' },
                {
                    clipPath: 'inset(0 0% 0 0)',
                    duration: 1.2,
                    ease: 'power4.inOut',
                    delay: 0.25,
                    clearProps: 'clipPath',
                }
            );
            activeTweens.push(tween);
        } else {
            const tween = gsap.fromTo(
                container,
                { clipPath: 'inset(0 100% 0 0)' },
                {
                    clipPath: 'inset(0 0% 0 0)',
                    duration: 1.1,
                    ease: 'power4.inOut',
                    clearProps: 'clipPath',
                    scrollTrigger: {
                        trigger: container,
                        start: 'top 82%',
                        toggleActions: 'play none none none',
                        once: true,
                    },
                }
            );
            if (tween.scrollTrigger) activeTriggers.push(tween.scrollTrigger);
            activeTweens.push(tween);
        }
    });

    // ─────────────────────────────────────────────────────────
    // 4. GENERIC SCROLL REVEALS — [data-reveal]
    //    Start slightly visible (opacity 0) not completely hidden
    //    so there's no content-jump if JS is slow to load.
    // ─────────────────────────────────────────────────────────
    const revealEls = document.querySelectorAll('[data-reveal]');

    revealEls.forEach((el) => {
        if (prefersReducedMotion) {
            el.style.opacity = '1';
            el.style.transform = 'none';
            return;
        }

        const delay = parseFloat(el.getAttribute('data-delay') || 0);

        const tween = gsap.fromTo(
            el,
            { opacity: 0, y: 24 },
            {
                opacity: 1,
                y: 0,
                duration: 0.9,
                delay,
                ease: 'power3.out',
                clearProps: 'opacity,transform,visibility',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 88%',
                    toggleActions: 'play none none none',
                    once: true,
                },
            }
        );
        if (tween.scrollTrigger) activeTriggers.push(tween.scrollTrigger);
        activeTweens.push(tween);
    });

    // ─────────────────────────────────────────────────────────
    // 5. STAGGER GROUPS
    // ─────────────────────────────────────────────────────────
    const staggerGroups = document.querySelectorAll('[data-stagger-group]');

    staggerGroups.forEach((group) => {
        const items = group.querySelectorAll('[data-stagger-item]');
        if (!items.length) return;

        if (prefersReducedMotion) {
            items.forEach((item) => {
                item.style.opacity = '1';
                item.style.transform = 'none';
            });
            return;
        }

        const tween = gsap.fromTo(
            items,
            { opacity: 0, y: 20 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                stagger: 0.08,
                ease: 'power3.out',
                clearProps: 'opacity,transform,visibility',
                scrollTrigger: {
                    trigger: group,
                    start: 'top 85%',
                    toggleActions: 'play none none none',
                    once: true,
                },
            }
        );
        if (tween.scrollTrigger) activeTriggers.push(tween.scrollTrigger);
        activeTweens.push(tween);
    });

    // ─────────────────────────────────────────────────────────
    // 6. PARALLAX
    // ─────────────────────────────────────────────────────────
    const parallaxImages = document.querySelectorAll('[data-parallax]');

    parallaxImages.forEach((img) => {
        if (prefersReducedMotion) return;

        const speed = parseFloat(img.getAttribute('data-parallax-speed') || 0.12);

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
        if (tween.scrollTrigger) activeTriggers.push(tween.scrollTrigger);
        activeTweens.push(tween);
    });

    ScrollTrigger.refresh();
}

export function cleanupReveals() {
    // Kill all tweens (not just scroll ones)
    activeTweens.forEach((t) => {
        if (t && typeof t.kill === 'function') t.kill();
    });
    activeTweens = [];

    // Kill all scroll triggers
    activeTriggers.forEach((trigger) => {
        if (trigger && typeof trigger.kill === 'function') trigger.kill();
    });
    activeTriggers = [];

    // Kill any orphaned ScrollTriggers
    ScrollTrigger.getAll().forEach((t) => t.kill());
}
