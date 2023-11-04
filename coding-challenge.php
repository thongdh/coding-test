<?php
function rotLeft($a, $d) {
    $n = count($a);
    $rotated = array_fill(0, $n, 0);  // Create a new array to store the rotated elements

    for ($i = 0; $i < $n; $i++) {
        $newIndex = ($i - $d + $n) % $n;  // Calculate the new index after rotation
        $rotated[$newIndex] = $a[$i];
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