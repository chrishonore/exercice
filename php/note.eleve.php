
<?php

// Fonction pour lire l'entrée de l'utilisateur
function lire_entree($message) {
    echo $message . ": ";
    return rtrim(fgets(STDIN));
}

// Fonction pour afficher un tableau sans utiliser foreach
function afficher_tableau($tableau) {
    $keys = array_keys($tableau);
    for ($i = 0; $i < count($keys); $i++) {
        echo $keys[$i] . ": " . PHP_EOL;
        $inner_keys = array_keys($tableau[$keys[$i]]);
        for ($j = 0; $j < count($inner_keys); $j++) {
            echo "    " . $inner_keys[$j] . ": " . implode(", ", $tableau[$keys[$i]][$inner_keys[$j]]) . PHP_EOL;
        }
    }
}

// Demander le nombre d'élèves
$nb_eleves = lire_entree("Combien d'élèves ?");
$donnees = [];

// Demander les noms des élèves
for ($i = 0; $i < $nb_eleves; $i++) {
    $eleve = lire_entree("Nom de l'élève " . ($i + 1));
    $donnees[$eleve] = [];
}

// Demander le nombre de matières
$nb_matieres = lire_entree("Combien de matières ?");

// Demander les noms des matières et le nombre de devoirs pour chaque matière
for ($i = 0; $i < $nb_matieres; $i++) {
    $matiere = lire_entree("Nom de la matière " . ($i + 1));
    for ($j = 0; $j < $nb_eleves; $j++) {
        $nb_devoirs = lire_entree("Combien de devoirs pour " . $matiere . " pour " . array_keys($donnees)[$j] . " ?");
        $donnees[array_keys($donnees)[$j]][$matiere] = [];
        for ($k = 0; $k < $nb_devoirs; $k++) {
            $note = lire_entree("Note " . ($k + 1) . " pour " . $matiere . " pour " . array_keys($donnees)[$j]);
            $donnees[array_keys($donnees)[$j]][$matiere][] = $note;
        }
    }
}

// Afficher les données
echo "Données entrées :" . PHP_EOL;
afficher_tableau($donnees);

?>
