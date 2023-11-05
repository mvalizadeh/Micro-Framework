<?php

use App\Core\Routing\Route;
use App\Middleware\BlockFirefox;

Route::add('get','/',function(){
    echo "welcome";
});

Route::add('get','/home','HomeController@index',[BlockFirefox::class]);

Route::add('get','/test',function(){
    echo "welcome";
});

Route::add(['get','post'],'/admin',function(){
    echo "welcome to admin";
});

Route::get('/','controller@index');
