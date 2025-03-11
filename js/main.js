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

// Partners Carousel - Implementação verdadeiramente contínua
function setupPartnersCarousel() {
    const track = document.querySelector('.partners-track');
    const originalItems = track.innerHTML;
    
    // Duplicar os itens para o efeito infinito
    track.innerHTML = originalItems + originalItems;
    
    // Obter a largura de um único conjunto de itens
    const itemWidth = track.scrollWidth / 2;
    
    // Posição inicial
    let position = 0;
    
    // Velocidade da animação (pixels por segundo)
    const speed = 40;
    
    // Timestamp da última atualização
    let lastTimestamp = 0;
    
    // Função de animação
    function animate(timestamp) {
        if (!lastTimestamp) lastTimestamp = timestamp;
        
        // Calcular o tempo decorrido desde a última atualização
        const elapsed = timestamp - lastTimestamp;
        
        // Atualizar a posição com base no tempo decorrido e na velocidade
        position -= (speed * elapsed) / 1000;
        
        // Se a posição ultrapassar a largura de um conjunto de itens, resetar
        if (Math.abs(position) >= itemWidth) {
            position = 0;
        }
        
        // Aplicar a transformação
        track.style.transform = `translateX(${position}px)`;
        
        // Atualizar o timestamp
        lastTimestamp = timestamp;
        
        // Continuar a animação
        requestAnimationFrame(animate);
    }
    
    // Iniciar a animação
    requestAnimationFrame(animate);
    
    // Pausar a animação quando o mouse estiver sobre o carrossel
    track.addEventListener('mouseenter', () => {
        track.style.animationPlayState = 'paused';
    });
    
    track.addEventListener('mouseleave', () => {
        track.style.animationPlayState = 'running';
    });
} 