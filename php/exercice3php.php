<?php
$number="";
    echo"entrer un nombre entre ";

$number=fgets(STDIN);
if ($number>0){
    echo "le nombre est positi";
}
elseif ($number==0){
     echo "le nombre est zero";
}
else {
    echo "le nombre est negatif .";
}