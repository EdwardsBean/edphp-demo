<?php
/*
 * @Author: edwardsbean 
 * @Date: 2018-06-23 16:09:30 
 * @Last Modified by: edwardsbean
 * @Last Modified time: 2018-06-23 18:26:46
 */
define('EDPHP_START', microtime(true));

require __DIR__.'/../vendor/autoload.php';

$app = new edphp\App(
    realpath(__DIR__.'/../')
);

// 执行应用并响应
$app->run()->send();