<?php
// https://www.weather.gov/documentation/services-web-api
// Step 1: Define the URL for the GET request
$api = 'https://api.weather.gov/alerts/types';

// Step 2: Initialize curl session
$curl = curl_init($api);

// Step 3. Set headers
$headers = [
    "User-Agent: MyWeatherApp/1.0 (your-email@example.com)",
    "Content-Type: application/json",
    "Accept: application/json"
];
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Step 4: Execute the curl request
$result = curl_exec($curl);

// process data, from JSON2Object
var_dump($result);
// $obj = json_decode($result);
// foreach ($obj as $attribute => $value) {
//     echo "attribute: $attribute<br>";    
//     if (is_array($value)) {
//         echo "values:<br>";
//         foreach ($value as $key => $item) {
//             echo "  [$key] => $item<br>";
//         }
//     } else {
//         echo "value: $value<br>";
//     }
//     echo "<br>";
// }

// Step 5: Close the curl session
curl_close($curl);
