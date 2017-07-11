<?php

require __DIR__ . './../vendor/autoload.php';

try {
    (new Dotenv\Dotenv(__DIR__.'/../'))->load();
} catch (Dotenv\Exception\InvalidPathException $e) {
    //
}

$settings = require __DIR__ . './../src/settings.php';

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
*/

$app = new Slim\App($settings);

/*
|--------------------------------------------------------------------------
| Load The Container Services
|--------------------------------------------------------------------------
*/

require __DIR__ . './../src/container.php';

/*
|--------------------------------------------------------------------------
| Load The Application Routes
|--------------------------------------------------------------------------
*/

require __DIR__ . './../src/routes.php';