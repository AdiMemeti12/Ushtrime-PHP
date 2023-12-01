//5. Te shkruhet funksioni qe mbledh shifrat ne pozicione te njejta te dy numrave?



<?php

function sum_poz_njejta($n, $m) {
    $n_str = (string)$n;
    $m_str = (string)$m;

    $digits_n = array_map('intval', str_split($n_str));
    $digits_m = array_map('intval', str_split($m_str));

    $sums = array_map(function ($a, $b) {
        return $a + $b;
    }, $digits_n, $digits_m);

    return array_sum($sums);
}

$n = 789;
$m = 87;

$result = sum_poz_njejta($n, $m);

echo "Rezultati final: $result";

?>
