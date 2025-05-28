<?php

// Dev A
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

// Dev B
function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    if ($b == 0) {
        return "Error: Cannot divide by zero";
    }
    return $a / $b;
}

// Shared
function calculate($a, $b, $operator) {
    switch ($operator) {
        case '+':
            return add($a, $b);        // Dev A
        case '-':
            return subtract($a, $b);   // Dev A
            return multiply($a, $b);   // Dev B
        case '/':
            return divide($a, $b);     // Dev B
        default:
            return "Invalid operator";
    }
}

// Example usage
echo calculate(10, 2, '*'); // should return 20
