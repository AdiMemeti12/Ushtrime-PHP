<?php

//1. Te gjinden vlerat e $a, $b, dhe $c nga kodi ne vijim?

$a=10;

$b=20;

$c=-10;


$a +=$c; //0 sepse 10 + (-10) = 10 -10 =0

$b++; //21 sepse sipas incrementit decimal kjo variabel rritet per njo

--$a;//-1 sepse vlera e fundit e $a ke 0 dhe 0 - 1=-1 sepse zbritet per njo 
$c*=2;//-20 sepse  vlera e $c eshte -10  dhe -10 here 2 eshte e -20



echo($a) . "\n";

echo($b) . "\n";

echo($c) . "\n";