<?php
// Initialize PHP session data
session_start();

// Define constants and variables
$constants = array(
    "PI" => 3.141592653589793,
    "E" => 2.718281828459045,
    "SQRT_2" => sqrt(2),
    "SQRT_3" => sqrt(3)
);

// Define variables
$numbers = array(
    "A", "B", "C", "D", "E", "F", "G", "H"
);
$values = array(
    "a", "b", "c", "d", "e", "f", "g", "h"
);

// Set a session variable
session_set_cookie_params(86400, "math-functions");

// Get and set the values
$value_a = $_SESSION[$numbers[0]];
$value_b = $_SESSION[$numbers[1]];
$value_c = $_SESSION[$numbers[2]];
$value_d = $_SESSION[$numbers[3]];
$constant_a = $constants["$numbers[0]"];
$constant_b = $constants["$numbers[1]"];
$constant_c = $constants["$numbers[2]"];
$constant_d = $constants["$numbers[3]"];

// Calculate and set the values
$sum_a = $value_a + $value_b;
$product_a = $value_a * $value_b;

$values[$numbers[0]] = $sum_a;
$values[$numbers[1]] = $product_a;

// Set session variables for values
$_SESSION[$constants["E"]] = $constant_e;
$_SESSION["$numbers[3]"] = $constant_e;

// Display results in PHP's `echo` function
echo "Sum of {$values[$numbers[0]]} and {$values[$numbers[1]]} is: " . $sum_a . "\n";
?>
