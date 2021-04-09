CREATE PROCEDURE `get_years` (IN `_make` varchar(50), IN `_model` varchar(50))
BEGIN
SELECT c.year FROM cars AS c
WHERE c.make = _make AND c.model = _model;
END