<?php
include_once "bootstrap/init.php";



$router=new \App\Core\Routing\Router();
$router->run();

//$route_pattern='/^\/post\/(?<slug>[-%\w]+)$/';
//$result=preg_match($route_pattern,"/post/198",$matches);
//dd($result);
//dd($matches);

//$route="/post/{slug}";
//$pattern="/^".str_replace(["/","{","}"],["\/","(?<",">[-%\w]+)"],$route)."$/";
//
//dd($route_pattern);
//dd($pattern);