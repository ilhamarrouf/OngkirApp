<?php

return [
    'settings' => [

        // Slim Configuration
        'displayErrorDetails' => true,

        'ongkir' => [
            'base_uri' => $_ENV['RAJAONGKIR_BASE_URI'],
            'headers' => [
                'key' => $_ENV['RAJAONGKIR_API_KEY']
            ],
        ],
    ]
];