<?php
// Define some simple mathematical functions
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b != 0) {
        return $a / $b;
    }
    throw new Exception("Division by zero is not allowed.");
}

// Example usage
$numbers = [10, 5, 2.5];
$result = array_reduce($numbers, function($carry, $item) {
    return add($carry, multiply($item, $carry));
}, 0);
echo "The sum of the numbers: " . $result;
