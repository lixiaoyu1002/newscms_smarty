<?php
/* Smarty version 3.1.29, created on 2016-05-24 15:38:06
  from "E:\wamp\www\newscms\application\views\news\index.phtml" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5744593e4fe4a5_78226892',
  'file_dependency' => 
  array (
    '4643720b3cdae833b7809f880570b522552c2a3b' => 
    array (
      0 => 'E:\\wamp\\www\\newscms\\application\\views\\news\\index.phtml',
      1 => 1464097082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5744593e4fe4a5_78226892 ($_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['this']->value->smarty['const']['PUBLIC_PATH'];?>
css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/libs/modernizr.min.js"><?php echo '</script'; ?>
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
                        <li><a href="manageNews.html"><i class="icon-font">&#xe017;</i>管理新闻</a></li>
                        <li><a href="addNews.html"><i class="icon-font">&#xe037;</i>添加新闻</a></li>
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
                        <a href="addType.html"><i class="icon-font"></i>添加新闻</a>
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
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>20</td>
                            <td>杜特蒂称将谋求举行“多边会谈”处理南海争议</td>
                            <td title="">张三
                            </td>
                            <td>2016-05-11 08:12:13</td>
                            <td>2016-05-11 08:12:13</td>
                            <td>
                                <a class="link-update" href="editType.html">修改</a>
                                <a class="link-del" href="deleteType.html">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>21</td>
                            <td>杜特蒂称将谋求举行“多边会谈”处理南海争议</td>
                            <td title="">张三
                            </td>
                            <td>2016-05-11 08:12:13</td>
                            <td>2016-05-11 08:12:13</td>
                            <td>
                                <a class="link-update" href="editType.html">修改</a>
                                <a class="link-del" href="deleteType.html">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>22</td>
                            <td>杜特蒂称将谋求举行“多边会谈”处理南海争议</td>
                            <td title="">张三
                            </td>
                            <td>2016-05-11 08:12:13</td>
                            <td>2016-05-11 08:12:13</td>
                            <td>
                                <a class="link-update" href="editType.html">修改</a>
                                <a class="link-del" href="deleteType.html">删除</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>
                                23
                            </td>
                            <td>杜特蒂称将谋求举行“多边会谈”处理南海争议</td>
                            <td title="">张三
                            </td>
                            <td>2016-05-11 08:12:13</td>
                            <td>2016-05-11 08:12:13</td>
                            <td>
                                <a class="link-update" href="editType.html">修改</a>
                                <a class="link-del" href="deleteType.html">删除</a>
                            </td>
                        </tr>
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
