<?php
//depart du compteur a 0
$count=0;
//demande a l utilisateur de saisir un texte
echo "saisissez une phrase et je vous la transmet en majuscule et en minuscule \n";
$text=trim(fgets(STDIN));
//message de bonjour
echo "bonjour\n";
// appel de function anec ses message
StringToUpperCase  ( $text);
StringToUpperCase  ('aime la ',);
StringToUpperCase  ('biere et le vin' );
// declaration d une function
function StringToUpperCase (string $_strEntry)
{
    // calcule le nombre de fois que la fonction passe
    global $count;
    $_upperString="";
    $count ++;

    for ($i=0; $i<strlen($_strEntry);$i++)
    {
        // converti les lettre en code ascI  A = 65 et a= 97
        // echo ord($_strEntry)."\n";
        $_firstChar=ord($_strEntry[$i]);
        if ($_firstChar>=97 && $_firstChar<=122){
            $_firstChar-=32 ;
        }

        $_firstChar=chr($_firstChar);
        $_upperString=$_upperString.$_firstChar;
    }
    echo $count." : ".$_upperString."\n";
}
?>