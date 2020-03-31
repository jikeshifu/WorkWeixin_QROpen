<?php
/* Smarty version 3.1.30, created on 2018-04-10 19:21:57
  from "/www/wwwroot/1.tellnet.cn/templates/admin_key.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5acc9e55058b16_94257147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76baece4d24fa15cda681fc83020f79abf44f26d' => 
    array (
      0 => '/www/wwwroot/1.tellnet.cn/templates/admin_key.html',
      1 => 1523359287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_header.html' => 1,
    'file:admin_footer.html' => 1,
  ),
),false)) {
function content_5acc9e55058b16_94257147 (Smarty_Internal_Template $_smarty_tpl) {
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
							<h3 class="panel-title">钥匙列表</h3>
						</div>
						<div class="panel-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>拥有人</th>
										<th>门禁名称</th>
										<th>获得时间</th>
                                        <th>授权</th>
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
										<td><img src="<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['avatar'];?>
" style="width: 20px;"/>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['nickname'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['add_time'];?>
</td>
                                        <td>
                                      		<?php if ($_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['isauth'] == 1) {?>
                                          	<a href="javascript:;" onclick="change(<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['key_id'];?>
);" id="isauth_<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['key_id'];?>
"><span class="label label-success">有权限</span></a>
                                          	<?php } else { ?>
                                          	<a href="javascript:;" onclick="change(<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['key_id'];?>
);" id="isauth_<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['key_id'];?>
"><span class="label label-warning">无权限</span></a>
                                          	<?php }?>
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

<?php echo '<script'; ?>
>
function change(id) {
	$.ajax({
		url: "admin.php?ac=key",
		data:{
			'id' : id,
		},
		type:'post',
		dataType:'json',
		timeout : 5000,
		success: function(data) {
			if (data.auth == 1) {
				$('#isauth_' + id).html('<span class="label label-success">有权限</span>');
			} else {
				$('#isauth_' + id).html('<span class="label label-warning">无权限</span>');
			}
		},
	});
	return false;
}
<?php echo '</script'; ?>
>

<div class="clearfix"></div>
<?php $_smarty_tpl->_subTemplateRender("file:admin_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
