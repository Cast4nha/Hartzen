<?php

// Verificação de versão do PHP
if (version_compare(PHP_VERSION, '5.6.0', '<')) {
    die('Este sistema requer PHP 5.6.0 ou superior. Sua versão atual é ' . PHP_VERSION);
}

// Definir constantes de diretório
define('BASE_PATH', __DIR__);
define('APP_PATH', __DIR__ . '/app');
define('CONFIG_PATH', __DIR__ . '/config');
define('VIEW_PATH', APP_PATH . '/Views');
define('PUBLIC_PATH', __DIR__);

// Configuração de erros para desenvolvimento
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Autoloader
spl_autoload_register(function ($class) {
    $prefix = 'App\\';
    $base_dir = APP_PATH . '/';

    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    } else {
        error_log("Arquivo não encontrado: " . $file);
    }
});

// Inicializa a sessão
session_start();

// Carrega as classes principais
use App\Core\Router;
use App\Core\Request;

try {
    // Inicializa o roteador
    $router = new Router();

    // Carrega as configurações
    $config = require CONFIG_PATH . '/config.php';

    // Processa a requisição
    $request = new Request();
    $router->dispatch($request);
} catch (Exception $e) {
    // Log do erro
    error_log($e->getMessage());
    
    // Exibe uma mensagem de erro amigável
    http_response_code(500);
    if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest') {
        header('Content-Type: application/json');
        echo json_encode(['error' => 'Ocorreu um erro interno no servidor.']);
    } else {
        require VIEW_PATH . '/errors/500.php';
    }
} 