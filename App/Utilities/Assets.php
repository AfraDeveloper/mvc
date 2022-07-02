<?php

namespace App\Utilities;

class Assets
{
    public static function get($path){
        return $_ENV['SITE_URL']."/assets/$path";
    }
}