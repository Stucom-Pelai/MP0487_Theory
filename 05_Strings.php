<!DOCTYPE html>
<html>
<body>

<?php
// with double quote show value
$x = "John";
print "Hello" . $x . "<br>";
?>

<?php
// with single quote returns the string like it was written
$x = "James";
print 'Hello $x<br>';
?>

<pre>
<?php
// escape characters
// with \n new line
$x = "The sun \nis a\nstar.";
echo $x;
?>
</pre>

</body>
</html>