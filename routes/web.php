<?php

use App\Core\Routing\Route;

Route::add('get','/',function(){
    echo "welcome";
});

Route::get('/','controller@index');

dd(Route::routes());