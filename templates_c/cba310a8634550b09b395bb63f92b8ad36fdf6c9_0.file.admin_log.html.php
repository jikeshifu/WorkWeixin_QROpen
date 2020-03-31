<?php
/* Smarty version 3.1.30, created on 2017-10-15 20:57:47
  from "/home/wwwroot/4.0wpt.com/templates/admin_log.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e35b4b165566_79278242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cba310a8634550b09b395bb63f92b8ad36fdf6c9' => 
    array (
      0 => '/home/wwwroot/4.0wpt.com/templates/admin_log.html',
      1 => 1508072266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_header.html' => 1,
    'file:admin_footer.html' => 1,
  ),
),false)) {
function content_59e35b4b165566_79278242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<style>
@media screen and (max-width: 767px) {
	.zdy-hidden{
		display: none;
	}
}
</style>

<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">开门日志</h3>
						</div>
						<div class="panel-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>门禁名称</th>
										<th>操作人</th>
										<th>类型</th>
										<th>时间</th>
										<th>备注</th>
									</tr>
								</thead>
								<tbody>
									<?php
$__section_key_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_key']) ? $_smarty_tpl->tpl_vars['__smarty_section_key'] : false;
$__section_key_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['list']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_key_0_total = $__section_key_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_key'] = new Smarty_Variable(array());
if ($__section_key_0_total != 0) {
for ($__section_key_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] = 0; $__section_key_0_iteration <= $__section_key_0_total; $__section_key_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']++){
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['nickname'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['type'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['addtime'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['msg'];?>
</td>
									</tr>
									<?php
}
}
if ($__section_key_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_key'] = $__section_key_0_saved;
}
?>
								</tbody>
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
