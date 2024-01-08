<?php
function GuessGame (int $minValue, int $MaxValue) {
    $nombAll=rand($minValue,$MaxValue);
    $compteur=0;

    echo " Bienvenu nous allons commenver un petit jeux \n";
    do {
        echo " trouve le bon nombre entre $minValue et $MaxValue . ";
        $num= fgets( STDIN);
        if ( !is_numeric($num)){
            echo " vous vous etes trompe ";
           continue;
        }
        $compteur++;
        if ($num >$nombAll){

            echo " le $num est trop grand \n ";
        }
        elseif ( $num<$nombAll) {
            echo "le $num est trop petit \n";
        }

    }
    while ($num !=$nombAll );

    echo " bravo le chiffre ". $num . " est le bon nombre,\n vous l avez trouve en ".$compteur." tentative \n.  felicitation \n ";
}
GuessGame(1,10);
GuessGame(1,100);
GuessGame (10,100 );