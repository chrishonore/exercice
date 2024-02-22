--Ici le but de l'exercice est de modéliser les tables pour la gestion des emprunts de livres dans une bibliothèques.
--Création de la base de données
DROP DATABASE IF EXISTS biblio;
CREATE DATABASE biblio CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
use biblio;
    --table lecteur
    create table lecteur(
    id int auto_increment primary key,
    nom varchar(25),
    prenom varchar(25),
    annee_naissance int
    );
--table emprunt
create table emprunt (
id int auto_increment primary key,
date_debut int ,
date_fin int,
rendu boolean ,
foreign key (lecteur_id) references lecteur(id),
);








--creation de table livre
    create table livre (
        id int auto_increment primary key,
        titre varchar(50),
        auteur_id int,
        theme_id int,
        isbn varchar(20),
        langue varchar(20),
        annee_publication int,
        nombre_pages int,
        nombre_exemplaires int,
        foreign key (auteur_id) references auteur(id),
        foreign key (theme_id) references theme(id)
    );
