<?php

namespace App\Controllers;

use App\Core\Controller;

class ServicesController extends Controller
{
    /**
     * @return void
     */
    public function index()
    {
        $services = require APP_PATH . '/Models/services_data.php';
        
        $this->render('services', [
            'title' => 'Serviços | ' . $this->config['site']['name'],
            'description' => 'Conheça nossos serviços de publicidade digital e soluções cloud.',
            'services' => $services,
        ]);
    }
} 