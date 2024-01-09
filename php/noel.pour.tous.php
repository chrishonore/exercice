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
| tapez 1 | = | NON |
|_________|___|_____|
| tapez 2 | = | OUI |
|_________|___|_____|   " ;
$enfant=fgets(STDIN);
// si le choix est 1 alors il as pas d enfants
    if ($enfant == 1) {
        echo "                _________________________________________________
                | Il serait temp de mettre Jesus dans la creche | 
                |_______________________________________________|\n ";
        echo " A qui desire vous offrir un cadeau pour mettre Jesus dans la creche lol ?\n
           _______________________
           | tapez 1 | = | FEMME |
           |_________|___|_______|
           | tapez 2 | = | HOMME |
           |_________|___|_______|";
        $FouH = fgets(STDIN);

    }
// si le choix est 2 alors il as des enfants
    if ($enfant==2 )  {
        // demande le sexe de l enfant
        echo "quel est le sexe de votre enfant ?
       ________________________
       | tapez 1 | = | FILLE  |
       |_________|___|________|
       | tapez 2 | = | GARCON |
       |_________|___|________|   ";
        $filOuGar =fgets(STDIN);
// dans ce cas c est une fille
        if ($filOuGar==1){
            // demande l age de la fille
            echo " Veuillez choisir la tranche d age de votre fille ?
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
                echo " Veuillez faire votre choix ! 
                                       ___________________________
                                       |     ARTICLE      | PRIX |             
                _______________________|__________________|______|
                | tapez     1      | = | le tapis d eveil | 12 € |
                |__________________|___|__________________|______|
                | tapez     2      | = | girafe musicale  | 15 € |
                |__________________|___|__________________|______|
                | tapez     3      | = | doudou STICH     | 20 € |
                |__________________|___|__________________|______|
                | tapez     4      | = | veilleuse        | 18 € |
                |__________________|___|__________________|______|
                | tapez     5      | = | piano interactif | 25 € |
                |__________________|___|__________________|______|
                | tapez une lettre | = | retour !         |    
                |__________________|___|__________________|      ";
                $filleCad1=fgets(STDIN);

                    while  ( $filleCad1 >= 1 || $filleCad1 <= 5 ) {
                    echo " Que desire vous faire ? :
                          _______________________________
                          | Ajouter au panier   | = | 1 |
                          |_____________________|___|___| 
                          | Passer a la caisse  | = | 2 |
                          |_____________________|___|___|
                          | Choisir autre chose | = | 3 |
                          |_____________________|___|___|
                          | Retour au menu      | = | 4 |
                          |_____________________|___|___|    ";
                    $panierBreak1 =fgets(STDIN);
                    if ($panierBreak1==1){
                     //ajouter au panier
                    }
                    if ($panierBreak1==2){
                    // aller directement a la caisse
                    }
                    if ($panierBreak1 == 3 ) {
                    // choisir autre chose dans la meme liste
                    }
                    if ($panierBreak1 >= 4  ){
                    // retour au menu
                    break;
                    }
                }
            }
            //si la fille as entre 6 et 12 ans

            if  ( $filleAge == 2) {
                echo " Veuillez faire votre choix ! 
                                       ___________________________
                                       |     ARTICLE      | PRIX |             
                _______________________|__________________|______|
                | tapez     1      | = | barbie           | 15 € |
                |__________________|___|__________________|______|
                | tapez     2      | = | machine a tatoo  | 29 € |
                |__________________|___|__________________|______|
                | tapez     3      | = | styling coiffure | 25 € |
                |__________________|___|__________________|______|
                | tapez     4      | = | trotinette       | 49 € |
                |__________________|___|__________________|______|
                | tapez     5      | = | choipeau potter  | 39 € |
                |__________________|___|__________________|______|
                | tapez une lettre | = | retour !         |    
                |__________________|___|__________________|      ";
                $filleCad2=fgets(STDIN);

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
                $filleCad3=fgets(STDIN);
            }

        }

        // dans ce cas c est une garcon
    if ($filOuGar==2){
        // demande l age du garcon
        echo " veuillez choisir la tranche d age de votre garcon ?
            _____________________________
            | tapez 1 | = | 0 a 5 ans   |
            |_________|___|_____________|
            | tapez 2 | = | 6 a 12 ans  |
            |_________|___|_____________|
            | tapez 3 | = | 13 a 18 ans |
            |_________|___|_____________|     ";
        $garconAge=fgets(STDIN);
        // si le garcon as entre 0 et 5 ans alors voici les choix
        if ($garconAge==1){
            echo " veuillez faire votre choix ! 
                                       ______________________________
                                       |     article         | prix |             
                _______________________|_____________________|______|
                | tapez     1      | = | tapis musicale      | 15 € |
                |__________________|___|_____________________|______|
                | tapez     2      | = | trotteur cars       | 35 € |
                |__________________|___|_____________________|______|
                | tapez     3      | = | voiture smoby       | 24 € |
                |__________________|___|_____________________|______|
                | tapez     4      | = | veilleuse spiderman | 18 € |
                |__________________|___|_____________________|______|
                | tapez     5      | = | dinosaures          | 25 € |
                |__________________|___|_____________________|______|
                | tapez une lettre | = | retour !            |    
                |__________________|___|_____________________|      ";
            $garconCad1=fgets(STDIN);

            while  ( $garconCad1 >= 1 || $garconCad1 <= 5 ) {
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
                $panierBreak4 =fgets(STDIN);
                if ($panierBreak4==1){
                    //ajouter au panier
                }
                if ($panierBreak4==2){
                    // aller directement a la caisse
                }
                if ($panierBreak4 == 3 ) {
                    // choisir autre chose dans la meme liste
                }
                if ($panierBreak4 >= 4  ){
                    // retour au menu
                    break;
                }
            }
    //si le garcon as entre 6 et 12 ans

        if  ( $garconAge == 2) {
            echo " veuillez faire votre choix ! 
                                       ______________________________
                                       |     article         | prix |             
                _______________________|_____________________|______|
                | tapez     1      | = | monopoly marvel     | 35 € |
                |__________________|___|_____________________|______|
                | tapez     2      | = | lego poudlard       | 69 € |
                |__________________|___|_____________________|______|
                | tapez     3      | = | jeux switch         | 39 € |
                |__________________|___|_____________________|______|
                | tapez     4      | = | uniforme de sorcier | 29 € |
                |__________________|___|_____________________|______|
                | tapez     5      | = | voiture teleguide   | 39 € |
                |__________________|___|_____________________|______|
                | tapez une lettre | = | retour !            |    
                |__________________|___|_____________________|      ";
            $gerconCad2=fgets(STDIN);
        }
    }
    }
    // si le garcon as entre 13 et 18 ans
    if ($garconAge==3){
        echo " veuillez faire votre choix ! 
                                       _________________________________
                                       |     article           | prix  |             
                _______________________|_______________________|_______|
                | tapez     1      | = | montre connecte       |  80 € |
                |__________________|___|_______________________|_______|
                | tapez     2      | = | velo  garcon          | 150 € |
                |__________________|___|_______________________|_______|
                | tapez     3      | = | console de jeux       | 99 €  |
                |__________________|___|_______________________|_______|
                | tapez     4      | = | casque bleutoot       | 45 €  |
                |__________________|___|_______________________|_______|
                | tapez     5      | = | dictionnaire la rousse| 30 €  |
                |__________________|___|_______________________|_______|
                | tapez une lettre | = | retour !         |    
                |__________________|___|__________________|      ";
                $garconCad3=fgets(STDIN);
                 }
        }

}