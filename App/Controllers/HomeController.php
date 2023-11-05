<?php

namespace App\Controllers;

class HomeController
{
    public function index()
    {
        // $data = [
        //     'tasks' => ['task-1' => 'task-1', 'task-2' => 'task-2']
        // ];
        // viwe('home',$data);
        global $request;
        $slug = $request->get_route_param('slug');
        var_dump($slug);
    }
}
