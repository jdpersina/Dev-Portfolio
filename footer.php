<footer class="mt-auto border-t border-zinc-800 py-6 flex items-center justify-center">
    <p class="font-mono text-xs tracking-wider text-zinc-500">Copyright 2026 Dan</p>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
<script>
    gsap.registerPlugin(ScrollTrigger);
    const header = document.getElementById('site-header');
    const blogSubHeader = document.getElementById('blog-sub-header');
    // Set up listener for scroll position
    ScrollTrigger.create({
        start: 0,
        end: 'max',
        onUpdate: (self) => {
            // scroll down
            if (self.direction === 1 && self.scroll() > header.offsetHeight) {
                gsap.to(header, { yPercent: -100, duration: 0.6, ease: 'power2.out' });
                if (blogSubHeader) {
                    gsap.to(blogSubHeader, { top: 0, duration: 0.5, ease: 'power2.out' });                
                }
            // scroll up
            } else if (self.direction === -1) {
                gsap.to(header, { yPercent: 0, duration: 0.6, ease: 'power2.out' });
                if (blogSubHeader) {
                    gsap.to(blogSubHeader, { top: header.offsetHeight, duration: 0.6, ease: 'power2.out' });
                }
            }
        }
    });
</script>
<script>
    gsap.from(".hero-text", {opacity: 0, y: 20, duration: 3, ease: "power2.out", stagger: 0.6});
</script>
</body>
</html>