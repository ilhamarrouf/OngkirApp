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
