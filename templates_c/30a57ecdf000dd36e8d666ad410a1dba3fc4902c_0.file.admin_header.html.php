<?php
/* Smarty version 3.1.30, created on 2018-04-11 11:33:01
  from "/www/wwwroot/valmet.tellnet.cn/templates/admin_header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acd81edc14c62_35558220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30a57ecdf000dd36e8d666ad410a1dba3fc4902c' => 
    array (
      0 => '/www/wwwroot/valmet.tellnet.cn/templates/admin_header.html',
      1 => 1523417576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acd81edc14c62_35558220 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="cn" class="fullscreen-bg">
<head>
	<title>门禁管理中心</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<link rel="stylesheet" href="static/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="static/assets/css/main.css">
	<link rel="stylesheet" href="static/iconfont/style.css">
  	<?php echo '<script'; ?>
 src="static/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div id="wrapper">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-btn">
				<a href="javascript:;" class="btn-toggle-fullwidth"><i class="icon icon-menu"></i></button>
			</div>
			<div class="navbar-btn" style="float: right;">
				<a href="admin.php?ac=login&do=out"><i class="icon icon-logout"></i></a>
			</div>
		</div>
	</nav>
	<div id="sidebar-nav" class="sidebar">
		<div class="sidebar-scroll">
			<nav>
				<ul class="nav">
					<li><a href="admin.php?ac=setting" class="<?php echo $_smarty_tpl->tpl_vars['nav_setting']->value;?>
"><span>设置</span></a></li>
					<li><a href="admin.php?ac=add" class="<?php echo $_smarty_tpl->tpl_vars['nav_add']->value;?>
"><span>添加门禁</span></a></li>
					<li><a href="admin.php?ac=list" class="<?php echo $_smarty_tpl->tpl_vars['nav_list']->value;?>
"><span>门禁列表</span></a></li>
					<li><a href="admin.php?ac=user" class="<?php echo $_smarty_tpl->tpl_vars['user_list']->value;?>
"><span>用户列表</span></a></li>
					<li><a href="admin.php?ac=key" class="<?php echo $_smarty_tpl->tpl_vars['key_list']->value;?>
"><span>钥匙列表</span></a></li>
					<li><a href="admin.php?ac=log" class="<?php echo $_smarty_tpl->tpl_vars['log_list']->value;?>
"><span>开门日志</span></a></li>
					<li><a href="admin.php?ac=pwd" class="<?php echo $_smarty_tpl->tpl_vars['pwd_list']->value;?>
"><span>密码修改</span></a></li>
				</ul>
			</nav>
		</div>
	</div><?php }
}
