CREATE PROCEDURE `get_purchases` (IN `_id` varchar(30))
BEGIN
SELECT p.part_id AND p.retailer_name AND p.date AND p.tracking_no AND p.transaction_no
FROM purchases AS p
WHERE p.account_id = _id;
END