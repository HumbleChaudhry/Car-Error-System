-- Init

CREATE DATABASE 'Project';
USE 'Project';

/* Example:
CREATE TABLE 'products' (
  'product_id' int(11) NOT NULL AUTO_INCREMENT,
  'name' varchar(50) NOT NULL,
  'quantity_in_stock' int(11) NOT NULL,
  'unit_price' decimal(4,2) NOT NULL,
  PRIMARY KEY ('product_id')
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
*/

/* Table Creations:
Model:
CREATE TABLE '' (


);

*/


/*Table Insertions:
 Model : INSERT INTO '' VALUES ();
 TODO: Move drivetrain in `car` to be an attribute of transmission table
*/
INSERT INTO `car` VALUES ('Honda', 'Civic', 2000, 'FWD');
INSERT INTO `car` VALUES ('Honda', 'Accord', 2002, 'FWD');
INSERT INTO `car` VALUES ('Honda', 'Prelude', 1992, 'FWD');
INSERT INTO `car` VALUES ('Ford', 'Escape', 2012, 'AWD');
INSERT INTO `car` VALUES ('Ford', 'Focus', 2015, 'AWD');
INSERT INTO `car` VALUES ('Ford', 'Focus', 2015, 'FWD');
INSERT INTO `car` VALUES ('Mazda','Mazda3', 2007 , 'FWD');
INSERT INTO `car` VALUES ('Mazda','Mazda3', 2012 , 'FWD');
INSERT INTO `car` VALUES ('Dodge','Challenger', 2010 , 'RWD');

INSERT INTO `chassis table` VALUES ('Honda', 'Civic', 2000 ,'Coupe');
INSERT INTO `chassis table` VALUES ('Honda', 'Civic', 2000,'Sedan');
INSERT INTO `chassis table` VALUES ('Honda', 'Accord', 2002,'Coupe');
INSERT INTO `chassis table` VALUES ('Honda', 'Accord', 2002 ,'Sedan');
INSERT INTO `chassis table` VALUES ('Honda', 'Prelude', 1992,'Coupe');
INSERT INTO `chassis table` VALUES ('Ford', 'Escape', 2012, 'SUV');
INSERT INTO `chassis table` VALUES ('Ford', 'Focus', 2015,'Hatchback');
INSERT INTO `chassis table` VALUES ('Ford', 'Focus', 2015,'Sedan');
INSERT INTO `chassis table` VALUES ('Mazda','Mazda3',2007,'Hatchback');
INSERT INTO `chassis table` VALUES ('Mazda','Mazda3', 2007 ,'Sedan');
INSERT INTO `chassis table` VALUES ('Mazda','Mazda3',2012,'Hatchback');
INSERT INTO `chassis table` VALUES ('Mazda','Mazda3',2012,'Sedan');
INSERT INTO `chassis table` VALUES ('Dodge', 'Challenger', 2010, 'Coupe');

INSERT INTO `transmission table` VALUES ('Honda', 'Civic', 2000 , 'Standard');
INSERT INTO `transmission table` VALUES ('Honda', 'Civic', 2000 , 'Automatic');
INSERT INTO `transmission table` VALUES ('Honda', 'Accord', 2002, 'Standard');
INSERT INTO `transmission table` VALUES ('Honda', 'Accord', 2002, 'Automatic');
INSERT INTO `transmission table` VALUES ('Honda', 'Prelude', 1992, 'Standard');
INSERT INTO `transmission table` VALUES ('Honda', 'Prelude', 1992, 'Automatic');
INSERT INTO `transmission table` VALUES ('Ford', 'Escape', 2012,  'Automatic');
INSERT INTO `transmission table` VALUES ('Ford', 'Focus', 2015, 'Standard');
INSERT INTO `transmission table` VALUES ('Ford', 'Focus', 2015, 'Automatic');
INSERT INTO `transmission table` VALUES ('Mazda','Mazda3',2007, 'Standard');
INSERT INTO `transmission table` VALUES ('Mazda','Mazda3',2007, 'Automatic');
INSERT INTO `transmission table` VALUES ('Mazda','Mazda3',2012, 'Standard');
INSERT INTO `transmission table` VALUES ('Mazda','Mazda3',2012, 'Automatic');
INSERT INTO `transmission table` VALUES ('Dodge', 'Challenger', 2010, 'Standard');









