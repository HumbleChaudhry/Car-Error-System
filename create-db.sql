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

CREATE TABLE 'retailer' (
    'name' varchar(50) NOT NULL,
    'phone_no' varchar(15) NOT NULL,
    'rating' int(2),
    'warehouse_location' varchar(255) NOT NULL,
    PRIMARY KEY ('name')
)

CREATE TABLE 'car_part' (
    'id' varchar(20) NOT NULL,
    'name' varchar(50) NOT NULL,
    'price' decimal(10) NOT NULL,
    'rating' int(2),
    'title' varchar(20) NOT NULL,
    'category' varchar(20) NOT NULL,
    PRIMARY KEY ('id'),
    FOREIGN KEY ('category') REFERENCES 'category' ('title')

)

CREATE TABLE 'account' (
    'id' varchar(20) NOT NULL,
    'name' varchar(50) NOT NULL,
    'date_of_creation' varchar(20) NOT NULL,
    PRIMARY KEY ('id')
)

CREATE TABLE 'admin' (
    'id' varchar(20) NOT NULL,
    PRIMARY KEY ('id')
    FOREIGN KEY ('id') REFERENCES 'account' ('id')
)

CREATE TABLE 'mechanic' (
    'id' varchar(20) NOT NULL,
    'shipping_address' varchar(255) NOT NULL,
    PRIMARY KEY ('id'),
    FOREIGN KEY ('id') REFERENCES 'account' ('id')
)

CREATE TABLE 'professional' (
    'id' varchar(20) NOT NULL,
    'certification' varchar(255) NOT NULL,
    'shop_name' varchar(255) NOT NULL,
    PRIMARY KEY ('id'),
    FOREIGN KEY ('id') REFERENCES 'mechanic' ('id')
)

CREATE TABLE 'amateur' (
    'id' varchar(20) NOT NULL,
    PRIMARY KEY ('id'),
    FOREIGN KEY ('id') REFERENCES 'mechanic' ('id')
)

CREATE TABLE 'guide' (
    'avg_rate' decimal(10) NOT NULL,
    'title' varchar(50) NOT NULL,
    'Article' varchar(255),
    'video' varchar(255),
    'pro_id' varchar(20) NOT NULL,
    'admin_id' varchar(20) NOT NULL,
    'issue_name' varchar(50) NOT NULL,
    PRIMARY KEY ('title'),
    FOREIGN KEY ('pro_id') REFERENCES 'professional' ('id'),
    FOREIGN KEY ('admin_id') REFERENCES 'admin' ('id'),    
)

CREATE TABLE 'step' (
    'title' varchar(50) NOT NULL,
    'number' int(5) NOT NULL,
    'description' varchar(255),
    PRIMARY KEY ('title'),
    PRIMARY KEY ('step'),
    FOREIGN KEY ('step') REFERENCES 'guide' ('title')
)

CREATE TABLE 'category'(
    'title' varchar(50) NOT NULL,
    PRIMARY KEY ('title'), 
    FOREIGN KEY ('title') REFERENCES 'category' ('title')
)

CREATE TABLE 'car'(
    'make' varchar(50) NOT NULL,
    'model' varchar(50) NOT NULL,
    'year' int(4) NOT NULL,
    PRIMARY KEY ('make'),
    PRIMARY KEY ('model'),
    PRIMARY KEY ('year')
)

CREATE TABLE 'chassis_table'(
    'make' varchar(50) NOT NULL,
    'model' varchar(50) NOT NULL,
    'year' int(4) NOT NULL,
    'chassis' varchar(50) NOT NULL,
    FOREIGN KEY ('make') REFERENCES 'car' ('make'),
    FOREIGN KEY ('model') REFERENCES 'car' ('model'),
    FOREIGN KEY ('year') REFERENCES 'car' ('year')

)

CREATE TABLE 'transmission_table'(
    'make' varchar(50) NOT NULL,
    'model' varchar(50) NOT NULL,
    'year' int(4) NOT NULL,
    'transmission' varchar(50) NOT NULL, 
    FOREIGN KEY ('make') REFERENCES 'car' ('make'),
    FOREIGN KEY ('model') REFERENCES 'car' ('model'),
    FOREIGN KEY ('year') REFERENCES 'car' ('year')   
)

CREATE TABLE 'engine_table'(
    'make' varchar(50) NOT NULL,
    'model' varchar(50) NOT NULL,
    'year' int(4) NOT NULL,
    'engine' varchar(50) NOT NULL, 
    FOREIGN KEY ('make') REFERENCES 'car' ('make'),
    FOREIGN KEY ('model') REFERENCES 'car' ('model'),
    FOREIGN KEY ('year') REFERENCES 'car' ('year') 
)

CREATE TABLE 'dtc'(
    'code' varchar(50) NOT NULL,
    'description' varchar(255) NOT NULL,
    PRIMARY KEY ('code') 
)

CREATE TABLE 'issue'(
    'issue_name' varchar(50) NOT NULL,
    'commoness' int(2) NOT NULL,
    'severity' int(2) NOT NULL,
    'description' varchar(255) NOT NULL,
    'difficulty' int(2),
    'part_id' varchar(20) NOT NULL,
    PRIMARY KEY ('make'),
    FOREIGN KEY ('issue_name') REFERENCES 'guide' ('issue_name'),
    FOREIGN KEY ('part_id') REFERENCES 'car_part' ('id'),
    
)

CREATE TABLE 'symptoms'(
    'name' varchar(50) NOT NULL,
    'symptoms' varchar(255) NOT NULL,
    FOREIGN KEY ('name') REFERENCES 'issue' ('issue_name')

)

CREATE TABLE 'keyword'(
    'name' varchar(50) NOT NULL,
    'keywords' varchar(50) NOT NULL,
    FOREIGN KEY ('name') REFERENCES 'issue' ('issue_name')
)

CREATE TABLE 'purchases'(
    'part_id' varchar(20) NOT NULL,
    'retailer_name' varchar(50) NOT NULL,
    'account_id' varchar(20) NOT NULL,
    'date' varchar(10),
    'tracking_no' varchar(10),
    'transaction_no' varchar(10),
    FOREIGN KEY ('part_id') REFERENCES 'car_part' ('id')
    FOREIGN KEY ('retailer_name') REFERENCES 'retailer' ('name')
    FOREIGN KEY ('account_id') REFERENCES 'account' ('id')

)

CREATE TABLE 'fits'(
    'part_id' varchar(20) NOT NULL,
    'make' varchar(50) NOT NULL,
    'model' varchar(50) NOT NULL,
    'year' int(4) NOT NULL,
    FOREIGN KEY ('part_id') REFERENCES 'car_part' ('id')
    FOREIGN KEY ('make') REFERENCES 'car' ('make'),
    FOREIGN KEY ('model') REFERENCES 'car' ('model'),
    FOREIGN KEY ('year') REFERENCES 'car' ('year') 

)

CREATE TABLE 'has'(
    'make' varchar(50) NOT NULL,
    'model' varchar(50) NOT NULL,
    'year' int(4) NOT NULL,
    'code' varchar(50) NOT NULL,
    'name' varchar(50) NOT NULL,
    FOREIGN KEY ('make') REFERENCES 'car' ('make'),
    FOREIGN KEY ('model') REFERENCES 'car' ('model'),
    FOREIGN KEY ('year') REFERENCES 'car' ('year'),
    FOREIGN KEY ('code') REFERENCES 'dtc' ('code')
    FOREIGN KEY ('name') REFERENCES 'issue' ('issue_name'),
    
)

CREATE TABLE 'rate'(
    'mechanic_id' varchar(20) NOT NULL,
    'guide_title' varchar(50) NOT NULL,
    FOREIGN KEY ('mechanic_id') REFERENCES 'mechanic' ('id'),
    FOREIGN KEY ('guide_title') REFERENCES 'guide' ('title')

)



/*Table Insertions:
 Model : INSERT INTO '' VALUES ();
 TODO: Move drivetrain in `car` to be an attribute of transmission table
*/
INSERT INTO `car` VALUES ('Honda', 'Civic', 2000);
INSERT INTO `car` VALUES ('Honda', 'Accord', 2002);
INSERT INTO `car` VALUES ('Honda', 'Prelude', 1992);
INSERT INTO `car` VALUES ('Ford', 'Escape', 2012);
INSERT INTO `car` VALUES ('Ford', 'Focus', 2015);
INSERT INTO `car` VALUES ('Mazda','Mazda3', 2007 );
INSERT INTO `car` VALUES ('Mazda','Mazda3', 2012 );
INSERT INTO `car` VALUES ('Dodge','Challenger', 2010);

INSERT INTO `chassis_table` VALUES ('Honda', 'Civic', 2000 ,'Coupe');
INSERT INTO `chassis_table` VALUES ('Honda', 'Civic', 2000,'Sedan');
INSERT INTO `chassis_table` VALUES ('Honda', 'Accord', 2002,'Coupe');
INSERT INTO `chassis_table` VALUES ('Honda', 'Accord', 2002 ,'Sedan');
INSERT INTO `chassis_table` VALUES ('Honda', 'Prelude', 1992,'Coupe');
INSERT INTO `chassis_table` VALUES ('Ford', 'Escape', 2012, 'SUV');
INSERT INTO `chassis_table` VALUES ('Ford', 'Focus', 2015,'Hatchback');
INSERT INTO `chassis_table` VALUES ('Ford', 'Focus', 2015,'Sedan');
INSERT INTO `chassis_table` VALUES ('Mazda','Mazda3',2007,'Hatchback');
INSERT INTO `chassis_table` VALUES ('Mazda','Mazda3', 2007 ,'Sedan');
INSERT INTO `chassis_table` VALUES ('Mazda','Mazda3',2012,'Hatchback');
INSERT INTO `chassis_table` VALUES ('Mazda','Mazda3',2012,'Sedan');
INSERT INTO `chassis_table` VALUES ('Dodge', 'Challenger', 2010, 'Coupe');

INSERT INTO `transmission_table` VALUES ('Honda', 'Civic', 2000 , 'Standard', 'FWD');
INSERT INTO `transmission_table` VALUES ('Honda', 'Civic', 2000 , 'Automatic', 'FWD');
INSERT INTO `transmission_table` VALUES ('Honda', 'Accord', 2002, 'Standard', 'FWD');
INSERT INTO `transmission_table` VALUES ('Honda', 'Accord', 2002, 'Automatic', 'FWD');
INSERT INTO `transmission_table` VALUES ('Honda', 'Prelude', 1992, 'Standard', 'FWD');
INSERT INTO `transmission_table` VALUES ('Honda', 'Prelude', 1992, 'Automatic', 'FWD');
INSERT INTO `transmission_table` VALUES ('Ford', 'Escape', 2012,  'Automatic', 'AWD');
INSERT INTO `transmission_table` VALUES ('Ford', 'Focus', 2015, 'Standard', 'FWD');
INSERT INTO `transmission_table` VALUES ('Ford', 'Focus', 2015, 'Standard', 'AWD');
INSERT INTO `transmission_table` VALUES ('Ford', 'Focus', 2015, 'Automatic', 'FWD');
INSERT INTO `transmission_table` VALUES ('Mazda','Mazda3',2007, 'Standard', 'FWD');
INSERT INTO `transmission_table` VALUES ('Mazda','Mazda3',2007, 'Automatic', 'FWD');
INSERT INTO `transmission_table` VALUES ('Mazda','Mazda3',2012, 'Standard', 'FWD');
INSERT INTO `transmission_table` VALUES ('Mazda','Mazda3',2012, 'Automatic', 'FWD');
INSERT INTO `transmission_table` VALUES ('Dodge', 'Challenger', 2010, 'Standard', 'RWD');
INSERT INTO `transmission_table` VALUES ('Dodge', 'Challenger', 2010, 'Automatic', 'RWD');

INSERT INTO `engine_table` VALUES('Honda', 'Civic', '2000', 'I4-D16Y8');
INSERT INTO `engine_table` VALUES('Honda', 'Accord', '2002', 'V6-J30A1');
INSERT INTO `engine_table` VALUES('Honda', 'Accord', '2002', 'I4-F20A2');
INSERT INTO `engine_table` VALUES('Honda', 'Prelude', '1992', 'I4-F22A1');
INSERT INTO `engine_table` VALUES('Honda', 'Prelude', '1992', 'I4-H23A1');
INSERT INTO `engine_table` VALUES('Ford', 'Escape', '2012', 'I4-Ecoboost-1.5');
INSERT INTO `engine_table` VALUES('Ford', 'Escape', '2012', 'V6-Ecoboost-3.0');
INSERT INTO `engine_table` VALUES('Mazda', 'Mazda3', '2007', 'I4-MZRL-2.0');
INSERT INTO `engine_table` VALUES('Mazda', 'Mazda3', '2007', 'I4-MZRL-2.3');
INSERT INTO `engine_table` VALUES('Dodge', 'Challenger', '2010', 'V8-Hemi-6.1');

INSERT INTO `dtc` VALUES('P0300', "Random/Multiple Misfire Detected");
INSERT INTO `dtc` VALUES('P0301', "Cylinder 1 Misfire Detected");
INSERT INTO `dtc` VALUES('P0302', "Cylinder 2 Misfire Detected");
INSERT INTO `dtc` VALUES('P0303', "Cylinder 3 Misfire Detected");
INSERT INTO `dtc` VALUES('P0304', "Cylinder 4 Misfire Detected");
INSERT INTO `dtc` VALUES('P0305', "Cylinder 5 Misfire Detected");
INSERT INTO `dtc` VALUES('P0306', "Cylinder 6 Misfire Detected");
INSERT INTO `dtc` VALUES('P0307', "Cylinder 7 Misfire Detected");
INSERT INTO `dtc` VALUES('P0308', "Cylinder 8 Misfire Detected");
INSERT INTO `dtc` VALUES('P0440', "EVAP System Leak/Malfunction");
INSERT INTO `dtc` VALUES('P0606', "ECM/PCM Processor Fault");
INSERT INTO `dtc` VALUES('P0627', "Fuel Pump Control Circuit Open");
INSERT INTO `dtc` VALUES('P0885', "TCM Power Realy Control Scircuit Open");
INSERT INTO `dtc` VALUES('P0505', "Idle Control System Malfunction");
INSERT INTO `dtc` VALUES('P0131', "O2 Sensor Circuit Low Voltage");
INSERT INTO `dtc` VALUES('P0562', "System Voltage Low");















