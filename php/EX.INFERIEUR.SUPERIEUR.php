<?php
// l utilisateur doit introduire un nombre positif ou negatif //
echo" entrer un nombre positif, negatif ou egale a zero . " ;
// lis le nombre introduit par l utilisateur //
$a=fget s(STDIN);
// si le nombre est superieur a 0 //
if ($a>0){
    echo "le nombre est positi";
}
// si le nombre est egale a 0 //
if ($a==0){
    echo "le nombre est zero";
}
// si le nombre est inferieur a 0 //
if ($a < 0) {
    echo "le nombre est negatif .";
}
