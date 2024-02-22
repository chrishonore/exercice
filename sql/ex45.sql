--Objectif : Créer un utilisateur avec des privilèges limités à une seule table.
--Créez un utilisateur report_user avec un accès en lecture seule (SELECT) à la table employees_info dans la base de données Employees.
create user 'report_user'@'localhost' IDENTIFIED BY 'report';
       grant select on employees.employees_info to 'report_user'@'localhost';
--Assurez-vous que cet utilisateur a bien été créé avec la commande SELECT appropriée.
--1 = source ex43.sql
--2 = select user ,host from mysql.user;
--3 = show grants for 'local_user'@'localhost';
--Assurez-vous que les privilèges ont bien été attribués avec la commande SHOW GRANTS appropriée.
