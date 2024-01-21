use exercice27;
    /*
    Ajouter le joueur suivant:
Nom: votre nom
Prenom: votre prenom
DateNaissance: votre date de naissance. (attention au format de la date dans Mysql ;) )
IdEquipe: l'IdEquipe correspondant à Standard.
Ajouter le joueur suivant:
Nom: Colin
Prenom: Pierre
DateNaissance: 22/07/1984
IdEquipe: l'IdEquipe correspondant à Andenne.
Ajouter le joueur suivant:
Nom: Jacques
Prenom: Gabriel
DateNaissance: 22/08/2014
IdEquipe: l'IdEquipe correspondant à Standard.
Ajouter le joueur suivant:
Nom: Dupont
Prenom: Philip
DateNaissance: 13/12/1991
IdEquipe: l'IdEquipe correspondant à Standard.
Affichez tous les champs des enregistrements de la table joueur.
Idem mais en plus affichez le nom du club (cfr INNER JOIN)
     */

    insert into joueur (id_joueur,nom,prenom,date_de_naissance,id_equipe) values (1,'Honore','Christian','1986-04-16',2);
    insert into joueur (id_joueur,nom,prenom,date_de_naissance,id_equipe) values (2,'Colin','Pierre','1984-07-22',1);
    insert into joueur (id_joueur,nom,prenom,date_de_naissance,id_equipe) values (3,'Jacques','Gabriel','2014-08-22',2);
    insert into joueur (id_joueur,nom,prenom,date_de_naissance,id_equipe) values (4,'Dupont','Philip','1991-12-13',2);


select *
from joueur;

select joueur.nom,joueur.prenom,joueur.date_de_naissance, equipe.nom_du_club
from joueur
inner join equipe on joueur.id_equipe=equipe.id_equipe;