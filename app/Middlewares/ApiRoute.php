<?php

namespace App\Middlewares;

use Slim\Exception\NotFoundException;

class ApiRoute extends Middleware
{
    public function __invoke($request, $response, $next)
    {
        foreach (explode(',', $request->getHeaderLine('Accept')) as $key => $accept) {
            if ($accept != 'application/json') {
                throw new NotFoundException($request, $response);
            }
        }

        return $next($request, $response);
    }
}