<?php

namespace App\Model;

use Redis;

abstract class RedisConn
{
    protected $redis;

    public function __construct()
    {
        $this->redis = new Redis();
        $this->redis->connect('127.0.0.1', 6379);
    }
}
