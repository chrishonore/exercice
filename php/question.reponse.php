<?php
declare (strict_types=1);
echo " bienvenu a question pour un champion \n";
$compteur = 0;
$score = 5;
$scoretotal=100;
function Question($q, $option, $reponse)
{
    echo $q . "\n" . $option . "\n";
    do {
        echo " quel est votre reponse ";
        $repU = trim(fgets(STDIN));
        if (!is_numeric($repU)) {
            echo "ceci n est pas un chiffre ";
        }
    } while ($repU < 1 || $repU > 4);
    if ($repU == $reponse) {
        global $score;
        echo " bonne reponse \n ";
        $score += 5;
    } else {
        global $score;
        echo " mauvaise reponse . \n ";
     $score+=1;
    }
}


Question("Thème 1 Le footbal \n
Question 1 :\n Comment s'appelle la règle qui interdit de touche la balle avec les mains ? \n",
    "1 = Hors jeux \n2 = Faute \n3 = Pas touche la mouche\n4 = WALA j ai pas touché",
    2);

Question("Question 2 :\n Quel est le vainqueur de la Champions league 2023 ? \n",
    "1 = Manchester city\n2 = L'Inter de Milan\n3 = Le Réal de Madrid\n4 = Le Borussia Dortmund",
    1);

Question(" Question 3 :\n Lequel de ces joueurs est belge ?\n",
    "1 = Karim Benzema\n2 = Cristiano Ronaldo\n3 =Lionnel Messi\n4 = Kevin De Bruyne",
    4);

Question("Question 4 :\n Quel club a gagné le plus de champions league ?\n",
    "1 = Le Fc Barcelone\n2 = Le Bayern de Munich\n3 = Le Réal de Madrid\n4 = Le Paris-Saint-Germain",
    3);

Question("Question 5 :\n Quel pays a gagné le plus de coupe du monde ?\n",
    "1 = La France\n2 = L'Angleterre\n3 = L'Espagne\n4 = Le Brésil",
    4);

Question("thème 2 Culture G \n
Question 6 :\n Quel est le meilleur rappeur de cette décennie ?\n",
    "1 = Jul\n2 = PNL\n3 = Djadja&Dinaz\n4 = Maitre Gims",
    1);

Question("Question 7 :\n Quelle est la plus grande île d’Europe ?\n",
    "1 = Sicile\n2 = Islande\n3 = Grande Bretagne\n4 = La réunion",
    3);

Question("Question 8 :\n Quel est le nom scientifique du sel ?\n",
    "1 = Eau de mer\n2 = Chlorure de sodium\n3 = Chlorure de Potassium\n4 = Chlorure de magnésium",
    2);

Question("Question 9 :\n Combien compte-t-on de couleurs PRIMAIRES ?\n",
    "1 = 3 couleurs\n2 = 9 couleurs\n3 = 8 couleurs\n4 = 5 couleurs",
    1);

Question("Question 10 :\n Lequel de ces produits ne périme jamais ?\n",
    "1 = Le Coca Cola\n2 = Le pain\n3 = La confiture\n4 = Le miel",
    4);

Question("Walt Disney \n
Question 11 :\n qui est le plus intelligent dans le roi lion?\n",
    "1 = pumba\n2 = scar\n3 = zazou\n4 = thymon",
    1);

Question("Question 12 :\n quel heure le carrosse se transforme en citrouille ?\n",
    "1 = 12h15\n2 = 11h\n3 = 00h\n4 = 14h",
    3);

Question("Question 13 :\n Qui a crée Walt disney ?\n",
    "1 = Wally\n2 = Walter\n3 = Watter\n4 = Willy",
    2);

Question("Question 14 :\n Quel est le premier personnage créer par walt disney?\n",
    "1 = Mickey\n2 = Donald\n3 = Minnie\n4 = Oswald",
    4);

Question("Question 15 :\n Comment s'appelle le crabe dans la petite sirène?\n",
    "1 = Polochon\n2 = Belle\n3 = Sébastien\n4 = Esteban",
    3);
Question( "Thème faune et flore\n
Question 16 :\n Comment s'appelle la femelle du sanglier?\n",
    "1 = la sangliere \n2 = la laie\n3 = la truie\n4 = la cochonne(Amir)",
    2);

Question( "Question 17 :\n De quel famille fait partie le saule pleureur?\n",
    "1 = Salicaceae\n2 = Feuillus\n3 = Coniferes\n4 = Lianes",
    1);

Question( "Question 18:\n Quel est l'intrus parmi ses familles?\n",
    "1 = strepsipteres\n2 = trichopteres\n3 = lepiadopteres\n4 = anseriformes",
    4);

Question( "Question 19:\n Où se trouve les paletuviers?\n",
    "1 = Dans les mangroves\n2 = Dans La savane\n3 = Dans le désert\n4 = En Amazonie",
    1);

Question( "Question 20:\n quelle est la papaveracée commune des champs de céréales ?\n",
    "1 = le bleuet\n2 = le coquelicot\n3 = le trèfles\n4 = la rose",
    1);
echo " bravo vous avez repondu a toute les question votre score est de " . $score;