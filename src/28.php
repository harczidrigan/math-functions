<?php
// Define an array to hold your functions
$functions = [
    "add" => function ($a, $b) {
        return $a + $b;
    },
    "subtract" => function ($a, $b) {
        return $a - $b;
    },
    // Add more functions here...
];

// Example usage of the array
echo $functions["add"](5, 3); // Outputs: 8

foreach ($functions as $function => $func) {
    echo "Function: $function<br>";
    echo "Description: $func<br><br>";
}
