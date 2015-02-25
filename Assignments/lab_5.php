<?php
define('GRAVITY', 9.8);
$header = <<< EOD
<html>
<head>
<title>Simple PHP Form Example</title>
</head>
<body>
EOD;

$footer = <<< EOD
</body>
</html>
EOD;

$form_layout = <<< EOD
<p>
<form method="post" action="">
<label name="truncateFloat">Floating Point Value</lable><input type="text" name="truncateFloat"><br>
<label name="farenheight2Kelvin">Farenheit Value</lable><input type="text" name="farenheight2Kelvin"><br>
<label name="dodecahedronVolume">dodecahedron</lable><input type="text" name="dodecahedronVolume"><br>
<label name="impactVelocity">Height of Fall Value</lable><input type="text" name="impactVelocity"><br>
<input type="submit" value="submit" name="submit">
</form>
</p>
EOD;

function truncateFloat($float_value)
{
	return (int) floatval($float_value * 100) / 100;
}
function farenheight2Kelvin($degrees_f)
{
	return ($degrees_f - 32) * 5 / 9 +273.15;
}
function dodecahedronVolume($area)
{
	return pow($area, 3) / 4 *(15 + 7 * sqrt(5));
}
	function impactVelocity($height)
	{
		return sqrt(2* GRAVITY * $height);
	}
	if (isset($_POST{"submit"})){
		$trucateFloatResult = truncateFloat($_POST["truncateFloat"]);
		$farenheight2KelvinResult = farenheight2Kelvin($_POST["farenheight2Kelvin"]);
		$dodecahedronVolumeResult = dodecahedronVolume($_POST["dodecahedronVolume"]);
		$impactVelocityResult = impactVelocity($_POST["impactVelocity"]);
		
	} else {
		$truncateFloat = "";
		$ferenheight2Kelvin = "";
		$dodecahedronVolume = "";
		$impactVelocity = "";
			
	}
	if(!isset ($_POST['submit'])){
		echo $form_layout;		
	} else{
		$form_result = $header;
		if (!empty($trucateFloatResult)) {
			$form_result .= "the truncated floating point value is: " . $trucateFloatResult . ".<br>";
		}
		if (!empty($farenheight2KelvinResult)) {
			$form_result .= "the Kelvin value is: " . $farenheight2KelvinResult . ".<br>";
		}
		if (!empty($dodecahedronVolumeResult)) {
			$form_result .= "the dodecahedron volume value is: " . $dodecahedronVolumeResult . ".<br>";
		}
		if (!empty($impactVelocityResult)) {
			$form_result .= "the impact velocity is: " . $impactVelocityResult . ".<br>";
		}
		$form_result .= $footer;
		
		echo $form_result;
	}