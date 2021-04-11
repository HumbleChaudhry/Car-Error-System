CREATE PROCEDURE `insert_part`(
    IN `_part_id` int(2),
    IN `_name` varchar(50),
    IN `_price` decimal(10),
    IN `_category` varchar(20),
    IN `_retailer` varchar(50)
)

BEGIN 
INSERT INTO `car_part`(id, name, price, rating, category, retailer)
VALUES( _part_id, _name, _price, -1, _category, _retailer);
END