<?php
/* Smarty version 3.1.29, created on 2016-06-25 01:56:00
  from "/home/ftp/201404lixiaoyu/newscms_smartyt/application/views/roles/index.phtml" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576d7430310e68_10617176',
  'file_dependency' => 
  array (
    'ad76cdd0b2f659424d8fcc3a20420d7a7059eaa1' => 
    array (
      0 => '/home/ftp/201404lixiaoyu/newscms_smartyt/application/views/roles/index.phtml',
      1 => 1466790514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576d7430310e68_10617176 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/ftp/201404lixiaoyu/newscms_smartyt/library/smarty/libs/plugins/modifier.date_format.php';
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
            <h1 class="topbar-logo none"><a href="<?php echo PUBLIC_PATH;?>
news/index " class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo PUBLIC_PATH;?>
news/index">首页</a></li>
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
                        <li><a href="<?php echo PUBLIC_PATH;?>
type/index"><i class="icon-font">&#xe008;</i>管理分类</a></li>
                        <li><a href="<?php echo PUBLIC_PATH;?>
type/add"><i class="icon-font">&#xe005;</i>添加分类</a></li>
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
                        <li><a href="<?php echo PUBLIC_PATH;?>
users/index"><i class="icon-font">&#xe017;</i>管理管理员</a></li>
                        <li><a href="<?php echo PUBLIC_PATH;?>
users/add"><i class="icon-font">&#xe037;</i>添加管理员</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>角色管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo PUBLIC_PATH;?>
roles/index"><i class="icon-font">&#xe017;</i>管理角色</a></li>
                        <li><a href="<?php echo PUBLIC_PATH;?>
roles/add"><i class="icon-font">&#xe037;</i>添加角色</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>评论管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo PUBLIC_PATH;?>
comments/index"><i class="icon-font">&#xe017;</i>管理评论</a></li>
                        <li><a href="<?php echo PUBLIC_PATH;?>
comments/add"><i class="icon-font">&#xe037;</i>添加评论</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">角色管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo PUBLIC_PATH;?>
roles/add"><i class="icon-font"></i>添加角色</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>角色名</th>
                            <th>注册时间</th>
                            <th>邮箱</th>
                            <th>操作</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
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
roles/view/id/<?php echo $_smarty_tpl->tpl_vars['tmp']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tmp']->value['username'];?>
</a></td>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['tmp']->value['registerTime'],"Y-m-d H:i:s");?>
</td>
                                <td><a class="link-del" href="<?php echo PUBLIC_PATH;?>
roles/view/id/<?php echo $_smarty_tpl->tpl_vars['tmp']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['tmp']->value['email'];?>
</a></td>
                                <td>
                                    <a class="link-update" href="<?php echo PUBLIC_PATH;?>
roles/edit/id/<?php echo $_smarty_tpl->tpl_vars['tmp']->value['id'];?>
">修改</a>
                                    <a class="link-del" href="<?php echo PUBLIC_PATH;?>
roles/delete/id/<?php echo $_smarty_tpl->tpl_vars['tmp']->value['id'];?>
">删除</a>
                                     <a class="link-del" href="<?php echo PUBLIC_PATH;?>
roles/view/id/<?php echo $_smarty_tpl->tpl_vars['tmp']->value['id'];?>
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
