<?php
/**
 * class Mvclib_Controller_Front
 * 自定义框架中的前端控制器类
 * @author 
 * @version 1.0
 */
class Mvclib_Controller_Front
{
	/**
	 * 当前HTTP请求的URL地址
	 * @var string
	 */
	protected $_urlPath;
	/**
	 * 当前HTTP请求的控制器名称
	 * @var string
	 */
	protected $_controllerName;
	/**
	 * 当前HTTP请求的动作名称
	 * @var string
	 */
	protected $_actionName;
	/**
	 * 当前HTTP请求的参数信息
	 * @var array
	 */
	protected $_params;
	/**
	 * 当前请求页面的视图HTML代码，默认为空字符串
	 * @var string
	 */
	protected $_body = '';
	/**
	 * 当前类的静态实例对象
	 * @var Mvclib_Controller_Front
	 */
	static protected $_instance;
	/**
	 * 当前应用程序的基本路径
	 * @var string
	 */
	protected $_baseUrl;
	/**
	 * 构造函数，私有成员函数，只能产生一个实例对象；分解HTTP请求为控制器、动作、请求参数等信息
	 * @return Mvclib_Controller_Front 当前类的实例对象
	 */
	protected function __construct()
	{
		//1. 获得当前HTTP请求的URL
		$this->_urlPath = $_SERVER['REQUEST_URI'];
		//2. 按'/'分解HTTP请求URL
		$splits = explode('/', trim($this->_urlPath, '/'));
		//3. 设置控制器参数开始的索引(若在URL中包含index.php，则令其下标为1)
		if (!($cindex = array_search('index.php', $splits))) {
			$cindex = 2;
		}
		//4. 设置控制器和动作的名称
		$this->_controllerName = empty($splits[$cindex+1]) ? 'index' : $splits[$cindex+1];
		$this->_actionName = empty($splits[$cindex+2]) ? 'index' : $splits[$cindex+2];
		
		//5. 设置请求参数的名称和值
		for ($idx=$cindex+3, $cnt=count($splits); $idx<$cnt; ++$idx) {
			//偶数号索引代表下标
			if ($idx % 2 == 1) {
				$keys[] = $splits[$idx];
			} else {
				//奇数号索引代表元素值
				$vals[] = $splits[$idx];
			}
		}
		//合并下标和值，组成关联数组
		if (isset($keys) && isset($vals)) {
			$this->_params = array_combine($keys, $vals);
		}
	}
	/**
	 * 析构方法，当前端控制器对象被销毁时自动调用，输出当前控制器当前动作所对应的视图脚本
	 * @param null
	 * @return null
	 */
	public function __destruct() 
	{
		echo $this->getBody();
	}
	/**
	 * 执行相应控制器中相应动作
	 * @param null
	 * @return null
	 */
	public function dispatch()
	{
		//1. 获得控制器类的名称
		$controllerClassName = ucfirst($this->_controllerName) . 'Controller';
	//	var_dump($this->_controllerName);
		//2. 获得控制器文件名称
		$controllerFile = APPLICATION_PATH . "/controllers/{$controllerClassName}.php";
		$controllerFile = realpath($controllerFile);


		//3. 加载控制器文件
		require_once $controllerFile;

		//4. 创建一个控制器对象
		$controller = new $controllerClassName();
		//5. 获得请求路径的动作名称
		$action = $this->_actionName;
		$action .= 'Action';
		//6. 执行控制器中的动作
		$controller->$action();
	}
	/**
	 * 静态方法，获得当前类的一个实例对象
	 * @return Mvclib_Controller_Front
	 */
	static public function getInstance()
	{
		if (!(self::$_instance instanceof self)) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}
	/**
	 * 获得当前请求的参数信息
	 * @param string $name 待获得的请求参数名称
	 * @return string|array 请求的参数值或所有参数信息组成的数组
	 */
	public function getParams($name = '')
	{
		if ($name) {
			return $this->_params[$name];
		}
		return $this->_params;
	}
	/**
	 * 获得当前请求所对应的控制器名称
	 * @return string 当前请求所对应的控制器名称
	 */
	public function getController()
	{
		return $this->_controllerName;
	}
	/**
	 * 获得当前请求所对应的动作名称
	 * @return string 当前请求所对应的动作名称
	 */
	public function getAction()
	{
		return $this->_actionName;
	}
	/**
	 * 获得当前请求控制器动作所对应的视图脚本代码
	 * @return string 当前请求控制器动作所对应的视图脚本的HTML代码
	 */
	public function getBody()
	{
		return $this->_body;
	}
	/**
	 * 设置当前请求控制器动作所对应的视图脚本代码
	 * @param string $body 当前请求控制器动作所对应的视图脚本的HTML代码
	 */
	public function setBody($body)
	{
		$this->_body = $body;
	}
	/**
	 * 为当前请求控制器动作所对应的视图脚本代码添加内容
	 * @param string $body 为当前请求控制器动作所对应的视图脚本再次添加的HTML代码
	 */
	public function appendToBody($body)
	{
		$this->_body = $this->getBody() . $body;
	}
	/**
	 * 设置当前应用程序的基本路径
	 * @param string $url 待设置的基本路径值
	 */
	public function setBaseUrl($url)
	{
		$this->_baseUrl = $url;
	}
	/**
	 * 获得当前应用程序的基本路径
	 * @return string 当前应用程序的基本路径，即public目录
	 */
	public function getBaseUrl()
	{
		return $this->_baseUrl;
	}
}
