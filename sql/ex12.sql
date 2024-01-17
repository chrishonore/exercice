/* Affichez les élèves dont le nom commence par ho*/
use blindcode;
SELECT nom , prenom
FROM eleve
WHERE nom LIKE 'ho%';
/* ici je selectionne les eleve que leur prenom ne commence pas par s */
SELECT nom , prenom
FROM eleve
WHERE not prenom LIKE 's%';
/* ici je selectionne les eleves dont le prenom commence par s */
SELECT nom , prenom
FROM eleve
WHERE prenom LIKE 'S%';