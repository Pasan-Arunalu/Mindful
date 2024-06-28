window.addEventListener('scroll', function() {
    const pagetop = document.querySelector('.pagetop');
    let scrollPosition = window.scrollY;
    pagetop.style.backgroundPositionX = `${scrollPosition * 0.10}px`;
    pagetop.style.transform = `scale(1)`; // Slightly zoom in on the background image
});



document.addEventListener("DOMContentLoaded", function() {
  const reveals = document.querySelectorAll('.reveal');

  function checkReveal() {
    const triggerBottom = window.innerHeight * 0.8;

    reveals.forEach(reveal => {
      const boxTop = reveal.getBoundingClientRect().top;

      if (boxTop < triggerBottom) {
        reveal.classList.add('visible');
      } else {
        reveal.classList.remove('visible');
      }
    });
  }
  window.addEventListener('scroll', checkReveal);
  checkReveal(); // Initial check
});
