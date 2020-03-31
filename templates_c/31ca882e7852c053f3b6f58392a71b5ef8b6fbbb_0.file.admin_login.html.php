<?php
/* Smarty version 3.1.30, created on 2017-10-15 19:03:03
  from "/home/wwwroot/4.0wpt.com/templates/admin_login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e34067b74629_04712384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31ca882e7852c053f3b6f58392a71b5ef8b6fbbb' => 
    array (
      0 => '/home/wwwroot/4.0wpt.com/templates/admin_login.html',
      1 => 1508065256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_footer.html' => 1,
  ),
),false)) {
function content_59e34067b74629_04712384 (Smarty_Internal_Template $_smarty_tpl) {
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
</head>
<body>
	<div id="wrapper">
<div class="vertical-align-wrap">
	<div class="vertical-align-middle">
		<div class="auth-box ">
			<div class="left">
				<div class="content">
					<div class="header">
						<p class="lead">门禁管理中心</p>
					</div>
					<form class="form-auth-small" action="admin.php?ac=login" method="post">
						<div class="form-group">
							<input type="text" name="username" class="form-control" placeholder="请输入用户名">
						</div>
						<div class="form-group">
							<input type="password" name="password" class="form-control" placeholder="请输入密码">
						</div>
						<button type="submit" class="btn btn-primary btn-lg btn-block">登 录</button>
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:admin_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
