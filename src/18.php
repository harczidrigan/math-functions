<?php
function multiply($a, $b) {
    return $a * $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function add($a, $b) {
    return $a + $b;
}

function divide($a, $b) {
    if ($b != 0) {
        return $a / $b;
    } else {
        echo "Error: Division by zero.";
        return null;
    }
}

// Example usage:
$firstNumber = 10;
$secondNumber = 5;

$result = multiply($firstNumber, $secondNumber);
echo "The result of multiplication is: $result";

$result = subtract($firstNumber, $secondNumber);
echo "The result of subtraction is: $result";

$result = add($firstNumber, $secondNumber);
echo "The result of addition is: $result";

$result = divide($firstNumber, $secondNumber);
if ($result !== null) {
    echo "The result of division is: $result";
}
?>
