<?php
/**
 * 
 * @author ivebeenlinuxed <will@bcslichfield.com>
 *
 */
namespace Core;

class Router extends \System\Core\Router {
	const MODE_JSON = 0;
	const MODE_HTML = 1;
	const MODE_XML = 2;
	
	public static $mode;
	
	
	public static function Init() {
		parent::Init();
	}
	
	public static function getController($array) {
		preg_match("/[^\.]+(\.(?<extension>html|json|xml))?/", $array[count($array)-1], $matches);
		if (isset($matches['extension'])) {
			switch ($matches['extension']) {
				case "json":
					self::$mode = self::MODE_JSON;
					break;
				case "html":
					self::$mode = self::MODE_HTML;
					break;
				case "xml":
					self::$mode = self::MODE_XML;
					break;
				default:
					self::$mode = self::MODE_HTML;
					break;
			}
			$array[count($array)-1] = substr($array[count($array)-1], 0, (strlen($matches['extension'])+1)*-1);
		} else {
			self::$mode = self::MODE_HTML;
		}
		return parent::getController($array);
	}
}