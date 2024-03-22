<?php
declare(strict_types=1);

echo "Bienvenue à Question pour un champion \n";
$compteur = 0;
$score = 5;
$scoretotal = 100;

$reponseAll=" " ;
$joker1 = false; // Variable pour suivre si le joker a été utilisé

// Fonction pour afficher une question avec des options
function Question($q, $option, $joker1, $reponse)
{

    global $joker1; // Accéder à la variable globale

    echo $q . "\n"  . $reponse ."\n";

    // Vérifier si le joker a déjà été utilisé
    if (!$joker1) {
        echo "Voulez-vous utiliser le joker 50/50 ? (Oui/Non) ";
        $choixJoker = trim(fgets(STDIN));

        if (strtolower($choixJoker) === 'oui') {
            $joker1 = true; // Marquer le joker comme utilisé
            echo $q . $option;
            echo "Vous avez utilisé le joker 50/50. \n";

        }
    }

    do {
        echo "Quelle est votre réponse ? ";
        
        $repU = trim(fgets(STDIN));
        if (!is_numeric($repU)) {
            echo "Ceci n'est pas un chiffre. ";
        }
    } while ($repU < 1 || $repU > 4);

    if ($repU == $reponse) {
        global $score;
        echo "Bonne réponse \n ";
        $score += 5;
    }
    else {
        global $score;
        echo "Mauvaise réponse. \n ";
        $score += 1;
    }
    return $reponse;
}

// Exemple d'utilisation du joker (non utilisé dans cet exemple)
Question("Thème 1 Le football \nQuestion 1 :\n Comment s'appelle la règle qui interdit de toucher la balle avec les mains ? \n",
    "1 = Hors jeux \n2 = Faute \n3 = Pas touche la mouche\n4 = WALA j ai pas touché",
    "50/50",2);
