<?php

namespace App\Core;

abstract class Controller
{
    /**
     * @var array
     */
    protected $config;

    /**
     * @var array
     */
    protected $data = [];

    public function __construct()
    {
        $this->config = require CONFIG_PATH . '/config.php';
    }

    /**
     * @param string $view
     * @param array $data
     * @return void
     */
    protected function render($view, $data = [])
    {
        try {
            $this->data = array_merge($this->data, $data);
            extract($this->data);

            $viewFile = VIEW_PATH . "/{$view}.php";
            
            if (!file_exists($viewFile)) {
                throw new \RuntimeException("View {$view} not found");
            }

            require VIEW_PATH . '/layouts/header.php';
            require $viewFile;
            require VIEW_PATH . '/layouts/footer.php';
        } catch (\Exception $e) {
            error_log($e->getMessage());
            http_response_code(500);
            require VIEW_PATH . '/errors/500.php';
        }
    }

    /**
     * @return string
     */
    protected function generateCsrfToken()
    {
        $token = bin2hex(random_bytes(32));
        $_SESSION['csrf_token'] = $token;
        return $token;
    }

    /**
     * @param string $path
     * @return void
     */
    protected function redirect($path)
    {
        header("Location: {$path}");
        exit;
    }
} 