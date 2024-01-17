/*
Affichez le nom, le prénom, le sexe et le nom de la formation de chaque élève.
Affichez le nom des différentes formations et le nombre d'élèves dans chacune d'elle. La colonne du nombre d'élèves s'appelera NBEleves. (ça sent le COUNT ça ainsi que d'un GROUP BY et INNER JOIN... Il n'est pas sympa le prof. :-))
Faites un tri descendant sur le nombre d'élèves.
INNER JOIN table2 ON table1.FK_Key = table2.PK_Key


 */
 use blindcode2;
SELECT eleve.nom,eleve.prenom,eleve.sexe , formation.nom AS formation
FROM eleve
INNER JOIN eleve_formation ON eleve.id=eleve_formation.eleve_id
INNER JOIN formation ON eleve_formation.formation_id=formation.id
;
SELECT formation.nom AS formation ,count(*) AS nb_eleve
FROM eleve_formation
INNER JOIN formation ON eleve_formation.formation_id=formation.id
GROUP BY formation.nom
;
SELECT formation.nom AS formation ,count(*) AS nb_eleve
FROM eleve_formation
INNER JOIN formation ON eleve_formation.formation_id=formation.id
GROUP BY formation.nom
ORDER BY nb_eleve DESC ;