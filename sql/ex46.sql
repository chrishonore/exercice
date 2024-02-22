--Objectif : Pratiquer la révocation de privilèges et la suppression d'utilisateurs.
--Révoquez tous les privilèges de remote_user sur la base de données Inventory.
revoke all privileges on blindcode2.* from 'remote_user'@'%';
--Assurez-vous que les privilèges ont bien été révoqués avec la commande SHOW GRANTS appropriée.
-- show grants for 'remote_user'@'%';
--Supprimez l'utilisateur remote_user de MySQL.
DROP USER 'remote_user'@'%';
--Assurez-vous que l'utilisateur a bien été supprimé avec la commande SELECT appropriée.
--select user , host from mysql.user;