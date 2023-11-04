<?php
function rotLeft($a, $d) {
    $n = count($a);
    $rotated = [];  // Create a new array to store the rotated elements
    $newd = $d % $n;

    for ($i = $newd; $i < $n; $i++) {
        array_push($rotated, $a[$i]);
    }
    for ($i = 0; $i < $newd; $i++) {
        array_push($rotated, $a[$i]);
    }

    return $rotated;
}

// Sample input
$line1 = explode(" ", trim(fgets(STDIN)));
$n = intval($line1[0]);
$d = intval($line1[1]);

$line2 = explode(" ", trim(fgets(STDIN)));
$a = array_map('intval', $line2);

$result = rotLeft($a, $d);
echo implode(" ", $result) . "\n";
?>
