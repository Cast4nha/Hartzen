<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;

class ContactController extends Controller
{
    /**
     * @return void
     */
    public function index()
    {
        $this->render('contact', [
            'title' => 'Contato | ' . $this->config['site']['name'],
            'description' => 'Entre em contato com a Hartzen para soluções em transformação digital B2B.',
            'csrf_token' => $this->generateCsrfToken(),
        ]);
    }

    /**
     * @return void
     */
    public function send()
    {
        $request = new Request();
        
        if (!$request->isPost() || !$request->validateToken()) {
            $this->redirect('/contato?error=invalid');
            return;
        }

        $name = filter_var($request->getPost('name'), FILTER_SANITIZE_STRING);
        $email = filter_var($request->getPost('email'), FILTER_SANITIZE_EMAIL);
        $message = filter_var($request->getPost('message'), FILTER_SANITIZE_STRING);

        if (!$name || !$email || !$message || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->redirect('/contato?error=validation');
            return;
        }

        $to = $this->config['mail']['to'];
        $subject = "Contato via Site - {$name}";
        $headers = [
            'From' => $this->config['mail']['from'],
            'Reply-To' => $email,
            'X-Mailer' => 'PHP/' . phpversion(),
            'Content-Type' => 'text/html; charset=UTF-8'
        ];

        $emailBody = "
            <html>
            <body>
                <h2>Novo contato via site</h2>
                <p><strong>Nome:</strong> {$name}</p>
                <p><strong>Email:</strong> {$email}</p>
                <p><strong>Mensagem:</strong></p>
                <p>{$message}</p>
            </body>
            </html>
        ";

        $success = mail($to, $subject, $emailBody, $headers);

        if ($success) {
            $this->redirect('/contato?success=1');
        } else {
            $this->redirect('/contato?error=send');
        }
    }
} 