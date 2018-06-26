<?php

namespace app\controller;

class Test {

    public function getHello($name = 'edphp')
    {
        return "hello " . $name;
    }

    public function getConfig($name = 'database.type')
    {
        return "your config $name is " . config($name);
    }
}