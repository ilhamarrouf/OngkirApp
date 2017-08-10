<?php

namespace App\Middlewares;

abstract class Middleware
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }
}