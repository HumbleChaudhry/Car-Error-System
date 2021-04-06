<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json'); //Maybe not json

include_once '../../config/database.php';
include_once '../../models/Part.php';

//Instantiate DB & Connect
$database = new Database();
$db = $database->connect();

//Instantiate part object
$part = new Part($db);

// Get args
$part->id = isset($_GET['id']) ? $_GET['id'] : die();
$part->name = isset($_GET['name']) ? $_GET['name'] : die();
$part->price = isset($_GET['price']) ? $_GET['price'] : die();
$part->$rating = -1;
$part->$cat_title = isset($_GET['category']) ? $_GET['category'] : die();
$part->$retailer = isset($_GET['retailer']) ? $_GET['retailer'] : die();

$result = $part->insertPart();

return $result;