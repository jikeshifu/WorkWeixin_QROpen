<?php
/* Smarty version 3.1.30, created on 2018-04-10 14:25:28
  from "/www/wwwroot/valmet.tellnet.cn/templates/admin_add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acc58d8376e50_84148364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8aa1c0e5c08fd9260306d708deb281b88a1c7d0' => 
    array (
      0 => '/www/wwwroot/valmet.tellnet.cn/templates/admin_add.html',
      1 => 1509548139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_header.html' => 1,
    'file:admin_footer.html' => 1,
  ),
),false)) {
function content_5acc58d8376e50_84148364 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">添加门禁设备</h3>
						</div>
						<div class="panel-body">
							<form class="form-auth-small" action="admin.php?ac=add" method="post">
								<input type="text" name="name" class="form-control" placeholder="请输入设备名称">
								<br>
								<input type="text" name="sn" class="form-control" placeholder="请输入设备序列号">
								<br>
								<input type="text" name="sim" class="form-control" placeholder="如果是GPRS版，请输入设备SIM卡号">
								<br>
								<button type="submit" class="btn btn-primary">添加设备</button>
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
