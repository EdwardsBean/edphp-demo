<?php

namespace app\interceptor;
use edphp\route\Interceptor;

class ControllerCost extends Interceptor
{
    protected $exclude = [];
    
    public function preHandle()
    {
    }

    public function afterCompletion() {
    }
    
}