<?php

// max 2 số
function myMax($a, $b) {
    return ($a > $b) ? $a : $b;
}

// min 2 số
function myMin($a, $b) {
    return ($a < $b) ? $a : $b;
}

// kiểm tra số nguyên tố
function isPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

// giai thừa
function factorial($n) {
    if ($n < 0) return null;
    $res = 1;
    for ($i = 2; $i <= $n; $i++) {
        $res *= $i;
    }
    return $res;
}

// gcd — ước chung lớn nhất (Euclid)
function gcd($a, $b) {
    while ($b != 0) {
        $tmp = $a % $b;
        $a = $b;
        $b = $tmp;
    }
    return abs($a);
}
