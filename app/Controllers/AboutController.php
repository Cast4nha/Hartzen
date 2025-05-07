<?php

namespace App\Controllers;

use App\Core\Controller;

class AboutController extends Controller
{
    /**
     * @return void
     */
    public function index()
    {
        $this->render('about', [
            'title' => 'Sobre | ' . $this->config['site']['name'],
            'description' => 'Conheça a história e missão da Hartzen na transformação digital B2B.',
        ]);
    }
} 