<?php

namespace App\Core\Routing;

use App\Core\Request;
use App\Middleware\GlobalMiddleware;

class Router
{
    private $routes,$current_route,$request;

    public function __construct()
    {
        $this->request=new Request();
        $this->routes=Route::routes();
        $this->current_route=$this->findRoute($this->request)??null;
        $this->run_global_middleware();
        $this->run_route_middleware();
    }
    
    

    private function findRoute(Request $request){

        foreach ($this->routes as $route){
            if(!in_array($request->method(),$route["methods"]) ){
              continue;
            }

            if($this->regex_matched($route)){

                return $route;
            }

        }
        return null;
    }

    public function dispatch404(){
        header("HTTP/1.0 404 not found");
         view("errors.404");
            die();

    }
    public function run()
    {

      if(is_null($this->current_route)){
        $this->dispatch404();
      }
      $this->dispatch($this->current_route);
    }


    private function dispatch($route){
        $action=$route["action"]??null;
        if(is_null($action) || empty($action)){
            return;
        }

        if(is_callable($action)){
                $action();
//                call_user_func($action);
        }

        if (is_string($action))
            $action=explode("@",$action);
        if(is_array($action)){
            $className="App\Controllers\\". $action[0];
            if(! class_exists($className)){
                throw new \Exception("Class $className not Exists!");
            }
            $controller=new $className();
            $method=$action[1];
            if(!method_exists($controller,$method))
                throw new \Exception("method $method not exists on class $controller");
            $controller->{$method}();
        }
    }

    private function run_route_middleware()
    {
       $middlewares=$this->current_route["middleware"];

       foreach ($middlewares as $middleware){
           $middleware_class="App\Middleware\\".$middleware;
           $middleware_object=new $middleware_class();
           $middleware_object->handle();
       }
    }

    private function run_global_middleware()
    {
        $globalMiddleware=new GlobalMiddleware();
        $globalMiddleware->handle();
    }

    private function regex_matched(mixed $route)
    {
        global $request;
        $pattern="/^".str_replace(["/","{","}"],["\/","(?<",">[-%\w]+)"],$route['uri'])."$/";
        $result=preg_match($pattern,$this->request->uri(),$matches);
        if(!$result){
            return false;
        }

        foreach($matches as $key => $value){
            if(! is_int($key)){
                $request->add_route_parame($key,$value);
            }
    }

        return true;
    }
}






















