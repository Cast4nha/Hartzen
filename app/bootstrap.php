<?php

declare(strict_types=1);

// Configuração de erros
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Autoloader
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = __DIR__ . '/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});

// Inicializa a sessão
session_start();

// Define constantes
define('BASE_PATH', dirname(__DIR__));
define('APP_PATH', __DIR__);
define('PUBLIC_PATH', BASE_PATH . '/public');
define('VIEW_PATH', APP_PATH . '/Views'); 