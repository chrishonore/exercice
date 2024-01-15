<?php
function posNegatif() {
// demande a l utilisateur d entrer un nombre positif ou negatif //
    echo " entrer un nombre positif ou negatif : ";
//  lire l entree de l utilisateur //
$number=fgets(STDIN);
if (!is_numeric($number)) {
    echo " ceci n est pas un nombre veuillez recommencer merci " ;
    return;
}

// si le nombre est superieur a 0 alors //
if ($number>0){
    // le message sera
    echo " le nombre " . $number . " est positif " ;
}
// si alors le nombre est egale a zero alors //
elseif ($number==0){
    // le message sera
     echo " le nombre est " . $number . " . " ;
}
// si ca rentre pas dans les premieres alors le nombre est negatif //
else {
    // le message sera
    echo "le nombre $number est negatif .";
}
}
posNegatif();
posNegatif();
posNegatif();