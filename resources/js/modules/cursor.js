export function initCustomCursor() {
    // Only initialize on desktop devices with fine pointers
    if (!window.matchMedia('(hover: hover) and (pointer: fine)').matches) {
        return;
    }

    let dot = document.querySelector('.custom-cursor-dot');
    let ring = document.querySelector('.custom-cursor-ring');

    if (!dot) {
        dot = document.createElement('div');
        dot.className = 'custom-cursor-dot';
        document.body.appendChild(dot);
    }

    if (!ring) {
        ring = document.createElement('div');
        ring.className = 'custom-cursor-ring';
        document.body.appendChild(ring);
    }

    let mouseX = -100;
    let mouseY = -100;
    let ringX = -100;
    let ringY = -100;

    const onMouseMove = (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        dot.style.transform = `translate3d(${mouseX}px, ${mouseY}px, 0) translate(-50%, -50%)`;
    };

    window.addEventListener('mousemove', onMouseMove, { passive: true });

    let isRunning = true;
    const renderRing = () => {
        if (!isRunning) return;
        // Smooth interpolation for ring
        ringX += (mouseX - ringX) * 0.18;
        ringY += (mouseY - ringY) * 0.18;
        ring.style.transform = `translate3d(${ringX}px, ${ringY}px, 0) translate(-50%, -50%)`;
        requestAnimationFrame(renderRing);
    };
    requestAnimationFrame(renderRing);

    // Expand on links and buttons
    const bindHoverListeners = () => {
        const hoverTargets = document.querySelectorAll('a, button, input, textarea, select, [role="button"], [data-cursor-hover]');
        hoverTargets.forEach((target) => {
            target.addEventListener('mouseenter', () => {
                document.body.classList.add('cursor-hover');
            });
            target.addEventListener('mouseleave', () => {
                document.body.classList.remove('cursor-hover');
            });
        });
    };

    bindHoverListeners();

    // Re-bind when Swup replaces DOM
    window.addEventListener('rebind-cursor', bindHoverListeners);
}
