<?php
// Function to calculate the sum of two numbers
function sum($a, $b) {
  return $a + $b;
}

// Function to calculate the difference of two numbers
function diff($a, $b) {
  return $a - $b;
}

// Function to calculate the product of two numbers
function prod($a, $b) {
  return $a * $b;
}

// Function to calculate the quotient of two numbers
function quot($a, $b) {
  if ($b == 0) {
    throw new Exception("Cannot divide by zero");
  }
  return $a / $b;
}

// Example usage of the functions
echo sum(3, 5); // Output: 8
echo diff(6, 2); // Output: 4
echo prod(4, 7); // Output: 28
echo quot(10, 2); // Output: 5
?>