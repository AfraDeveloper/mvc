<?php

namespace App\Core\Routing;

class Route
{
    private static $routes=[];

    public static function add($method,$uri,$action=null)
    {
        $methods=is_array($method)?$method:[$method];
        self::$routes[]=["methods"=>$methods,"uri"=>$uri,"action"=>$action];
    }

    public static function get($uri,$action=null)
    {
        self::add("get",$uri,$action);
    }
    public static function post($uri,$action=null)
    {
        self::add("post",$uri,$action);
    }
    public static function put($uri,$action=null)
    {
        self::add("put",$uri,$action);
    }
    public static function patch($uri,$action=null)
    {
        self::add("patch",$uri,$action);
    }
    public static function delete($uri,$action=null)
    {
        self::add("delete",$uri,$action);
    }

    public static function routes()
    {
        return self::$routes;
    }
}