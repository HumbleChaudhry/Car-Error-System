<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');


include_once '../../config/database.php';
include_once '../../models/Account.php';


//Instantiate DB & Connect
$database = new Database();
$db = $database->connect();

//Instantiate acc object
$account = new Account($db);

//Sanitize inputs
$this->id = isset($_GET['un']) ? $_GET['un'] : die();
$this->email = isset($_GET['email']) ? $_GET['email'] : die();
$this->date_of_creation = date("Y/m/d");
$this->address = isset($_GET['address']) ? $_GET['address'] : die();
$this->cert = isset($_GET['cert']) ? $_GET['cert'] : 'nil';
$this->shop_name = isset($_GET['shop']) ? $_GET['shop'] : 'nil';

$result = $account->createAccount();

return $result; //T or F
