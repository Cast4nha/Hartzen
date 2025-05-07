document.addEventListener('DOMContentLoaded', () => {
    // Smooth scrolling para links internos
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        });
    });

    // Validação do formulário de contato
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const name = this.querySelector('[name="name"]');
            const email = this.querySelector('[name="email"]');
            const message = this.querySelector('[name="message"]');
            let isValid = true;

            // Validação básica
            if (!name.value.trim()) {
                showError(name, 'Por favor, insira seu nome');
                isValid = false;
            } else {
                removeError(name);
            }

            if (!email.value.trim()) {
                showError(email, 'Por favor, insira seu email');
                isValid = false;
            } else if (!isValidEmail(email.value)) {
                showError(email, 'Por favor, insira um email válido');
                isValid = false;
            } else {
                removeError(email);
            }

            if (!message.value.trim()) {
                showError(message, 'Por favor, insira sua mensagem');
                isValid = false;
            } else {
                removeError(message);
            }

            if (isValid) {
                this.submit();
            }
        });
    }
});

// Funções auxiliares
function showError(input, message) {
    const formGroup = input.closest('.form-group');
    const error = formGroup.querySelector('.error-message') || document.createElement('div');
    error.className = 'error-message';
    error.textContent = message;
    if (!formGroup.querySelector('.error-message')) {
        formGroup.appendChild(error);
    }
    input.classList.add('error');
}

function removeError(input) {
    const formGroup = input.closest('.form-group');
    const error = formGroup.querySelector('.error-message');
    if (error) {
        error.remove();
    }
    input.classList.remove('error');
}

function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

// Animação de scroll
window.addEventListener('scroll', () => {
    const header = document.querySelector('.header');
    if (window.scrollY > 50) {
        header.classList.add('header--scrolled');
    } else {
        header.classList.remove('header--scrolled');
    }
}); 