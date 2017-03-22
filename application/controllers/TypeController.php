<?php
header('Content-Type:text/html;charset=utf-8');
/**
 * class IndexController
 * 默认动作控制器类
 * @author 李小雨
 * @version 2.0
 */
class TypeController extends Mvclib_Controller_Action
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
	* 显示文章分类列表
	**/
	public function indexAction(){
		//1、获取数据
		$types = $this->_db->fetchAll('types');

		//2、分配获取的数据到视图文件
		$this->smarty->assign('types',$types);

		//3、显示视图文件
		$this->smarty->display('types/index.phtml');
	}

	/**添加文章分类**/
	public function addAction(){
		if(isset($_POST['submit'])){//提交添加的数据
			$data = array();
			$data['name'] = $_POST['name'];
			$data['description'] = $_POST['description'];
			$data['inputtime']=$data['updatetime'] = time();
			if($this->_db->insert('types',$data)){
				header("Location:index");
			}

		}else{//显示添加数据的表单
			//1、获取文章类别
			$types = $this->_db->fetchAll('types');

			//2、分配文章类别到添加文章页
			$this->smarty->assign('types',$types);

			//3、显示添加文章表单页
			$this->smarty->display('types/add.phtml');
		}

	}
	/*修改文章分类*/
	public function editAction(){
		if(isset($_POST['submit'])){
			$data = array();
			$data['name']= $_POST['name'];
			$data['description']=$_POST['description'];
			$data['updatetime']=time();
			$id = $_POST['id'];

			if($this->_db->update('types',$data,"id=$id")){
				header("Location:../type/index");
			}
		}else{
			//1、取到要修改的数据
			$id = $this->getParam('id');
			$type=$this->_db->find('types',$id);
			//2、分配数据到视图文件
			$this->smarty->assign('types',$type);
			$this->smarty->display('types/edit.phtml');
		}
	}
	/*删除文章分类*/
	public function deleteAction(){
		$id = $this->getParam('id');
		if($this->_db->delete('types',"id=$id")){
			header("Location:../../index");
		}
	}
	/*显示文章分类详细信息*/
	public function viewAction(){
		$id = $this->getParam('id');
		$type = $this->_db->find('types',$id);
		$this->smarty->assign('types',$type);
		$this->smarty->display('types/view.phtml');

	}
}
