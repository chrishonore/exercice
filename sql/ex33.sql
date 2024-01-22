/*
 Supprimer les enregistrements qui respectent la condition suivante: Les personnes nées avant le 1er janvier 1991 et nées après le 31 décembre 1979.
Supprimer tous les enregistrements qui respectent la condition suivante: Dont le nom de famille commence par M ou le prénom se termine par e.
Supprimer tous les enregistrements dont l'IdJoueur est supérieur à 3.
 */
 use exercice27;
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (5,'Irène', 'Link', '1974-11-26', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_De_Naissance, I_dEquipe) values (6,'Andréanne', 'Kempstone', '1999-12-23', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, I_dEquipe) values (7,'Mà', 'Keech', '1985-10-28', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (8,'Lèi', 'Blindmann', '2000-05-24', 2);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (9,'Intéressant', 'Antcliff', '1993-09-20', 2);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (10,'Mélinda', 'Astlett', '1989-01-02', 2);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (11,'Bénédicte', 'Kelbie', '1991-07-18', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (12,'Cinéma', 'Hugonneau', '1994-12-02', 2);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (13,'Lén', 'Harteley', '1971-06-21', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (14,'Mélodie', 'Yanin', '1990-06-07', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (15,'Mélia', 'Joontjes', '1995-02-08', 2);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (16,'Noémie', 'Cowherd', '1975-05-09', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (17,'Méryl', 'Olorenshaw', '1983-06-05', 2);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (18,'Léana', 'Kilbourn', '1978-03-21', 2);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (19,'Mélina', 'Rodrigo', '1993-04-09', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (20,'Méryl', 'Fairley', '1982-04-29', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (21,'Lóng', 'Mehew', '1976-05-21', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (22,'Maëlys', 'Masser', '1999-05-05', 2);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (23,'Gösta', 'Elgar', '1977-03-14', 2);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (24,'Dorothée', 'Collie', '1977-11-11', 2);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (25,'Maïly', 'Purtell', '1994-01-06', 2);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (26,'Gwenaëlle', 'Espinet', '1996-03-12', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (27,'Maïlis', 'Kennefick', '1995-08-22', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (28,'Thérèse', 'Leads', '1999-12-15', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (29,'Amélie', 'Lehrian', '2000-02-10', 1);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (30,'Céline', 'Czajkowski', '2001-03-20', 2);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (31,'Mélinda', 'Pedican', '1995-05-04', 2);
insert into Joueur (Id_joueur,Prenom, Nom, Date_de_Naissance, Id_Equipe) values (32,'Lauréna', 'McGiffin', '1982-06-25', 1);
select *
from joueur;
