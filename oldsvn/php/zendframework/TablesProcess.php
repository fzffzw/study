<?php
class Admin_Service_TablesProcess{
	//获取所有table
	public static function getAllTables(){
		//$db = Zend_Registry::get('db');
		$db = Zend_Db_Table_Abstract::getDefaultAdapter();
		$result=$db->fetchAll('show tables');
		$tables = array();
		foreach($result as $key=>$value){
			$tables[] = array_pop($value);
		}
		return $tables;
	}
	/**
	 * @author william-fan
	 * @todo 获取表中的字段
	 */
	public static function getColumns($tables){
		$db = Zend_Db_Table_Abstract::getDefaultAdapter();
		$result=$db->fetchAll("SHOW FULL FIELDS FROM $tables");
		return $result;
	}
}