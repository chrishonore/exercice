--Objectif : Attribuer des privilèges spécifiques à des utilisateurs pour des bases de données spécifiques.
--Attribuez à local_user des privilèges de lecture (SELECT) sur toutes les tables de la base de données Employees.
grant select on employees.inactive_employees to 'local_user'@'localhost';
--Donnez à remote_user des privilèges de lecture sur la vue inactive_employees (crée à l'exercice n°35) dans la base de données Employees.
grant select on employees.inactive_employees to 'remote_user'@'%';
--Assurez-vous que ces utilisateurs ont bien été créés avec la commande SELECT appropriée.
-- show grants for 'local_user'@'localhost';
--Assurez-vous que les privilèges ont bien été attribués pour ces utilisateurs avec la commande SHOW GRANTS appropriée.
