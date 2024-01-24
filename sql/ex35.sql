use exercice27;
/*
    Créez une fonction qui s'appellera hello.
Elle recevra deux paramètres de type VARCHAR(20).
Le premier se nommera first_name, le second last_name.
La fonction retournera par exemple 'Hello Johnny Piette !'
 */
create function hello (first_name varchar(20), last_name varchar(20))
returns varchar(50)
begin
 return 'Piette'|| first_name||'Jhonny'||last_name;



