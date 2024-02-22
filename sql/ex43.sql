--Objectif : Créer deux utilisateurs, un pour un usage local et un autre pour un usage distant.

create user 'local_user'@'localhost' identified by 'mot_de_passe_locale';
create user 'remote_user'@'%' identified by 'mot_de_passe_distant';