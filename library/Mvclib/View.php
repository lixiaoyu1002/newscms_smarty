<?php
/**
 * class Mvclib_View
 * MVC框架中的视图类
 * @author 
 * @version 1.0
 */
class Mvclib_View
{
	/**
	 * 从控制器或视图中设置或获取的视图变量值
	 * @var array
	 */
	protected $_props = array();
	/**
	 * 视图文件根目录，application/views
	 * @var string
	 */
	protected $_viewDir;
	/**
	 * 当前视图对象待加载的视图文件
	 * @var string
	 */
	protected $_viewFile = '';
	/**
	 * __construct()
	 * 构造函数，设置初始视图文件根目录
	 * @param string $view_dir 视图文件根目录
	 */
	public function __construct($view_dir='')
	{
		if (!$view_dir) {
			$view_dir = APPLICATION_PATH . '/views';
		}
		$this->_viewDir = $view_dir;
	}
	/**
	 * __get()
	 * 魔术方法，获取视图变量的值
	 * @param string $key
	 */
	public function __get($key)
	{
		if (isset($this->_props[$key])) {
			return $this->_props[$key];
		} else {
			return false;
		}
	}
	/**
	 * __set()
	 * 魔术方法，设置视图变量的值
	 * @param string $key 待设置的模板视图变量下标
	 * @param mix $value 待设置的模板视图变量值
	 */
	public function __set($key, $value)
	{
		$this->assign($key, $value);
	}
	/**
	 * assign()
	 * 设置视图变量的值
	 * @param string $key 待设置的模板视图变量下标
	 * @param mix $value 待设置的模板视图变量值
	 */
	public function assign($key, $value)
	{
		if ($key != '') {
			$this->_props[$key] = $value;
		}
	}
	/**
	 * 获得当前应用程序的基本路径
	 * @return string 当前应用程序的基本路径
	 */
	public function baseUrl()
	{
		//1. 获得前端控制器对象
		$fc = Mvclib_Controller_Front::getInstance();
		//2. 返回前端控制器对象的基本路径
		return $fc->getBaseUrl();
	}
	/**
	 * render()
	 * 返回视图文件的内容
	 * @param string $fileName 视图文件名称，若未传入视图文件，则使用当前控制器当前动作所对应的视图文件
	 */
	public function render($fileName = '')
	{
		//1. 获得前端控制器对象
		$fc = Mvclib_Controller_Front::getInstance();
		//2. 若没有提供视图文件，则使用当前控制器当前动作所对应的视图文件
		if ($fileName == '') {
			//2.1 获得当前控制器和动作的名称
			$controller = $fc->getController();
			$action = $fc->getAction();
			//2.2 获得当前控制器动作所对应的视图文件名称
			$fileName = "{$controller}/{$action}.phtml";
		}
		//3. 去除$fileName前的'/'
		$fileName = ltrim($fileName, '/');
		//4. 设置视图文件完整路径
		$viewFile = $this->_viewDir . "/{$fileName}";
		//5. 开启缓冲区
		ob_start();
		//6. 引入视图文件
		require $viewFile;
		//7. 获得变量解析后的视图文件
		$body = ob_get_clean();
		//8. 设置视图脚本到前端控制器对象中
		$fc->appendToBody($body);
	}
}
