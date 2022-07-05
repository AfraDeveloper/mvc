<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        global $request;
        $array=["name"=>"mvc"];
       view("index",$array);
    }

    public function post()
    {
        global $request;

        var_dump($request->input("name"));
    }

    public function comment()
    {
        global $request;
        dd($request->getRouteParame("comment"));
        dd($request->getRouteParame("post"));
    }
}