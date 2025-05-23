<?php
// Example PHP function to perform basic arithmetic operations
function addNumbers($a, $b) {
    return $a + $b;
}

function subtractNumbers($a, $b) {
    return $a - $b;
}

function multiplyNumbers($a, $b) {
    return $a * $b;
}

function divideNumbers($a, $b) {
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed!");
    }
    return $a / $b;
}

// Example usage
echo "Addition: " . addNumbers(5, 3) . "\n";
echo "Subtraction: " . subtractNumbers(5, 3) . "\n";
