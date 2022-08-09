<?php

namespace App;

use App;
use App\Controllers\HomeController;
use App\Controllers\BlogController;

class Kernel 
{
    public function launch() {
        App::$router->get('/', [HomeController::class, 'index']);
        App::$router->get('/blog', [BlogController::class, 'index']);
        App::$router->get('/blog/create', [BlogController::class, 'create']);

        App::$router->resolve();
    }
}