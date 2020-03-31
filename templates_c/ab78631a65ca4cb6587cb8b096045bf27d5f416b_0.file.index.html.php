<?php
/* Smarty version 3.1.30, created on 2018-04-10 14:16:46
  from "/www/wwwroot/valmet.tellnet.cn/templates/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acc56cecc6bf7_13995424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab78631a65ca4cb6587cb8b096045bf27d5f416b' => 
    array (
      0 => '/www/wwwroot/valmet.tellnet.cn/templates/index.html',
      1 => 1509548139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5acc56cecc6bf7_13995424 (Smarty_Internal_Template $_smarty_tpl) {
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
		<?php } elseif ($_smarty_tpl->tpl_vars['get']->value['id']) {?>
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
		<?php } else { ?>
		<style>
		.bubble {
			padding:0; margin:15px; word-break:break-word; word-wrap:break-word; white-space:normal; border:1px solid #efeff4; border-radius:10px; color: #000; background: #fff;
		}
		</style>
		<div class="bubble latest-commit">
			<h3 class="bubble-title">
				<div class="branch-selector">
					aaaaaaaaa
				</div>
			</h3>
			<span class="bubble-group">
				<a href="javascript:;" class="bubble-expand" id="key_<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="ajaxRequest(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
					<i class="am-icon-lock"></i><font>开门</font>
				</a>
			</span>
		</div>
		<?php }?>
		
		
		<?php echo '<script'; ?>
>
		function ajaxRequest(id) {
			$.ajax({
				url: 'index.php&op=ajax',
				data:{
					'id' : id,
				},
				type:'post',
				dataType:'json',
				timeout : 5000,
				success: function(data) {
					if(data.state == 1) {

						if(data.lock_type == 1) {
							$("#key_"+id).html('<i class="am-icon-unlock"></i><font>开门成功</font>');
							$("#num_" + id).html(parseInt($("#num_" + id).html()) - 1);
							setTimeout(function () {
								$("#key_"+id).html('<i class="am-icon-lock"></i><font>开门</font>');
							}, 2200);
						}

						if(data.lock_type == 2) {
							if(data.lock_status == 2) {
								$("#key_"+id).html('<i class="am-icon-power-off danger"></i><font class="danger">断开中</font>');
							}
							if(data.lock_status == 3) {
								$("#key_"+id).html('<i class="am-icon-power-off"></i><font>接通中</font>');
							}
						}

						if(data.lock_type == 3) {
							$("#key_"+ id + '_' + line).html('<i class="am-icon-plug"></i><font>操作已响应</font>');
							$("#num_" + id).html(parseInt($("#num_" + id).html()) - 1);
							setTimeout(function () {
								$("#key_"+ id + '_' + line).html('<i class="am-icon-plug"></i><font>' + name + '</font>');
							}, 2200);
						}

					} else {
						if(data.msg && data.msg != 'undefined') {
							$(".alert_msg").html(data.msg);
							$(".alert_msg").fadeIn(1000,function () {
								$(".alert_msg").fadeOut(5000,function () {})
							});
						}
						if (data.jump_url) {
							window.location.href = data.jump_url;
						}
					}
				}
			});
		}
		<?php echo '</script'; ?>
>
	</body>
</html><?php }
}
