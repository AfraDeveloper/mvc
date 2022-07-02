<?php

function view($view,$data=[]): void
{
    extract($data);
    $view=str_replace(".","/",$view);
    $basePath=$_ENV["SITE_URL"]."/views/";
    $viewPath=$view.".php";
    include_once "./views/$viewPath";
}
