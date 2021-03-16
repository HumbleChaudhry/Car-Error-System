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
INSERT INTO `car` VALUES ('Honda', 'Civic', 2000);
INSERT INTO `car` VALUES ('Honda', 'Accord', 2002);
INSERT INTO `car` VALUES ('Honda', 'Prelude', 1992);
INSERT INTO `car` VALUES ('Ford', 'Escape', 2012);
INSERT INTO `car` VALUES ('Ford', 'Focus', 2015);
INSERT INTO `car` VALUES ('Mazda','Mazda3', 2007 );
INSERT INTO `car` VALUES ('Mazda','Mazda3', 2012 );
INSERT INTO `car` VALUES ('Dodge','Challenger', 2010);

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

INSERT INTO `transmission table` VALUES ('Honda', 'Civic', 2000 , 'Standard', 'FWD');
INSERT INTO `transmission table` VALUES ('Honda', 'Civic', 2000 , 'Automatic', 'FWD');
INSERT INTO `transmission table` VALUES ('Honda', 'Accord', 2002, 'Standard', 'FWD');
INSERT INTO `transmission table` VALUES ('Honda', 'Accord', 2002, 'Automatic', 'FWD');
INSERT INTO `transmission table` VALUES ('Honda', 'Prelude', 1992, 'Standard', 'FWD');
INSERT INTO `transmission table` VALUES ('Honda', 'Prelude', 1992, 'Automatic', 'FWD');
INSERT INTO `transmission table` VALUES ('Ford', 'Escape', 2012,  'Automatic', 'AWD');
INSERT INTO `transmission table` VALUES ('Ford', 'Focus', 2015, 'Standard', 'FWD');
INSERT INTO `transmission table` VALUES ('Ford', 'Focus', 2015, 'Standard', 'AWD');
INSERT INTO `transmission table` VALUES ('Ford', 'Focus', 2015, 'Automatic', 'FWD');
INSERT INTO `transmission table` VALUES ('Mazda','Mazda3',2007, 'Standard', 'FWD');
INSERT INTO `transmission table` VALUES ('Mazda','Mazda3',2007, 'Automatic', 'FWD');
INSERT INTO `transmission table` VALUES ('Mazda','Mazda3',2012, 'Standard', 'FWD');
INSERT INTO `transmission table` VALUES ('Mazda','Mazda3',2012, 'Automatic', 'FWD');
INSERT INTO `transmission table` VALUES ('Dodge', 'Challenger', 2010, 'Standard', 'RWD');
INSERT INTO `transmission table` VALUES ('Dodge', 'Challenger', 2010, 'Automatic', 'RWD');

INSERT INTO `engine table` VALUES('Honda', 'Civic', '2000', 'I4-D16Y8');
INSERT INTO `engine table` VALUES('Honda', 'Accord', '2002', 'V6-J30A1');
INSERT INTO `engine table` VALUES('Honda', 'Accord', '2002', 'I4-F20A2');
INSERT INTO `engine table` VALUES('Honda', 'Prelude', '1992', 'I4-F22A1');
INSERT INTO `engine table` VALUES('Honda', 'Prelude', '1992', 'I4-H23A1');
INSERT INTO `engine table` VALUES('Ford', 'Escape', '2012', 'I4-Ecoboost-1.5');
INSERT INTO `engine table` VALUES('Ford', 'Escape', '2012', 'V6-Ecoboost-3.0');
INSERT INTO `engine table` VALUES('Mazda', 'Mazda3', '2007', 'I4-MZRL-2.0');
INSERT INTO `engine table` VALUES('Mazda', 'Mazda3', '2007', 'I4-MZRL-2.3');
INSERT INTO `engine table` VALUES('Dodge', 'Challenger', '2010', 'V8-Hemi-6.1');

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















