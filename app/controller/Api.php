<?php

namespace app\controller;

class Api {

    public function hello()
    {
        return 'hello';
    }

    public function accounts()
    {
        abort(50, "ceshi");
        $result = db('accounts')->findByOpenid('oH30b5CFedAcV9J9bzkJBC4-iVDA')->getOne();
        // $result = db('accounts')->findByOpenid('oH30b5CFedAcV9J9bzkJBC4-iVDA')->getOne();
        // $result = db('accounts')->whereLike('openid', 'o')->order('create_time', 'asc')->get();
        return $result;
    }

    public function update() {
        $result = db('accounts')->whereOpenid('oH30b5CFedAcV9J9bzkJBC4-iVDA')->setField('test', true);
        // $result = db('accounts')->whereOpenid('oH30b5CFedAcV9J9bzkJBC4-iVDA')->inc('size')->update();
        return $result === 1 ? 'ok' : 'fail';
    }

    public function add()
    {
        
    }

    public function del()
    {
        # code...
        $result = db('accounts')->whereOpenid('oH30b5CFedAcV9J9bzkJBC4-iVDA')->delete();
        return $result === 1 ? 'ok' : 'fail';
    }
}