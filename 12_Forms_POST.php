<!DOCTYPE html>
<html>
<body>
<?php
// POST
// add information, parameters in HTTP body, -> INSERT DATA(*login)
// sensitive data
// multi-part functionality, files as images
?>

<h2>Email Submission Form</h2>
<form action="12_Forms_POST.php" method="post">
  Email: <input type="text" name="email">
  <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    // echo "<h3>Email submitted: $email</h3>";
    var_dump ($_SERVER);
}
?>

</body>
</html>
