/*
Affichez le nom, le prénom, le sexe et le nom de la formation de chaque élève.
Affichez le nom des différentes formations et le nombre d'élèves dans chacune d'elle. La colonne du nombre d'élèves s'appelera NBEleves. (ça sent le COUNT ça ainsi que d'un GROUP BY et INNER JOIN... Il n'est pas sympa le prof. :-))
Faites un tri descendant sur le nombre d'élèves.
 */
 use blindcode;
select eleve.nom,eleve.prenom,eleve.sexe , formation.nom
from eleve , formation
 inner join  formation on eleve.
;
