-- Trigger example

DELIMITER //

-- delete order_items before order to avoid referential integrity error
CREATE TRIGGER Delete_Order_Items
BEFORE DELETE ON orders FOR EACH ROW
BEGIN
DELETE FROM order_items WHERE OLD.order_id = id
