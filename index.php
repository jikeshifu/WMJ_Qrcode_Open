<?php

require './class/function.php';
require './class/db.class.php';

require './lib/Smarty.class.php';

$smarty = new Smarty;

$data = array(
	'state' => 1,
	'msg'   => '',
);

$db = ConnectMysqli::getIntance();

$wmj = $db->getRow('select * from config where k="wmj"');
	
$config = json_decode($wmj['v'], true);

$lock = $db->getRow('select * from locks where id='.$_GET['id']);

if (!$lock) {
	$data = array(
		'state' => 0,
		'msg'   => '非法访问',
	);
} else {
	
	if ($config['aeskey']) {
		$lock['sn'] = aesEncrypt($lock['sn'], $config['aeskey']);
	}
	
    $data = array("appid" => $config['appid'], "appsecret" => $config['appsecret'],'sn'=>$lock['sn']);
    $data_string = json_encode($data);
	$result = httpPost('https://www.wmj.com.cn/apiv3/openlock', $data_string);
    echo($result);
	$result = json_decode(trim($result, "\xEF\xBB\xBF"), true);
	echo($result);
	if ($result['state']) {
		$data = array(
			'state' => 1,
			'msg'   => '开门成功',
		);
	} else {
		$data = array(
			'state' => 0,
			'msg'   => '开门失败',
		);
	}
	
}

$smarty->assign('data', $data);

$smarty->display('index.html');

?>