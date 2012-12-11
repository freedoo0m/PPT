<?php
	if(!defined("AppName")) exit("error");
	
	class Db
	{
		var $host = 'localhost';
		var $user = 'root';
		var $password = '';
		var $database = 'ppt';
		
		var $conn;
		var $code = 'gb2312';
		
		function __construct($host='',$user='',$password='',$database='')
		{
			if($host !== '')
				$this->host = $host;	
			
			if($user !== '')
				$this->user = $user;
			
			if($password !== '')
				$this->password = $password;
			
			if($database !== '')
				$this->database = $database;
				
		}

		function __destruct()
		{
			@mysql_close($this->conn);
		}
		
		function getConnection()
		{
			$this->conn = mysql_connect($this->host,$this->user,$this->password);
			if(!$this->conn)
			{
				throw new Exception('connection server field:');	
			}	
			
			if($this->database === '' || !mysql_select_db($this->database,$this->conn))
			{
				throw new Exception('open database field:');	
			}
		}	
		
		
		function setCharCode($code)
		{
			if($code !== '')
				$this->code = $code;
			
			
			if(mysql_ping($this->conn))
				mysql_query("set names ".$this->code,$this->conn);
			else
				throw new Exception('无法连接到服务器');
		}

		function _executesql($sql)
		{
			$this->getConnection();
			if(mysql_ping($this->conn))
			{
				$this->setCharCode('');
				return mysql_query($sql,$this->conn);
			}
			else
				throw new Exception('无法连接到服务器');
		}
		
		function select_db_sql($sql)
		{
			if(!is_string($sql))
				throw new Exception('查询函数，参数错误');

			return $this->_executesql($sql);
		}

		function select_db_sql_page($page_start=0,$page_limit=20,$col='*',$table='')
		{
			if(empty($table))
				throw new Exception('the table mast input parameter');

			$sql = "select $col from $table limit $page_start,$page_limit";

			return $this->_executesql($sql);
		}

		function select_db_sql_page_where($page_start=0,$page_limit=20,$col='*',$table='',$where='')
		{
			if(empty($table) || empty($where))
				throw new Exception('the table mast input parameter');

			$sql = "select $col from $table where $where limit $page_start,$page_limit";

			return $this->_executesql($sql);
		}

		function select_db_page_sql($sql)
		{
			if (empty($sql)) {
				throw new Exception('the table mast input parameter');
			}

			return $this->_executesql($sql);
		}
		
		function select_db_array($table,$arr,$where)
		{
			if(!is_array($arr))
			{
				throw new Exception('查询函数，参数错误');
			}
			
			$sql_1 = '';
			
			foreach($arr as $val)
			{
				$sql_1.=$val.',';
			}
			$sql_1 = 'select '.trim(",").' from '.$table.' where 1=1 and'.$where;
			
			return $this->select_db_sql($sql_1);
		}
		
		function insert_db_sql($sql)
		{
			if(!is_string($sql))
				throw new Exception('插入函数，参数错误');
			
			$this->_executesql($sql);
			return mysql_insert_id($this->conn);
		}
		
		function insert_db_array($table,$arr)
		{
			if(!is_array($arr))	
				throw new Exception('插入函数，参数错误');
				
			$sql_1 = '';
			$sql_2 = '';
			
			foreach($arr as $key => $val)
			{
				$sql_1.=$key.',';
				$sql_2.=$val.',';
			}
			$sql_1 = trim($sql_1);
			$sql_2 = trim($sql_2);

			$sql = "insert into $table($sql_1) values($sql_2)";

			return $this->insert_db_sql($sql) ;
		}

		function update_db_sql($sql)
		{
			if(!is_string($sql))
				throw new Exception('更新函数，参数错误');
			
			$this->_executesql($sql);
			return mysql_affected_rows();
		}

		function update_db_array($table,$arr,$where)
		{
			if(!is_array($arr))	
				throw new Exception('更新函数，参数错误');
				
			$sql_1 = '';
			$sql_2 = '';
			
			foreach($arr as $key => $val)
			{
				$sql_1.="$key=$val,";
			}
			$sql_1  = trim($sql_1);
			$sql = "update $table set $sql_1 where 1=1 and $where";

			return $this->update_db_sql($sql) ;
		}

		function delete_db_sql($sql)
		{
			if(!is_string($sql))
				throw new Exception('删除函数，参数错误');

			$this->_executesql($sql);
			return mysql_affected_rows();
		}

		/**
		*
		* $arr = array(
		*				'column1' => 'value1 and',
		*				'column2' => 'value2 or',
		*				'column3' => 'value3 and',
		*				'column4' => 'value4 ',
		*				)
		*
		*
		*/
		function delete_db_arr($table,$arr)
		{
			if (!is_array($arr) || !is_string($table)) {
				throw new Exception('删除函数，参数错误');
			}

			$where = '';
			foreach ($arr as $key => $value) {
				$where .= "$key=$value";
			}

			$sql = "delete from $table where 1=1 and $where";
			return $this->delete_db_sql($sql);
		}

		function db_trans_begin()
		{
			if (mysql_ping($this->conn)) {
				mysql_query("SET AUTOCOMMIT=0",$this->conn);
			}
		}

		function db_trans_rollback()
		{
			if (mysql_ping($this->conn)) {
				mysql_query("ROLL_BACK",$this->conn);
			}
		}

		function db_trans_commit()
		{
			if (mysql_ping($this->conn)) {
				mysql_query("COMMIT",$this->conn);
			}
		}

		function db_trans_end()
		{
			if (mysql_ping($this->conn)) {
				mysql_query("SET AUTOCOMMIT=1",$this->conn);
			}
		}
	}