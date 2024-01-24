use exercice27;
/*
 Créez une fonction qui s'appellera hello_world.
Elle retournera la phrase 'Hello Word from SQL !'
 */
create function hello_world () returns varchar(50)
return 'Hello Word from SQL !';
select hello_world ();

create function scoubidou () returns varchar(100)
return ' voici un test et ca fonctionne la functions';
select scoubidou ();