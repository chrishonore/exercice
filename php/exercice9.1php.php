<?php

echo" entrer un nombre positif negatif ou egale a zero . ";
$a=fgets(STDIN);

if ($a>0){
    echo "le nombre est positi";
}
if ($a==0){
    echo "le nombre est zero";
}
if ($a < 0) {
    echo "le nombre est negatif .";
}