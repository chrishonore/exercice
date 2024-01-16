<?php
echo "entrer un nombre  " ;
$n1 = fgets (STDIN ) ;
$somme=0 ;
while ( $n1 >= 0 ) {
    $somme=( $somme + $n1 ) ;
       echo " \n additionner a ? " ;
    $n2 = fgets (STDIN ) ;
    $somme2=($n2+$somme);
        echo $somme . " + " . $n2 . " = " . $somme2 ;
}
while (!is_numeric($n2)) {
    echo " ceci n est pas un chiffre ! ";
    echo " la somme est " .$somme2 ;
    return;
}

