<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        $array=["name"=>"mvc"];
       view("index",$array);
    }

    public function post()
    {
        global $request;

        dd($request->getRouteParame("slug"));
    }

    public function comment()
    {
        global $request;
        dd($request->getRouteParame("comment"));
        dd($request->getRouteParame("post"));
    }
}