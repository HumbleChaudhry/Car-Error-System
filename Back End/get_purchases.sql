CREATE PROCEDURE `get_purchases` (IN `_id` varchar(30))
BEGIN
SELECT part_id AND retailer_name AND date AND tracking_no AND transaction_no
FROM purchases 
WHERE account_id = _id;
END