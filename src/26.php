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
    if ($b == 0) throw new Exception("Division by zero is not allowed.");
    return $a / $b;
}

function square($x) {
    return $x ** 2;
}

function factorial($n) {
    if ($n < 0) throw new Exception("Factorial is not defined for negative numbers.");
    $result = 1;
    for ($i = 2; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

function gcd($a, $b) {
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    return $a;
}
?>
