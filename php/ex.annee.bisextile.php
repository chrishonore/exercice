<?php
// l utilisateur dois entree une annee
echo " entree l annee recherche ";
// lis l annee recherchee
$year=fgets(STDIN);
// annee actuelle
$year2=2023 ;
// si l annee entree est inferieur ou egale a 2023 alors ca existe
if ( $year <= $year2 ){
    echo $year . " est une date qui existe " ;
}
// si ca depasse c est une date qui existe pas
else {
    echo $year . " est une date qui n existe pas " ;
}
// si l annee modulo 400 = 0 ou  annee modulo 100  = 0 ou que annee modulo 4 = 0
if ( $year % 400 == 0  || $year % 100 == 0 || $year % 4 == 0  ) {
    echo " dans ce cas l annee " . $year . " est une annee bisextile " ;
}