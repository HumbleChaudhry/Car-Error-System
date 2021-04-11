CREATE PROCEDURE `read_one_part`(IN `_part_id` int(2))

BEGIN
SELECT * FROM car_part 
WHERE id = _part_id;
END
