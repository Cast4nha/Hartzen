<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página não encontrada | Hartzen</title>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body>
    <div class="error-page">
        <div class="error-page__content">
            <h1 class="error-page__title">404</h1>
            <h2 class="error-page__subtitle">Página não encontrada</h2>
            <p class="error-page__text">
                A página que você está procurando não existe ou foi movida.
            </p>
            <a href="/" class="error-page__button">Voltar para a Home</a>
        </div>
    </div>

    <style>
        .error-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem;
            background: linear-gradient(135deg, var(--color-primary), var(--color-secondary));
            color: var(--color-light);
        }

        .error-page__title {
            font-size: 6rem;
            margin: 0;
            line-height: 1;
        }

        .error-page__subtitle {
            font-size: 2rem;
            margin: 1rem 0;
        }

        .error-page__text {
            margin-bottom: 2rem;
        }

        .error-page__button {
            display: inline-block;
            padding: 1rem 2rem;
            background: var(--color-light);
            color: var(--color-primary);
            text-decoration: none;
            border-radius: 4px;
            font-weight: 600;
            transition: transform 0.3s;
        }

        .error-page__button:hover {
            transform: translateY(-2px);
        }
    </style>
</body>
</html> 