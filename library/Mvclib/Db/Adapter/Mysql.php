<?php
class Mvclib_Db_Adapter_Mysql extends Mvclib_Db_Adapter_Abstract
{
	/**
	 * 当前数据库连接对象
	 * @var PDO
	 */
	protected $_db = null;
	/**
	 * 构造方法，创建到MySQL数据库的连接
	 * @param array $config 数据库连接参数信息
	 */
	public function __construct($config)
	{
		//1. 构造DSN
		$dsn = "mysql:host={$config['host']};dbname={$config['dbname']}";
		//2. 执行数据库连接
		$this->_db = new PDO($dsn, $config['username'], $config['password']);
		//3. 设置字符编码
		$this->_db->exec("set names {$config['charset']}");
		//4. 返回数据库连接对象
		return $this->_db;
	}
}
