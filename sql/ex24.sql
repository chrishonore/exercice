/*
 on va travailler avec trois tables
 On va afficher le nom et prénom de l'élève,
 le nom de la classe et la date d'inscription.
 */
 use blindcode2;

SELECT eleve.nom, eleve.prenom,formation.nom,eleve_formation.date_inscription
from eleve, formation , eleve_formation;
/*
 dans la categorie eleve il y a key nommee 'r.n' et le 'id' et d autre info
 dans la categorie formation  il y a key nommee 'id' avec le nom et le lieux
 dans la categorie eleve_formation  il y a key nommee ' eleve_id','formation_id' ,
 'annee_scolaire' accompagne de la date d inscription
 */