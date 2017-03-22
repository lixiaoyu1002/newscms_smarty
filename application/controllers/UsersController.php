<?php
/**
 * class IndexController
 * 默认动作控制器类
 * @author 李小雨
 * @version 1.0
 */
class UsersController extends Mvclib_Controller_Action
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
	/** 显示新闻列表* */
	public function indexAction()
	{
		//1. 获得数据表product中的所有记录
		$rows = $this->_db->fetchAll('users');

		//2、分配数据到视图（模板）
		$this->smarty->assign('users',$rows);

		//3、显示是视图
		$this->smarty->display('users/index.phtml');
	}

	/**添加新闻	**/
	public function addAction(){
		if(isset($_POST['submit'])){//如果提交了数据
			//1、定义空数组存储提交过来的数据
			$data = array();
			//2、组织待添加的数据
			$data['username'] = $_POST['username'];
			$data['password'] = $_POST['password'];
			$data['email']=$_POST['email'];
			$data['question'] = $_POST['question'];
			$data['answer'] = $_POST['answer'];
			$data['registertime']=time();//添加数据时，发布时间和更新时间一样

			//3、插入数据到数据库
			if($this->_db->insert('users',$data)){
				header('Location:index');//数据添加成功，页面跳转至新闻列表页
			}
		}else{//如果没有提交表单数据
			$this->smarty->display('users/add.phtml');
		}
		
	}
	/**编辑新闻	**/
	public function editAction(){
		if(isset($_POST['submit'])){//如果提交了数据
			//1、定义空数组存储提交过来的数据
			$data = array();
			//echo '222';
			//exit;
			//2、组织待添加的数据
			$data['username'] = $_POST['username'];
			$data['password'] = $_POST['password'];
			$data['email']=$_POST['email'];
			$data['question'] = $_POST['question'];
			$data['answer'] = $_POST['answer'];
			
			$id=$_POST['id'];
			//3、插入数据到数据库
			if($this->_db->update('users',$data,"id=$id")){
				header('Location:index');//数据添加成功，页面跳转至新闻列表页
			}
		}else{//如果没有提交表单数据
			//1、获取要编辑的文章
			$user = $this->_db->find('users',$this->getParam('id'));
			//3、分配文章到编辑文章页面
			$this->smarty->assign('users',$user);
			//5、显示编辑文章表单页
			$this->smarty->display('users/edit.phtml');
		}
	}
	/** 删除新闻**/
	public function deleteAction(){
		//1、获取要删除新闻的id
		$id = $this->getParam('id');

		//2、删除新闻
		if($this->_db->delete('users', "id=$id")){
			header("Location:../../index");//删除成功，页面跳转至新闻列表页
		}
	}
	/**显示新闻详细信息	**/
	public function viewAction(){
		//1、根据id获取新闻详细信息
		$news = $this->_db->find('users',$this->getParam('id'));

		//2、分配数据到视图页
		$this->smarty->assign('users',$news);

		//3、显示视图
		$this->smarty->display('users/view.phtml');
	}
}
