<?php
/* Smarty version 3.1.30, created on 2017-10-26 21:09:24
  from "/home/wwwroot/5.0wpt.com/templates/admin_setting.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f1de8496eb98_80839083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de014c018416f262dd2a5d23c7232ed0c7d924dd' => 
    array (
      0 => '/home/wwwroot/5.0wpt.com/templates/admin_setting.html',
      1 => 1509023332,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_header.html' => 1,
    'file:admin_footer.html' => 1,
  ),
),false)) {
function content_59f1de8496eb98_80839083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">微信公众号设置</h3>
						</div>
						<div class="panel-body">
							<form class="form-auth-small" action="admin.php?ac=setting" method="post">
								<input type="hidden" name="weixin" value="weixin"/>
								<input type="text" name="appid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['weixin']->value['appid'];?>
" placeholder="请输入公众号的APPID">
								<br/>
								<input type="text" name="appsecret" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['weixin']->value['appsecret'];?>
" placeholder="请输入公众号的APPSECRET">
								<br/>
								<input type="text" name="tpl_msg" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['weixin']->value['tpl_msg'];?>
" placeholder="模板消息ID，模板标题：智能钥匙提取通知">
								<br/>
								<button type="submit" class="btn btn-primary">保 存</button>
							</form>
						</div>
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">微门禁API接入设置</h3>
						</div>
						<div class="panel-body">
							<form class="form-auth-small" action="admin.php?ac=setting" method="post">
								<input type="hidden" name="wmj" value="wmj"/>
								<input type="text" name="appid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['wmj']->value['appid'];?>
" placeholder="请输入微门禁提供的APPID">
								<br>
								<input type="text" name="appsecret" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['wmj']->value['appsecret'];?>
" placeholder="请输入微门禁提供的APPSECRET">
								<br>
								<input type="text" name="aeskey" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['wmj']->value['aeskey'];?>
" placeholder="如果需要加密的话，请输入微门禁提供的AES加密密钥">
								<br>
								<button type="submit" class="btn btn-primary">保 存</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<?php $_smarty_tpl->_subTemplateRender("file:admin_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
