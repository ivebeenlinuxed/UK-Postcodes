<?php
namespace System\Model;
	
class ElectoralDistrict extends \Model\DBObject {
	
	/**
	* int(11) unsigned
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
	 * Gets the table name (always returns "electoral_district")
	 * 
	 * @var boolean $read changes the table name if a database view is provided for reading, rather than a table
	 * 
	 * @return string
	 */
	public static function getTable($read=true) {
		return "electoral_district";
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