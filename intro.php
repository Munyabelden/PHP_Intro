<?php
function sumFibs($num) {
    $array = [0, 1];

    if ($num > 2) {
        for ($i = 2; $i <= $num; $i++) {
            $array[$i] = $array[$i - 2] + $array[$i - 1];
        }
    }

    if ($num < 0) {
        return null; // Returning null to mimic JavaScript's undefined
    }

    if ($num === 0 || $num === 1) {
        return $num;
    }

    $odd = [];

    for ($i = 0; $i <= $num; $i++) {
        if ($array[$i] % 2 !== 0) {
            $odd[] = $array[$i];
        }
    }

    $sumOfOdd = 0;

    for ($i = 0; $i < count($odd); $i++) {
        if ($odd[$i] <= $num) {
            $sumOfOdd += $odd[$i];
        }
    }

    return $sumOfOdd;
}

echo sumFibs(21);
?>
