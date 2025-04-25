<?php
// A PHP function to demonstrate a simple mathematical operation
function calculateSum($numbers) {
    // Add all numbers in the array and return their sum
    $sum = array_sum($numbers);
    echo "The sum of the array elements is: " . $sum;
}

// Example array with some random numbers
$randomNumbers = range(1, 100);

// Calculate the sum using the function
calculateSum($randomNumbers);
?>
