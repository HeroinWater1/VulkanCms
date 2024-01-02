<?php

require_once (__DIR__ . '/../vendor/autoload.php');

use engine\DI\DI;
use engine\Cms;

try {
    
    $di = new DI();
    
    $services = require 'Config/Service.php';
    
    foreach ($services as $service)
    {
        $provider = new $service($di);
        $provider->init();
    }
    
    
    $cms = new Cms($di);
    
    $cms->run();
    
} catch (Exception $e) {
    echo $e->getMessage();
}