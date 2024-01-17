/*
 Reprenez la requête de la Exercice n°15.
Modifiez-la pour que l'on ait l'age moyen des élèves.
 */
USE BLINDCODE;

SELECT AVG(YEAR (curdate() - YEAR (naissance)) as age_moyen
FROM eleve
ORDER BY age_moyen;
/*avec avg on peut calculer la moyenne d un age ou autre */