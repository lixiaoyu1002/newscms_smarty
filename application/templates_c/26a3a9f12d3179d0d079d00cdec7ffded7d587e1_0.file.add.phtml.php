<?php
/* Smarty version 3.1.29, created on 2016-05-25 03:33:23
  from "E:\wamp\www\newscms\application\views\news\add.phtml" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_574500e331d1d0_64320002',
  'file_dependency' => 
  array (
    '26a3a9f12d3179d0d079d00cdec7ffded7d587e1' => 
    array (
      0 => 'E:\\wamp\\www\\newscms\\application\\views\\news\\add.phtml',
      1 => 1464139986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_574500e331d1d0_64320002 ($_smarty_tpl) {
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo PUBLIC_PATH;?>
news/index">新闻管理</a><span class="crumb-step">&gt;</span><span>添加新闻</span></div>
        </div>
        <div class="result-wrap">
            <form action="<?php echo PUBLIC_PATH;?>
news/add" method="post" id="myform" name="myform" enctype="multipart/form-data">
               <table class="insert-tab" width="100%">
                    <tbody>
                        <tr>
                            <th width="120"><i class="require-red">*</i>类别：</th>
                            <td>
                                <select name="type">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['types']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_type_0_saved_item = isset($_smarty_tpl->tpl_vars['type']) ? $_smarty_tpl->tpl_vars['type'] : false;
$_smarty_tpl->tpl_vars['type'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['type']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
$_smarty_tpl->tpl_vars['type']->_loop = true;
$__foreach_type_0_saved_local_item = $_smarty_tpl->tpl_vars['type'];
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['type']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['name'];?>
</option>
                                    <?php
$_smarty_tpl->tpl_vars['type'] = $__foreach_type_0_saved_local_item;
}
if ($__foreach_type_0_saved_item) {
$_smarty_tpl->tpl_vars['type'] = $__foreach_type_0_saved_item;
}
?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>标题：</th>
                            <td>
                                <input type="text" name="title"  class="common-text" size="80" />
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>摘要：</th>
                            <td>
                                <textarea class="common-textarea" name="description" cols="30" style="width: 98%;" rows="5"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>内容：</th>
                            <td>
                                <textarea class="common-textarea" name="content" cols="30" style="width: 98%;" rows="15"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input class="btn btn-primary btn6 mr10" value="添加" type="submit" name="submit">
                                 <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody></table>
            </form>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html><?php }
}
