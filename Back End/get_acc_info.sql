CREATE PROCEDURE `get_acc_info` (IN `_id` varchar(30))
BEGIN
SELECT * FROM account 
WHERE id = _id;
END
