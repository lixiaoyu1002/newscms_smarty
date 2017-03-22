<?php
/* Smarty version 3.1.29, created on 2016-06-17 11:42:54
  from "G:\wamp\www\newscms_smarty\application\views\roles\view.phtml" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5763c61e13ae24_19546653',
  'file_dependency' => 
  array (
    '6d9c2c4f5eca97dc78dbf9e39ca8b02f64f8e5b6' => 
    array (
      0 => 'G:\\wamp\\www\\newscms_smarty\\application\\views\\roles\\view.phtml',
      1 => 1466156571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5763c61e13ae24_19546653 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'G:\\wamp\\www\\newscms_smarty\\library\\smarty\\libs\\plugins\\modifier.date_format.php';
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
