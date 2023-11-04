<?php


function url($route)
{
    return $_ENV['BASE_URL'] . $route;
}

function asset($route)
{
    return url('assets/' . $route);
}


function dd($var)
{
    echo '<pre>';
    var_dump($var);
    exit;
}


function viwe($path)
{
    $path = BASE_PATH . '/views/' . str_replace('.', '/', $path) . '.php';
    include_once $path;
}
