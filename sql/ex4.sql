use blindcode ;
    /*
    Affichez tous les élèves de Sexe Masculin ET ayant comme CP 1348
    SELECT=selectionner from=ou where=quoi and=et
*/

SELECT  nom , prenom
FROM eleve
WHERE sexe = "m"
AND cp = "6220";

select nom , prenom
FROM eleve
WHERE sexe = "m"
  AND cp = "1348";
