<?php

function route($route=""){
    echo $_ENV['SITE_URL']."/$route";
}

function current_url(){
    return $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}

function current_route(){
    return strtok($_SERVER['REQUEST_URI'],"?");
}