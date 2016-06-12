<?php
defined('BASEPATH') OR exit('No direct script access allowed');

ignore_user_abort(); //关掉浏览器，PHP脚本也可以继续执行.
set_time_limit(0); // 通过set_time_limit(0)可以让程序无限制的执行下去
$interval = 15; // 每隔*秒运行
$temp_key = 0;
do {
    $time = time();
    require 'config.php';
    $mem = new Memcache();
    $mem->connect($Memcache_server, $Memcache_port);
    if ($is_send) {
        $get_time = $mem->get('tem_data');
    } else {
        $get_time = $time + 86400;
        exit();
    }
    if ($get_time == $time) {
        $mem->close();
        exit();
    } else if ($get_time > $time - $interval) {
        $mem->close();
    } else if ($temp_key == 0) {
        $temp_key = 1;
        @file_get_contents('http://******/*****.php');
        $mem->set('tem_data', $time, MEMCACHE_COMPRESSED, $Memcache_date);
        $mem->close();
        sleep(mt_rand(1, 3));
        $temp_key = 0;
    }else{
        $mem->close();
        exit();
    }
    //这里是你要执行的代码
    sleep($interval); // 等待*秒钟
} while (true);