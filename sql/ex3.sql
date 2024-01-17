use blindcode ;
    /*Affichez tous les élèves de sexe Féminin.
Affichez tous les élèves de sexe Masculin.
Affichez Le nom, le prénom, la localite des élèves qui habitent sur le CP 1030.
    */
    SELECT prenom
    FROM eleve
    WHERE sexe ="m";
/*
 ici on selectionne le nom prenom et
 la localite de l eleve
 avec le cp 1030 . select , from where
 */
SELECT nom, prenom , localite
FROM eleve
WHERE cp="1030";

SELECT  prenom, nom, sexe
FROM eleve
WHERE sexe = "f" ;

