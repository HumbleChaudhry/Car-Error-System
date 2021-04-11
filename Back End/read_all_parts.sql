CREATE DEFINER=`root`@`localhost` PROCEDURE `read_all_parts`()
BEGIN
SELECT * FROM car_part;
END