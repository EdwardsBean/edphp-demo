<?php

namespace app\interceptor;
use edphp\route\Interceptor;

class ControllerCost extends Interceptor
{
    protected $exclude = [];
    
    public function preHandle()
    {
        echo "ControllerCost interceptor preHandle\n";
    }

    public function afterCompletion() {
        echo "ControllerCost interceptor afterCompletion\n";
    }
    
}