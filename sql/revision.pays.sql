use pays;
--Afficher la colonne name que l'on renommera Nom à l'affichage de la table Pays où les pays ont un nom commençant par 'u';--
    select name as nom
    from pays
    where name like 'u%';
--Reprenez la requête précédente et classer par ordre décroissant les noms de pays.
select name as nom
from pays
where name like 'u%'
order by name desc ;
--Maintenant par ordre croissant.
select name as nom
from pays
where name like 'u%'
order by name asc ;
--Affichez les pays dont le nom se terminent par %ca';
select  name as nom
from pays
where name like '%ca';
--Affichez le nombre de pays de la précédente requête.
select count(*) as nombre_de_pays
from pays
where  name like '%ca';
--Affichez les pays qui commencent par 'e' et qui se terminent par 'a' et enfin qui contiennent un 't'. Vous utiliserez 3 LIKE;
select name as nom
from pays
where name like 'e%'
and name like '%a'
  and name like '%t%';
--Même chose mais vous n'utiliserez qu'un seul LIKE.
select name as nom
from pays
where name like 'e%t%a';
--Compter le nombre total de pays.
select count(*) as nombre_de_pays
from pays;
--Affichez les pays dont l'Id_Pays est compris entre 20 et 43;
select id_pays, name
from pays
where id_pays between 20 and 43;
--Idem mais trouvez une autre méthode pour faire votre condition.
select id_pays, name
from pays
where id_pays >=20 and id_pays <=43;
--Affichez les noms de pays où l'Id_Pays est inférieur à 48 ou supérieur à 125.
select id_pays, name
from pays
where id_pays <48 or id_pays >125;
--Affichez les noms de pays où le code pays est compris dans cette liste de valeurs: BE, FR, LU, NL.
select id_pays , name , code
from pays
where code in ('be','fr','lu','nl');
