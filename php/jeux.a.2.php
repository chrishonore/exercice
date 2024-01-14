<?php
/*Implémentez le jeu du Morpion (Tic Tac Toe). Créez une grille 3x3 et permettez
à deux joueurs de jouer tour à tour. Demandez à chaque joueur de saisir les
Algorithmie
Pratique
coordonnées où il souhaite placer son symbole (X ou O). Utilisez des boucles
imbriquées pour afficher la grille et vérifier si un joueur a gagné après chaque
coup. Le jeu doit se poursuivre jusqu'à ce qu'il y ait un vainqueur ou un match
nul.
*/
$joueur1="toto";
$joueur2="lulu";
$caseMin=1.1;
$caseMax=3.3;


echo  $joueur1 . " en sachant que les 3 colonnes sont represente par le chiffre avant le point. \n et que les lignes sont represente pat le chiffre apres le point .\n choisissez une case : exemple 1.1 , 2.2 , 3.3 etc =  ";
$case1=trim(fgets( STDIN)) ;
echo  $joueur2 . " en sachant que les 3 colonnes sont represente par le chiffre avant le point  . \n et que les lignes sont represente pat le chiffre apres le point .\n choisissez une case : exemple 2.1 , 2.2 , 3.3 etc =  ";
$case2=trim(fgets( STDIN)) ;
/* orizontale 1.1 2.1 3.1 // 1.2 2.2 3.2 // 1.3 2.3 3.3 //diagonal gauche 1.1 2.2 3.3 //
 verticale 1.1 1.2 1.3 // 2.1 2.2 2.3 // 3.1 3.2 3.3 //diagonal droite 3.1 2.2 1.3 */
if ( $case1==1.1 && $case1==1.2 && $case1==1.3 ){
    echo " alors " .$joueur1 ."gagne .";
}