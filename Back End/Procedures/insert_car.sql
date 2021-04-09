CREATE PROCEDURE `insert_car` ( IN `_make` varchar(50), 
                                IN `_model` varchar(50),
                                IN `_year` int(4),
                                IN `_transmission` varchar(50),
                                IN `_drivetrain` varchar(50),
                                IN `_engine` varchar(50),
                                IN `_chassis` varchar(50))

BEGIN

INSERT INTO `car`(make, model, year) 
VALUES(_make, _model, _year);

INSERT INTO `chassis_table`(make, model, year, chassis)
VALUES(_make, _model, _year, _chassis);

INSERT INTO `transmission_table`(make, model, year, transmission, drivetrain)
VALUES(_make, _model, _year, _transmission, _drivetrain);

INSERT INTO `engine_table`(make, model, year engine)
VALUES(_make, _model, _year, _engine);

END