<?php
/* Smarty version 3.1.30, created on 2017-10-15 19:03:16
  from "/home/wwwroot/4.0wpt.com/templates/admin_time.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59e340749c7619_76323352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5f433cfa4f2c73c05716a256f0f6d63241d4dd3' => 
    array (
      0 => '/home/wwwroot/4.0wpt.com/templates/admin_time.html',
      1 => 1502378754,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin_header.html' => 1,
    'file:admin_footer.html' => 1,
  ),
),false)) {
function content_59e340749c7619_76323352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<?php if ($_smarty_tpl->tpl_vars['do']->value != 'post') {?>
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">时间段设置</h3>
						</div>
						<div class="panel-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>时间段名称</th>
										<th colspan="3">开始时间</th>
										<th colspan="3">终止时间</th>
										<th width="200">操作</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td>星期</td>
										<td>时</td>
										<td>分</td>
										<td>星期</td>
										<td>时</td>
										<td>分</td>
										<td></td>
									</tr>
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
										<td><?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['week'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['hour'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['minute'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['eweek'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['ehour'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['eminute'];?>
</td>
										<td>
											<a href="admin.php?ac=time&do=post&id=<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['id'];?>
"><i class="icon icon-edite"></i>&nbsp;修改</a>
											&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="admin.php?ac=time&do=del&id=<?php echo $_smarty_tpl->tpl_vars['list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_key']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_key']->value['index'] : null)]['id'];?>
"><i class="icon icon-del"></i>&nbsp;删除</a>
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
							<a href="admin.php?ac=time&do=post" class="btn btn-primary">添加时间段</a>
						</div>
					</div>
				</div>
				<?php } else { ?>
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">时间段设置</h3>
						</div>
						<div class="panel-body">
							<form class="form-auth-small" action="admin.php?ac=time" method="post">
								<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['time']->value['id'];?>
"/>
								<input type="text" name="name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['time']->value['name'];?>
" placeholder="请输入时间段名称">
								<br/>
								<input type="text" name="sort" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['time']->value['sort'];?>
" placeholder="排序">
								<br/>
								<p>开始时间</p>
								<div class="row">
									<div class="col-xs-2">
										<select name="week" class="form-control">
											<option value="0" <?php if ($_smarty_tpl->tpl_vars['time']->value['week'] == 0) {?>selected<?php }?>>不限</option>
											<option value="1" <?php if ($_smarty_tpl->tpl_vars['time']->value['week'] == 1) {?>selected<?php }?>>周一</option>
											<option value="2" <?php if ($_smarty_tpl->tpl_vars['time']->value['week'] == 2) {?>selected<?php }?>>周二</option>
											<option value="3" <?php if ($_smarty_tpl->tpl_vars['time']->value['week'] == 3) {?>selected<?php }?>>周三</option>
											<option value="4" <?php if ($_smarty_tpl->tpl_vars['time']->value['week'] == 4) {?>selected<?php }?>>周四</option>
											<option value="5" <?php if ($_smarty_tpl->tpl_vars['time']->value['week'] == 5) {?>selected<?php }?>>周五</option>
											<option value="6" <?php if ($_smarty_tpl->tpl_vars['time']->value['week'] == 6) {?>selected<?php }?>>周六</option>
											<option value="7" <?php if ($_smarty_tpl->tpl_vars['time']->value['week'] == 7) {?>selected<?php }?>>周日</option>
										</select>
									</div>
									<div class="col-xs-2">
										<select name="hour" class="form-control">
											<option value="0" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 0) {?>selected<?php }?>>0点</option>
											<option value="1" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 1) {?>selected<?php }?>>1点</option>
											<option value="2" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 2) {?>selected<?php }?>>2点</option>
											<option value="3" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 3) {?>selected<?php }?>>3点</option>
											<option value="4" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 4) {?>selected<?php }?>>4点</option>
											<option value="5" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 5) {?>selected<?php }?>>5点</option>
											<option value="6" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 6) {?>selected<?php }?>>6点</option>
											<option value="7" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 7) {?>selected<?php }?>>7点</option>
											<option value="8" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 8) {?>selected<?php }?>>8点</option>
											<option value="9" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 9) {?>selected<?php }?>>9点</option>
											<option value="10" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 10) {?>selected<?php }?>>10点</option>
											<option value="11" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 11) {?>selected<?php }?>>11点</option>
											<option value="12" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 12) {?>selected<?php }?>>12点</option>
											<option value="13" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 13) {?>selected<?php }?>>13点</option>
											<option value="14" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 14) {?>selected<?php }?>>14点</option>
											<option value="15" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 15) {?>selected<?php }?>>15点</option>
											<option value="16" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 16) {?>selected<?php }?>>16点</option>
											<option value="17" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 17) {?>selected<?php }?>>17点</option>
											<option value="18" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 18) {?>selected<?php }?>>18点</option>
											<option value="19" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 19) {?>selected<?php }?>>19点</option>
											<option value="20" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 20) {?>selected<?php }?>>20点</option>
											<option value="21" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 21) {?>selected<?php }?>>21点</option>
											<option value="22" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 22) {?>selected<?php }?>>22点</option>
											<option value="23" <?php if ($_smarty_tpl->tpl_vars['time']->value['hour'] == 23) {?>selected<?php }?>>23点</option>
										</select>
									</div>
									<div class="col-xs-2">
										<select name="minute" class="form-control">
											<option value="0" <?php if ($_smarty_tpl->tpl_vars['time']->value['minute'] == 0) {?>selected<?php }?>>0分</option>
											<option value="15" <?php if ($_smarty_tpl->tpl_vars['time']->value['minute'] == 15) {?>selected<?php }?>>15分</option>
											<option value="30" <?php if ($_smarty_tpl->tpl_vars['time']->value['minute'] == 30) {?>selected<?php }?>>30分</option>
											<option value="45" <?php if ($_smarty_tpl->tpl_vars['time']->value['minute'] == 45) {?>selected<?php }?>>45分</option>
										</select>
									</div>
								</div>
								<br/>
								<p>结束时间</p>
								<div class="row">
									<div class="col-xs-2">
										<select name="eweek" class="form-control">
											<option value="0" <?php if ($_smarty_tpl->tpl_vars['time']->value['eweek'] == 0) {?>selected<?php }?>>不限</option>
											<option value="1" <?php if ($_smarty_tpl->tpl_vars['time']->value['eweek'] == 1) {?>selected<?php }?>>周一</option>
											<option value="2" <?php if ($_smarty_tpl->tpl_vars['time']->value['eweek'] == 2) {?>selected<?php }?>>周二</option>
											<option value="3" <?php if ($_smarty_tpl->tpl_vars['time']->value['eweek'] == 3) {?>selected<?php }?>>周三</option>
											<option value="4" <?php if ($_smarty_tpl->tpl_vars['time']->value['eweek'] == 4) {?>selected<?php }?>>周四</option>
											<option value="5" <?php if ($_smarty_tpl->tpl_vars['time']->value['eweek'] == 5) {?>selected<?php }?>>周五</option>
											<option value="6" <?php if ($_smarty_tpl->tpl_vars['time']->value['eweek'] == 6) {?>selected<?php }?>>周六</option>
											<option value="7" <?php if ($_smarty_tpl->tpl_vars['time']->value['eweek'] == 7) {?>selected<?php }?>>周日</option>
										</select>
									</div>
									<div class="col-xs-2">
										<select name="ehour" class="form-control">
											<option value="0" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 0) {?>selected<?php }?>>0点</option>
											<option value="1" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 1) {?>selected<?php }?>>1点</option>
											<option value="2" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 2) {?>selected<?php }?>>2点</option>
											<option value="3" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 3) {?>selected<?php }?>>3点</option>
											<option value="4" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 4) {?>selected<?php }?>>4点</option>
											<option value="5" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 5) {?>selected<?php }?>>5点</option>
											<option value="6" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 6) {?>selected<?php }?>>6点</option>
											<option value="7" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 7) {?>selected<?php }?>>7点</option>
											<option value="8" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 8) {?>selected<?php }?>>8点</option>
											<option value="9" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 9) {?>selected<?php }?>>9点</option>
											<option value="10" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 10) {?>selected<?php }?>>10点</option>
											<option value="11" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 11) {?>selected<?php }?>>11点</option>
											<option value="12" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 12) {?>selected<?php }?>>12点</option>
											<option value="13" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 13) {?>selected<?php }?>>13点</option>
											<option value="14" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 14) {?>selected<?php }?>>14点</option>
											<option value="15" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 15) {?>selected<?php }?>>15点</option>
											<option value="16" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 16) {?>selected<?php }?>>16点</option>
											<option value="17" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 17) {?>selected<?php }?>>17点</option>
											<option value="18" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 18) {?>selected<?php }?>>18点</option>
											<option value="19" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 19) {?>selected<?php }?>>19点</option>
											<option value="20" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 20) {?>selected<?php }?>>20点</option>
											<option value="21" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 21) {?>selected<?php }?>>21点</option>
											<option value="22" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 22) {?>selected<?php }?>>22点</option>
											<option value="23" <?php if ($_smarty_tpl->tpl_vars['time']->value['ehour'] == 23) {?>selected<?php }?>>23点</option>
										</select>
									</div>
									<div class="col-xs-2">
										<select name="eminute" class="form-control">
											<option value="0" <?php if ($_smarty_tpl->tpl_vars['time']->value['eminute'] == 0) {?>selected<?php }?>>0分</option>
											<option value="15" <?php if ($_smarty_tpl->tpl_vars['time']->value['eminute'] == 15) {?>selected<?php }?>>15分</option>
											<option value="30" <?php if ($_smarty_tpl->tpl_vars['time']->value['eminute'] == 30) {?>selected<?php }?>>30分</option>
											<option value="45" <?php if ($_smarty_tpl->tpl_vars['time']->value['eminute'] == 45) {?>selected<?php }?>>45分</option>
										</select>
									</div>
								</div>
								<br/>
								<button type="submit" class="btn btn-primary">保 存</button>
							</form>
						</div>
					</div>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<?php $_smarty_tpl->_subTemplateRender("file:admin_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
