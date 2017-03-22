<?php
/* Smarty version 3.1.29, created on 2016-06-25 01:56:03
  from "/home/ftp/201404lixiaoyu/newscms_smartyt/application/views/roles/view.phtml" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576d7433640760_45174363',
  'file_dependency' => 
  array (
    'faadeba63490f865671beea4e924ce62631d2881' => 
    array (
      0 => '/home/ftp/201404lixiaoyu/newscms_smartyt/application/views/roles/view.phtml',
      1 => 1466790514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576d7433640760_45174363 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/ftp/201404lixiaoyu/newscms_smartyt/library/smarty/libs/plugins/modifier.date_format.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['roles']->value['username'];?>
</title>
	<style>
		*{
			font-size: 16px;
			line-height: 1.5em;
		}
		h1{
			text-align:center;
		}
		p.subhead{
			text-align: center;
			font-size:12px;
			color:#666;
			text-indent: 0;
		}
		p{
			text-indent: 2em;
		}
	</style>
</head>
<body>
<div class="breadcrumb">首页 > <a href="<?php echo PUBLIC_PATH;?>
roles/index">角色管理 </a>查看角色</div>
	<p>角色名:<?php echo $_smarty_tpl->tpl_vars['roles']->value['username'];?>
</p>
	<p>注册时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['roles']->value['registerTime'],"Y-m-d H:i:s");?>
</p>
	<p>邮箱：<?php echo $_smarty_tpl->tpl_vars['roles']->value['email'];?>
</p>
</body>
</html><?php }
}
