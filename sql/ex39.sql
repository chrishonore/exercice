use ventes;
 drop function if exists remove_tvac;
delimiter $$
create function remove_tvac(prix_tvac float(6,3), taux_tva float(6,3)) returns float(6,3)
begin
    declare prix_htva float;
    set prix_htva=prix_tvac/(1+taux_tva);
    return prix_htva;
end;
$$
DELIMITER ;
 select remove_tvac (100,0.21);