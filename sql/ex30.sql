use exercice27;
/*
Mettre à jour le joueur où les champs sont les suivants:
Nom: Dupont
Prenom: Philip
Mettez la date de naissance à 25/12/1991 (attention au format de la date dans Mysql ;) )
Idéalement il serait plus propre de faire un WHERE sur l'id du joueur et non sur le nom et prénom.
 */
update joueur
set date_de_naissance='1991-12-25'
where id_joueur='4';
 select *
  from joueur;