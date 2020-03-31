<?php

$db = ConnectMysqli::getIntance();

$wmj = $db->getRow('select * from config where k="wmj"');
	
$config = json_decode($wmj['v'], true);

if ($_GET['do'] == 'del') {
	
	$lock = $db->getRow('select * from locks where id='.$_GET['id']);
	
	if (!$lock) {
		msg('非法访问', 'admin.php?ac=list');
	}
	
	if ($config['aeskey']) {
		$lock['sn'] = aesEncrypt($lock['sn'], $config['aeskey']);
	}
	
	$result = httpPost('https://www.wmj.com.cn/api/dellock.html?appid='.$config['appid'].'&appsecret='.$config['appsecret'], $lock['sn']);
 
	$result = json_decode(trim($result, "\xEF\xBB\xBF"), true);
	
	if ($result['state']) {
		$db->deleteOne("locks", "id=".$_GET['id']);
		$db->deleteAll('user_key', array('lock_id' => $_GET['id']));
		$db->deleteAll('log', array('lock_id' => $_GET['id']));
	}
	msg($result['state_msg'], 'admin.php?ac=list');
}

$count = $db->getRow('select COUNT(*) as count from locks');

if ($count) {
	
	$pageshow = 10;

	$page_max = ceil($count['count'] / $pageshow); 

	$page = intval($_GET['page']);

	if ($page <= 0) $page = 1;

	if ($page > $page_max) $page = $page_max;

	$pagesize = ($page - 1) * $pageshow;

	$sql = 'select * from locks limit '.$pagesize.','.$pageshow;

	$list = $db->getAll($sql);

	foreach ($list as $key => $value) {
		
		if ($config['aeskey']) {
			$value['sn'] = aesEncrypt($value['sn'], $config['aeskey']);
		}
		$postlock = httpPost('https://www.wmj.com.cn/api/lockstate.html?appid='.$config['appid'].'&appsecret='.$config['appsecret'], $value['sn']);
	 
		$result = json_decode(trim($postlock, "\xEF\xBB\xBF"), true);
		
		if ($result['data']['online']) {
			$list[$key]['online'] = '<span class="label label-success">在线</span>';
		} else {
			$list[$key]['online'] = '<span class="label label-warning">离线</span>';
		}
	}

	if ($page_max != 1) {
		
		$page_str = '<a href="javascript:;" class="btn btn-default btn-sm">'.$page.' / '.$page_max.'</a>&nbsp;&nbsp;';

		if ($page == 1) {
			$page_str .= '<a href="javascript:;" class="btn btn-default btn-sm">上一页</a>&nbsp;&nbsp;<a href="admin.php?ac=list&page='.($page+1).'" class="btn btn-default btn-sm">下一页</a>';
		} elseif ($page == $page_max) {
			$page_str .= '<a href="admin.php?ac=list&page='.($page-1).'" class="btn btn-default btn-sm">上一页</a>&nbsp;&nbsp;<a href="javascript:;" class="btn btn-default btn-sm">下一页</a>';
		} else {
			$page_str .= '<a href="admin.php?ac=list&page='.($page-1).'" class="btn btn-default btn-sm">上一页</a>&nbsp;&nbsp;<a href="admin.php?ac=list&page='.($page+1).'" class="btn btn-default btn-sm">下一页</a>';
		}
	}
}

$smarty->assign('page_str', $page_str);

$smarty->assign('list', $list);

$smarty->assign('nav_list', 'active');

$smarty->display('admin_list.html');