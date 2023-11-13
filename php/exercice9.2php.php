<?php
echo "entrer un nombre entre 0 et 100 . ";
$number=fgets(STDIN);

if ( $number >= 90) {
    echo " tres bien ";
}
if($number >= 80 && $number < 90) {
    echo " bien ";
}
if ($number >= 70 && $number < 80) {
    echo " satisfaisant ";
}
if ($number < 70 ) {
    echo "a ameliorer " ;
}
 ?>