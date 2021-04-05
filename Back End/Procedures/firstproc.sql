CREATE PROCEDURE read_single_car(
	IN `_make` VARCHAR(50),
    IN `_model` VARCHAR(50),
    IN `_year` int(4)
)
BEGIN
SELECT * FROM car AS c WHERE c.make=_make AND c.model=_model AND c.year=_year; 
END;