<?php
use App\Core\Routing\Route;
//Route::add("post","post");
//Route::add("get","post/{slug}");
Route::get("/","HomeController@index",["Auth"]);
Route::get("/post/{slug}","HomeController@post",["Auth"]);
Route::get("/post/{post}/comment/{comment}","HomeController@comment");

//Route::get("/a",function (){
//    echo "ba";
//});