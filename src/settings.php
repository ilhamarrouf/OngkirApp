<?php

return [
    'settings' => [

        // Slim Configuration
        'displayErrorDetails' => true,

        'ongkir' => [
            'base_uri' => 'http://pro.rajaongkir.com/api/',
            'headers' => [
                'key' => $_ENV['RAJAONGKIR_API_KEY']
            ],
        ],
    ]
];