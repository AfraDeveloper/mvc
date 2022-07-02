<?php

include_once "./vendor/autoload.php";
include_once "./routes/web.php";
$request=new \App\Core\Request();
$dotenv=\Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();
