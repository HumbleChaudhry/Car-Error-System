<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json'); //Maybe not json

include_once '../../config/database.php';
include_once '../../models/Part.php';

//Instantiate DB & Connect
$database = new Database();
$db = $database->connect();

//Instantiate car object
$part = new Part($db);

// Get args
$part->id = isset($_GET['id']) ? $_GET['id'] : die();
$part->name = isset($_GET['name']) ? $_GET['name'] : die();

$result = $part->deletePart();

return $result;
