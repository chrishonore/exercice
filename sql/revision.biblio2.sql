--Exercice 3 - CREATION de la DB biblio2
drop database if exists biblio2;
     CREATE DATABASE biblio2 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
use biblio2;
--La différence entre cette base de données (biblio2) et biblio c'est que maintenant un livre peut avoir un ou plusieurs auteurs.
   --table lecteur
create table lecteur (
id int auto_increment primary key,
nom varchar(25) not null,
prenom varchar(25) not null,
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
create table auteur (
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
auteur1_id int,
auteur2_id int,
theme_id int,
isbn varchar(20) not null ,
langue varchar(20) not null ,
annee_publication date not null ,
nombre_pages int not null ,
nombre_exemplaires int not null ,
foreign key (auteur1_id) references auteur(id),
 foreign key (auteur2_id) references auteur(id),
foreign key (theme_id) references theme(id)
);
create table livre_auteur (
livre_id int,
auteur_id int,
foreign key (livre_id) references livre(id),
foreign key (auteur_id) references auteur(id)
) ;

 --Une fois que vous aurez trouvé comment faire, pour deux des précédents livres faites en sorte qu'ils aient 2 auteurs.
