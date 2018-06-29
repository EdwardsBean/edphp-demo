<?php

namespace app\controller;

class Api {

    public function hello()
    {
        return 'hello';
    }

    public function accounts()
    {
        $result = db('accounts')->findbyOpenid('oH30b5CFedAcV9J9bzkJBC4-iVDA');
        return $result;
    }
}