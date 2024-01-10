/*
Affichez le nom, le prénom, le sexe et le nom de la formation de chaque élève.
Affichez le nom des différentes formations et le nombre d'élèves dans chacune d'elle. La colonne du nombre d'élèves s'appelera NBEleves. (ça sent le COUNT ça ainsi que d'un GROUP BY et INNER JOIN... Il n'est pas sympa le prof. :-))
Faites un tri descendant sur le nombre d'élèves.
INNER JOIN table2 ON table1.FK_Key = table2.PK_Key


 */
 use blindcode2;
select eleve.nom,eleve.prenom,eleve.sexe , formation.nom as formation
from eleve , formation
;
select eleve_formation.formation_id as nb_eleves,formation.nom as formation
from eleve_formation
     INNER JOIN  formation ON eleve_formation.formation_id = formation.id
group by eleve_formation. count (formation_id)

;
select eleve_formation.formation_id as nb_eleves,formation.nom as formation
from eleve_formation
         INNER JOIN  formation ON eleve_formation.formation_id = formation.id
order by group by eleve_formation. count (formation_id) asc

;
