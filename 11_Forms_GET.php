<!DOCTYPE html>
<html>
<body>
<?php
// GET
// get information, parameters in url -> SELECT DATA
// non sensitive data
// limit input data
// possible bookmark page
?>

<h2>Simple Greeting Form</h2>
<form action="11_Forms_GET.php" method="get">
  Name: <input type="text" name="name">
  <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']);
    echo "<h3>Hello, $name!</h3>";
}
?>

</body>
</html>
