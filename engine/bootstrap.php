<?php

require_once (__DIR__ . '/../vendor/autoload.php');

use engine\DI\DI;
use engine\Cms;

try {
    
    $di = new DI();
    $cms = new Cms($di);
    
    $cms->run();
    
} catch (Exception $e) {
    echo $e->getMessage();
}