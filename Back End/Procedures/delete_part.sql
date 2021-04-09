CREATE PROCEDURE `delete_part`(IN `_part_id` int(2),
                                IN `_name` varchar(50) )
BEGIN
DELETE FROM car_part as cp
WHERE cp.id = _part_id AND cp.name = _name;
END
