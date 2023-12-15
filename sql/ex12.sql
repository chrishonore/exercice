/* Affichez les élèves dont le nom commence par ho*/
use blindcode;
SELECT nom , prenom
FROM eleve
WHERE nom LIKE 'ho%';