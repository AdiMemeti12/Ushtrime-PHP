// 3. Te shkruhet funksioni qe llogarite shprehjen ne vijim:
//n-1 ∑(b + id) a² i-0


<?php



function llogarite_shprehjen($n,$b,$d,$a){

    $rezulatati_i_dhene=0;

    for($i=0;$i<$n;$i++){
        $rezulatati_i_dhene += ($b+$i*$d) * pow($a,2);
    }


    return $rezulatati_i_dhene;
}



$n=6;

$b=9;

$d=1;

$a=10;


$rezulatati_i_dhene = llogarite_shprehjen($n,$b,$d,$a);

echo "Rezultati :$rezulatati_i_dhene";


?>