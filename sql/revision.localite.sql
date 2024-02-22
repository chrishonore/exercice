use localites;
--Quelle est la commune ayant la plus petite Latitude ?
select *
from localite
order by latitude asc
limit 1;
--ou alors on peut faire comme cela
SELECT L.Commune, L.Latitude
FROM Localite L
WHERE L.Latitude = (SELECT MIN(Latitude) FROM Localite)
ORDER BY L.Latitude ASC;
--Quelle est la plus grande Longitude sur le CP 1000 ?
select max(longitude),cp, commune
from localite
where cp between 1000 and 1999;
--Quelle est la moyenne des Latitudes ?
select avg(latitude) as moyenne_latitude
from localite;
--Groupez les longitudes et leurs nombres. Le nombre sera affiché nb.
select longitude, count(*) as nb
from localite
where longitude;
--Reprenez votre requête différente et ajoutez HAVING nb >1. Que se passe-t-il à votre avis ?
--j ai essaye et j ai exactement le meme resultat
select longitude
from localite
where longitude
having count(*) >1;
--Quelle est la différence entre WHERE et HAVING ?
--il sont utilise pour filtrer des donnees dans des contexte different
--le where est utilise apres le from et avant le group by , il permet de
--filtrer dans les colonnes ou les lignes .. voici un exemple:
select *
from localite
where cp=6000;
-- le having il est utilise apres le group by il permet de filtrer dans le group
-- voici un exemple avec le having :
select idlocalite , count(*) as nombre_occurence
from localite
group by commune
having count(*) >1;