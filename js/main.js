// Inicializa as animações AOS
AOS.init({
    duration: 1000,
    once: true
});

// Adiciona classe active ao link da navbar ao scroll
document.addEventListener('DOMContentLoaded', function() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('.nav-link');

    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            if (pageYOffset >= sectionTop - 60) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href').substring(1) === current) {
                link.classList.add('active');
            }
        });
    });

    setupPartnersCarousel();
});

// Partners Carousel - Simplified version
function setupPartnersCarousel() {
    const track = document.querySelector('.partners-track');
    const originalItems = track.innerHTML;
    
    // Duplicate items for infinite scroll effect
    track.innerHTML = originalItems + originalItems;
} 