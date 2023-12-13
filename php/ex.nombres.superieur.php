<?php
// l utilisateur introduit le premier nombre //
echo "entrer le premier nombre ";
// lis le premier nombre //
$number1=fgets(STDIN);
// l utilisateur introduit le deuxieme nombre //
echo " entrer le deuxieme nombre ";
// lis le deuxieme nombre //
$number2=fgets(STDIN);
// l utilisateur introduit le troisieme nombre //
echo "entrer le troisieme nombre ";
// lis le troisieme nombre //
$number3=fgets(STDIN);
// variable qui represente le nombre maximal //
$max=$number1 ;

// si nombre1 est superieur ou egale a nombre2 et que nombre1 est superieur ou egale a nombre3 . alors nombre1 est le max //
if ($number1 >= $number2 && $number1 >= $number3 ) {
    $max =$number1 ;
}
// si nombre2 est superieur ou egale a nombre1 et que nombre2 est superieur ou egale a nombre3 . alors nombre2 est le max //
if ($number2 >= $number1 && $number2 >= $number3 ) {
    $max=$number2 ;
}
// si nombre3 est superieur ou egale a nombre1 et que nombre3 est superieur ou egale a nombre2 . alors nombre3 est le max //
if ($number3 >= $number1 && $number3 >= $number2 ) {
    $max=$number3 ;
}

echo "le nombre le plus eleve est le " . $max ;

?>

