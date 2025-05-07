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
    <link rel="stylesheet" href="/css/main.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
</head>
<body>
    <header class="header">
        <nav class="nav">
            <div class="nav__logo">
                <a href="/">
                    <img src="/images/logo.png" alt="Hartzen Logo" class="nav__logo-img">
                </a>
            </div>
            <ul class="nav__menu">
                <li class="nav__item"><a href="/" class="nav__link">Home</a></li>
                <li class="nav__item"><a href="/sobre" class="nav__link">Sobre</a></li>
                <li class="nav__item"><a href="/servicos" class="nav__link">Serviços</a></li>
                <li class="nav__item"><a href="/contato" class="nav__link">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main class="main"> 