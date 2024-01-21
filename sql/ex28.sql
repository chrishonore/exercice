/*
 Ajouter l'équipe suivante:
NomClub: Royal Club d'Andenne
Localité: Andenne
Division: 2
Ajouter l'équipe suivante:
NomClub: Standard
Localité: Liège
Division: 3
Afficher toutes les équipes encodées à l'aide d'un SELECT.
 */
 use exercice27;
insert into equipe (id_equipe,nom_du_club,localite, division) values (1,'royal club d andenne','Andenne',2);
insert into equipe (id_equipe,nom_du_club,localite, division) values (2,'standard','liege',3);

select *
from equipe;