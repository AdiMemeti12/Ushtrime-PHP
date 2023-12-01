
//4. Te shkruhet funksioni qe llogarite prodhimin e shifrave ne pozicione teke te nje numri qe
jepet si parameter?

<?php

function sum_teke($n) {


    $n_ne_str = (string)$n;
    
    $gjatesia = strlen($n_ne_str);

    $prodhimi = 1;

    for ($i = 0; $i < $gjatesia; $i++) {
        $shifra = (int)$n_ne_str[$i];
        $pozicioni = $gjatesia - $i;

        if ($shifra !== 0) {
            $prodhimi *= $shifra;
            echo "$shifra * $pozicioni = " . ($shifra * $pozicioni) . "\n";
        }
    }

    // Kthej prodhimin përfundimtar
    return $prodhimi;
}

$n = 9865;
$rezultati = sum_teke($n);

echo "Prodhimi i shifrave në pozicionet eke të numrit $n është: $rezultati";

?>