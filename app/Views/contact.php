<section class="page-header">
    <div class="page-header__content">
        <h1 class="page-header__title">Contato</h1>
        <p class="page-header__description">Entre em contato conosco para saber mais sobre nossas soluções</p>
    </div>
</section>

<section class="contact">
    <div class="contact__container">
        <div class="contact__info">
            <h2 class="contact__info-title">Informações de Contato</h2>
            <div class="contact__info-item">
                <i class="contact__info-icon">📧</i>
                <p>contato@hartzen.com.br</p>
            </div>
            <div class="contact__info-item">
                <i class="contact__info-icon">📱</i>
                <p>(11) 1234-5678</p>
            </div>
            <div class="contact__info-item">
                <i class="contact__info-icon">📍</i>
                <p>São Paulo, SP - Brasil</p>
            </div>
            
            <div class="contact__social">
                <h3 class="contact__social-title">Siga-nos</h3>
                <div class="contact__social-links">
                    <a href="#" class="contact__social-link">LinkedIn</a>
                    <a href="#" class="contact__social-link">Instagram</a>
                </div>
            </div>
        </div>

        <div class="contact__form-container">
            <?php if (isset($_GET['success'])): ?>
                <div class="alert alert--success">
                    Mensagem enviada com sucesso! Em breve entraremos em contato.
                </div>
            <?php endif; ?>

            <?php if (isset($_GET['error'])): ?>
                <div class="alert alert--error">
                    <?php
                    $error = $_GET['error'];
                    switch ($error) {
                        case 'validation':
                            echo 'Por favor, preencha todos os campos corretamente.';
                            break;
                        case 'send':
                            echo 'Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente.';
                            break;
                        case 'invalid':
                            echo 'Requisição inválida. Por favor, tente novamente.';
                            break;
                    }
                    ?>
                </div>
            <?php endif; ?>

            <form action="/contato/enviar" method="POST" class="contact-form">
                <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf_token) ?>">
                
                <div class="form-group">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" id="name" name="name" class="form-input" required>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-input" required>
                </div>

                <div class="form-group">
                    <label for="message" class="form-label">Mensagem</label>
                    <textarea id="message" name="message" class="form-input form-input--textarea" rows="5" required></textarea>
                </div>

                <button type="submit" class="form-button">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</section> 