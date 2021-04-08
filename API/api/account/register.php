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
$account->id = isset($_GET['un']) ? $_GET['un'] : die();
$account->email = isset($_GET['email']) ? $_GET['email'] : die();
$account->date_of_creation = date("d/m/Y");
$account->address = isset($_GET['address']) ? $_GET['address'] : die();
$account->cert = isset($_GET['cert']) ? $_GET['cert'] : 'nil';
$account->shop_name = isset($_GET['shop']) ? $_GET['shop'] : 'nil';

$result = $account->createAccount();

if ($result) {
    echo json_encode(array('Result' => 'True'));
} else {
    echo json_encode(array('Result' => 'False'));
}
