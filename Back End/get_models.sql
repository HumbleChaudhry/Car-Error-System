CREATE PROCEDURE `get_models` (IN `_make` varchar(50))
BEGIN
SELECT DISTINCT models FROM car
WHERE make = _make;
END