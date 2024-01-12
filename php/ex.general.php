<?php
//depart du compteur a 0
$count=0;
//demande a l utilisateur de saisir un texte
echo "saisissez un mot ou un text \n";
$text=trim(fgets(STDIN));
//message de bonjour
echo "bonjour\n que desirez vous faire ? \n 1 = majuscule \n 2 = minuscule " ;
$MajMin=trim(fgets(STDIN));

    function StringToUpperCase (string $_strEntry)
    {
        // calcule le nombre de fois que la fonction passe
        global $count;
        $_upperString="";
        $count ++;
        for ($i=0; $i<strlen($_strEntry);$i++)
        {
            $_firstChar=ord($_strEntry[$i]);
            if ($_firstChar>=97 && $_firstChar<=122){
                $_firstChar-=32 ;
            }
            $_firstChar=chr($_firstChar);
            $_upperString=$_upperString.$_firstChar;
        }
        echo $count." : ".$_upperString."\n";
    }
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
if ($MajMin==1){
    StringToUpperCase  ( $text);
    StringToUpperCase  ('aime la ',);
    StringToUpperCase  ('biere et le vin' );
}
if ($MajMin==2){
    StringLowerCase  ( $text);
    StringLowerCase  ('AIME LA  ',);
    StringLowerCase  ('BIERE ET LE VIN' );

}
?>

?>