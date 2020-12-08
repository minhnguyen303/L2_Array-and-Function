<?php
$matrix = [];

for ($i = 0; $i < 10; $i++) {
    array_push($matrix, [mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100)]);
}

$max = $matrix[0][0];
$index1 = 0;
$index2 = 0;

for ($i = 0; $i < count($matrix); $i++) {
    for ($j = 0; $j < count($matrix[$i]); $j++) {
        if ($matrix[$i][$j] > $max) {
            $max = $matrix[$i][$j];
            $index1 = $i;
            $index2 = $j;
        }
    }
}

echo "<pre>";
var_dump($matrix);
echo "<hr>" . $max . "-[" . $index1 . "][" . $index2 . "]";