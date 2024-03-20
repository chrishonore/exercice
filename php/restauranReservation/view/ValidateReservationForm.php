<?php
if ($_SERVER["REQUEST_METHOD"] =="POST"){
    $nom=$_POST["nom"];
    if (empty($nom)){
        echo "la variable \$nom est vide . ";
    }else{
        echo " la variable \$nom n est pas vide";
    }
    $prenom=$_POST["prenom"];
    if (empty($prenom)){
        echo "la variable \$prenom est vide . ";
    }else{
        echo " la variable \$prenom n est pas vide";
    }
    $mail=$_POST["email"];
    if (empty($mail)){
        echo "la variable \$mail est vide . ";
    }else{
        echo " la variable \$mail n est pas vide";
    }
    $numTel=$_POST["numero"];
    if (empty($numero)){
        echo "la variable \$numero est vide . ";
    }else{
        echo " la variable \$numero n est pas vide";
    }
    $naiss=$_POST["date"];
    if (empty($date)){
        echo "la variable \$date est vide . ";
    }else{
        echo " la variable \$date n est pas vide";
    }
    mail($mail,$sujet,$contenu,"From: name@adress.domain");

    $destinataire="$mail";

   if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
       echo "l adresse est valide";
   }else {
       echo "l adresse n est pas valide";
   }
}