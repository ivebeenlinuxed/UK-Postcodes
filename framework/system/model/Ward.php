<?php
namespace System\Model;
	
class Ward extends \Model\DBObject {
	
	/**
	* varchar(10)
	* 
	* @var string $code 
	*/
	public $code;
	
	/**
	* tinytext
	* 
	* @var unknown_type $snacid 
	*/
	public $snacid;
	
	/**
	* tinytext
	* 
	* @var unknown_type $ward 
	*/
	public $ward;	
	/**
	 * Lists all the columns in the database
	 *
	 * @return array
	 */
	public static function getDBColumns() {
		return array("code","snacid","ward");
	}
	
	/**
	 * Gets the table name (always returns "ward")
	 * 
	 * @var boolean $read changes the table name if a database view is provided for reading, rather than a table
	 * 
	 * @return string
	 */
	public static function getTable($read=true) {
		return "ward";
	}
	
	/**
	 * Gets the primary key
	 * 
	 * @return array
	 */
	public static function getPrimaryKey() {
		return array("code");
	}
}