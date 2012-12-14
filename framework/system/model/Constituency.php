<?php
namespace System\Model;
	
class Constituency extends \Model\DBObject {
	
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
	* @var unknown_type $constituency 
	*/
	public $constituency;	
	/**
	 * Lists all the columns in the database
	 *
	 * @return array
	 */
	public static function getDBColumns() {
		return array("code","snacid","constituency");
	}
	
	/**
	 * Gets the table name (always returns "constituency")
	 * 
	 * @var boolean $read changes the table name if a database view is provided for reading, rather than a table
	 * 
	 * @return string
	 */
	public static function getTable($read=true) {
		return "constituency";
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