CREATE PROCEDURE `get_models` (IN `_make` varchar(50))
BEGIN
SELECT c.models FROM cars AS c
WHERE c.make = _make;
END