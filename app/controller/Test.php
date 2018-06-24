<?php

namespace app\controller;

class Test {

    public function getHello($name = 'edphp')
    {
        return 'hello ' . $name;
    }
}