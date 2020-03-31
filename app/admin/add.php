<?php

$db = ConnectMysqli::getIntance();

if ($_POST) {
	
	if (!$_POST['sn'] || !$_POST['name']) {
		msg('名称和序列号不能为空', 'admin.php?ac=add');
	}
	
	$wmj = $db->getRow('select * from config where k="wmj"');
	
	$config = json_decode($wmj['v'], true);
	
	if (!$config['appid']) {
		msg('请配置微门禁参数', 'admin.php');
	}
	
	$sn = $_POST['sn'];
	
	if ($config['aeskey']) {
		$sn = aesEncrypt($sn, $config['aeskey']);
	}

	$postlock = httpPost('https://www.wmj.com.cn/api/postlock.html?appid='.$config['appid'].'&appsecret='.$config['appsecret'], $sn);
 
	$result = json_decode(trim($postlock, "\xEF\xBB\xBF"), true);
	
	if ($result['state']) {
		
		$data = array(
			'name'  => $_POST['name'],
			'sn'    => $_POST['sn'],
		);
		
		if ($_POST['sim']) {
			$data['sim'] = $_POST['sim'];
		}
		
		$db->insert("locks", $data);
	}
	
	msg($result['state_msg'], 'admin.php?ac=add');
}

$smarty->assign('nav_add', 'active');

$smarty->display('admin_add.html');