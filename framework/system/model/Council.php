<?php
namespace System\Model;
	
class Council extends \Model\DBObject {
	
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
	* @var unknown_type $council 
	*/
	public $council;	
	/**
	 * Lists all the columns in the database
	 *
	 * @return array
	 */
	public static function getDBColumns() {
		return array("code","snacid","council");
	}
	
	/**
	 * Gets the table name (always returns "council")
	 * 
	 * @var boolean $read changes the table name if a database view is provided for reading, rather than a table
	 * 
	 * @return string
	 */
	public static function getTable($read=true) {
		return "council";
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