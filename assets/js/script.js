const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');
let menuOpen = false;

// Define media query
const mediaQuery = window.matchMedia('(max-width: 768px)');

hamburger.addEventListener('click', () => {
  // Only run GSAP animations for mobile screens
  if (mediaQuery.matches) {
    if (!menuOpen) {
      navLinks.classList.add('active');
      gsap.fromTo(navLinks,
        { opacity: 0, y: -50 },
        { opacity: 1, y: 0, duration: 0.5, ease: "power2.out" }
      );
      menuOpen = true;
    } else {
      gsap.to(navLinks, {
        opacity: 0,
        y: -50,
        duration: 0.4,
        ease: "power2.in",
        onComplete: () => {
          navLinks.classList.remove('active');
        }
      });
      menuOpen = false;
    }
  } else {
    // Optional: handle desktop toggle logic here, if any
    console.log("Not applying mobile menu animation on desktop.");
  }
});
