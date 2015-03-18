<?php

/**
 * Lab 4, Form and Post Lab
 *
 * This lab focuses on your understanding of arithmatic.
 *
 * @version 1.0
 * @author YOUR_NAME <YOUR_EMAIL_ADDRESS@vtc.edu>
 * @since 20150120
 */

/**
 * Outputs to the console a truncated float.
 *
 * Takes in a floating point number and truncates in to two places of precision.
 * Then returns to the output to the console.
 *
 * @param $float_value
 */

define('GRAVITY', 9.8);

function truncateFloat($float_value)
{
	$float_value = ($float_value * 100) / (100);
echo $float_value;

}

/**
 * @param $degrees_f
 */
function farenheit2Kelvin($degrees_f)
{
$degrees_k = ($degrees_f - 32) * (5/9) + 273.15;
echo $degrees_k;
}

/**
 * @param $area
 */
function dodecahedronVolume($area)
{
$volume = (((15 + 7) * sqrt(5)) / 4 ) * pow($area,3);
	echo $volume;
}

/**
 * @param $height
 */
function impactVelocity($height)
{
$velocity = sqrt((2)*(GRAVITY)*($height)); 
	echo $velocity;
}
if (isset($_POST['submit'])) {
    $truncateFloatResult = $_POST["truncateFloat"];
    $farenheit2KelvinResult = $_POST["farenheit2Kelvin"];
    $dodecahedronVolumeResult = $_POST["dodecahedronVolume"];
    $impactVelocityResult = $_POST["impactVelocity"];
} else {
    $truncateFloatResults = "";
    $farenheit2KelvinResults = "";
    $dodecahedronVolumeResults = "";
    $impactVelocityResults = "";
}

$form_layout = <<< EOD
<p>
<form method="post" action="">
<label name="truncateFloat">Floating Point Value</label><input type="text" name="truncateFloat"><br>
<label name="farenheit2Kelvin">Farenheit Value</label><input type="text" name="farenheit2Kelvin"><br>
<label name="dodecahedronVolume">Dodecahedron Side Value</label><input type="text" name="dodecahedronVolume"><br>
<label name="impactVelocity">Height of Fall Value</label><input type="text" name="impactVelocity"><br>
<input type="submit" value="submit" name="submit">
</form>
</p>
EOD;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Class 4 Lab</title>
</head>
<body>
<?php
if (!isset($_POST['submit'])) {
    // display the form
    echo $form_layout;
} else {
		echo "<br> \n the truncated floating point value is:";
		truncateFloat($truncateFloatResult);
		echo "<br> \n the Kelvin value is:";
		farenheit2Kelvin($farenheit2KelvinResult);
		echo "<br> \n the dodecahedron volume value is:";
		dodecahedronVolume($dodecahedronVolumeResult);
		echo "<br> \n the impact velocity is:";
		impactVelocity($impactVelocityResult);
}
	
	
?>
</body>
</html>
