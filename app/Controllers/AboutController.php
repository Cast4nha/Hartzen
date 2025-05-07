<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller
{
    public function index(): void
    {
        $this->render('about', [
            'title' => 'Sobre | ' . $this->config['site']['name'],
            'description' => 'Conheça a história e missão da Hartzen na transformação digital B2B.',
        ]);
    }
} 