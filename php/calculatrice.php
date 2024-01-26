<?php
declare (strict_types=1);
echo " entrer le premier nombre ";
$_nbr1=intval( trim(fgets(STDIN)));
if (!is_numeric($_nbr1))  {
    echo " ceci n est pas un chiffre \n bye bye "  ;
    return;
    }
echo " entrer le deuxieme nombre ";
$_nbr2=intval( trim(fgets(STDIN)));
if (!is_numeric($_nbr2))  {
    echo " ceci n est pas un chiffre \n bye bye "  ;
    return;
}
while (true) {
echo " que desirez vous faire avec " .$_nbr1 . " et " . $_nbr2 ." ? \n ";
echo "      0 pour choisir d autre nombre     
       1 pour additionner
       2 pour soustraire 
       3 pour multiplier 
       4 pour diviser
        5 pour modulo  ";
$choix=trim(fgets(STDIN));
if ($choix==0) {
    echo " entrer le premier nombre ";
    $_nbr1=intval( trim(fgets(STDIN)));
    if (!is_numeric($_nbr1))  {
        echo " ceci n est pas un chiffre \n bye bye "  ;
        return;
    }
    echo " entrer le deuxieme nombre ";
    $_nbr2=intval( trim(fgets(STDIN)));
    if (!is_numeric($_nbr2))  {
        echo " ceci n est pas un chiffre \n bye bye "  ;
        return;
    }


}
if (!is_numeric($choix))  {
    echo " ceci n est pas un chiffre \n bye bye "  ;
    return;
}
if ($choix==1){
    // fonction addition
    echo " la somme de " . $_nbr1 . " additionne a " . $_nbr2 . " est egale a " . Addition($_nbr1,$_nbr2),"\n" ;
    continue;
     }

if ($choix==2){
    //fonction soustraction
    echo " si a la somme de " . $_nbr1 . " on soustrait " . $_nbr2 . " le resultat sera " . Soustraction($_nbr1,$_nbr2),"\n" ;
    continue;
}
if ($choix==3) {
    // fonction multiplication
    echo " si on multiplie la somme de " . $_nbr1 . " a la somme " . $_nbr2 . " le resultat sera " . Multiplication($_nbr1,$_nbr2),"\n" ;
    continue;
}
if ($choix==4){
    // fonction division
    echo " si on divise la somme de ".$_nbr1." a la somme de ". $_nbr2. "le resultat sera " . Division($_nbr1,$_nbr2),"\n" ;
    continue;
}
    elseif ($choix==5){
        // fonction modulo
        echo " le modulo de la somme " . $_nbr1 . " par la somme " . $_nbr2 . " est de  " . Modulo($_nbr1,$_nbr2),"\n" ;
        continue;
    }
else {
    echo " saisissez le bon nombre \n";
}
     }
/*
function Addition ($nbr1,$nbr2){
    $total=$nbr1+$nbr2;
    echo " la somme de " . $nbr1 . " additionne a " . $nbr2 . " est egale a " . $total ;
}*/
function Addition (int $_nbr1,int $_nbr2): int
{
    return $_nbr1+$_nbr2;
    }
    // fonction soustraction
function Soustraction ( int $_nbr1,int $_nbr2): int
{
    return $_nbr1-$_nbr2;
}
return ;
// fonction multiplication
function Multiplication ( int $_nbr1,int $_nbr2): int
{
    return $_nbr1*$_nbr2;
}
return;
//fonction division
function Division ( float $_nbr1,float $_nbr2): float
{
    if ($_nbr2==0){
        echo " la somme de " .$_nbr1 . " n est pas divisible par " . $_nbr2. "\n";
        return 0 ;
    }
   else {
       return $_nbr1/$_nbr2;
    }
}
// fonction modulo juste pour le fun ha ha ha
function Modulo ( int $_nbr1,int $_nbr2): int
{
    return  $_nbr1%$_nbr2;
}
    ?>