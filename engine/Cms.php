<?php
namespace engine;

use engine\DI\DI;

class Cms
{
    private $di;
    public $route;
    /**
     * 
     * @param DI $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->route = $di->get('route');
    }
    /**
     * Run the Project code
     */
    public function run()
    {
        $this->route->add('home', '', 'HomeController:index');
        print_r($this->di);
        
    }
}
