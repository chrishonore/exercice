--Objectif : Créer un utilisateur spécifique pour une application web.
--Créez un utilisateur web_app qui peut se connecter depuis l'adresse IP spécifique de votre serveur web.
create user 'web_app'@'adresse_IP_serveur_web' identified by 'mot_de_passe';
--Attribuez à cet utilisateur des privilèges SELECT, INSERT, UPDATE sur une base de données nommée BlindCode2.
grant select,insert , update on blindcode2.* to 'web_app'@'adresse_IP_serveur_web';
--Assurez-vous que cet utilisateur a bien été créé avec la commande SELECT appropriée.
-- show grants for 'web_app'@'adresse_IP_serveur_web';
--Assurez-vous que les privilèges ont bien été révoqués avec la commande SHOW GRANTS appropriée.
-- select user ,host from mysql.user;
-- show grants for 'web_app'@'adresse_IP_serveur_web';
