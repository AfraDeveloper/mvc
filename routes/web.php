<?php
use App\Core\Routing\Route;
Route::add("post","post");
Route::get("/","HomeController@index");
Route::get("/a",function (){
    echo "ba";
});