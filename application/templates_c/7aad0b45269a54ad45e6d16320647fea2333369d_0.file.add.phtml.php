<?php
/* Smarty version 3.1.29, created on 2016-06-25 01:53:54
  from "/home/ftp/201404lixiaoyu/newscms_smartyt/application/views/comments/add.phtml" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_576d73b235c326_19746090',
  'file_dependency' => 
  array (
    '7aad0b45269a54ad45e6d16320647fea2333369d' => 
    array (
      0 => '/home/ftp/201404lixiaoyu/newscms_smartyt/application/views/comments/add.phtml',
      1 => 1466790512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_576d73b235c326_19746090 ($_smarty_tpl) {
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
news/index ">首页</a></li>
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
                    <a href="<?php echo PUBLIC_PATH;?>
type/index"><i class="icon-font">&#xe003;</i>分类管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo PUBLIC_PATH;?>
type/index"><i class="icon-font">&#xe008;</i>管理分类</a></li>
                        <li><a href="<?php echo PUBLIC_PATH;?>
type/add"><i class="icon-font">&#xe005;</i>修改分类</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo PUBLIC_PATH;?>
news/index"><i class="icon-font">&#xe018;</i>新闻管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo PUBLIC_PATH;?>
news/index"><i class="icon-font">&#xe017;</i>管理新闻</a></li>
                        <li><a href="<?php echo PUBLIC_PATH;?>
news/add"><i class="icon-font">&#xe037;</i>添加新闻</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo PUBLIC_PATH;?>
users/index"><i class="icon-font">&#xe018;</i>管理员管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo PUBLIC_PATH;?>
users/index"><i class="icon-font">&#xe017;</i>管理管理员</a></li>
                        <li><a href="<?php echo PUBLIC_PATH;?>
users/add"><i class="icon-font">&#xe037;</i>添加管理员</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo PUBLIC_PATH;?>
roles/index"><i class="icon-font">&#xe018;</i>角色管理</a>
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
            <div class="crumb-list"><i class="icon-font"></i><a href="/">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="<?php echo PUBLIC_PATH;?>
comments/index">评论管理管理</a><span class="crumb-step">&gt;</span><span>添加评论</span></div>
        </div>
        <div class="result-wrap">
            <form action="<?php echo PUBLIC_PATH;?>
comments/add" method="post" id="myform" name="myform" enctype="multipart/form-data">
               <table class="insert-tab" width="100%">
                    <tbody>
                    	<tr>
                            <th width="120"><i class="require-red">*</i>所评论的文章：</th>
                            <td>
                                <select name="new">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['news']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_new_0_saved_item = isset($_smarty_tpl->tpl_vars['new']) ? $_smarty_tpl->tpl_vars['new'] : false;
$_smarty_tpl->tpl_vars['new'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['new']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['new']->value) {
$_smarty_tpl->tpl_vars['new']->_loop = true;
$__foreach_new_0_saved_local_item = $_smarty_tpl->tpl_vars['new'];
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
</option>
                                    <?php
$_smarty_tpl->tpl_vars['new'] = $__foreach_new_0_saved_local_item;
}
if ($__foreach_new_0_saved_item) {
$_smarty_tpl->tpl_vars['new'] = $__foreach_new_0_saved_item;
}
?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>评论标题：</th>
                            <td>
                                <input type="text" name="title"  class="common-text" size="80" />
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>评论作者：</th>
                            <td>
                                <input type="text" name="author"  class="common-text" size="80" />
                            </td>
                        </tr>
                           <tr>
                            <th><i class="require-red">*</i>评论内容：</th>
                            <td>
                                
                                <input type="text" name="content"  class="common-text" size="80" />
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
