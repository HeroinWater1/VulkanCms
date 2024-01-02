<?php
namespace engine\Service;

abstract class AbstractProvider
{
    protected $di;
    
    public function __construct(\engine\DI\DI $di)
    {
        $this->di = $di;
    }
    
    abstract function init();
}

