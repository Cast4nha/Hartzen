<?php

return [
    'site' => [
        'name' => 'Hartzen',
        'tagline' => 'Hartzen | Transformação B2B',
        'description' => 'Excelência em publicidade digital e soluções cloud. Facilitando a transformação digital de empresas ao redor do mundo.',
        'url' => 'https://hartzen.com.br',
    ],
    'mail' => [
        'from' => 'contato@hartzen.com.br',
        'to' => 'contato@hartzen.com.br',
    ],
    'routes' => [
        '/' => 'HomeController@index',
        '/sobre' => 'AboutController@index',
        '/servicos' => 'ServicesController@index',
        '/contato' => 'ContactController@index',
    ],
]; 