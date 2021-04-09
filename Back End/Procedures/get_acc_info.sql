CREATE PROCEDURE `get_acc_info` (IN `_id` varchar(30))
BEGIN
SELECT * FROM account AS a
WHERE a.id = _id;
END
