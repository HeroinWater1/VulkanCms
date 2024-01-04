<?php
namespace engine\Core\Route;

class Route
{
    private $host;
    private $routes;
    
    public function add($key, $pattern, $controller, $method='GET')
    {
        $this->routes[$key] = [
            'pattern' => $pattern,
            'controller' => $controller,
            'method' => $method
        ];
        
        return $this->routes;
    }
    
    public function getRoutes()
    {
        return $this->routes;
    }
}

