<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json'); //Maybe not json

include_once '../../config/database.php';
include_once '../../models/Car.php';

//Instantiate DB & Connect
$database = new Database();
$db = $database->connect();

//Instantiate car object
$car = new Car($db);

// Get args
$car->make = isset($_GET['make']) ? $_GET['make'] : die();
$car->model = isset($_GET['model']) ? $_GET['model'] : die();
$car->year = isset($_GET['year']) ? $_GET['year'] : die();
$car->year = (int)$car->year;
$car->$drivetrain = isset($_GET['dt']) ? $_GET['dt'] : die();
$car->$transmission = isset($_GET['trans']) ? $_GET['trans'] : die();
$car->$engine = isset($_GET['engine']) ? $_GET['engine'] : die();
$car->$chassis = isset($_GET['chassis']) ? $_GET['chassis'] : die();


$result = $car->insertCar();

if ($result) {
    echo json_encode(array('Result' => 'True'));
} else {
    echo json_encode(array('Result' => 'False'));
}
