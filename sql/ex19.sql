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
/* liste les eleves qui ont un tel */
select nom , prenom, count(tel) as telephone
from eleve
where tel is not null
group by nom ;
/* liste les eleves qui n ont pas de tel */
select nom , prenom, count(tel) as telephone
from eleve
where tel is null
group by nom ;