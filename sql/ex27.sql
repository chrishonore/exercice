/*
 Si la base de données Exercice27 existe la supprimer.
Créez une base de données nommée: Exercice27
Utilisez cette nouvelle base de données avec la commande USE Exercice27;
Recopiez tout le CREATE TABLE Equipe de l'exercice26.
Créer la Table Joueur. Cette table aura les champs suivants:
IdJoueur (clef primaire): Entier, NOT NULL, non signé, auto-incrémenté.
Nom: chaîne de max 30 caractères, NOT NULL.
Prenom: Chaîne de max 30 caractères, NOT NULL.
DateNaissance: Date, NOT NULL.
IdEquipe (clef étrangère): entier NOT NULL, non signé, Référence IdEquipe de la table Equipe.
 */
DROP DATABASE IF EXISTS exercice27;
CREATE DATABASE exercice27;
use exercice27;
DROP TABLE IF EXISTS Equipe;
CREATE TABLE Equipe
(
    id_equipe INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom_du_club VARCHAR(30) NOT NULL ,
    localite VARCHAR(30) NOT NULL ,
    division TINYINT UNSIGNED NOT NULL
);
DROP TABLE IF EXISTS joueur;
CREATE TABLE joueur
(
    id_joueur INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(30) NOT NULL ,
    prenom VARCHAR(30) NOT NULL ,
    date_de_naissance date not null ,
    id_equipe INT UNSIGNED NOT NULL ,
    foreign key (id_equipe) references Equipe (id_equipe)
)
