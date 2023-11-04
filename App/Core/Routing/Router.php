<?php

namespace App\Core\Routing;

use App\Core\Request;

class Router
{
    private $request;
    private $routes;
    private $currentRoute;

    const BASE_CONTROLLER = 'App\Controllers\\';

    public function __construct()
    {
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->currentRoute = $this->findRoute($this->request) ?? null;
        // var_dump($this->currentRoute);
    }

    public function findRoute(Request $request)
    {
        foreach ($this->routes as $route) {
            if (in_array($request->method(), $route['methods']) && $request->uri() == $route['uri']) {
                return $route;
            }
        }
        return null;
    }

    public function dispatch404()
    {
        header("HTTP/1.0 404 Not Found");
        viwe('errors.404');
        die();
    }

    private function dispatch()
    {
        // dd($this->currentRoute);
        $action = $this->currentRoute['action'];

        #action : null
        if (is_null($action)) {
            return false;
        }
        #action: clousure
        if (is_callable($action)) {
            $action();
        }
        #action: controller@method
        if (is_string($action)) {
            $action = explode('@', $action);
        }
        #action: ['controller','method']
        if (is_array($action)) {
            $className = self::BASE_CONTROLLER . $action[0];
            $method = $action[1];
            if (!class_exists($className)) {
                throw new \Exception('Class ' . $className . ' Not exists.');
            }

            $object = new $className();

            if (!method_exists($className, $method)) {
                throw new \Exception('Method ' . $method . ' Not exists.');
            }

            $object->$method();
        }
    }

    public function run()
    {
        #405 - invalid request method

        #404 - uri not exists
        if (is_null($this->currentRoute)) {
            $this->dispatch404();
        }

        $this->dispatch();
    }
}
