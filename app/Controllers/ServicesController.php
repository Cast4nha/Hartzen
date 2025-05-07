<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

class ServicesController extends Controller
{
    public function index(): void
    {
        $services = require APP_PATH . '/Models/services_data.php';
        
        $this->render('services', [
            'title' => 'Serviços | ' . $this->config['site']['name'],
            'description' => 'Conheça nossos serviços de publicidade digital e soluções cloud.',
            'services' => $services,
        ]);
    }
} 