<?php
// Fonction de jeux
function GuessGame () {
    // nombre a cherche entre 1 et 10
    $nombAll=rand(1,10);
    //  compteur de depart a 0
    $compteur=0;
//  message d accueil
    echo " Bienvenu nous allons commencer un petit jeux \n";
    // boucle a faire
    do {
        // cherche le bon nombre
    echo " trouve le bon nombre entre 1 et 10 . ";
    // enregistre le num de l utilisateur
    $num= fgets( STDIN);
    // compteur illimite
    $compteur++;
    //si le nombre est inegale au nombre choisi alors
    if ($num !=$nombAll){
    echo "veuille reessayez \n ";
    }
    }
    // bouble while si la condition est vrai alors
    while ($num ==$nombAll );

    echo " bravo le chiffre ". $num . " est le bon nombre,\n vous l avez trouve en ".$compteur." tentative \n.  felicitation \n ";
}
GuessGame();
GuessGame();