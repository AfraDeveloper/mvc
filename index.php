<?php
include_once "vendor/autoload.php";
use App\Core\Request;
$request=new Request();
echo $_SERVER["REQUEST_URI"];