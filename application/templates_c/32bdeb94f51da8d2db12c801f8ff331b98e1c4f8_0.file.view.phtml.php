<?php
/* Smarty version 3.1.29, created on 2016-05-25 04:15:42
  from "E:\wamp\www\newscms\application\views\news\view.phtml" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57450acee12d50_45474078',
  'file_dependency' => 
  array (
    '32bdeb94f51da8d2db12c801f8ff331b98e1c4f8' => 
    array (
      0 => 'E:\\wamp\\www\\newscms\\application\\views\\news\\view.phtml',
      1 => 1464142539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57450acee12d50_45474078 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\wamp\\www\\newscms\\library\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
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
news/index">新闻管理 </a>查看新闻</div>
	<h1><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</h1>
	<p class="subhead">发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['inputtime'],"Y-m-d H:i:s");?>
</p>
	<p>摘要：<?php echo $_smarty_tpl->tpl_vars['news']->value['description'];?>
</p>
	<p><?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>
</p>
</body>
</html><?php }
}
