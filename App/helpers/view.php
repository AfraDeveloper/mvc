<?php

function view($view): void
{
    $view=str_replace(".","/",$view);
    $basePath=$_ENV["SITE_URL"]."/views/";
    $viewPath=$view.".php";
    include_once "./views/$viewPath";
}
