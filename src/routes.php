<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

$app->get('/', function ($request, $response) {
    return 'For documentation : '. $_SERVER['SERVER_NAME'].'/docs :)';
});

$app->get('/docs', function ($request, $response) {
    return $response->withRedirect('https://gist.github.com/ilhamarrouf/f4603cb0322d106ed5d9a6ed5025ec35');
});

$app->group('/api', function () use ($app) {
    $app->get('/province', 'OngkirController:province');
    $app->get('/city', 'OngkirController:city');
    $app->get('/subdistrict', 'OngkirController:subdistrict');
    $app->post('/cost', 'OngkirController:cost');
    $app->get('/internationalOrigin', 'OngkirController:internationalOrigin');
    $app->get('/internationalDestination', 'OngkirController:internationalDestination');
    $app->post('/internationalCost', 'OngkirController:internationalCost');
    $app->get('/currency', 'OngkirController:currency');
    $app->post('/waybill', 'OngkirController:waybill');
});