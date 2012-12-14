<?php
namespace Controller;

class BaseController {
	public $errors = array();
	
	public function __construct() {
		global $controller;
		$controller = $this;
	}
	
	protected function getDataByPostcode($postcode) {
		$db = \Model\Postcode::getDB();
		$select = $db->Select("\Model\Postcode");
		$select->addField("postcode");
		$select->addField("lat");
		$select->addField("lng");
		$select->addField("easting");
		$select->addField("northing");
		$select->addField("county", "countygss");
		$select->addField("council", "councilgss");
		$select->addField("ward", "wardgss");
		$select->addField("constituency", "constituencygss");
		$select->addField("parish", "parishgss");
		
		$councilSelect = $db->Select("\Model\Council");
		$councilSelect->addField("council", "councilname");
		$councilSelect->addField("snacid", "councilsnac");
		
		$wardSelect = $db->Select("\Model\Ward");
		$wardSelect->addField("snacid", "wardsnac");
		$wardSelect->addField("ward", "wardname");
		
		$countySelect = $db->Select("\Model\County");
		$countySelect->addField("county", "countyname");
		$countySelect->addField("snacid", "countysnac");
		
		$consituencySelect = $db->Select("\Model\Constituency");
		$consituencySelect->addField("constituency", "constituencyname");
		
		$parishSelect = $db->Select("\Model\Parish");
		$parishSelect->addField("parish", "parishname");
		$parishSelect->addField("snac", "parishsnac");
		
		$select->joinLeft("council", $councilSelect, "code");
		$select->joinLeft("ward", $wardSelect, "code");
		$select->joinLeft("county", $countySelect, "code");
		$select->joinLeft("contituency", $consituencySelect, "code");
		$select->joinLeft("parish", $parishSelect, "code");
		
		$and = $select->getAndFilter();
		$and->eq("postcode", $postcode);
		$select->setFilter($and);
		$select->setLimit(0, 1);
		return $select->Exec();
	}
	
	protected function get404() {
		header("HTTP/1.1 404 Page not found");
		echo "404 - Page not found";
		exit();
	}
}