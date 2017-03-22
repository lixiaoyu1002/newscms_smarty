<?php
/* Smarty version 3.1.29, created on 2016-06-25 01:55:49
  from "/home/ftp/201404lixiaoyu/newscms_smartyt/application/views/comments/view.phtml" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576d742592fe90_87047018',
  'file_dependency' => 
  array (
    '9537c3fb2a2c8e0e46edb57a968424c1a871d1a1' => 
    array (
      0 => '/home/ftp/201404lixiaoyu/newscms_smartyt/application/views/comments/view.phtml',
      1 => 1466790512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576d742592fe90_87047018 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/ftp/201404lixiaoyu/newscms_smartyt/library/smarty/libs/plugins/modifier.date_format.php';
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
