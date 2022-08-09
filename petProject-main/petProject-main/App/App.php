<?php

use App\Router;
use App\Kernel;

class App {
        
    public static $router;
    
    public static $kernel;
    
    public static function init()
    {
        spl_autoload_register(['static','loadClass']);
        static::bootstrap();
    }
    
    public static function bootstrap()
    {
        static::$router = new Router;
        static::$kernel = new Kernel;
    }
    
    public static function loadClass($className)
    {
        $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
        require_once ROOTPATH.DIRECTORY_SEPARATOR.$className.'.php';
    }
}