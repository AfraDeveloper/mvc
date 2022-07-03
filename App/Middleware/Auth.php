<?php

namespace App\Middleware;

class Auth implements MiddlewareInterface
{
    public function handle()
    {
        die("403 forbidden");
    }
}