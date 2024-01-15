<?php
//  l utilisateur dois entrer un nombre divisible //
echo" entrer le premier nombre " ;
// lis le premier nombre //
$number1=fgets(STDIN);
// l utilisateur dois entrer un deuxieme nombre //
echo " divisée par ? " ;
// lis le deuxieme nombre introduit //
$number2=fgets(STDIN);
// si number1 est modulo number2 est egale a zero //
    if($number1 % $number2 == 0  )
    {
        // alors le message sera //
    echo" le nombre " . $number1. " est divisible par ".$number2  ;
    }
    // sinon le message sera le suivant //
else{
    echo " malheureusement le nombre " . $number1 . " n est pas divisible par $number2 veuillez réessayer merci .";
}
    ?>