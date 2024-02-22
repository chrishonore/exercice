DROP DATABASE IF EXISTS exercice42;
CREATE DATABASE exercice42 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE exercice42;
CREATE TABLE employe (
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         prenon VARCHAR(50) NOT NULL,
                         nom VARCHAR(50) NOT NULL,
                         datenaissance DATE NOT NULL,
                         date_embauche DATE NULL
);

INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Alexandre', 'Dupont', '1985-04-12', '2010-06-01');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Marie', 'Durand', '1990-07-23', '2015-09-15');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Lucas', 'Martin', '1978-02-17', '2005-01-20');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Émilie', 'Petit', '1982-11-30', '2008-03-05');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Thomas', 'Leroy', '1974-06-04', '2000-12-01');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Julie', 'Roux', '1989-09-19', '2014-05-12');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Nicolas', 'David', '1983-01-24', '2011-07-23');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Sophie', 'Moreau', '1979-03-15', '2007-08-30');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Clément', 'Simon', '1986-08-05', '2012-11-09');
INSERT INTO employe (prenon, nom, datenaissance, date_embauche) VALUES ('Laura', 'Michel', '1992-12-21', '2018-02-19');
--Ajoutez un champ nommé 'tel' de type VARCHAR(20) à la table employe.
alter table employe
add tel varchar(20);
--Ajoutez un champ nommé 'email' de type VARCHAR(50) à la table employe.
alter table employe
add email varchar(50);
--Renommez le champ 'prenon' en 'prenom'
alter table employe
rename column prenon to prenom;
--Renommez le champ 'datenaissance' en 'date_naissance'.
alter table employe
rename column datenaissance to date_naissance;
--Modifier la taille du champ 'nom' pour qu'il puisse contenir 100 caractères.
alter table employe
modify column nom varchar(100);
--Supprimez le champ 'date_embauche'.
alter table employe
drop column date_embauche;

