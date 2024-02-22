--DB employees.
use employees;
--Vous constatez que vous faites souvent des requêtes sur le champ birth_date de la table employees. Pour améliorer les performances, vous décidez de créer un index sur ce champ.
--Créez un index sur le champ birth_date de la table employees.
create index id_birth_date on employees (birth_date);
