<?php
/* Demandez à l'utilisateur si il préfère manger sucré ou salé. Proposez-lui 3 types
d'aliments de la catégorie, l'utilisateur peut ensuite tapper sur 1, 2 ou 3 pour
sélectionner un des aliments, ou 4 si il n'aime aucun de ces aliments. Dans les 3
premiers cas, dites lui combien de calorie vaut l'aliment (inventez un chiffre),
dans le 4ème cas, le programme s'excuse et dit qu'il n'a rien d'autre en stock.
*/
echo " que prefere vous manger ?\n  tape 1 pour sucre et 2 pour salee : ";
$choixSel=trim(fgets( STDIN)) ;
if ($choixSel==1){
    echo " voici mes proposition :\n tapez 1 pour un melon ,\n tapez 2 pour une glace ,\n tapez 3 pour une tarte ";
  $choixSucree= trim(fgets( STDIN)) ;
  if ($choixSucree==1){
      echo " vous avez selectionner le melon , \n vous allez consommer 200 calorie ";
  }
    if ($choixSucree==2){
        echo " vous avez selectionner une glace , \n vous allez consommer 350 calorie ";
    }
    if ($choixSucree==3){
        echo " vous avez selectionner une tarte , \n vous allez consommer 500 calorie ";
    }
    elseif($choixSucree>3 || $choixSucree<1 ){
        echo " desole je n ai rien en stock pour vous ";
    }
}

if ($choixSel==2){
    echo " voici mes proposition :\n tapez 1 pour un burger ,\n tapez 2 pour une fricadelle ,\n tapez 3 pour une lasagne ";
    $choixSalee= trim(fgets( STDIN)) ;
    if ($choixSalee==1){
        echo " vous avez selectionner le burger , \n vous allez consommer 478 calorie ";
    }
    if ($choixSalee==2){
        echo " vous avez selectionner une fricadelle , \n vous allez consommer 380 calorie ";
    }
    if ($choixSalee==3){
        echo " vous avez selectionner une lasagne , \n vous allez consommer 850 calorie ";
    }
    elseif($choixSalee>3 || $choixSalee<1 ){
        echo " desole je n ai rien en stock pour vous ";
    }
}
else {
    echo "\n cela n est pas un choix valide \n veuillez recommencer merci ." ;
}