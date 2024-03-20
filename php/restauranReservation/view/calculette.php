<!DOCTYPE html>
<html lang="fr-be" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head >
    <meta charset="UTF-8">
    <meta name="description" content="this is an accessible form">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title> calculatrice </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/form.css"> <!-- Lien vers votre fichier form.css -->
    <style>
        header img,
        header h1,
        header a{
            display: inline-block;
            horiz-align: center;
        }
        h1{
            text-align: center;
            margin: 50px;
        }
        a{
            margin-right: auto;
        }
           </style>
</head>
<body>
<?php
include '../include/header.php'; ?>
    <main>
        <div id="titre_principal">
            <h1>Calculatrice</h1>
        </div>
        <div class="row">
            <form name="formulaire" method="get" action="calculette.php">
                <p>Nombre 1 : <label>
                        <input name="nombre1" type="text">
                    </label></p>
                <p>Nombre 2 : <label>
                        <input name="nombre2" type="text">
                    </label></p>
                <label>
                    <select name="choix">
                        <option value="addition">+</option>
                        <option value="soustraction">-</option>
                        <option value="division">/</option>
                        <option value="multiplication">*</option>
                    </select>
                </label>
                <input type="submit" value="Calculer">
                <input type="reset" value="Effacer"><br>
            </form>
        </div>
    </main>

<?php
if (isset($_GET['nombre1']) && isset($_GET['choix']) && isset($_GET['nombre2'])) {
    $nombre1 = htmlspecialchars($_GET['nombre1']);
    $choix = htmlspecialchars($_GET['choix']);
    $nombre2 = htmlspecialchars($_GET['nombre2']);

    if ($nombre1 != null && $nombre2 != null) {
        switch ($choix) {
            case 'addition':
                $resultat = $nombre1 + $nombre2;
                echo 'La somme de ces deux nombres est ' . $resultat;
                break;
            case 'soustraction':
                $resultat = $nombre1 - $nombre2;
                echo 'La différence de ces deux nombres est ' . $resultat;
                break;
            case 'multiplication':
                $resultat = $nombre1 * $nombre2;
                echo 'Le produit de ces deux nombres est ' . $resultat;
                break;
            case 'division':
                if ($nombre2 == 0) {
                    echo 'On ne peut pas diviser par 0 !';
                } else {
                    $resultat = $nombre1 / $nombre2;
                    echo 'Le quotient de ces deux nombres est ' . $resultat;
                }
                break;
            default:
                echo 'Opération non valide.';
        }

        // Affichez le résultat dans le terminal
        echo "\nRésultat : " . $resultat;
    } else {
        echo 'Veuillez renseigner tous les champs.';
    }
}
?>

<?php
include  '../include/footer.php';
?>
</body>
</html>