<?php
/*
 * Math Functions Generator v1.0
 *
 * Copyright 2023, Your Name - This PHP file is a generated code to demonstrate various mathematical functions.
 *
 */
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
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $a / $b;
}

function power($base, $exponent) {
    return pow($base, $exponent);
}

echo "Addition: " . add(3, 5); // Output: Addition: 8
echo "\nSubtraction: " . subtract(10, 4); // Output: Subtraction: 6
echo "\nMultiplication: " . multiply(7, 2); // Output: Multiplication: 14
