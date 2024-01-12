<?php
//depart du compteur a 0
$count=0;
//demande a l utilisateur de saisir un texte
echo "saisissez une phrase et je vous la transmet en majuscule et en minuscule \n";
$text=trim(fgets(STDIN));
//message de bonjour
echo "bonjour\n";
// appel de function anec ses message
StringLowerCase  ( $text);
StringLowerCase  ('AIME LA  ',);
StringLowerCase  ('BIERE ET LE VIN' );
// declaration d une function
function StringLowerCase (string $_strEntry)
{
    // calcule le nombre de fois que la fonction passe
    global $count;
    $_StringToLower="";
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
        $_StringToLower=$_StringToLower=$_StringToLower.$_firstChar;
    }
    echo $count." : ".$_StringToLower."\n";
}
?>