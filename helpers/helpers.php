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
