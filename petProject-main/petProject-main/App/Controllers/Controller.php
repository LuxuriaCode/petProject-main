<?php

namespace App\Controllers;

class Controller {
    public function renderLayout($body) 
    {
        ob_start();
        require ROOTPATH.DIRECTORY_SEPARATOR.'App'.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR."Layout.php";
        return ob_get_clean();
    }
    
    public function render($viewName, array $params = [])
    {
        $viewFile = ROOTPATH.DIRECTORY_SEPARATOR.'App'.DIRECTORY_SEPARATOR.'Views'.DIRECTORY_SEPARATOR.$viewName.'.php';
        extract($params);
        ob_start();
        require $viewFile;
        $body = ob_get_clean();
        ob_end_clean();
        echo $this->renderLayout($body);
        return null;
    }
}