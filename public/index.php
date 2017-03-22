<?php
ini_set('display_errors', 'on'); 
header('Content-Type:text/html;charset=utf-8');
//1. 定义应用程序路径为application目录
defined('APPLICATION_PATH') || 
	define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));
//2. 设置应用程序包含路径
set_include_path(implode(PATH_SEPARATOR, array(
	realpath(APPLICATION_PATH . '/../library'),
	get_include_path()
)));

//框架中引入smarty，改进1
//添加两个常量，statics（静态文件路径），public
defined('STATIC_PATH') || 
    define('STATIC_PATH', 'http://'.$_SERVER['SERVER_NAME'] . '/201404lixiaoyu/newscms_smartyt/statics/');
defined('PUBLIC_PATH') || 
    define('PUBLIC_PATH', 'http://'.$_SERVER['SERVER_NAME'] . '/201404lixiaoyu/newscms_smartyt/public/');

//3. 编写自动加载类函数
// function __autoload($className)
// {
//     echo $className . ' ';
//     if (false === strpos($className, 'Smarty')) {
//         //1. 按照下划线，把类名进行分解
//         $parts = explode('_', $className);
//         //2. 设置待加载类文件的目录
//         $path = implode('/', $parts);
//         //3. 加载类文件
//         require_once $path . '.php';
//     }
	
// }

//框架中引入smarty，改进2、改进自动加载函数
spl_autoload_register(function($className)  {
    if (false === strpos($className, 'Smarty')) {
        //1. 按照下划线，把类名进行分解
        $parts = explode('_', $className);
        //2. 设置待加载类文件的目录
        $path = implode('/', $parts);
        //3. 加载类文件
        require_once $path . '.php';
    }
});

//4. 产生前端控制器对象（单例方式）
$fc = Mvclib_Controller_Front::getInstance();
//5. 设置基本路径
$fc->setBaseUrl('/201404lixiaoyu/newscms_smartyt/public');
//6. 执行分派HTTP请求
$fc->dispatch();


