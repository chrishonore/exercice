<?php
DECLARE(strict_types=1);

echo " Bonjour Patron \n entre le nombre d eleve :   " ;
$NombreEleve = trim(fgets(STDIN)) ;
if (!is_numeric($NombreEleve)){
    echo " Ceci n est pas un nombre " ;
    return ;
}
echo " combien de matiere avez vous  ? " ;
$Matieres=trim(fgets(STDIN));
if (!is_numeric($Matieres));
if ($NombreEleve==0 && $Matieres=0) {
    echo " pas d eleve , pas de note ha ha ha \n ou pas de note  pas de resultat  .." ;
    echo " quel sont vos matieres ? " ;
    $cours=trim(fgetc(STDIN));
     }
$compteur=0 ;
$compteurMAX=$NombreEleve ;
$compteurM=0 ;
$compteurDMAX=$Matieres ;
$messageN=" Quel est le nom de l eleve ?  ";
$messageD=" Quel est sa note sur le devoir ? ";
// for pour les eleves
for ($i = 0; $i < $NombreEleve; $i++) {
    $nom=eleve ("entre le nom de l eleve ". ($i+1) ." \n " );
    $noms[$i] = $nom ;
}
function eleve (string $messageN ):string
{
    echo $messageN;
    return trim(fgets(STDIN));
}