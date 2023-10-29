<?php

namespace App\Core\Routing;

class Route
{
    private static $routes = [];

    public static function add($methods, $uri, $action)
    {
        $methods = is_array($methods) ? $methods : [$methods];
        self::$routes[] = ['methods' => $methods, 'uri' => $uri, 'action' => $action];
    }


    public static function get($uri, $action)
    {
        self::add('get', $uri, $action);
    }

    public static function post($uri, $action)
    {
        self::add('post', $uri, $action);
    }

    public static function put($uri, $action)
    {
        self::add('put', $uri, $action);
    }

    public static function delete($uri, $action)
    {
        self::add('delete', $uri, $action);
    }

    public static function routes()
    {
        return self::$routes;
    }
}
