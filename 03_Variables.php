<!DOCTYPE html>
<html>
<body>

<?php
// variable starts with the $ sign
$sample;

// a Loosely Typed Language, 
// PHP automatically associates a data type to the variable, depending on its value
$x = 5;      // $x is an integer
$y = "John"; // $y is a string

echo $x;
echo $y;

// var_dump() function returns the data type and the value
$exit=true;
var_dump($exit);

// assign value to variable with =
$exit=false;
var_dump($exit);
$x = $y = $z = "Fruit";
echo $z;
?>

</body>
</html>