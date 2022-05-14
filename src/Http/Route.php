<?php
namespace Mvcnan\Http;

class Route{
    
    public $response;
    public $request;

    public function __construct(Request $request, Response $response){
        $this->request = $request;
        $this->response = $response;
    }

    public static $routes = [];

    public static function get($route, $action){
        self::$routes['get'][$route] = $action;
    }

    public static function post($route, $action){
        self::$routes['post'][$route] = $action;
    }

    public function resolve()
    {
        $path = $this->request->path();
        $method = $this->request->method();
        $action= self::$routes[$method][$path] ?? false;

        if(!$action){
            return;
        }

        //404 handling

        if(is_callable($action)){
            call_user_func_array($action, []);
        }
        elseif(is_array($action)){
            call_user_func_array([new $action[0], $action[1]],[]);
        }

    }

}