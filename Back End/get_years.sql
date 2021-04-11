CREATE PROCEDURE `get_years` (IN `_make` varchar(50), IN `_model` varchar(50))
BEGIN
SELECT DISTINCT year FROM car
WHERE make = _make AND model = _model;
END