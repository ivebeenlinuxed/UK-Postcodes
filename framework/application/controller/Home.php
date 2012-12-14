<?php
namespace Controller;

class Home extends BaseController {
	function index() {
		if (isset($_POST['type'])) {
			if ($_POST['type'] == 2) {
				if (\System\Library\StdLib::processPostcode($_POST['postcode']) !== false) {
					header("Location: /postcode/".$_POST['postcode']);
					return;
				} else {
					$this->errors[] = array("Oops!", "That postcode doesn't seem right...");
				}
			} elseif ($_POST['type'] == 1) {
				if (is_numeric($_POST['lat']) && is_numeric($_POST['lng'])) {
					header("Location: /latlng/".$_POST['lat'].",".$_POST['lng']);
					return;
				} else {
					$this->errors[] = array("Oops!", "Your latitude and longitude need to be numeric values");
				}
			}
		}
		\Core\Router::loadView("home");
	}
}