CREATE PROCEDURE `delete_car` (IN `_make` varchar(50), 
                                IN `_model` varchar(50),
                                IN `_year` int(4))

BEGIN
DELETE FROM car AS c
WHERE c.make = _make AND c.model = _model AND c.year = _year;
END