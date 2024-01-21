/*
 Mettre à jour le joueur dont l'idjoueur est = 3.
Changez-lui sa date de naissance en '1974/03/07' et son prénom deviendra 'Philipo';
 */
 use exercice27;
     update joueur
     set prenom='Philippo',date_de_naissance='1974-03-07'
     where id_joueur=3;
select *
from joueur;