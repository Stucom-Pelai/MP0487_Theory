<!DOCTYPE html>
<html>
<body>

<?php
$a = 2;
$b = 2;
// OPERATORS ARE USED TO PERFORM OPERATIONS ON VARIABLES AND VALUES
// Arithmetic
// +	Addition	    $x + $y	Sum of $x and $y	
echo "Addition: " . $a + $b; echo "<br>";
// -	Subtraction	    $x - $y	Difference of $x and $y	
echo "Subtraction: " . $a - $b; echo "<br>";
// *	Multiplication	$x * $y	Product of $x and $y	
echo "Multiplication: " . $a * $b; echo "<br>";
// /	Division	    $x / $y	Quotient of $x and $y	
echo "Division: " . $a / $b; echo "<br>";
// %	Modulus	        $x % $y	Remainder of $x divided by $y	
echo "Modulus: " . $a % $b; echo "<br>";
// **	Exponentiation	$x ** $y	Result of raising $x to the $y'th power 
echo "Exponentiation: " . $a ** $b; echo "<br>";

// Assignment
// =	Asignation
echo "Asignation: " . $a = $b; echo "<br>";

// Comparison
// ==   Equal
$result = (5 == 5);
echo "Equal: " . $result; echo "<br>";
// !=   Not equal
$result = (3 != 5);
echo "Not equal: " . $result; echo "<br>";
// >   Greater than
$result = (7 > 3);
echo "Greater than: " . $result; echo "<br>";
// >   Greater than or equal
$result = (7 >= 7);
echo "Greater than or equal: " . $result; echo "<br>";
// <   Less than
$result = (3 < 7);
echo "Less than: " . $result; echo "<br>";
// <   Less than or equal
$result = (3 <= 3);
echo "Less than or equal: " . $result; echo "<br>";

// Increment
// ++$x   Pre-increment
echo "Pre-increment: " . ++$a; echo "<br>";
// $x++   Post-increment
echo "Post-increment: " . $a++; echo "<br>";
// --$x   Pre-decrement
echo "Pre-decrement: " . --$b; echo "<br>";
// $--   Post-decrement
echo "Post-decrement: " . $b--; echo "<br>";

// Logical
// and, True if both $x and $y are true
$result = 1==1 && 2==2;
echo "And: " . $result; echo "<br>";
// or,  True if either $x or $y is true
$result = 1==1 || 1==2;
echo "Or: " . $result; echo "<br>";
?> 
</body>
</html>