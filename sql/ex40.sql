USE Ventes;
DELIMITER $$
DROP FUNCTION IF EXISTS price_tvac;
CREATE FUNCTION price_tvac(price FLOAT(10,2)) RETURNS FLOAT(10,2)
BEGIN
DECLARE price_tvac FLOAT(10,2);
SET price_tvac=price+price*0.21;
RETURN price_tvac;
END;
$$
DELIMITER ;
select nom , stock, price_tvac (prix)
from produit ;