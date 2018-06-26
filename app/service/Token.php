<?php
namespace app\service;

use think\facade\Cache;
use think\facade\Request;

/**
 * 考虑换成phpredis：https://github.com/phpredis/phpredis#hget
 */
class Token
{

    const PREFIX = 'token_';

    //随机生成token，极小概率产生重复token
    public static function generate($id)
    {
        $token = md5(uniqid(rand(), true));
        Cache::store('redis')->set(self::idKey($token), $id);
        return $token;
    }

    public static function keygen($token, $field)
    {
        return self::PREFIX . $token . '_' . $field;
    }

    public static function idKey($token)
    {
        return self::keygen($token, 'id');
    }

    public static function getUid()
    {
        $token = Request::header('Token');
        if (!isset($token)) {
            return;
        }
        $id = Cache::store('redis')->get(self::idKey($token));
        return $id;
    }
}
