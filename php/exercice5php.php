<?php
$day="";
echo"entrer un chiffre de 1 a 7 qui corresponde au jour de la semaine";
$day=fgets(STDIN);
switch ($day){
    case "1";
    echo "c est lundi";
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
    default ;
    echo "la saisie ne correspond pas idiot";
    break;
}
?>