<?php
namespace engine\Core\Route;

class Route
{
    /**
     * 
     * @var string
     * @example https://cms.com/
     */
    private $host;
    /**
     * 
     * @var unknown
     */
    private $dispatcher;
    /**
     * 
     * @var array
     */
    private $routes;
    /**
     * 
     * @param string $key
     * @param string $pattern
     * @param string $controller
     * @param string $method
     * @return array
     */
    public function add($key, $pattern, $controller, $method = 'GET')
    {
        $this->routes[$key] = [
            'pattern' => $pattern,
            'controller' => $controller,
            'method' => $method
        ];

        return $this->routes;
    }
    /**
     * 
     * @return array
     */
    public function getRoutes()
    {
        return $this->routes;
    }
    /**
     * 
     * @param unknown $method
     * @param unknown $uri
     */
    public function dispatch($method, $uri)
    {
        
    }

    public function getDispatcher()
    {
        if ($this->dispatcher == null) {}

        return $this->dispatcher;
    }
}

