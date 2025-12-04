<?php
for ($i = 1; $i <= 20; $i++) {
    echo $i . "<br>";
}
    echo "<br>";

$j = 1;
while ($j <= 20) {
    if ($j % 2 == 0) {
        echo $j . "<br>";
    }
    $j++;
}
    echo "<br>";


$fruits = [
    "apple" => "red",
    "banana" => "yellow",
    "grapes" => "purple",
    "orange" => "orange"
];

$count = 0;
foreach ($fruits as $fruit => $color) {
    echo $fruit . ": " . $color . "<br>";
    $count++;
    if ($count == 5) {
        break;
    }
}
?>
