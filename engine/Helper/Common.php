<?php
namespace engine\Helper;

/**
 * 
 * @desc A set of features that simplify development.
 *
 */
class Common
{
    public function getUriPath()
    {
        return $_SERVER['REQUEST_URI'];
    }
    
    public function getMethodRequest() {
        return $_SERVER['REQUEST_METHOD'];
    }
}

