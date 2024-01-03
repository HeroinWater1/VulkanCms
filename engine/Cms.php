<?php
namespace engine;

class Cms
{

    private $di;
    
    public $route;

    public function __construct($di)
    {   
        $this->route = $di->get('route');
        $this->di = $di;

    }

    public function run()
    {
        $this->route->add('home', '', 'HomeController:index');
        print_r($this->di);
        
        // TODO: Выводит пустые строки route
    }
}