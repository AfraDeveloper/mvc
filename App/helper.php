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

function str_contain($str,$needle,$case_sensitive){
    if($case_sensitive){
        $pos=strpos($str,$needle);
    }else{
        $pos=stripos($str,$needle);
    }

    return $pos !== false;
}

function dd($message){
    echo "<pre style='width:98%; margin:1rem auto;background: #171616; color: azure;font-size: 18px; 
border-radius: 8px;border: 1px solid crimson;border-left: 4px solid crimson;padding: 24px 8px'>";
    var_dump($message);
    echo "</pre>";
//    die();
}