<?php
// Example PHP code snippet

// Function to calculate factorial
function factorial($number) {
    if ($number == 0 || $number == 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

// Function to sort an array of numbers in ascending order
function ascendingSort($array) {
    usort($array, function($a, $b) { return $a - $b; });
    return $array;
}

// Main code block for demonstration purposes
$numbers = [4, 2, 7, 1, 9];
echo "Original array: ";
print_r($numbers);
?>
