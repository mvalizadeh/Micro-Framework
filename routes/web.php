<?php

use App\Core\Routing\Route;

Route::add('get','/',function(){
    echo "welcome";
});

Route::get('/home','HomeController@index');

Route::add('get','/test',function(){
    echo "welcome";
});

Route::add(['get','post'],'/admin',function(){
    echo "welcome to admin";
});

Route::get('/','controller@index');

// dd(Route::routes());