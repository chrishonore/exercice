<?php
// variable predefinie 1 //
$name1="dan";
echo $name1 . "\n"  ;
// variable predefinie 2 //
$name2="george";
echo $name2 . "\n" ;
// variable predefinie 3 //
$name3="anne";
echo $name3 . "\n" ;
// montant de dan
echo " introduisez le montant que dan compte mettre  " ;
$number=fgets(STDIN);
// montant de george
echo " introduisez le montant que george compte mettre  " ;
$number2=fgets(STDIN);
// variable total definie a 21 //
$total =21;
// si nombre1 + nombre2 est inferieur a 21 alors //
if ( $number+$number2 <21){
    // le montant de anna est egale au total - nombre1 - nombre2 //
    $number3Anna =$total - $number- $number2;
echo $name3 ." va payer le montant de " . $number3Anna . " euro ";
}
// dans le cas inverse elle devra rien payer //
else {
    echo " dans ce cas " . $name3 . " ne devra rien payer" ;
}
