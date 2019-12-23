<?php

function msg($msg, $url) {
    echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
    echo '<script charset="gbk" language="javascript" type="text/javascript">';
	echo 'alert("'.$msg.'");';
	echo 'window.location.href="'.$url.'"';
	echo '</script>';
	exit();
}
 function mlog($txt,$filename='log.txt')
 {
    $txt = date('Y/m/d H:i:s').": {$txt}\r\n";
    file_put_contents('./'.$filename, $txt, FILE_APPEND); //追加内容
 }

function httpPost($url, $str) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_TIMEOUT, 30);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,FALSE);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($curl, CURLOPT_POSTFIELDS, $str);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($str))
    );
    $res = curl_exec ($curl);
    curl_close($curl);
 
    return $res;
}

/*
 * AES加密 -- 加密采用128位CBC模式加密
 */
function aesEncrypt ($value, $key) {
    $padSize = 16 - (strlen($value) % 16);
    $value   = $value . str_repeat(chr($padSize), $padSize) ;
    $output  = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $value, MCRYPT_MODE_CBC, str_repeat(chr(0), 16));
 
    return base64_encode($output);
}