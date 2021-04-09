CREATE PROCEDURE `get_car_issues` (IN `_make` varchar(50), 
                                IN `_model` varchar(50),
                                IN `_year` int(4))

BEGIN

SELECT i.issue_name AND i.description FROM issue AS i
WHERE 
(SELECT h.name FROM has AS h
WHERE h.make = _make AND h.model = _model AND h.year = _year;) = i.issue_name;
END
