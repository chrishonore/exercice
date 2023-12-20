/*
 Affichez pour chaque sexe, le nombre total. (Indice COUNT)
Affichez pour chaque nationalite, le nombre total.
 */
 use blindcode;
     SELECT sexe, COUNT(*) AS nombre
     FROM eleve
     GROUP BY sexe;

SELECT nationalite, COUNT(*) AS nombre
FROM eleve
GROUP BY nationalite;