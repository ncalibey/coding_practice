# Basic stored procedure example

DELIMITER //

CREATE PROCEDURE total_orders (OUT total FLOAT)
BEGIN
  SELECT SUM(amount) INTO total FROM orders;
END
//

DELIMITER;
