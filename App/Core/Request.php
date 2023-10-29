<?php

namespace App\Core;

class Request
{
    private $params;
    private $method;
    private $uri;
    public function __construct()
    {
        $this->params = $_REQUEST;
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->uri = $_SERVER['REQUEST_URI'];
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
        return $this->uri;
    }
}
