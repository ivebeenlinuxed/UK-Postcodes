<?php
namespace Controller;

class Postcode extends BaseController {
	public function index($postcode) {
		$postcode = urldecode($postcode);
		if (($pcode = \System\Library\StdLib::processPostcode($postcode)) == false) {
			$this->get404();
		}
		if (strlen($pcode[1].$pcode[2]) == 6) {
			$postcode = $pcode[1]." ".$pcode[3];
		} else {
			$postcode = $pcode[1].$pcode[3];
		}
		$data = $this->getDataByPostcode($postcode);
		$data = $data[0];
		$data['single'] = true;
		var_dump($data);
		switch (\Core\Router::$mode) {
			case \Core\Router::MODE_JSON:
				\Core\Router::loadView("output/json", $data);
				break;
			case \Core\Router::MODE_HTML:
				\Core\Router::loadView("output/html", $data);
		}
	}
}