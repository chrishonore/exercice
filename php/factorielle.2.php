<?php
function DisplayFactoriel (  int $number){
    $f=1;
    for ($i=$number ; $i>=1 ; $i-- ) {
        $f*=$i;
    }
    echo "la factorille de " .$number." est de " . $f. "\n" ;
}


DisplayFactoriel (5 )."\n" ;

DisplayFactoriel ( 4);

DisplayFactoriel ( 3);

DisplayFactoriel ( 2);

DisplayFactoriel ( 6);