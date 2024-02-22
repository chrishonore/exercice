--Objectif : Créer un utilisateur spécifique pour une application web. Cet utilisateur aura des privilèges sur toutes les bases de données et pourra donner des privilèges à d'autres utilisateurs.

--Créez un utilisateur php_user qui peut se connecter depuis localhost.
CREATE USER 'php_user'@'localhost' IDENTIFIED BY 'PHP';
GRANT ALL PRIVILEGES ON *.* TO 'php_user'@'localhost' WITH GRANT OPTION;
--Créez un utilisateur php_user qui peut se connecter depuis n'importe quel hôte.
 CREATE USER 'php_user'@'%' IDENTIFIED BY 'exterieur';
    GRANT ALL PRIVILEGES ON *.* TO 'php_user'@'%' WITH GRANT OPTION;
--Assurez-vous que ces utilisateurs ont bien été créés avec la commande SELECT appropriée.
-- select user ,host from mysql.user;
--Assurez-vous que les privilèges ont bien été attribués pour ces utilisateurs avec la commande SHOW GRANTS appropriée.
--show grants for 'php_user'@'localhost';
--show grants for 'php_user'@'%';