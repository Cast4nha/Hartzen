<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars(isset($title) ? $title : 'Hartzen | Transformação B2B') ?></title>
    <meta name="description" content="<?= htmlspecialchars(isset($description) ? $description : 'Excelência em publicidade digital e soluções cloud') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="icon" type="image/png" href="/images/png/favicon.png">
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <picture>
                        <source media="(prefers-color-scheme: dark)" srcset="/images/png/logo-white.png">
                        <source media="(prefers-color-scheme: light)" srcset="/images/png/logo-color.png">
                        <img src="/images/png/logo-color.png" alt="Hartzen Logo" class="nav__logo-img">
                    </picture>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="/sobre" class="nav-link">Sobre</a></li>
                        <li class="nav-item"><a href="/servicos" class="nav-link">Serviços</a></li>
                        <li class="nav-item"><a href="/contato" class="nav-link">Contato</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main class="main"> 