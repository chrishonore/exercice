<?php
// l utilisateur entre un nombre
echo "entrer un nombre entre 1 et 5 qui represente l etat du pneu . ";
$number=fgets(STDIN);
// si le nombre est de 5 alors il affichera le massage suivant
if ( $number == 5 ) {
    echo " Excellente votre pression est de " . $number ;
}
// si le nombre est entre 4 et  4.9 alors il affichera le massage suivant
elseif($number >= 4 && $number < 5 ) {
    echo " bonne pression \n votre pression actuelle est de " . $number ;
}
// si le nombre est entre 3 et 3.9 alors il affichera le massage suivant
elseif ($number >= 3 && $number < 4) {
    echo " moyenne pression , \n votre pression est de " . $number . " penser a les regonflerf . ";
}
// si le nombre est entre 2 et 2.9 alors il affichera le massage suivant
elseif($number >= 2 && $number < 3) {
    echo " Mauvaise pression .\n Veuillez gonfler vos  pneus tres vite \n  votre pression est a " . $number."! ";
}
// si le nombre est entre 0 et 1.9 alors il affichera le massage suivant
elseif ($number >= 0 && $number < 2) {
    echo "  Pression médiocre.\n  Veuillez gonfler vos  pneus de toute urgence \n  vous etes a ".$number."  ou alors aller a pied ! ";
}
// dans le cas ou il se trompe de caractere ou de chiffre il indiquera le message suivant
else {
    echo " l entree utilise n est pas valide,\n veuillez entre le bon nombre merci ... ";
}