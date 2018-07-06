<?php

namespace app\interceptor;
use edphp\Auth;
use app\service\Token;
use edphp\route\Interceptor;
use edphp\exception\HttpException;

class AuthInterceptor extends Interceptor
{
    protected $exclude = ['/api/*', '/test/hello'];
    
    public function preHandle()
    {
        Auth::check(); 
    }

    public function afterCompletion() {
    }

}
