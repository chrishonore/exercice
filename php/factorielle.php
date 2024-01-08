<?php
function DisplayFactoriel ( ){
    $f=1;
    for ($i=5 ; $i>=1 ; $i-- ) {
    $f*=$i;
    }
    echo "la factorille de 5 est de " . $f ;
   }


DisplayFactoriel ( ) ;

DisplayFactoriel ( );