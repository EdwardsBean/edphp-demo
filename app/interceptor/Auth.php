<?php

namespace app\interceptor;
use app\service\Token;
use edphp\route\Interceptor;

class Auth extends Interceptor
{
    protected $exclude = ['/api/*', '/test/hello'];
    
    public function preHandle()
    {
        echo "Auth interceptor preHandle\n";
    }

    public function afterCompletion() {
        echo "Auth interceptor afterCompletion\n";
    }

}
