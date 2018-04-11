<?php


	//$ip = get_client_ip(); //获取当前用户的ip   
	$ip= '220.200.38.232';
	$url = "http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;   
	$data = file_get_contents($url); //调用淘宝接口获取信息
	//$data = (array)json_decode(file_get_contents($url)); //调用淘宝接口获取信息   
	//echo "<pre>";
	//print_r($data);
	//echo "</pre>";
	
	echo $data;  


    //获取用户真实IP   
    function get_client_ip() {   
        if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))   
            $ip = getenv("HTTP_CLIENT_IP");   
        else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"),    
    "unknown"))   
            $ip = getenv("HTTP_X_FORWARDED_FOR");   
        else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))   
            $ip = getenv("REMOTE_ADDR");   
        else if (isset ($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR']    
    && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))   
            $ip = $_SERVER['REMOTE_ADDR'];   
        else   
            $ip = "unknown";   
        return ($ip);   
    }   