<h1>je suis un traitement </h1>
<!-- traitement.php -->
<?php
if ($_SERVER['REQUEST_METHOD']=='GET'){
    $name=$_GET['name'];
    $email=$_GET['email'];
    echo "votre prenom est " . $name . "<br>  est votre adresse email est " . $email;
}
?>
