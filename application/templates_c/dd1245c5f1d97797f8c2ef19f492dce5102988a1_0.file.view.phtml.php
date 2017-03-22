<?php
/* Smarty version 3.1.29, created on 2016-06-25 02:15:21
  from "/home/ftp/201404lixiaoyu/newscms_smartyt/application/views/types/view.phtml" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576d78b9cc6136_49662515',
  'file_dependency' => 
  array (
    'dd1245c5f1d97797f8c2ef19f492dce5102988a1' => 
    array (
      0 => '/home/ftp/201404lixiaoyu/newscms_smartyt/application/views/types/view.phtml',
      1 => 1466790515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576d78b9cc6136_49662515 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/ftp/201404lixiaoyu/newscms_smartyt/library/smarty/libs/plugins/modifier.date_format.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['types']->value['name'];?>
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
type/index">分类管理 </a>查看分类</div>
	<h1>类别：<?php echo $_smarty_tpl->tpl_vars['types']->value['name'];?>
</h1>
	<p class="subhead">发布时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['types']->value['inputtime'],"Y-m-d H:i:s");?>
</p>
	<p>描述：<?php echo $_smarty_tpl->tpl_vars['types']->value['description'];?>
</p>
</body>
</html>
 <?php }
}
