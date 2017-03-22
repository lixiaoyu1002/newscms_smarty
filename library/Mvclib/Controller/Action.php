<?php
/**
 * class Mvclib_Controller_Action
 * 自定义框架中的动作控制器类
 * @author
 * @version 1.0
 */
class Mvclib_Controller_Action
{
	/**
	 * 当前控制器所对应的视图对象
	 * @var Mvclib_View 
	 */
	public $view;
	protected $smarty;
	/**
	 * 构造方法，为当前控制器创建视图子对象；同时调用init()方法初始化其它信息
	 */
	public function __construct()
	{
		//引入smarty模板
		require_once(APPLICATION_PATH . '/../library/smarty/libs/Smarty.class.php');
		$this->smarty = new Smarty();
		$this->smarty->setTemplateDir(APPLICATION_PATH . '/views');
		$this->smarty->setCompileDir(APPLICATION_PATH . "/templates_c"); //设置模板编译目录
		$this->smarty->setCacheDir(APPLICATION_PATH ."/cache"); //设置缓存目录
		$this->smarty->setConfigDir(APPLICATION_PATH ."/configs"); //设置缓存目录
		$this->smarty->assign('PUBLIC_PATH',PUBLIC_PATH);

		//1. 创建当前控制器的视图子对象
		$this->view = new Mvclib_View();
		//2. 调用init()方法
		$this->init();
	}
	/**
	 * 初始化方法，相当于类的构造方法，一般需要子类继承该方法
	 */
	public function init()
	{
		
	}
	/**
	 * 获得HTTP请求中的参数
	 * @param string $key 待获得的请求参数
	 * @return string 请求参数的值
	 */
	public function getParam($key)
	{
		//1. 获得前端控制器对象
		$fc = Mvclib_Controller_Front::getInstance();
		//2. 返回当前请求参数
		return $fc->getParams($key);
	}
}
