<?php
namespace engine\Core\Route;

class UriDispatcher
{
    /**
     * 
     * @var array
     */
    private $methods = [
        'GET',
        'POST'
    ];
    /**
     * 
     * @var array
     */
    private $routes = [
        'GET' => [],
        'POST' => []
    ];
    /**
     * 
     * @var array
     */
    private $patterns = [
        'int' => '[0-9]+',
        'str' => '[a-zA-Z\.\-_%]',
        'any' => '[0-9a-zA-Z\.\-_%]+'
    ];
    /**
     * 
     * @param string $key
     */
    public function addPattern($key)
    {
        $this->patterns[$key] = $pattern;
    }
    /**
     * 
     * @param string $method
     * @return array
     */
    private function routes($method)
    {
        return isset($this->routes[$method]) ? $routes[$method] : [];
    }
    /**
     * 
     * @param string $method
     * @param string $uri
     * @return \engine\Core\Route\DispatchedRoute
     */
    public function dispatch($method, $uri)
    {
        $routes = $this->routes(strtoupper($method)); // Роуты с определенным методом

        if (array_key_exists($uri, $routes)) {
            return new DispatchedRoute($routes[$uri]);
        }
    }
}

