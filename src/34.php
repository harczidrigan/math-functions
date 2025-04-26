<?php
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
        throw new Exception("Divide by zero is not allowed.");
    }
    return $a / $b;
}

// Example usage
$firstNumber = 10;
$secondNumber = 5;
$result = add($firstNumber, $secondNumber);
echo "The sum of $firstNumber and $secondNumber is: " . $result;

try {
    $thirdNumber = 2.5;
    $result = divide($thirdNumber, 4);
} catch (Exception $e) {
    echo "Caught an exception: " . $e->getMessage();
}

// Math functions
print_r(array_add, array('func_name' => 'add', 'parameters' => array(1, 2)));
print_r(array_subtract, array('func_name' => 'subtract', 'parameters' => array(5, 3)));
print_r(array_multiply, array('func_name' => 'multiply', 'parameters' => array(4, 2)));
print_r(array_divide, array('func_name' => 'divide', 'parameters' => array(6, 3)));
?>
