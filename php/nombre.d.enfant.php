*/ Ecrivez un programme PHP qui dit "Hey, salut à tous les amis, c'est moi le
programme PHP !"
Demandez à l'utilisateur combien d'enfant il a. Si il n'en a pas, dites lui
dommage, si il en a moins que 3, dites lui qu'il a une petite famille, si il en a plus
que 3, dites lui qu'il a une famille nombreuse.*/
<?php
echo  "Hey, salut à tous les amis, c'est moi le
programme PHP !";
echo "\n combien d enfant avez vous ? " ;
$enfant=trim(fgets( STDIN)) ;
if ( $enfant==0) {
    echo " dommage " ;
}
if ($enfant>0 && $enfant<=3){
    echo " vous avez une petite famille " ;
}
elseif ($enfant>3) {
    echo " vous etes une famille nombreuse";
}
