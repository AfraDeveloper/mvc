<?php

namespace App\Middleware;

class GlobalMiddleware implements MiddlewareInterface
{

    public function handle()
    {
       $this->handleXss();
    }


    public function handleXss()
    {
        foreach ($_GET as $key => $value){
            $_GET[$key]= $this->xss_clean($value);
        }
    }

    private function xss_clean( $value)
    {
        return filter_var(htmlspecialchars($value),FILTER_SANITIZE_STRING);
    }
}