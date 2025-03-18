<?php
function calculate_area($shape) {
    switch ($shape) {
        case 'circle':
            return M_PI * $radius ** 2;
        case 'rectangle':
            return $width * $height;
        default:
            throw new Exception("Unsupported shape");
    }
}
?>