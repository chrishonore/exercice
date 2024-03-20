<?php
g
function addition ($n1, $n2):int{
    $res=$n1+$n2;
    return $res;
}
   $resultat= addition($n1,$n2);
echo $resultat;

function soustraction ($n1, $n2):int{
    $res=$n1-$n2;
    return $res;
}
   $resultat= soustraction($n1 ,$n2);
echo $resultat;

function multiplication ($n1, $n2):int{
    $res=$n1*$n2;
    return $res;
}
   $resultat= multiplication($n1 ,$n2);
echo $resultat;

function Division ( float $n1,float $n2): float
{
    if ($n1==0){
        echo " la somme de " .$n1 . " n est pas divisible par " . $n2. "\n";;
    }
    else {
        return $n1/$n2;
    }
}
?>