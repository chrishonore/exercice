<?php
function GuessGame () {
    $nombAll=rand(1,10);
    $compteur=0;

    echo " Bienvenu nous allons commenver un petit jeux \n";
    do {
    echo " trouve le bon nombre entre 1 et 10 . ";
    $num= fgets( STDIN);
    $compteur++;
    if ($num !=$nombAll){
    echo "veuille reessayez \n ";
    }
    }
    while ($num !=$nombAll );

    echo " bravo le chiffre ". $num . " est le bon nombre,\n vous l avez trouve en ".$compteur." tentative \n.  felicitation \n ";
}
GuessGame();
GuessGame();