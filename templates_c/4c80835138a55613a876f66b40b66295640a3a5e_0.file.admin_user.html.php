<?php
/* Smarty version 3.1.30, created on 2017-10-26 23:55:50
  from "/home/wwwroot/5.0wpt.com/templates/admin_user.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59f20586ac64a0_81009333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c80835138a55613a876f66b40b66295640a3a5e' => 
    array (
      0 => '/home/wwwroot/5.0wpt.com/templates/admin_user.html',
      1 => 1509027994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_header.html' => 1,
    'file:admin_footer.html' => 1,
  ),
),false)) {
function content_59f20586ac64a0_81009333 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">用户列表</h3>
						</div>
						<div class="panel-body">
							<table class="table table-bordered">
								<?php
$__section_key_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_key']) ? $_smarty_tpl->tpl_vars['__smarty_section_key'] : false;
$__section_key_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_key_0_total = $__section_key_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_key'] = new Smarty_Variable(array());
if ($__section_key_0_total != 0) {
for ($__section_key_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] = 0; $__section_key_0_iteration <= $__section_key_0_total; $__section_key_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']++){
?>
								<tr>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['avatar'];?>
" style="width: 40px;"/>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['nickname'];?>
</td>
								</tr>
								<?php
}
}
if ($__section_key_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_key'] = $__section_key_0_saved;
}
?>
							</table>
							<?php echo $_smarty_tpl->tpl_vars['page_str']->value;?>

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
