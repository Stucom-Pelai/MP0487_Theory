<!DOCTYPE html>
<html>

<body>

    <?php
    // INDEXED ARRAYS
    // each item has an index number, starting with 0
    // define
    $cars = array("Seat", "BMW", "Toyota");
    // get
    echo $cars[3]. "<br>";
    // update
    $cars[1] = "Ford";
    for ($i=0; $i < count($cars); $i++) { 
        # code...
        echo $cars[$i]. "<br>";
    }
     // read all only value
     foreach ($cars as $value) {
        echo "$value <br>";
    }
    // read all key-value
    foreach ($cars as $key => $value) {
        echo "$key: $value <br>";
    }

    // ASSOCIATIVE ARRAYS
    // use named keys that you assign to them.
    // define
    $car = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
    // get
    echo $car["model"]. "<br>";;
    // update
    if ($car["brand"]=="Ford") {
        # code...
        $car["year"] = 2024;
    }
    // read all only value
    foreach ($car as $value) {
        echo "$value <br>";
    }
    $i=0;
    // read all key-value
    foreach ($car as $key => $value) {
        echo " $key: $value <br>";
    }

    // MULTIDIMENSIONAL ARRAYS
    //  is an array of arrays
    // define
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13,"diesel"),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    // 
    var_dump($cars);
    echo $cars[3][2];


    echo "<pre>";  var_dump($cars); "</pre>";
    // get
    echo $cars[1][3];
    // update
    $cars[2][2] = 12;
    // read all
    for ($row = 0; $row < count($cars); $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < count($cars[$row]); $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }

    // FUNCTIONS
    // array_flip()
    $a1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
    $result = array_flip($a1);
    print_r($result);
    // array_push()
    $a = array("red", "green");
    array_push($a, "blue", "yellow");
    print_r($a);
    // array_slice()
    $a = array("red", "green", "blue", "yellow", "brown");
    print_r(array_slice($a, 2));
    // array_sum()
    $a = array(5, 15, 25);
    echo array_sum($a);
    // count()
    $cars=array("Volvo","BMW","Toyota");
    echo count($cars);
    // sort(), rsort(), asort(), ksort(), arsort(), krsort()
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);
    echo "<br>";
    // explode() string2array, implode() array2string
    $str = "Hello world. It's a beautiful day.";
    print_r (explode(" ",$str));
    echo "<br>";
    $arr = array('Bye','World!','Beautiful','Day!');
    echo implode(" ",$arr);
    ?>

</body>

</html>