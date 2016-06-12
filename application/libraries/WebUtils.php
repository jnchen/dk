<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Webutils {
    var $mh,$conn;
	//构造函数
	public function __construct($params)
    {
        // Do something with $params
        $mh = curl_multi_init();
    }

    public function addHandle($url,$user_agent){
        $ch = curl_init($url);
        array_push($conn, $ch);
        if(isset($user_agent))
            curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
        if(empty($timeout))
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);


        curl_multi_add_handle($mh, $ch);
    }

    public function onDid($ch){
        curl_close($ch);
    }

    public function Do(){
        
    }
    function __destruct(){
        curl_multi_close($mh);
    }
}