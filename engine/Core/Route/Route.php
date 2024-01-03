<?php
namespace engine\Core\Route;

class Route
{
    private $host;
    private $routes;
    
    public function add($key, $pattern, $controller, $method='GET')
    {
        $routes[$key] = [
            'pattern' => $pattern,
            'controller' => $controller,
            'method' => $method
        ];
        
        return $this->routes;
    }
}

