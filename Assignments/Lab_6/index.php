<?php

require_once "src/PageLayout.php";
require_once "src/math_fun.php";

use VTC\Lab_5\MathFun as MathFun;
use VTC\Lab_5\PageLayout as PageLayout;

$math = new MathFun\MathFun;

if (isset($_POST{"submit"})){
		$trucateFloatResult = $math -> truncateFloat($_POST["truncateFloat"]);
		$farenheight2KelvinResult = $math -> farenheit2Kelvin($_POST["farenheit2Kelvin"]);
		$dodecahedronVolumeResult = $math -> dodecahedronVolume($_POST["dodecahedronVolume"]);
		$impactVelocityResult = $math -> impactVelocity($_POST["impactVelocity"]);
		
	} else {
		$truncateFloat = "";
		$ferenheight2Kelvin = "";
		$dodecahedronVolume = "";
		$impactVelocity = "";
			
	}
	
echo PageLayout\PageLayout::$header;

if(!isset($_POST['submit'])) {
	echo PageLayout\PageLayout::$form_layout;
}
else{
		PageLayout\PageLayout::formResults($trucateFloatResult, $farenheight2KelvinResult, $dodecahedronVolumeResult, $impactVelocityResult);
		}

echo PageLayout\PageLayout::$footer;

?>