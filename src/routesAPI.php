<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

$app->get('/province', 'OngkirController:province');
$app->get('/city', 'OngkirController:city');
$app->get('/subdistrict', 'OngkirController:subdistrict');
$app->post('/cost', 'OngkirController:cost');
$app->get('/internationalOrigin', 'OngkirController:internationalOrigin');
$app->get('/internationalDestination', 'OngkirController:internationalDestination');
$app->post('/internationalCost', 'OngkirController:internationalCost');
$app->get('/currency', 'OngkirController:currency');
$app->post('/waybill', 'OngkirController:waybill');