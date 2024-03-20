<?php
if ($_SERVER["REQUEST_METHOD"]=="GET") {
    $number1 = floatval($_GET["number_1"]);
    $number_1=trim(fgets());
    $number2 = floatval($_GET["number_2"]);
    $number2=trim(fgets(STDIN));
    $operation = $_GET["operation"];
    $operation=trim(fgets(STDIN));

    switch ($operation) {
        case "Addition":
            $resultat=addition($number1,$number2);
            echo "Le résultat de votre opération est ".$resultat;
            break;
        case "Multiplication":
            $resultat=multiplication($number1,$number2);
            echo "Le résultat de votre opération est ".$resultat;
            break;
        case "Division":
            $resultat=Division($number1,$number2);
            echo "Le résultat de votre opération est ".$resultat;
            break;
        case "Soustraction":
            $resultat=soustraction($number1,$number2);
            echo "Le résultat de votre opération est ".$resultat;
            break;
    }
}





function addition (float $n1, float $n2):float

{

    $res=$n1+$n2;

    return $res;

}





function soustraction (float $n1, float $n2):float

{

    $res = $n1 - $n2;

    return $res;

}



function multiplication (float $n1, float $n2):float

{

    $res=$n1*$n2;

    return $res;

}





function Division(float $n1, float $n2):float

{

    if ($n2!=0)

    {

        return $res=$n1/$n2;

    }

    else

    {

        echo "Le diviseur est égal à 0. Veuillez entrer un chiffre suppérieur à 0"; return (0);

    }





}

?>