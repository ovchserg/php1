<?php
function calculate($a, $b, $operator) {

    if(is_numeric($a) && is_numeric($b)){

        switch ($operator) {
            case '+':
                return $a + $b;
                break;
            case '-';
                return $a - $b;
                break;
            case '*';
                return $a * $b;
                break;
            case '/';
                return $a / $b;
                break;
            default:
                return null;
        }

    }
}

assert(5 == calculate(3, 2, '+'));
assert(5 == calculate(7, 2, '-'));
assert(6 == calculate(3, 2, '*'));
assert(2 == calculate(10, 5, '/'));