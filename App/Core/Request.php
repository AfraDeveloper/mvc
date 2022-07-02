<?php

namespace App\Core;

class Request
{


    /**
     * @var mixed
     */

    private $method,$ip,$agent,$params;
    /**
     * @var false|string
     */
    private $uri;

    public function __construct()
    {
        $this->ip=$_SERVER["REMOTE_ADDR"];
        $this->params=$_REQUEST;
        $this->agent=$_SERVER["HTTP_USER_AGENT"];
        $this->method=strtolower($_SERVER["REQUEST_METHOD"]);
        $this->uri=strtok($_SERVER["REQUEST_URI"],"?");
    }

    public function input($key)
    {
        return $this->params[$key]?? null;
    }
    public function method()
    {
        return $this->method;
    }
    public function ip()
    {
        return $this->ip;
    }
    public function agent()
    {
        return $this->agent;
    }
    public function params()
    {
        return $this->params;
    }
  public function uri()
    {
        return $this->uri;
    }

    public function redirect($route)
    {
        header("location:".route($route));
    }

    public function __get($name)
    {
        return $this->params[$name] ?? null;
    }
}