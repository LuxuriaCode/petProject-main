<?php
namespace App;

class Router {
    public array $list;
    public string $url;


    public function __construct() {
        $this->url = $_SERVER['REQUEST_URI'];
        $this->list = [];
    }

    public function get($link, $execution) {
        $this->list[] = [
            'path' => $link,
            'exec' => $execution
        ];
    }
    
    public function resolve() {
        foreach($this->list as $item) {
            if($this->url == $item['path']) {
                $class = new $item['exec'][0];
                $method = $item['exec'][1];

                return call_user_func(array($class, $method));
            }
        }
    }
}