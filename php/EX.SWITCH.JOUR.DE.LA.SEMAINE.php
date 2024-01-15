<?php
// demande a l utilisateur d introduire un chiffre //
echo" entrer un chiffre de 1 a 7 qui corresponde au jour de la semaine  " ;
// lis la date indiquer par l utilisateur //
$day=fgets(STDIN);
// represente une boucle de date predefini //
switch ($day){
    // chaque case represente le nombre et le jour //
    case "1";
    echo " c est lundi " ;
    // chaque break nous fait sortir de la boucle avec son echo //
    break ;
    case "2";
    echo "c est mardi";
    break;
    case "3";
    echo "c est mercredi";
    break;
    case "4";
    echo "c est jeudi";
    break;
    case "5";
    echo "enfin vendredi";
    break;
    case "6";
    echo "samedi";
    break;
    case "7";
    echo "dimanche";
    break;
    // si le nombre ne correspond pas alors nous aurons le message suivant //
    default ;
    echo "la saisie ne correspond pas idiot";
    break;
}
?>