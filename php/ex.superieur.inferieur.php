<?php
// message d entree
    echo"entrer un nombre tput simplement ";
// lis l entree utilisateur
$number=fgets(STDIN);
// si le nombre es superieur a zero
if ($number>0){
    echo "le nombre est positi";
}
// par contre si il es egale a zero alors c est 0
elseif ($number==0){
     echo "le nombre est zero";
}
// sinon c est un nombre negatif
else {
    echo "le nombre est negatif .";
}