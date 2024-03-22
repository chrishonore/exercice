<!-- traitement.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom=$_POST['prenom'];
    $email = $_POST['email'];
    $number=$_POST['number'];
    $date=$_POST['date'];
    echo "Nom : " . $nom . "<br>";
    echo "Prenom :" .$prenom . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Numero : " . $number . "<br>";
    echo "Date : " . $date  ;
}
// Validation des données
if (empty($nom) || empty($prenom) || empty($number) || empty($email) || empty($date)) {
    echo "Veuillez remplir tous les champs.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Adresse e-mail invalide.";
} else {
    // Traitement des données
// envoi d'un e-mail
    $destinataire = "$email";
    $sujet = "Nouveau message de $nom";
    $message = "Adresse e-mail : $email";
    $headers = "From: $email";
    mail($destinataire, $sujet, $message, $headers);
    // Envoi des données à la base de données, etc.
    // Feedback à l'utilisateur
    if ($nom.$prenom.$number.$email.$date) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message.";
    }

}

?>
