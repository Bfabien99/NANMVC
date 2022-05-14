<?php
namespace Mvcnan\Http;

class Request
{

    //Elle permet de connaitre la method qu'on utilise (get/post)
    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    //Retourne l'url
    public function path()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        dump($path);
        dump(explode('?', $path));
        return str_contains($path, '?') ? explode('?', $path)[0] : $path;
    }
}