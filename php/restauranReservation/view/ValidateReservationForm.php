<?php
// Récupérez les données saisies par l'utilisateur
$telephone = $_POST['telephone'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dateNaissance = $_POST['dateNaissance'];
$option = $_POST['option']; // "place", "emporter", "livraison"
$email=$_POST['email'];
// Validez les données
if(empty($telephone) || empty($nom) || empty($prenom) || empty($dateNaissance) || empty($option)) {
    // Tous les champs ne sont pas remplis, incluez le fichier FormRefused.php
    include 'FormRefused.php';
    echo "Veuillez remplir tous les champs.";
    exit();
}

// Vérifiez si l'adresse e-mail est valide
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // L'adresse e-mail n'est pas valide, incluez le fichier FormRefused.php
    include 'FormRefused.php';
    echo "L'adresse e-mail n'est pas valide.";
    exit();
}

// Si les données sont valides
$userEmail = $email;
$mailSubject = "Confirmation de votre réservation";
$mailBody = "Merci de votre réservation, voici les détails : \n
Téléphone: $telephone \n
Nom: $nom \n
Prénom: $prenom \n
Date de Naissance: $dateNaissance \n
Option: $option";

// Envoyez un e-mail de confirmation à l'utilisateur avec les détails saisis
mail($userEmail,$mailSubject, $mailBody,"From: name@adress.domain");

// Affichez un message de confirmation lambda à l'utilisateur
include 'FormAccepted.php';
echo "Merci de votre réservation. Un e-mail de confirmation a été envoyé à $userEmail avec les détails de votre réservation.";

// Affichez les détails de la réservation à l'écran
echo "
Réservation validée. Voici les détails de votre réservation : <br/>
Téléphone: $telephone <br/>
Nom: $nom <br/>
Prénom: $prenom <br/>
Date de Naissance: $dateNaissance <br/>
Option: $option
";
?>
