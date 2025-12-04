<?php
function sum($a, $b) {
    return $a + $b;
}

echo sum(5, 10) . "<br>";
echo sum(20, 30) . "<br>";

function factorial($n) {
    if ($n == 0) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo factorial(5) . "<br>";

function is_prime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

if (is_prime(7)) {
    echo "7 is prime<br>";
} else {
    echo "7 is not prime<br>";
}

if (is_prime(10)) {
    echo "10 is prime<br>";
} else {
    echo "10 is not prime<br>";
}

if (is_prime(13)) {
    echo "13 is prime<br>";
} else {
    echo "13 is not prime<br>";
}
?>
