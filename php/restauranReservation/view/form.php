<!DOCTYPE html>
<html lang="fr-be" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head >
    <meta charset="UTF-8">
    <meta name="description" content="this is an accessible form">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title> Formulaire de reservation </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        form{
            width: 50rem;
            align-items: center;
            padding-left: 40rem;
            margin: 2rem;
        }
    </style>
</head>
<body style="background-color:burlywood;">
<?php
include '../include/header.php';
?>
<main>
    <h1 style="color: red"> Formulaire Reservation </h1>
    <!-- formulaire donnee client et mode de consommation-->
    <form action="./ValidateReservationForm.php" method="post">
        <div class="row border-solid-primary"  style="background-color: antiquewhite;padding-top: 35px">
            <div class="text-field">
                <h1 style="line-height: normal"> information du client </h1>
                <label for="nom"> votre nom </label>
                <input type="text" name="nom" id="nom" required>
                <span style="color: red;">*</span><span> Champ obligatoire </span> <br>
                <label for="prenom"> votre prenom </label>
                <input type="text" name="prenom" id="prenom" required>
                <span style="color: red;">*</span><span> Champ obligatoire </span> <br>
                <label for="email"> votre email </label>
                <input type="email" name="email" id="email" required>
                <span style="color: red;">*</span><span> Champ obligatoire </span> <br>
                <label for="number">Votre numero </label>
                <input type="number" name="numero" id="number" required>
                <span style="color: red;">*</span><span> Champ obligatoire </span> <br>
                <label for="date" > Date de naissance </label>
                <input type="date" name="date" id="date">
                <span style="color: red;">*</span><span> Champ obligatoire </span> <br>

                <h1>a consommer</h1>
                <label for="choix"> a consommer </label>
                <div id="choix">
                    <input type="button" value="sur place" onclick=" afficherForm('place')">
                    <input type="button" value="a emporter" onclick=" afficherForm('emporter')">
                    <input type="button" value="livraison" onclick=" afficherForm('livraison')">
                </div>
            </div>
    </form>
    <!--sur plade-->
    <form id="place" style="display: none" action="#" method="post">
        <div style="background-color: antiquewhite;padding-top: 35px">
            <h2> sur place </h2>
            <div class="time-field">
                <h2>Heure et minutes de reservation</h2>
                <label for="heure">choisir l heure de reservation :</label>
                <label  for="heure1"></label>
                <select id="heure1" name="heure">
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                </select><br>
                <label for="minutes">choisir la minute de reservation :</label>
                <label for="minutes1"></label>
                <select id="minutes1" name="minutes">
                    <option value="00">00</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="45">45</option>
                </select><br>
            </div>
            <div class="radio-field">
                <h1> menu </h1>
                <h2>  entree  </h2>
                <label for="entree"> entree </label>
                <label for="entree"></label>
                <label>
                    <select name="entree" role="listbox">
                        <optgroup label="entree" role="group">
                            <option value="aucun choix" role="option">aucun choix </option>
                            <option value="terrine de canard" role="option">terrine de canard</option>
                            <option value="noix de st jacques" role="option">noix de st jacques</option>
                            <option value="blinis de saumon" role="option"> blinis de saumon </option>
                        </optgroup>
                    </select>
                </label>
                <h2>  plat principal  </h2>
                <label for="plat"> plat </label>
                <label for="plat1"></label>
                <label>
                    <select name="plat" role="listbox">
                        <optgroup label="plat" role="group">
                            <option value="aucun choix" role="option">aucun choix </option>
                            <option value="poulet roti" role="option">poulet roti</option>
                            <option value="espadon grille" role="option">espadon grille</option>
                            <option value="carbonnade flamande" role="option"> carbonnade flamande </option>
                        </optgroup>
                    </select>
                </label>
                <h2>  dessert  </h2>
                <label for="dessert"> dessert </label>
                <label for="dessert1"></label>
                <label>
                    <select name="dessert" role="listbox">
                        <optgroup label="dessert" role="group">
                            <option value="aucun choix" role="option">aucun choix </option>
                            <option value="mousse ar chocolat" role="option">mousse ar chocolat</option>
                            <option value="creme brule" role="option">creme brule</option>
                            <option value="Tiramisouri" role="option">Tiramisouri </option>
                        </optgroup>
                    </select>
                </label>
            </div>
            <div class="radio-field">
                <h2>evenements</h2>
                <label>
                    <input type="radio"  name="evenements" value="A">
                </label>
                <label for="anniversaire"> anniversaire</label>
                <label>
                    <input type="radio"  name="evenements" value="N-A">
                </label>
                <label for="nouvel an">nouvel an</label>
                <label>
                    <input type="radio" name="evenements" value="S-V">
                </label>
                <label for="st-valentin" >st-valentin </label>
            </div>
            <div class="radio-field">
                <h2>payement</h2>
                <label for="carte1"></label><label>
                    <input type="radio" name="payement" value="B">
                </label>
                <label for="carte"> carte</label>
                <label for="cash1">cash</label><label>
                    <input type="radio" name="payement" value="C">
                </label>
                <label for="cash">cash</label>
            </div>
            <div class="radio-field">
                <input type="submit" value="reserver "><br>
                <input type="submit" value="annuler">
            </div>

        </div>
    </form>
    <!--a emporter-->
    <form id="emporter" style="display: none">
        <div style="background-color: antiquewhite;padding-top: 35px">
            <h2> a emporter</h2>
            <div class="radio-field">
                <h1> menu </h1>
                <h2>  entree  </h2>
                <label for="entree"> entree </label>
                <label for="entree1"></label>
                <label>
                    <select name="entree" role="listbox">
                        <optgroup label="entree" role="group">
                            <option value="aucun choix" role="option">aucun choix </option>
                            <option value="terrine de canard" role="option">terrine de canard</option>
                            <option value="noix de st jacques" role="option">noix de st jacques</option>
                            <option value="blinis de saumon" role="option"> blinis de saumon </option>
                        </optgroup>
                    </select>
                </label>
                <h2>  plat principal  </h2>
                <label for="plat"> plat </label>
                <label for="plat1"></label>
                <label>
                    <select name="plat" role="listbox">
                        <optgroup label="plat" role="group">
                            <option value="aucun choix" role="option">aucun choix </option>
                            <option value="poulet roti" role="option">poulet roti</option>
                            <option value="espadon grille" role="option">espadon grille</option>
                            <option value="carbonnade flamande" role="option"> carbonnade flamande </option>
                        </optgroup>
                    </select>
                </label>
                <h2>  dessert  </h2>
                <label for="dessert"> dessert </label>
                <label for="dessert1"></label>
                <label>
                    <select name="dessert" role="listbox">
                        <optgroup label="dessert" role="group">
                            <option value="aucun choix" role="option">aucun choix </option>
                            <option value="mousse ar chocolat" role="option">mousse ar chocolat</option>
                            <option value="creme brule" role="option">creme brule</option>
                            <option value="Tiramisouri" role="option">Tiramisouri </option>
                        </optgroup>
                    </select>
                </label>
            </div>
            <div class="radio-field">
                <h2>evenements</h2>
                <input type="radio" name="evenements" value="A" id="anniversaire">
                <label for="anniversaire"> anniversaire</label>
                <input type="radio" name="evenements" value="N-A" id="nouvel an">
                <label for="nouvel an">nouvel an</label>
                <input type="radio" name="evenements" value="S-V" id="st-valentin">
                <label for="st-valentin" >st-valentin </label>
            </div>
            <div class="radio-field">
                <h2>payement</h2>
                <label for="carte1"></label><label>
                    <input type="radio" name="payement" value="B">
                </label>
                <label for="carte"> carte</label>
                <label for="cash1">cash</label><label>
                    <input type="radio" name="payement" value="C">
                </label>
                <label for="cash">cash</label>
            </div>
            <div class="radio-field">
                <input type="submit" value="reserver "><br>
                <input type="submit" value="annuler">
            </div>

        </div>
    </form>
    <!-- livraison-->
    <form id="livraison" action="#" method="post" style="display: none">
        <div class="row border-solid-primary"  style="background-color: antiquewhite">
            <h2> livraison </h2>
            <div class="text-field">
                <h1> Adresse de livraison </h1>
                <label for="commune"> Commune </label>
                <input type="text" name="commune" id="commune" required>
                <span style="color: red;">*</span><span> Champ obligatoire </span> <br>
                <label for="cp"> Code postal </label>
                <input type="number" name="cp" id="cp" required>
                <span style="color: red;">*</span><span> Champ obligatoire </span> <br>
                <label for="rue"> nom de la rue </label>
                <input type="text" name="rue" id="rue" required>
                <span style="color: red;">*</span><span> Champ obligatoire </span> <br>
                <label for="num"> numero de maison </label>
                <input type="number" name="num" id="num" required>
                <span style="color: red;">*</span><span> Champ obligatoire </span> <br>
                <label for="app"> numero de l appartement </label>
                <input type="number" name="app" id="app" required>
                <span style="color: red;">*</span><br><span> Champ obligatoire si vous etes en appartement </span> <br>
            </div>
            <div class="time-field">
                <h2>Heure et minutes de reservation</h2>
                <label for="heure">choisir l heure de reservation :</label>
                <label  for="heure"></label>
                <select id="heure" name="heure">
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                </select><br>
                <label for="minutes">choisir la minute de reservation :</label>
                <label for="minutes1"></label>
                <select id="minutes" name="minutes">
                    <option value="00">00</option>
                    <option value="15">15</option>
                    <option value="30">30</option>
                    <option value="45">45</option>
                </select><br>
            </div>
            <div class="radio-field">
                <h1> menu </h1>
                <h2>  entree  </h2>
                <label for="entree"> entree </label>
                <label id="entree" for="entree1"></label>
                <select name="entree" id="entree1" role="listbox">
                    <optgroup label="entree" role="group">
                        <option value="aucun choix" role="option">aucun choix </option>
                        <option value="terrine de canard" role="option">terrine de canard</option>
                        <option value="noix de st jacques" role="option">noix de st jacques</option>
                        <option value="blinis de saumon" role="option"> blinis de saumon </option>
                    </optgroup>
                </select>
                <h2>  plat principal  </h2>
                <label for="plat"> plat </label>
                <label id="plat" for="plat1"></label>
                <select name="plat" id="plat1" role="listbox">
                    <optgroup label="plat" role="group">
                        <option value="aucun choix" role="option">aucun choix </option>
                        <option value="poulet roti" role="option">poulet roti</option>
                        <option value="espadon grille" role="option">espadon grille</option>
                        <option value="carbonnade flamande" role="option"> carbonnade flamande </option>
                    </optgroup>
                </select>
                <h2>  dessert  </h2>
                <label for="dessert"> dessert </label>
                <label id="dessert" for="dessert1"></label>
                <select name="dessert" id="dessert1" role="listbox">
                    <optgroup label="dessert" role="group">
                        <option value="aucun choix" role="option">aucun choix </option>
                        <option value="mousse ar chocolat" role="option">mousse ar chocolat</option>
                        <option value="creme brule" role="option">creme brule</option>
                        <option value="Tiramisouri" role="option">Tiramisouri </option>
                    </optgroup>
                </select>
            </div>
            <div class="radio-field">
                <h2>payement</h2>
                <label id="carte" for="carte1"></label><input type="radio" name="payement" value="B" id="carte1">
                <label for="carte"> carte</label>
                <label id="cash" for="cash1">cash</label><input type="radio" name="payement" value="C" id="cash1">
                <label for="cash">cash</label>
            </div>
            <div class="radio-field">
                <input type="submit" value="reserver "><br>
                <input type="reset" value="annuler">
            </div>
        </div>
    </form>
    <?php
    include '../script/lorem.js';
    ?>
</main>
<?php
include '../include/footer.php';
?>
</body>
</html>