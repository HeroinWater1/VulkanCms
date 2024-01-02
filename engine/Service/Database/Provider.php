<?php
namespace engine\Service\Database;

use engine\Service\AbstractProvider;
use engine\Core\Database\Connection;

class Provider extends AbstractProvider
{
    public $serviceName = 'db';
    
    public function init()
    {
        $config = require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
        
        $db = new Connection($config);

        
        $this->di->set($this->serviceName, $db);
        
    }

    
}

