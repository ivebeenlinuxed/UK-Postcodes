<?php
namespace System\Model;
	
class Postcode extends \Model\DBObject {
	
	/**
	* varchar(10)
	* 
	* @var string $postcode 
	*/
	public $postcode;
	
	/**
	* int(10)
	* 
	* @var int $quality 
	*/
	public $quality;
	
	/**
	* float(10,6)
	* 
	* @var unknown_type $lat 
	*/
	public $lat;
	
	/**
	* float(10,6)
	* 
	* @var unknown_type $lng 
	*/
	public $lng;
	
	/**
	* int(100)
	* 
	* @var int $easting 
	*/
	public $easting;
	
	/**
	* int(100)
	* 
	* @var int $northing 
	*/
	public $northing;
	
	/**
	* varchar(10)
	* 
	* @var string $county 
	*/
	public $county;
	
	/**
	* varchar(10)
	* 
	* @var string $electoraldistrict 
	*/
	public $electoraldistrict;
	
	/**
	* varchar(10)
	* 
	* @var string $council 
	*/
	public $council;
	
	/**
	* varchar(10)
	* 
	* @var string $ward 
	*/
	public $ward;
	
	/**
	* varchar(10)
	* 
	* @var string $constituency 
	*/
	public $constituency;
	
	/**
	* varchar(10)
	* 
	* @var string $parish 
	*/
	public $parish;	
	/**
	 * Lists all the columns in the database
	 *
	 * @return array
	 */
	public static function getDBColumns() {
		return array("postcode","quality","lat","lng","easting","northing","county","electoraldistrict","council","ward","constituency","parish");
	}
	
	/**
	 * Gets the table name (always returns "postcode")
	 * 
	 * @var boolean $read changes the table name if a database view is provided for reading, rather than a table
	 * 
	 * @return string
	 */
	public static function getTable($read=true) {
		return "postcode";
	}
	
	/**
	 * Gets the primary key
	 * 
	 * @return array
	 */
	public static function getPrimaryKey() {
		return array("postcode");
	}
}