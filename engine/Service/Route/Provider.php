<?php
namespace engine\Service\Route;

use engine\Service\AbstractProvider;
use engine\Core\Route\Route;

class Provider extends AbstractProvider
{
    public $serviceName = 'route';
    
    public function init()
    {
        $route = new Route('vulkan/');
        
        $this->di->set($this->serviceName, $route);
        
    }

    
}

