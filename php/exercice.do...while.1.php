<?php
// connaitre le bon numero
$nombAll=rand(1,100);
$compteur=0 ;
do {
 echo " entrer un nombre entre 1 et 100 " ;
 $n=fgets( STDIN) ;
 $compteur++ ;
}
while ( $n != $nombAll ) ;
    echo " est le bon nombre en " . $compteur ." tentative " ;


