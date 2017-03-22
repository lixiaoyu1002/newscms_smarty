<?php
abstract class Mvclib_Db_Adapter_Abstract
{
	/**
	 * 通过主键字段，获得某一条记录
	 * @param string $table 待获得数据表的名称
	 * @param int $id 待获得记录的主键id
	 * @return array 所获得记录的关联数组形式
	 */
	public function find($table, $id)
	{
		//1. 构造预处理
		$sm = $this->_db->prepare("select * from {$table} where id = :id");
		//2. 绑定参数
		$sm->bindParam(":id", $id);
		//3. 执行预处理
		$sm->execute();
		//4. 获得结果集
		$result = $sm->fetch(PDO::FETCH_ASSOC);
		//5. 返回结果集
		return $result;
	}
	/**
	 * 获取数据表的所有记录
	 * @param string $table 待获得的数据表的名称
	 * @return array 数据表中所有记录组成的二维关联数组形式
	 */
	public function fetchAll($table)
	{
		//1. 构造预处理
		$sm = $this->_db->prepare("select * from {$table}");
		//2. 执行预处理
		$sm->execute();
		//3. 获得结果集
		$results = $sm->fetchAll(PDO::FETCH_ASSOC);
		//4. 返回结果集
		return $results;
	}

	/**
	 *向数据表中添加记录
	 *@param string $table 待添加数据的数据表的名称
	 *@param array $arrData 待添加数据数组
	**/
	public function insert($table,$arrData) {
	    $name = $values = '';
	    $flag = $flagV = 1;
	    $true = is_array( current($arrData) );//判断是否一次插入多条数据
	    if($true) {
	        //构建插入多条数据的sql语句
	        foreach($arrData as $arr) {
	            $values .= $flag ? '(' : ',(';
	            foreach($arr as $key => $value) {
	                if($flagV) {
	                    if($flag) $name .= "$key";
	                    $values .= "'$value'";
	                    $flagV = 0;
	                } else {
	                    if($flag) $name .= ",$key";
	                    $values .= ",'$value'";
	                }
	            }
	            $values .= ') ';
	            $flag = 0;
	            $flagV = 1;
	        }
	    } else {
	        //构建插入单条数据的sql语句
	        foreach($arrData as $key => $value) {
	            if($flagV) {
	                $name = "$key";
	                $values = "('$value'";
	                $flagV = 0;
	            } else {
	                $name .= ",$key";
	                $values .= ",'$value'";
	            }
	        }
	        $values .= ") ";
	    }
	     
	    $this->sql = $strSql = "insert into $table ($name) values $values";
	    if( ($this->result = $this->_db->exec($strSql) ) > 0 ) {
	        return $this;
	    }
	    return false;
	}
	/**
	 *更新数据表中的记录
	 *@param string $table 待修改数据的数据表的名称
	 *@param array $arrData 待修改数据数组
	 *@param array $condition 条件
	**/
	public function update($table,$arrData,$condition) {
	    $flag = 1;
	    foreach($arrData as $key => $value) {
	        if($flag) {
	            $data = "$key = '$value'";
	            $flag = 0;
	        } else $data .= ",$key = '$value'";
	    }
	    $strSql = "update $table set $data where $condition";
	    if($this->result = $this->_db->exec($strSql)) {
	        return true;
	    }
	    return false;
	}
	/**
	 * 删除数据
	 *@param string $table 待删除数据的数据表的名称
	 *@param array $condition 条件
	**/
	public function delete($table,$condition) {
	    $strSql = "delete from $table where $condition";
	    if($this->result = $this->_db->exec($strSql)){
	        return $this;
	    }
	    return false;
	}
}
