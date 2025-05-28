<?php

// Dev A
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

// Shared
function calculate($a, $b, $operator) {
    switch ($operator) {
        case '+':
            return add($a, $b);        // Dev A
        case '-':
            return subtract($a, $b);   // Dev A

        default:
            return "Invalid operator";
    }
}

// Example usage
echo calculate(10, 2, '*'); // should return 20
