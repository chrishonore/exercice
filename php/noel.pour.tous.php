<?php
echo "            ___________________________________________________
            | Bonjour et bienvenu a la boutique du Pere Noel .|
            |_________________________________________________|\n";
// entrer le nom de l utilisateur
echo " Quel est votre nom ?    \n" ;
$nom=fgets(STDIN);
while (true) {
// demande a l utilisateur si il as des enfants
echo " Bonjour $nom avez vous des enfants ? 
_____________________
| tapez 1 | = | non |
|_________|___|_____|
| tapez 2 | = | oui |
|_________|___|_____|   " ;
$enfant=fgets(STDIN);
// si le choix est 1 alors il as pas d enfants
    if ($enfant == 1) {
        echo "                _________________________________________________
                | il serait temp de mettre jesus dans la creche | 
                |_______________________________________________|\n ";
        echo " a qui desire vous offrir un cadeau pour mettre jesus dans la creche lol ?\n
           _______________________
           | tapez 1 | = | femme |
           |_________|___|_______|
           | tapez 2 | = | homme |
           |_________|___|_______|";
        $FouH = fgets(STDIN);
    }

// si le choix est 2 alors il as des enfants
    if ($enfant==2 )  {
        // demande le sexe de l enfant
        echo "quel est le sexe de votre enfant ?
       ________________________
       | tapez 1 | = | fille  |
       |_________|___|________|
       | tapez 2 | = | garcon |
       |_________|___|________|   ";
        $filOuGar =fgets(STDIN);
// dans ce cas c est une fille
        if ($filOuGar==1){
            // demande l age de la fille
            echo " veuillez choisir la tranche d age ?
            _____________________________
            | tapez 1 | = | 0 a 5 ans   |
            |_________|___|_____________|
            | tapez 2 | = | 6 a 12 ans  |
            |_________|___|_____________|
            | tapez 3 | = | 13 a 18 ans |
            |_________|___|_____________|     ";
            $filleAge=fgets(STDIN);
            // si la fille as entre 0 et 5 ans alors voici les choix
            if ($filleAge==1){
                echo " veuillez faire votre choix ! 
                                       ___________________________
                                       |     article      | prix |             
                _______________________|__________________|______|
                | tapez     1      | = | le tapis d eveil | 12 € |
                |__________________|___|__________________|______|
                | tapez     2      | = | girafe musicale  | 15 € |
                |__________________|___|__________________|______|
                | tapez     3      | = | doudou stich     | 20 € |
                |__________________|___|__________________|______|
                | tapez     4      | = | veilleuse        | 18 € |
                |__________________|___|__________________|______|
                | tapez     5      | = | piano interactif | 25 € |
                |__________________|___|__________________|______|
                | tapez une lettre | = | retour !         |    
                |__________________|___|__________________|      ";
                $filleCad=fgets(STDIN);

                    while  ( $filleCad >= 1 || $filleCad <= 5 ) {
                    echo " que desire vous faire :
                          _______________________________
                          | ajouter au panier   | = | 1 |
                          |_____________________|___|___| 
                          | passer a la caisse  | = | 2 |
                          |_____________________|___|___|
                          | choisir autre chose | = | 3 |
                          |_____________________|___|___|
                          | retour au menu      | = | 4 |
                          |_____________________|___|___|    ";
                    $panierBreak =fgets(STDIN);
                    if ($panierBreak==1){
                     //ajouter au panier
                    }
                    if ($panierBreak==2){
                    // aller directement a la caisse
                    }
                    if ($panierBreak == 3 ) {
                    // choisir autre chose dans la meme liste
                    }
                    if ($panierBreak >= 4  ){
                    // retour au menu
                    break;
                    }
                }
                }
            }
            //si la fille as entre 6 et 12 ans
        if (isset($filleAge)) {
            if  ( $filleAge == 2) {
                echo " veuillez faire votre choix ! 
                                       ___________________________
                                       |     article      | prix |             
                _______________________|__________________|______|
                | tapez     1      | = | barbie           | 15 € |
                |__________________|___|__________________|______|
                | tapez     2      | = | machine a tatoo  | 29 € |
                |__________________|___|__________________|______|
                | tapez     3      | = | stylind coiffure | 25 € |
                |__________________|___|__________________|______|
                | tapez     4      | = | trotinette       | 49 € |
                |__________________|___|__________________|______|
                | tapez     5      | = | choipeau potter  | 39 € |
                |__________________|___|__________________|______|
                | tapez une lettre | = | retour !         |    
                |__________________|___|__________________|      ";
                $filleCad=fgets(STDIN);
            }
            panier();
        }

            // si la fille as entre 13 et 18 ans
            if ($filleAge==3){
                echo " veuillez faire votre choix ! 
                                       _________________________________
                                       |     article           | prix  |             
                _______________________|_______________________|_______|
                | tapez     1      | = | tablette   samsung    | 120 € |
                |__________________|___|_______________________|_______|
                | tapez     2      | = | velo                  | 150 € |
                |__________________|___|_______________________|_______|
                | tapez     3      | = | coffre maquillage     | 20 €  |
                |__________________|___|_______________________|_______|
                | tapez     4      | = | casque bleutoot       | 45 €  |
                |__________________|___|_______________________|_______|
                | tapez     5      | = | dictionnaire la rousse| 30 €  |
                |__________________|___|_______________________|_______|
                | tapez une lettre | = | retour !         |    
                |__________________|___|__________________|      ";
                $filleCad=fgets(STDIN);
            }
        }

// par contre si le choix du cadeau  donne est une lettre alors le mzssage sera
            elseif ( !is_numeric($filleAge)){
                echo " vous vous etes trompe cela ne sont pas des chiffres \n";
                continue;
            }


// par contre si le sexe de l enfant  donne est une lettre alors le message sera


// si la selection de l enfant est 2 alors il as pas d enfant

}
