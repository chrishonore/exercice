--Ici le but de l'exercice est de modéliser les tables pour la gestion des emprunts de livres dans une bibliothèques.
--Création de la base de données
DROP DATABASE IF EXISTS biblio;
CREATE DATABASE biblio CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
use biblio;
    --table lecteur
    create table lecteur(
    id int auto_increment primary key,
    nom varchar(25) not null,
    prenom varchar(25)not null,
    annee_naissance date not null
    );
--table emprunt
create table emprunt (
id int auto_increment primary key,
lecteur_id int not null ,
livre_id int not null ,
date_debut date  not null,
date_fin date not null,
rendu boolean not null,
foreign key (lecteur_id) references lecteur(id)
);
--table auteur
create table auteur(
id int auto_increment primary key,
nom varchar (25) not null,
prenom varchar (25) not null,
date_naissance date not null ,
nationalite varchar(20) not null
);
--table theme
create table theme(
id int auto_increment primary key,
libelle varchar(100) not null
);
--creation de table livre
    create table livre (
        id int auto_increment primary key,
        titre varchar(50) not null ,
        auteur_id int,
        theme_id int,
        isbn varchar(20) not null ,
        langue varchar(20) not null ,
        annee_publication date not null ,
        nombre_pages int not null ,
        nombre_exemplaires int not null ,
        foreign key (auteur_id) references auteur(id),
        foreign key (theme_id) references theme(id)
    );
-- ajout 5 theme
insert into theme (id, libelle) VALUES (1,'programmation');
insert into theme (id, libelle) VALUES (2,'roman');
insert into theme (id, libelle) VALUES (3,'science-fiction');
insert into theme (id, libelle) VALUES (4,'thriller');
insert into theme (id, libelle) VALUES (5,'policier');
--table 5  auteur
insert into auteur (id,nom, prenom, date_naissance, nationalite) values (1,'christopher','paolini','1983-11-17','americain');
insert into auteur (id,nom, prenom, date_naissance, nationalite) values (2,'david','gibbins','1949-04-14','anglais');
insert into auteur (id,nom, prenom, date_naissance, nationalite) values (3,'jerome','delfosse','1971-05-02','francais');
insert into auteur (id,nom, prenom, date_naissance, nationalite) VALUES (4,'jose-rodriguez','dos-santos','1964-04-01','portugais');
insert into auteur (id,nom, prenom, date_naissance, nationalite) values (5,'victor','hugo','1802-02-26','francais');
-- table 5 lecteur
insert into lecteur (id, nom, prenom, annee_naissance) values (1,'honore','christian','1986-04-16');
insert into lecteur (id, nom, prenom, annee_naissance) values (2,'malherbe','stephanie','1990-07-27');
insert into lecteur (id, nom, prenom, annee_naissance) values (3,'honore','tessia','2014-07-02');
insert into lecteur (id, nom, prenom, annee_naissance) values (4,'laude','isabelle','1970-03-27');
insert into lecteur (id, nom, prenom, annee_naissance) values (5,'honore','thierry','1966-10-31');
-- table 3 emprunt
insert into emprunt (id, lecteur_id, livre_id, date_debut, date_fin, rendu) VALUES (1,1,1,'2024-01-25','2024-02-25',true);
insert into emprunt (id, lecteur_id, livre_id, date_debut, date_fin, rendu) values (2,2,2,'2024-01-10','2024-02-10',true);
insert into emprunt (id, lecteur_id, livre_id, date_debut, date_fin, rendu) values (3,3,3,'2024-02-17','2024-03-17',false);
--ajouter 3 livres dans la table livre
INSERT INTO livre (id, titre, auteur_id, theme_id, isbn,langue,annee_publication,nombre_pages,nombre_exemplaires) VALUES (1,'eragon',1,3,'2-74701-440-1','francais','1949-07-16',699,5);
INSERT INTO livre (id, titre, auteur_id, theme_id, isbn,langue,annee_publication,nombre_pages,nombre_exemplaires) VALUES (2,'atlantis',2,4,'2-75400-114-x','francais','2005-11-01',406,4);
INSERT INTO livre (id, titre, auteur_id, theme_id, isbn,langue,annee_publication,nombre_pages,nombre_exemplaires) VALUES (3,'le cercle de sang',3,5,'2-7441-9574-x','francais','2006-10-01',496,5);