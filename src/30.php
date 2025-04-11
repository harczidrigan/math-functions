function calculate($a, $b, $operation) {
    switch ($operation) {
        case 'add':
            return $a + $b;
        case 'subtract':
            return $a - $b;
        case 'multiply':
            return $a * $b;
        case 'divide':
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Error: Division by zero";
            }
    }
}
