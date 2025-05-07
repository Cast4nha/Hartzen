<section class="page-header">
    <div class="page-header__content">
        <h1 class="page-header__title">Nossos Serviços</h1>
        <p class="page-header__description">Soluções completas para sua transformação digital</p>
    </div>
</section>

<section class="services-detail">
    <?php foreach ($services as $service): ?>
        <div class="service-card" id="<?= htmlspecialchars($service['id']) ?>">
            <div class="service-card__header">
                <img src="<?= htmlspecialchars($service['icon']) ?>" alt="<?= htmlspecialchars($service['title']) ?>" class="service-card__icon">
                <h2 class="service-card__title"><?= htmlspecialchars($service['title']) ?></h2>
            </div>
            
            <div class="service-card__content">
                <p class="service-card__description"><?= htmlspecialchars($service['description']) ?></p>
                
                <h3 class="service-card__features-title">Recursos</h3>
                <ul class="service-card__features-list">
                    <?php foreach ($service['features'] as $feature): ?>
                        <li class="service-card__feature"><?= htmlspecialchars($feature) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            
            <div class="service-card__footer">
                <a href="/contato" class="service-card__cta">Solicitar Proposta</a>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<section class="cta-section">
    <div class="cta-section__content">
        <h2 class="cta-section__title">Pronto para começar sua transformação digital?</h2>
        <p class="cta-section__description">Entre em contato conosco para uma consultoria personalizada.</p>
        <a href="/contato" class="cta-section__button">Fale com um Especialista</a>
    </div>
</section> 