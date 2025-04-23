<?php
class MathFunctions {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            throw new Exception("Division by zero is not allowed.");
        }
    }

    public function squareRoot($value) {
        return sqrt($value);
    }

    public function power($base, $exponent) {
        if ($exponent != 0) {
            return $base ** $exponent;
        } else {
            throw new Exception("Power of zero is not allowed.");
        }
    }

    public function factorial($number) {
        if ($number == 0 || $number == 1) {
            return 1;
        } else {
            $result = 1;
            for ($i = 2; $i <= $number; $i++) {
                $result *= $i;
            }
            return $result;
        }
    }

    public function gcd($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    public function lcm($a, $b) {
        return (int) ($a * $b / Math::gcd($a, $b));
    }

    public function reverseString($input) {
        return strrev($input);
    }

    public function isEven($number) {
        if ($number % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function isOdd($number) {
        if ($number % 2 != 0) {
            return true;
        } else {
            return false;
        }
    }
}
