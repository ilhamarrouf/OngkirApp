<?php

require __DIR__ . './../vendor/autoload.php';

try {
    (new \Dotenv\Dotenv(__DIR__.'/../'))->load();
} catch (\Dotenv\Exception\InvalidPathException $e) {
    //
}

$settings = require __DIR__ . './../src/settings.php';

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
*/

$app = new \Slim\App($settings);

/*
|--------------------------------------------------------------------------
| Initialization and Load Container Services
|--------------------------------------------------------------------------
*/

$container = $app->getContainer();

require __DIR__ . './../src/container.php';

/*
|--------------------------------------------------------------------------
| Load The Application Routes
|--------------------------------------------------------------------------
*/

$app->group('', function () use ($app) {
    require __DIR__ . './../src/routesWeb.php';
});

$app->group('/api', function () use ($app) {
    require __DIR__ . './../src/routesAPI.php';
})->add(new \App\Middlewares\ApiRoute($container));