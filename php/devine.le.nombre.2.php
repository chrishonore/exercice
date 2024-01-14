<?php
// fonction automatique de jeux int = nombre entier
function GuessGame (int $minValue, int $MaxValue) {
    // nombre aleatoire selectionne par l appareil
    $nombAll=rand($minValue,$MaxValue);
    // nombre de base de 0 pour calculer le nombre de coup pour resoudre le jeux
    $compteur=0;
// message d accueil
    echo " Bienvenu nous allons commenver un petit jeux \n";
    // boucle do = ce que il dois faires si ...
    do {
        // chercher le nombre entre .. et ..  et l enregistre
        echo " trouve le bon nombre entre $minValue et $MaxValue . ";
        $num= fgets( STDIN);
        // si le nombre n es pas un chiffre alors il continue
        if ( !is_numeric($num)){
            echo " vous vous etes trompe ";
           continue;
        }
        // nombre de coup illimite
        $compteur++;
        // si le nombre selectionne est superieur au nombre aleatoire alors
        if ($num >$nombAll){
        // alors il dira que le nombre est trop grand
            echo " le $num est trop grand \n ";
        }
        //par-contre si le nombre selectionne est inferieur alors
        elseif ( $num<$nombAll) {
            // alors il dira que le nombre est trop petit
            echo "le $num est trop petit \n";
        }
    }
    // la boucle while s active lorsque l on trouve le bon nombre
    while ($num !=$nombAll );
// dans ce cas il dira en combien de fois il as resolu l enigme
    echo " bravo le chiffre ". $num . " est le bon nombre,\n vous l avez trouve en ".$compteur." tentative \n.  felicitation \n ";
}
// dans cette fonction on as choisi entre 1 et 10
GuessGame(1,10);
// dans cette fonction on as choisi entre 1 et 100
GuessGame(1,100);
// dans cette fonction on as choisi entre 1 et 1000
GuessGame (1,1000 );