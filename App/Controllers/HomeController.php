<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        $array=["name"=>"mvc"];
       view("index",$array);
    }
}