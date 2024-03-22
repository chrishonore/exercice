<?php
$dbName = "php_login_exo";
$dbUser = "root";
$dbPassword = "tessia";
$dbHost = "localhost";// dans votre cas : localhost
try {
$bdd = new PDO("mysql:host=" . $dbHost . ";dbname=" . $dbName, $dbUser , $dbPassword);
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connexion a la base de donnee réussie";

// $requete=$bdd->prepare('insert into login_password(username,password) values (:username,:password)');
// lier les requetes
// $requete->bindParam(':username',$name);
// $requete->bindParam(':password',$password);
// execute la requete
// $requete->execute();
 } catch (PDOException $e) {
 exit("Erreur de connexion : " . $e->getMessage());
}
$username=$_POST['username'];
$password=$_POST['password'];
$query='select * from login_password where username=:username';
$statement=$bdd->prepare($query) ;
$statement->bindParam(':username',$username);
$statement->execute();
$userdata=$statement->fetch(PDO::FETCH_ASSOC);
if ($userdata){
    if ($password===$userdata['password']){
        echo "connexion au site valide ";
    }else {
        echo " mot de passe errone ";
    }
}else {
    echo " vous venez de creer un compte ";
 $requete=$bdd->prepare('insert into login_password(username,password) values (:username,:password)');
//lier les requetes
 $requete->bindParam(':username',$username);
 $requete->bindParam(':password',$password);
// execute la requete
 $requete->execute();

}