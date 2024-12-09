document.addEventListener('DOMContentLoaded', function () {
    const lenis = new Lenis({
        // Your configuration options here
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Ease-out effect
        smoothWheel: true,
        smoothTouch: true,
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);
});