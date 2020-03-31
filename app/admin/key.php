<?php

$db = ConnectMysqli::getIntance();

if ($_POST['id']) {
  
    $sql = "select * from user_key where id=".$_POST['id'];
  	
	$key = $db->getRow($sql);
  
    $new_auth = $key['isauth'] ? 0 : 1;
  
    $db->query('update user_key set isauth='.$new_auth.' where id='.$key['id']);
	
	echo '{"auth":"'.$new_auth.'"}';
	die;
}

$count = $db->getRow('select COUNT(*) as count from user_key');

if ($count) {
	
	$pageshow = 50;

	$page_max = ceil($count['count'] / $pageshow); 

	$page = intval($_GET['page']);

	if ($page <= 0) $page = 1;

	if ($page > $page_max) $page = $page_max;

	$pagesize = ($page - 1) * $pageshow;

	$sql = 'select *,user_key.id as key_id from user_key left join locks on user_key.lock_id = locks.id left join user on user_key.uid = user.id limit '.$pagesize.','.$pageshow;

	$list = $db->getAll($sql);
	
	foreach($list as $key => $value) {
		$list[$key]['add_time'] = date('m-d H:i', $value['add_time']);
	}
    
	if ($page_max != 1) {
		
		$page_str = '<a href="javascript:;" class="btn btn-default btn-sm">'.$page.' / '.$page_max.'</a>&nbsp;&nbsp;';

		if ($page == 1) {
			$page_str .= '<a href="javascript:;" class="btn btn-default btn-sm">上一页</a>&nbsp;&nbsp;<a href="admin.php?ac=key&page='.($page+1).'" class="btn btn-default btn-sm">下一页</a>';
		} elseif ($page == $page_max) {
			$page_str .= '<a href="admin.php?ac=key&page='.($page-1).'" class="btn btn-default btn-sm">上一页</a>&nbsp;&nbsp;<a href="javascript:;" class="btn btn-default btn-sm">下一页</a>';
		} else {
			$page_str .= '<a href="admin.php?ac=key&page='.($page-1).'" class="btn btn-default btn-sm">上一页</a>&nbsp;&nbsp;<a href="admin.php?ac=key&page='.($page+1).'" class="btn btn-default btn-sm">下一页</a>';
		}
	}
}

$smarty->assign('page_str', $page_str);

$smarty->assign('list', $list);

$smarty->assign('key_list', 'active');

$smarty->display('admin_key.html');