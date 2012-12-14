<?php
namespace System\Model;
	
class User extends \Model\DBObject {
	
	/**
	* int(11)
	* 
	* @var int $id 
	*/
	public $id;	
	/**
	 * Lists all the columns in the database
	 *
	 * @return array
	 */
	public static function getDBColumns() {
		return array("id");
	}
	
	/**
	 * Gets the table name (always returns "user")
	 * 
	 * @var boolean $read changes the table name if a database view is provided for reading, rather than a table
	 * 
	 * @return string
	 */
	public static function getTable($read=true) {
		return "user";
	}
	
	/**
	 * Gets the primary key
	 * 
	 * @return array
	 */
	public static function getPrimaryKey() {
		return array("id");
	}
}