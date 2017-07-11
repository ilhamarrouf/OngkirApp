<?php

$container = $app->getContainer();

/*
|--------------------------------------------------------------------------
| Registered Container Service
|--------------------------------------------------------------------------
*/

$container['client'] = function ($container) {
    $settings = $container->get('settings')['ongkir'];

    return new GuzzleHttp\Client([
        'base_uri' => $settings['base_uri'],
        'headers'  => $settings['headers'],
    ]);
};  

/*
|--------------------------------------------------------------------------
| Registered Controller
|--------------------------------------------------------------------------
*/

$container['OngkirController'] = function ($container) {
    return new App\Controllers\OngkirController($container);
};