/* On utilise l'encodage UTF8 */
charset utf8;

DROP DATABASE IF EXISTS blindcode3;
CREATE DATABASE blindcode3;

use blindcode3;

CREATE TABLE classe (
                        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
                        nom varchar(20),
                        lieu varchar(20)
);

CREATE TABLE eleve (
                       id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
                       prenom varchar(20) NOT NULL,
                       nom varchar(20) NOT NULL,
                       naissance date NOT NULL,
                       rn varchar(20) UNIQUE NOT NULL,
                       actif boolean NOT NULL DEFAULT 1,
                       nationalite varchar(20) NOT NULL,
                       rue varchar(50) NOT NULL,
                       numero varchar(5) NULL,
                       boite varchar(3) NULL,
                       cp int NOT NULL,
                       localite varchar(30) NOT NULL,
                       sexe char(1) NOT NULL CHECK(Sexe IN ('M','F')),
                       email varchar(40),
                       tel varchar(20),
                       gsm varchar(20)
);
CREATE TABLE eleve_classe(
                            eleve_id int NOT NULL,
                            classe_id int NOT NULL,
                            annee_scolaire int NOT NULL,
                            date_inscription date NOT NULL,
                            PRIMARY KEY(eleve_id,classe_id,annee_scolaire),
                            FOREIGN KEY(eleve_id) REFERENCES eleve(id),
                            FOREIGN KEY(classe_id) REFERENCES classe(id)
);

INSERT INTO classe (nom, lieu) VALUES ('BlindCode','BXL');
INSERT INTO classe (nom, lieu) VALUES ('BlindCode4Data','LLN');

/*Eleves de BlindCode*/
INSERT INTO eleve (nom, prenom, naissance, rn,actif,nationalite,rue,numero,boite,cp,localite,sexe,email,tel,gsm)
VALUES('DARFEUILLE','Matthieu','1985-11-10','126598798787','1','Belge','Rue des Push','5', NULL,'4140', 'Dolembreux','M','DARFEUILLE.Matthieu@yahoo.fr',NULL,'0496 22 89 22');

INSERT INTO eleve (nom, prenom, naissance, rn,actif,nationalite,rue,numero,boite,cp,localite,sexe,email,tel,gsm)
VALUES('DESSEILLE','Simon','1987-11-14','216598798787','1','Belge','Rue des Pull','5', NULL,'6890', 'Libin','M','DESSEILLE.Simon@gmail.com',NULL,'0486 89 89 33');

INSERT INTO eleve (nom, prenom, naissance, rn,actif,nationalite,rue,numero,boite,cp,localite,sexe,email,tel,gsm)
VALUES('DEFALQUE','Bruno','1965-05-19','346598798787','1','Belge','Place du corps qui GIT','5', NULL,'6890', 'Redu','M','DEFALQUE.Bruno@gmail.com',NULL,'0496 14 89 99');

INSERT INTO eleve (nom, prenom, naissance, rn,actif,nationalite,rue,numero,boite,cp,localite,sexe,email,tel,gsm)
VALUES('TAMDITI','Ibrahim','1974-03-17','456598798787','1','Belge','Place des SGBD','5', NULL,'4052', 'Beaufays','M','TAMDITI.Ibrahim@gmail.com',NULL,'0473 77 28 27');

INSERT INTO eleve (nom, prenom, naissance, rn,actif,nationalite,rue,numero,boite,cp,localite,sexe,email,tel,gsm)
VALUES('De BACKER','Sophie','1978-09-9','566598798787','1','Belge','Rue des Requêtes','5', NULL,'4161', 'Esneux','F','DeBACKER.Sophie@gmail.com',NULL,'0497 88 89 12');

INSERT INTO eleve (nom, prenom, naissance, rn,actif,nationalite,rue,numero,boite,cp,localite,sexe,email,tel,gsm)
VALUES('BEYA','Yves','1980-11-27','656598798787','1','Belge','Rue des Tables','5', '11','4800', 'Verviers','M','BEYA.Yves@gmail.com',NULL,'0474 67 89 78');

INSERT INTO eleve (nom, prenom, naissance, rn,actif,nationalite,rue,numero,boite,cp,localite,sexe,email,tel,gsm)
VALUES('BEN AHMED','Mounir','1991-01-3','786598798787','1','Belge','Rue de l''Etude','5', NULL,'4102', 'Ougrée','M','BENAHMED.Mounir@gmail.com',NULL,'0479 47 89 96');

/*On ajoute ces élès dans EleveClasse*/
INSERT INTO eleve_classe (eleve_id,classe_id, annee_scolaire, date_inscription) VALUES (1,1,2020,'2021/03/01');
INSERT INTO eleve_classe (eleve_id,classe_id, annee_scolaire, date_inscription) VALUES (2,1,2020,'2020/01/01');
INSERT INTO eleve_classe (eleve_id,classe_id, annee_scolaire, date_inscription) VALUES (3,1,2020,'2020/01/01');
INSERT INTO eleve_classe (eleve_id,classe_id, annee_scolaire, date_inscription) VALUES (4,1,2020,'2020/01/01');
INSERT INTO eleve_classe (id_eleve,id_classe, annee_scolaire, date_inscription) VALUES (5,1,2020,'2020/01/01');
INSERT INTO eleve_classe (eleve_id,classe_id, annee_scolaire, date_inscription) VALUES (6,1,2020,'2020/01/01');
INSERT INTO eleve_classe (eleve_id,classe_id, annee_scolaire, date_inscription) VALUES (7,1,2020,'2020/01/01');


/* Eleve BlindCode4Data */
INSERT INTO eleve (nom, prenom, naissance, rn,actif,nationalite,rue,numero,boite,cp,localite,sexe,email,tel,gsm)
VALUES('Sana','Eleonor','1997-07-1','521298798787','1','Belge','Rue des écoles','3', NULL,'1490', 'Cours-St-Etienne','F','eleonorsana97@gmail.com',NULL,'0472 03 09 46');

INSERT INTO eleve (nom, prenom, naissance, rn,actif,nationalite,rue,numero,boite,cp,localite,sexe,email,tel,gsm)
VALUES('Kizmaz','Mashum','1991-02-7','19798798787','1','Belge','Rue de l''Espoir','2', NULL,'4800', 'Verviers','M','mahsumkizmaz@gmail.com','04/338.67.69','0498 25 34 88');

INSERT INTO eleve (nom, prenom, naissance, rn,actif,nationalite,rue,numero,boite,cp,localite,sexe,email,tel,gsm)
VALUES('Tcheuyassi','Isaac','1987-06-08','8498798787','1','Camerounais','Place de l''Hirondelle','98', NULL,'5001', 'Belgrade','M','tcheuyassiisaac@yahoo.com',NULL,'0476 78 67 69');

INSERT INTO eleve (nom, prenom, naissance, rn,actif,nationalite,rue,numero,boite,cp,localite,sexe,email,tel,gsm)
VALUES('Dufrasne','Alain','1972-11-15','1298798787','1','Belge','Avenue du SQL','9', NULL,'7300', 'Boussu','M','alduf@live.be',NULL,'0472 07 85 65');

INSERT INTO eleve (nom, prenom, naissance, rn,actif,nationalite,rue,numero,boite,cp,localite,sexe,email,tel,gsm)
VALUES('Borsen','Maxime','1993-12-23','8798798787','1','Belge','Rue de l''INSERTion','30', NULL,'1348', 'LLN','M','maxime.borsen@gmail.com',NULL,'0479 97 74 52');

INSERT INTO eleve (nom, prenom, naissance, rn,actif,nationalite,rue,numero,boite,cp,localite,sexe,email,tel,gsm)
VALUES('Bakashika','Jessie','1995-05-19','6598798787','1','Belge','Place des martyrs des SGBD','5', NULL,'1348', 'LLN','M','jessie.bakashika@gmail.com',NULL,'0496 67 89 11');

/*On ajoute ces élès dans EleveClasse*/
INSERT INTO eleve_classe (eleve_id,classe_id, annee_scolaire, date_inscription) VALUES (8,2,2021,'2021/03/04');
INSERT INTO eleve_classe (eleve_id,classe_id, annee_scolaire, date_inscription) VALUES (9,2,2021,'2021/03/04');
INSERT INTO eleve_classe (eleve_id,classe_id, annee_scolaire, date_inscription) VALUES (10,2,2021,'2021/03/04');
INSERT INTO eleve_classe (eleve_id,classe_id, annee_scolaire, date_inscription) VALUES (11,2,2021,'2021/03/04');
INSERT INTO eleve_classe (eleve_id,classe_id, annee_scolaire, date_inscription) VALUES (12,2,2021,'2021/03/04');
INSERT INTO eleve_classe (eleve_id,classe_id, annee_scolaire, date_inscription) VALUES (13,2,2021,'2021/03/04');
INSERT INTO eleve_classe (eleve_id,classe_id, annee_scolaire, date_inscription) VALUES (10,1,2020,'2020/01/01');

-- nombre d'élèves ayant la nationalité belge
SELECT COUNT(*) FROM eleve WHERE nationalite = 'Belge';





