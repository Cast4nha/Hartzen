<?php

namespace App\Core;

class Router
{
    /**
     * @var array
     */
    private $routes;

    /**
     * @var array
     */
    private $config;

    public function __construct()
    {
        $this->config = require CONFIG_PATH . '/config.php';
        $this->routes = $this->config['routes'];
    }

    /**
     * @param Request $request
     * @return void
     */
    public function dispatch($request)
    {
        try {
            $path = $request->getPath();
            
            if (!isset($this->routes[$path])) {
                $this->handleNotFound();
                return;
            }

            list($controller, $method) = explode('@', $this->routes[$path]);
            $controllerClass = "App\\Controllers\\{$controller}";

            if (!class_exists($controllerClass)) {
                $this->handleNotFound();
                return;
            }

            $controllerInstance = new $controllerClass();
            
            if (!method_exists($controllerInstance, $method)) {
                $this->handleNotFound();
                return;
            }

            $controllerInstance->$method();
        } catch (\Exception $e) {
            error_log($e->getMessage());
            $this->handleError();
        }
    }

    /**
     * @return void
     */
    private function handleNotFound()
    {
        http_response_code(404);
        require VIEW_PATH . '/errors/404.php';
    }

    /**
     * @return void
     */
    private function handleError()
    {
        http_response_code(500);
        require VIEW_PATH . '/errors/500.php';
    }
} 