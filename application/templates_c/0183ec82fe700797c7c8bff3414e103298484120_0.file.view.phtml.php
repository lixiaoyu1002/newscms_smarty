<?php
/* Smarty version 3.1.29, created on 2016-06-25 01:55:46
  from "/home/ftp/201404lixiaoyu/newscms_smartyt/application/views/news/view.phtml" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576d7422a72197_87761578',
  'file_dependency' => 
  array (
    '0183ec82fe700797c7c8bff3414e103298484120' => 
    array (
      0 => '/home/ftp/201404lixiaoyu/newscms_smartyt/application/views/news/view.phtml',
      1 => 1466790514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576d7422a72197_87761578 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/ftp/201404lixiaoyu/newscms_smartyt/library/smarty/libs/plugins/modifier.date_format.php';
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
