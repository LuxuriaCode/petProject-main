<?php
error_reporting(E_ALL);
define('ROOTPATH', __DIR__);

require __DIR__.'/App/App.php';

App::init();
App::$kernel->launch();