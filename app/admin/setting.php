<?php

$db = ConnectMysqli::getIntance();

if ($_POST) {
	
	if ($_POST['wmj']) {
		
		$data = array(
			'appid'     => $_POST['appid'],
			'appsecret' => $_POST['appsecret'],
			'aeskey'    => $_POST['aeskey'],
		);
		
		$db->update('config', array('v' => json_encode($data)), 'k="wmj"');
	}
	
	if ($_POST['weixin']) {
		
		$data = array(
			'appid'     => $_POST['appid'],
			'appsecret' => $_POST['appsecret'],
            'agentid' => $_POST['agentid'],
			'tpl_msg'   => $_POST['tpl_msg'],
		);
		
		$db->update('config', array('v' => json_encode($data)), 'k="weixin"');
	}
	
	msg('设置成功', 'admin.php');
}

//wmj
$wmj = $db->getRow('select * from config where k="wmj"');

if (!$wmj) {
	$db->insert('config', array('k' => 'wmj'));
}

$wmj_config = json_decode($wmj['v'], true);

$smarty->assign("wmj", $wmj_config);

//weixin
$weixin = $db->getRow('select * from config where k="weixin"');

if (!$weixin) {
	$db->insert('config', array('k' => 'weixin'));
}

$weixin_config = json_decode($weixin['v'], true);

$smarty->assign("weixin", $weixin_config);

$smarty->assign('nav_setting', 'active');

$smarty->display('admin_setting.html');
