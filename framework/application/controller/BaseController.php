<?php
namespace Controller;

class BaseController {
	public $errors = array();
	
	public function __construct() {
		global $controller;
		$controller = $this;
	}
	
	protected function getDataByPostcode() {
		$db = \Model\Postcode::getDB();
	}
	
	protected function get404() {
		header("HTTP/1.1 404 Page not found");
		echo "404 - Page not found";
		exit();
	}
}