<?php
//  l utilisateur entre son age //
echo "entrer votre age";
// lis l age indiquee //
$age=fgets(STDIN);
// si l age est superieur ou egale a 18 alors //
if ($age>=18){
    echo "vous etes majeur.";
}
// sinon l utilisateur est mineur //
else {
    echo"vous etes mineur hahaha.";
}
?>