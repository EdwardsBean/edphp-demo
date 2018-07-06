<?php

return [
    //PHPSESSID或token字段名称
    'name'           => 'X-Token',
    //token或者默认cookie方式，token方式将会从Header中取name
    'type'           => 'token',
    // 驱动方式，默认使用php自带的session存储。支持redis
    'driver'         => '',
    // SESSION 前缀
    'prefix'         => 'testapi',
    //3 days
    'expire'         => 60 * 60 * 24 * 3,
];
