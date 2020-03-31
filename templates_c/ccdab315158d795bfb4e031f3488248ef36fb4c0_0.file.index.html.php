<?php
/* Smarty version 3.1.30, created on 2017-10-15 20:57:03
  from "/home/wwwroot/4.0wpt.com/templates/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e35b1f2e2f51_38505064',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccdab315158d795bfb4e031f3488248ef36fb4c0' => 
    array (
      0 => '/home/wwwroot/4.0wpt.com/templates/index.html',
      1 => 1508068834,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e35b1f2e2f51_38505064 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="cn" class="fullscreen-bg">
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	</head>
	<body>
		<?php if ($_smarty_tpl->tpl_vars['data']->value['subscribe']) {?>
		<img src="static/images/getqrcode.jpg" style="width: 100%"/>
		<p style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['data']->value['msg'];?>
</p>
		<?php } else { ?>
		<div style="margin-top: 120px; text-align: center; font-size: 24px;">
			<?php if ($_smarty_tpl->tpl_vars['data']->value['state'] == 1) {?>
			<img src="static/images/success.png" style="width: 100px;"/>
			<p><?php echo $_smarty_tpl->tpl_vars['data']->value['msg'];?>
</p>
			<?php } else { ?>
			<img src="static/images/error.png" style="width: 100px;"/>
			<p><?php echo $_smarty_tpl->tpl_vars['data']->value['msg'];?>
</p>
			<?php }?>
		</div>
		<?php }?>
	</body>
</html><?php }
}
