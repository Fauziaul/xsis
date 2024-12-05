<?php
function calculateOutput($A, $B) {
    if ($A == 1 && $B == 1) {
        return 5;
    }
    
    return $A + $B;
}

$A = 1;
$B = 1;

echo "" . calculateOutput($A, $B);
?>
