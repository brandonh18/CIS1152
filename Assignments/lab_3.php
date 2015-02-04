<?php
/**
 * @param $temp_in_c
 */
function tempWarning($temp_in_c)
{
    // Use an if else statement
    
		if ($temp_in_c < 32) {
			// Output the following text if the temp_in_c is above 32 degrees centigrade.
			echo  "It's really hot out there, be careful!";
		}
		elseif ($temp_in_c > 7) {
			// Alternately output if the temp_in_c is below 7 degrees centigrade
			echo "Brrrrr. Be sure to dress warmly.";
		}
		
 
   
	
}
/**
 * @param $a
 * @param $b
 * @param $c
 */
function quadraticEquation($a, $b, $c)
{
    // Use and if else statement
    $discrim = $b * $b - 4 * $a * $c;
	
    //if the discrim is less than zero echo the following
	if ($discrim < 0) {
		//if the discrim is less than zero echo the following
		echo "The equation has no real roots!";
	}
	elseif ($discrim == 0) {
		// if the discrim equals zero do the following
		   $root = -$b / (2 * a);
    echo "There is a double root at " . $root;
	} 
	 elseif ($discrim > 0) {
		 // if the discrim is greater than zero do the following
    $discRoot = sqrt($b * $b - 4 * $a * $c);
    $root1    = (-$b + $discRoot) / (2 * $a);
    $root2    = (-$b - $discRoot) / (2 * $a);
    echo "The solutions are: " . $root1 . "and " . $root2;
	 }
}
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
 * @param $letter
 */
function consinantOrVowel($letter)
{
	// Use a switch statement here
	switch ($letter) {
		case "a";
		case "e";
		case "i";
		case "o";
		case "u";
	echo $letter . " is a vowel";
    break;
		case "b";
		case "c";
		case "d";
		case "f";
		case "g";
		case "h";
		case "j";
		case "k";
		case "l";
		case "m";
		case "n";
		case "p";
		case "q";
		case "r";
		case "s";
		case "t";
		case "v";
		case "w";
		case "x";
		case "y";
		case "z";
echo $letter . " is a consonant";
break;
defult;	
echo $letter . " is not a vowel or a consonant";
	
	}
}
/**
 * @param $number
 */
function oddOrEven($number)
{
	$result = $number % 2 == 0 ? 'even' : 'odd' ;
		echo $result;
    // Use the modulus and ternary operator to echo whether the number is odd or even
}
function countByThree()
{
	for ($number = 0; $number > 99; $number +=3) {
    // Create a for loop that counts by threes to ninety-nine and outputs every increment from 3 up to and including ninety-nine
	}
}

/**
 * @param $count
 */
function indefiniteFactorialLoop($count)
{
    // write a loop that starts at 0 and calculates the factorial to and including the value of count
	$factorial_product = 1;
	while ($count > 1 ) 
		
	{
		$factorial_product *= $count;
		
		$count--;
	
   
	}
	echo "The factorial is " . $factorial_product;
}
// Insert function calls below.
tempWarning(12);
echo "<br>";
quadraticEquation(5, 4, 3);
echo "<br>";
consinantOrVowel("a");
echo "<br>";
oddOrEven(9);
echo "<br>";
indefiniteFactorialLoop(3);