<?php

namespace App\Core;

class Request
{
    /**
     * @var string
     */
    private $path;

    /**
     * @var array
     */
    private $get;

    /**
     * @var array
     */
    private $post;

    public function __construct()
    {
        $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $this->path = $path ? $path : '/';
        $this->get = $_GET;
        $this->post = $_POST;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getQuery($key, $default = null)
    {
        return isset($this->get[$key]) ? $this->get[$key] : $default;
    }

    /**
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    public function getPost($key, $default = null)
    {
        return isset($this->post[$key]) ? $this->post[$key] : $default;
    }

    /**
     * @return bool
     */
    public function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] === 'POST';
    }

    /**
     * @return bool
     */
    public function validateToken()
    {
        if (!$this->isPost()) {
            return true;
        }

        $token = $this->getPost('csrf_token');
        return $token && hash_equals($_SESSION['csrf_token'], $token);
    }
} 