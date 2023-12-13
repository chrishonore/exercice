<?php
// l utilisateur introduit le premier nombre //
echo "entrer le premier nombre ";
// lis le premier nombre //
$a=fgets(STDIN);
// l utilisateur introduit le deuxieme nombre //
echo " entrer le deuxieme nombre ";
// lis le deuxieme nombre //
$b=fgets(STDIN);
// l utilisateur introduit le troisieme nombre //
echo "entrer le troisieme nombre ";
// lis le troisieme nombre //
$c=fgets(STDIN);
// variable qui represente le nombre maximal //
$max=$c ;
// si A est superieur ou egale a B et que A est superieur ou egale a C . alors A est le max //
 if ($a >= $b && $a >= $c ) {
     $max=$a ;
 }
// si B est superieur ou egale a A et que B est superieur ou egale a C . alors A est le max //
if ( $b >= $a && $b >= $c ) {
    $max=$b ;
}
// message finale //
echo  " le nombre le plus grand est le ".$max ;
?>