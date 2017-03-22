<?php
/**
 * class Mvclib_Db
 * 抽象工厂模式，创建数据库连接
 * @author 
 * @version 1.0
 */
abstract class Mvclib_Db
{	
	/**
	 * 工厂方法，建立数据库连接，返回数据库连接资源
	 * @param  string $adapter 数据库适配器的名称，如'pdo_mysql'、'mysql'、'pdo_pgsql'等
     * @param  array $config 数据库信息组成的一维关联数组(数据库主机、账号、密码、数据库名)，可选参数，默认为('localhost', 'root', '123456', 'test') 
     * @return Mvclib_Db_Adapter_Abstract PDO方式连接的数据库资源
     */
    public static function factory($adapter, Array $config = null)
	{
		//1. 构造数据库连接适配器
		$adapter = ucfirst(ltrim(strtolower($adapter), 'pdo_')); //首先小写，再次去掉前缀(如果有的话)，最后大写首字母
		$class = "Mvclib_Db_Adapter_{$adapter}"; //构造类名，如Mvclib_Db_Adapter_Mysql
		//2. 构造数据库连接参数
		if (!isset($config['host'])) {
			$config['host'] = '127.0.0.1'; //默认数据库连接主机为本地主机
		}
		if (!isset($config['username'])) {
			$config['username'] = 'root'; //默认数据库用户名为root
		}
		if (!isset($config['password'])) {
			$config['password'] = '123456'; //默认数据库用户密码为123456
		}
		if (!isset($config['dbname'])) {
			$config['dbname'] = 'test'; //默认数据库为test
		}
		if (!isset($config['charset'])) { //默认数据库连接字符编码为utf8
			$config['charset'] = 'utf8';
		}
		//3. 返回数据库连接资源
		return new $class($config);
	}
}
