<?php
header('Content-Type:text/html;charset=utf-8');
/**
 * class IndexController
 * 默认动作控制器类
 * @author 李小雨
 * @version 2.0
 */
class RolesController extends Mvclib_Controller_Action
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
	* 显示角色列表
	**/
	public function indexAction(){
		//1、获取数据
		$roles = $this->_db->fetchAll('roles');

		//2、分配获取的数据到视图文件
		$this->smarty->assign('roles',$roles);

		//3、显示视图文件
		$this->smarty->display('roles/index.phtml');
	}

	/**添加角色**/
	public function addAction(){
		if(isset($_POST['submit'])){//提交添加的数据
			$data = array();
			$data['username'] = $_POST['name'];
			$data['password'] = $_POST['pwd'];
			$data['email'] = $_POST['email'];
			$data['question'] = $_POST['question'];
			$data['answer'] = $_POST['answer'];
			$data['registTime']= time();

			if($this->_db->insert('roles',$data)){
				header("Location:index");
			}

		}else{//显示添加数据的表单
			$this->smarty->display('roles/add.phtml');
		}

	}
	/*修改角色*/
	public function editAction(){
		if(isset($_POST['submit'])){
			$data = array();
			$data['username']= $_POST['name'];
			$data['password']=$_POST['pwd'];
			$data['email'] = $_POST['email'];
			$data['question'] = $_POST['question'];
			$data['answer'] = $_POST['answer'];
			$data['registTime']= time();
			$id = $_POST['id'];

			if($this->_db->update('roles',$data,"id=$id")){
				header("Location:../roles/index");
			}
		}else{
			//1、取到要修改的数据
			$id = $this->getParam('id');
			$roles=$this->_db->find('roles',$id);
			//2、分配数据到视图文件
			$this->smarty->assign('roles',$roles);
			$this->smarty->display('roles/edit.phtml');
		}
	}
	/*删除角色*/
	public function deleteAction(){
		$id = $this->getParam('id');
		if($this->_db->delete('roles',"id=$id")){
			header("Location:../../index");
		}
	}
	/*显示角色详细信息*/
	public function viewAction(){
		$id = $this->getParam('id');
		$type = $this->_db->find('roles',$id);
		$this->smarty->assign('roles',$type);
		$this->smarty->display('roles/view.phtml');

	}
}
