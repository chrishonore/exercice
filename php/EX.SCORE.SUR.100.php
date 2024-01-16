<?php
// demande a l utilisateur d entrer un nombre //
echo "entrer un nombre entre 0 et 100 . ";
// lire le nombre de l utilisateur //
$number=fgets(STDIN);
// si le nombre es superieur ou egale a 90 alors le message sera //
if ($number>=90){
    echo " tres bien votre resultat est de " . $number . " sur 100 . " ;
}
// si le nombre es superieur ou egale a 80 et que il es inferieur a 90 alors //
elseif ($number >= 80 && $number < 90 ) {
    echo "bien votre resultat est de " . $number . " sur 100 c est pas mal . " ;
}
// si le nombre es superieur ou egale a 70 et que il es inferieur a 80 alors //
elseif ($number >= 70 && $number < 80 ) {
    echo " satisfaisant ton resultat est de " . $number . "sur 100 tu peut mieux faire . " ;
}
// sinon le message sera le suivant //
else {
  echo "a ameliorer votre resultat est de " . $number . " sur 100 ...pas de commentaire lol . " ;
}
?>