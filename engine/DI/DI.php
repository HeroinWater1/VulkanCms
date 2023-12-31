<?php
namespace engine\DI;

class DI
{
    
    /*
     * @var array
     */
    private $container;
    
    public function set($key, $value)
    {
        $this->container[$key] = $value;
        
        return $this;
    }
    
    public function get($key)
    {
        return $this->has($key);
    }
    
    public function has($key)
    {
        return isset($this->container[$key]);
    }
}