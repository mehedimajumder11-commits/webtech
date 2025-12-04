<?php
// Declare and initialize variables
$stringVar = "Hello, PHP!";
$intVar = 10;
$floatVar = 3.5;
$boolVar = true;

// Perform arithmetic operations
$addition = $intVar + $floatVar;
$subtraction = $intVar - $floatVar;
$multiplication = $intVar * $floatVar;
$division = $intVar / $floatVar;

// Output arithmetic results
echo "Addition: $addition<br>";
echo "Subtraction: $subtraction<br>";
echo "Multiplication: $multiplication<br>";
echo "Division: $division<br>";

// Output the sum of two numbers using echo and print
$sum = $intVar + $intVar;
echo "Sum using echo: $sum<br>";
print "Sum using print: $sum<br>";

// Use var_dump() to display type and value of each variable
var_dump($stringVar);
echo "<br>";
var_dump($intVar);
echo "<br>";
var_dump($floatVar);
echo "<br>";
var_dump($boolVar);
echo "<br>";
?>
