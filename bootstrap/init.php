<?php

include_once "./vendor/autoload.php";
const BASE_PATH = __DIR__ . "/../";
$request=new \App\Core\Request();
$dotenv=\Dotenv\Dotenv::createImmutable(__DIR__."/../");
$dotenv->load();

include_once "./routes/web.php";