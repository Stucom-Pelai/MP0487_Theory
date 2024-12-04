<!DOCTYPE html>
<html>

<body>
    <?php
    // PHP has three different variable scopes:
    $global = "I am a global variable";

    function myFunction()
    {
        // Local variable declaration (accessible only inside this function)
        $local = "I am a local variable";

        // Accessing the global variable inside the function using the 'global' keyword
        global $global;

        // Static variable declaration (retains value across function calls)
        static $staticVar;
        $staticVar++;
    }
    ?>
</body>

</html>