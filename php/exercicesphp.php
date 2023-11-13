<?php
$age="";
echo "entrer votre age";
$age=fgets(STDIN);

if ($age>=18){
    echo "vous etes majeur.";
}
else {
    echo"vous etes mineur hahaha.";
}
?>