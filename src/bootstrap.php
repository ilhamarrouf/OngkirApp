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

/*
|--------------------------------------------------------------------------
| Cross origin resource sharing
|--------------------------------------------------------------------------
*/

$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
});