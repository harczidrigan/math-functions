<?php
function add($a, $b) {
    return $a + $b;
}

$sum = add(3, 5);
echo "The sum is: " . $sum;

// Random PHP code for generating a random string of characters (replace 'random_string' with your desired length)
function randomString($length) {
    $characters = 'random_string';
    $result = '';
    $charset = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    foreach ($characters as $char) {
        // Shuffle the current character
        $result .= $charset[rand(0, strlen($charset)-1)];
    }
    return substr($result, 0, $length);
}
echo "Generated random string: " . randomString(8);
?>
