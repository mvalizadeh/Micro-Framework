<?php

namespace App\Core;

class Request
{
    private $params;
    private $method;
    private $uri;
    private $route_params;
    public function __construct()
    {
        $this->params = $_REQUEST;
        $this->method = strtolower($_SERVER['REQUEST_METHOD']);
        $this->uri = $_SERVER['REQUEST_URI'];
    }

    public function add_route_param($key, $value)
    {
        $this->route_params[$key] = $value;
    }
    public function get_route_param($key)
    {
        return $this->route_params[$key];
    }
    public function get_route_params($key)
    {
        return $this->route_params;
    }

    public function params()
    {
        return $this->params;
    }

    public function method()
    {
        return $this->method;
    }

    public function uri()
    {
        $this->uri = strtok($this->uri, '?');
        $this->uri = str_replace($_ENV['PROJECT_NAME'] . '/', '', $this->uri);
        return $this->uri;
    }
}
