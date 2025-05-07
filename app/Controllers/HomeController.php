<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    /**
     * @return void
     */
    public function index()
    {
        $this->render('home', [
            'title' => $this->config['site']['tagline'],
            'description' => $this->config['site']['description'],
        ]);
    }
} 