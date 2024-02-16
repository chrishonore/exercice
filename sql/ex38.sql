use exercice27;
/*
    Créez une fonction qui s'appellera hello.
Elle recevra deux paramètres de type VARCHAR(20).
Le premier se nommera first_name, le second last_name.
La fonction retournera par exemple 'Hello Johnny Piette !'
 */
DROP FUNCTION IF EXISTS Hello ;
delimiter $$
CREATE FUNCTION Hello (first_name varchar(20),last_name varchar(20))
RETURNS  VARCHAR(50)
BEGIN
    RETURN concat ('Bonjour ' ,first_name ,' ' , last_name);
END $$
delimiter ;
SELECT  Hello ( 'chris','honore');