<?php
/* Smarty version 3.1.29, created on 2016-05-25 03:06:41
  from "E:\wamp\www\newscms\application\views\news\index.phtml" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5744faa1295d65_80763009',
  'file_dependency' => 
  array (
    '4643720b3cdae833b7809f880570b522552c2a3b' => 
    array (
      0 => 'E:\\wamp\\www\\newscms\\application\\views\\news\\index.phtml',
      1 => 1464138376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5744faa1295d65_80763009 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'E:\\wamp\\www\\newscms\\library\\smarty\\libs\\plugins\\modifier.date_format.php';
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="<?php echo STATIC_PATH;?>
/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo STATIC_PATH;?>
/css/main.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo STATIC_PATH;?>
/js/libs/modernizr.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
    	<div class="sidebar-title">
            <h1></h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>分类管理</a>
                    <ul class="sub-menu">
                        <li><a href="manageType.html"><i class="icon-font">&#xe008;</i>管理分类</a></li>
                        <li><a href="addType.html"><i class="icon-font">&#xe005;</i>修改分类</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>新闻管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo PUBLIC_PATH;?>
news/index"><i class="icon-font">&#xe017;</i>管理新闻</a></li>
                        <li><a href="<?php echo PUBLIC_PATH;?>
news/add"><i class="icon-font">&#xe037;</i>添加新闻</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>管理员管理</a>
                    <ul class="sub-menu">
                        <li><a href="manageAdmin.html"><i class="icon-font">&#xe017;</i>管理管理员</a></li>
                        <li><a href="addAdmin.html"><i class="icon-font">&#xe037;</i>添加管理员</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>角色管理</a>
                    <ul class="sub-menu">
                        <li><a href="manageRole.html"><i class="icon-font">&#xe017;</i>管理角色</a></li>
                        <li><a href="addRole.html"><i class="icon-font">&#xe037;</i>添加角色</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">新闻管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo PUBLIC_PATH;?>
news/add"><i class="icon-font"></i>添加新闻</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>标题</th>
                            <th>作者</th>
                            <th>发布时间</th>
                            <th>更新时间</th>
                            <th>操作</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tmp_0_saved_item = isset($_smarty_tpl->tpl_vars['tmp']) ? $_smarty_tpl->tpl_vars['tmp'] : false;
$_smarty_tpl->tpl_vars['tmp'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['tmp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tmp']->value) {
$_smarty_tpl->tpl_vars['tmp']->_loop = true;
$__foreach_tmp_0_saved_local_item = $_smarty_tpl->tpl_vars['tmp'];
?>
                             <tr>
                                <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                                <td><?php echo $_smarty_tpl->tpl_vars['tmp']->value['id'];?>
</td>
                                <td><a class="link-del" href="<?php echo PUBLIC_PATH;?>
news/view/id/<?php echo $_smarty_tpl->tpl_vars['tmp']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tmp']->value['title'];?>
</a></td>
                                <td title="">张三
                                </td>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tmp']->value['inputtime'],"Y-m-d H:i:s");?>
</td>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tmp']->value['updatetime'],"Y-m-d H:i:s");?>
</td>
                                <td>
                                    <a class="link-update" href="<?php echo PUBLIC_PATH;?>
news/edit/id/<?php echo $_smarty_tpl->tpl_vars['tmp']->value['id'];?>
">修改</a>
                                    <a class="link-del" href="<?php echo PUBLIC_PATH;?>
news/delete/id/<?php echo $_smarty_tpl->tpl_vars['tmp']->value['id'];?>
">删除</a>
                                     <a class="link-del" href="<?php echo PUBLIC_PATH;?>
news/view/id/<?php echo $_smarty_tpl->tpl_vars['tmp']->value['id'];?>
">详情</a>
                                </td>
                            </tr>
                        <?php
$_smarty_tpl->tpl_vars['tmp'] = $__foreach_tmp_0_saved_local_item;
}
if ($__foreach_tmp_0_saved_item) {
$_smarty_tpl->tpl_vars['tmp'] = $__foreach_tmp_0_saved_item;
}
?>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html><?php }
}
