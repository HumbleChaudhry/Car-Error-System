CREATE PROCEDURE `get_makes` ()
BEGIN
SELECT DISTINCT make FROM cars;
END