/*
 on va travailler avec trois tables
 On va afficher le nom et prénom de l'élève,
 le nom de la classe
 et la date d'inscription.
 INNER JOIN table3 ON table2.FK_Key = table3.PK_Key;
INNER JOIN table2 ON table1.FK_Key = table2.PK_Key


 */
 use blindcode2;

select  *
from eleve_formation ;

SELECT distinct e.nom, e.prenom, f.nom as formation ,ef.date_inscription
from eleve AS e
inner join eleve_formation AS ef ON e.id = ef.eleve_id
inner join formation AS f ON ef.formation_id = f.id;


    /*
 dans la categorie eleve il y a key nommee 'r.n' et le 'id' et d autre info
 dans la categorie formation  il y a key nommee 'id' avec le nom et le lieux
 dans la categorie eleve_formation  il y a key nommee ' eleve_id','formation_id' ,
 'annee_scolaire' accompagne de la date d inscription
 */