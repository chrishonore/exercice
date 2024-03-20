
<?php
$chemin_fichier = "C:\Users\cashm\\exercice\php\\text.txt\\fichier.txt";
$mode_ouverture = "r"; // Mode lecture

$handle = fopen($chemin_fichier, $mode_ouverture);

if ($handle) {
    echo "Fichier ouvert avec succès <br>";
} else {
    echo "Impossible d'ouvrir le fichier";
}
// Lecture ligne par ligne avec fgets()
//while (($ligne = fgets($handle)) !== false) {
  //  echo $ligne;
//}

// Lecture de tout le contenu avec file_get_contents()
$contenu = file_get_contents($chemin_fichier);
echo  $contenu;


$chemin_fichier = "C:\Users\cashm\\exercice\php\\text.txt\\fichier.txt";
$mode_ouverture = "w"; // Mode écriture

$handle = fopen($chemin_fichier, $mode_ouverture);

if ($handle) {
    $texte = "salut je suis chris <br> j adore les chalenge la competition <br> et mon objectif est la reussite <br>";
    fwrite($handle, $texte);
    echo "Écriture dans le fichier réussie";
} else {
    echo "Impossible d'écrire dans le fichier";
}

