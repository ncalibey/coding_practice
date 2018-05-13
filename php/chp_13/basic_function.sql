# Basic Syntax to create a function

DELIMITER //

CREATE FUNCTION add_tax (price FLOAT) RETURNS FLOAT NO SQL
  RETURN price*1.1;

//

DELIMITER ;
