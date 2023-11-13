<?php
$month="";
echo"entrer un chiffre de 1 a 12 qui corresponde au mois de l annee ";
$month=fgets(STDIN);
switch ($month){
    case "1";
    echo "janvier";
    break ;
    case "2";
        echo "fevrier";
        break ;
    case "3";
        echo "mars";
        break ;
    case "4";
        echo "avril";
        break ;
    case "5";
        echo "mai";
        break ;
    case "6";
        echo "juin";
        break ;
    case "7";
        echo "juillet";
        break ;
    case "8";
        echo "aout";
        break ;
    case "9";
        echo "septembre";
        break ;
    case "10";
        echo "octobre";
        break ;
    case "11";
        echo "novembre";
        break ;
    case "12";
        echo "decembre";
        break ;
    default ;
         echo "nous avons 12 mois gros malin ha ha ha ";
         break ;

}
?>