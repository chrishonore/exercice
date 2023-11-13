<?php
echo "entrer le premier nombre ";
$a=fgets(STDIN);

echo "entrer le deuxieme nombre ";
$b=fgets(STDIN);

echo "entrer le troisieme nombre ";
$c=fgets(STDIN);
$max=$c ;
 if ($a >= $b && $a >= $c ) {
     $max=$a ;
 }
if ( $b >= $a && $b >= $c ) {
    $max=$b ;
}
echo  " le nombre le plus grand est le ".$max ;
?>