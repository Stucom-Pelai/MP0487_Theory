<!DOCTYPE html>
<html>

<body>

    <?php
    // STATEMENT IF
    // simple if
    $t = 14;
    if ($t < 20) {
        echo "Have a good day!";
    }

    // with AND
    $a = 200;
    $b = 33;
    $c = 500;
    if ($a > $b && $a < $c) {
        echo "Both conditions are true";
    }
    // with OR
    if ($a > $c || $a > $b) {
        echo "One condition is true";
    }

    // Ternary
    $a = 1;
    $b = $a < 2 ? "Hello" : "Good Bye";

    if ($a < 2) {
        # code...
        $b = "Hello";
    } else {
        # code...
        $b = "Good Bye";
    }
    

    // if else(nested)
    $startYear = 70;
    $today;

    if (substr($today, 6, 2) <= $startYear) {
        $century = 21;
    } else {
        $century = 20;
    }
    $day = 7;

    // STATEMENT SWITCH
    if ($day <= 7) {
        # code...
        switch ($day) {
            // si $day = 6
            case 6:
                echo "Saturday";
                break;
            case 7:
                echo "Sunday";
                // break;
            case 8:
                echo "Monday";
                // break;
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo "Workday";
                break;           
        }    
    }

    switch ($variable) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }
    
    


    // LOOPS
    // for, when you know how many times you want to iterate.
    for ($i = 1; $i <= 5; $i++) {
        echo "Number: $i<br>";
    }
    // while, repeats while a condition is true.
    $i = 1;
    while ($i <= 5) {
        echo "Number: $i<br>";
        $i++;  // Increment $i to avoid infinite loop
    }

    // do...while, ensuring the loop runs at least once.
    $i = 1;
    do {
        echo "Number: $i<br>";
        $i++;
    } while ($i <= 5);

    // foreach, to iterate over arrays
    $fruits = ["Apple", "Banana", "Orange", "Mango"];

    foreach ($fruits as $fruit) {
        echo "Fruit: $fruit<br>";
    }

    // break and continue in loops
    for ($x = 0; $x < 10; $x++) {
        if ($x == 4) {
            break;
            // continue;
        }
        echo "The number is: $x <br>";
    }
    ?>