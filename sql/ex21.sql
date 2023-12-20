use blindcode2;
/*
selectionne l 'annee' de l inscription,
    cree une nouvelle colonne nommee annee inscription,
calcul le nombre d inscription
 */
SELECT YEAR(date_inscription) AS 'Annee Inscription', COUNT(date_inscription)
FROM eleve_formation
GROUP BY YEAR(date_inscription);
/*
selectionne la 'date' de l inscription,
cree une nouvelle colonne nommee annee inscription,
calcul le nombre d inscription
 */
SELECT date_inscription AS 'Annee Inscription', COUNT(date_inscription)
FROM eleve_formation
GROUP BY date_inscription;


