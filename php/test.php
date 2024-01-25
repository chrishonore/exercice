<?php
declare ( strict_types=1);
//depart du compteur a 0
$count=0;
echo " Quel est la capital de la belgique ? ";
$Q1=trim(fgets(STDIN));
$Q1=StringToLowerCase($Q1);
if ($Q1=="bruxelles") {
    echo " bravo ".$Q1." est la  bonne reponse \n je savait que tu pouvait y arriver " ;
}
// fonction qui va mettre le texte en minuscule
function StringToUpperCase (string $_strEntry)
{
    // calcule le nombre de fois que la fonction passe
    global $count;
    $_upperString="";
    $count ++;
    // boucle for strlen il va prendre toute la ligne
    for ($i=0; $i<strlen($_strEntry);$i++)
    {
        $_firstChar=ord($_strEntry[$i]);
        // dans ce cas la lettre a est le 97 et le z c est 122
        if ($_firstChar>=97 && $_firstChar<=122){
            // pour le mettre en minuscule il faut faire -32
            $_firstChar-=32 ;
        }
        $_firstChar=chr($_firstChar);
        $_upperString=$_upperString.$_firstChar;
    }
    echo $count." : ".$_upperString."\n";
}
// fonction appele pour mettre en majuscule
function StringToLowerCase (string $_strEntry):string
{
    // calcule le nombre de fois que la fonction passe
    global $count;
    $_stringToLower="";
    $count ++;

    for ($i=0; $i<strlen($_strEntry);$i++)
    {
        // converti les lettre en code ascI  A = 65 et a= 97
        // echo ord($_strEntry)."\n";
        $_firstChar=ORD($_strEntry[$i]);
        if ($_firstChar>=65 && $_firstChar<=90){
            $_firstChar+=32 ;
        }

        $_firstChar=CHR($_firstChar);
        $_stringToLower=$_stringToLower.$_firstChar;
    }
   return $_stringToLower;

}

?>

?>