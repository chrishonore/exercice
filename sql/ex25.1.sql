/*
Affichez le nom, le prénom, le sexe et le nom de la formation de chaque élève.
Affichez le nom des différentes formations et le nombre d'élèves dans chacune d'elle. La colonne du nombre d'élèves s'appelera NBEleves. (ça sent le COUNT ça ainsi que d'un GROUP BY et INNER JOIN... Il n'est pas sympa le prof. :-))
Faites un tri descendant sur le nombre d'élèves.
INNER JOIN table2 ON table1.FK_Key = table2.PK_Key


 */
 use blindcode2;
select eleve.nom,eleve.prenom,eleve.sexe , formation.nom as formation
from eleve
inner join eleve_formation on eleve.id=eleve_formation.eleve_id
inner join formation on eleve_formation.formation_id=formation.id
;
select formation.nom as formation ,count(*) as nb_eleve
from eleve_formation
inner join formation on eleve_formation.formation_id=formation.id
group by formation.nom
;
select formation.nom as formation ,count(*) as nb_eleve
from eleve_formation
inner join formation on eleve_formation.formation_id=formation.id
group by formation.nom
order by nb_eleve desc
;