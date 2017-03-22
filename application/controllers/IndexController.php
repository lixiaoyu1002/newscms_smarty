<?php
header('Content-Type:text/html;charset=utf-8');
/**
 * class IndexController
 * 默认动作控制器类
 * @author 李小雨
 * @version 1.0
 */
class IndexController extends Mvclib_Controller_Action
{
	/**
	 * 当前控制器中所使用的数据库连接对象
	 * @var Mvclib_Db_Adapter_Abstract
	 */
	protected $_db;
	
	/**
	 * 初始化方法，相当于该类的构造方法；初始化数据库连接对象
	 * @see Mvclib_Controller_Action::init()
	 */
	public function init()
	{
		//1. 构造数据库连接参数
		$config = array(
			'host'		=>	'10.7.1.98',
			'username'	=>	'201404lixiaoyu',
			'password'	=>	'mysql2014',
			'dbname'	=>	'201404lixiaoyu',
			'charset'	=>	'utf8'
		);
		//2. 执行数据库连接
		$this->_db = Mvclib_Db::factory('pdo_mysql', $config);
	}
	/**
	 * 默认动作
	 */
	public function indexAction()
	{
		echo 'index/index';
		//1. 获得数据表product中的所有记录
		$rows = $this->_db->fetchAll('users');
		//2. 为当前视图对象赋值
		$this->smarty->assign('users',$rows);
		//3. 引用当前视图脚本
		$this->smarty->display('users/index.phtml');
	}
	/**
	 * 查看某一件商品动作
	 */
	public function viewAction()
	{
		//1. 获得请求参数
		$id = $this->getParam('id');
		//2. 获得数据表中当前id的记录
		$row = $this->_db->find('users', $id);
		//3. 为当前视图对象赋值
		$this->smarty->assign('users',$rows);
		//4. 引用当前视图脚本
		$this->smarty->display('users/index.phtml');
	}
}
