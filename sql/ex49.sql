--Objectif : Pratiquer la révocation du privilège GRANT OPTION.

--Révoquez le privilège GRANT OPTION de l'utilisateur php_user tant local que distant.
revoke all privileges on *.* from 'php_user'@'localhost';
revoke all privileges on *.* from 'php_user'@'%';
--Assurez-vous que les privilèges ont bien été révoqués avec la commande SHOW GRANTS appropriée.
--show grants for 'php_user'@'localhost';
--show grants for 'php_user'@'%';