<?php
namespace Library\GeoLib;

class Utility {
	public static function doRayTest($testPoint, $wkt) {
		preg_match_all("/[\d+\.]+\s[\d+\.]+/", $wkt, $matches);
		$coords = array();
		foreach ($matches[0] as $coord) {
			$coords[] = explode(" ", $coord);
		}
		$rayCount = 0;
		for ($i=1; $i<count($coords); $i++) {
			$ll = $coords[$i-1];
			
			$llA = $coords[$i];
			
			
			if (($testPoint[1] < $ll[1] && $testPoint[1] > $llA[1]) || ($testPoint[1] > $ll[1] && $testPoint[1] < $llA[1])) {
				if ($llA[0] == $ll[0]) {
					if ($llA[0] < $testPoint[0]) {
						$rayCount++;
					}
					continue;
				}
				
				
				//y=mx+c
				//m = dy/dx
				$m = ($llA[1]-$ll[1])/($llA[0]-$ll[0]);
				$c = ($ll[1]-$m*$ll[0]);
				
				//Solve the equasion through
				$y = $m*$testPoint[0]+$c;
				if ($m > 0 && $testPoint[1] < $y || $m < 0 && $testPoint[1] > $y) {
					$rayCount++;
				}
			}
		}
		if ($rayCount & 0x01) {
			return true;
		}
		return false;
	}
}