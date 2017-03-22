<?php
/* Smarty version 3.1.29, created on 2016-06-24 19:16:58
  from "G:\wamp\www\newscms_smarty\application\views\comments\view.phtml" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576d6b0a2e9ad9_10805978',
  'file_dependency' => 
  array (
    '25ad36ef1886b1e566ba69ee5d7dd2adf5ae0556' => 
    array (
      0 => 'G:\\wamp\\www\\newscms_smarty\\application\\views\\comments\\view.phtml',
      1 => 1466788615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576d6b0a2e9ad9_10805978 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'G:\\wamp\\www\\newscms_smarty\\library\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['Msg']->value['title'];?>
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
comments/index">评论管理 </a>查看评论</div>
	<p>评论名称：<?php echo $_smarty_tpl->tpl_vars['Msg']->value['title'];?>
 评论作者：<?php echo $_smarty_tpl->tpl_vars['Msg']->value['author'];?>
</p>
	<p>评论内容：<?php echo $_smarty_tpl->tpl_vars['Msg']->value['content'];?>
</p>
	<p class="subhead" align="right">发表时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['Msg']->value['time'],"Y-m-d H:i:s");?>
</p>
</body>
</html>
		<?php }
}
