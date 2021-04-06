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
$this->id = isset($_GET['un']) ? $_GET(['un']) : die();

$result = $account->getPurchases();

$num = $result->rowCount();

if ($num > 0) {
    $purchases = array();
    $purchases['data'] = array();

    $account_info = array(
        'username' => $account->id,
        'email' => $account->email,
        'shipping address' => $account->address,
        'shop name' => $account->shop_name
    );

    array_push($purchases['Account'], $account_info);

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        extract($row);

        $transaction = array(
            'part_id' => $part_id,
            'retailer' => $retailer,
            'date' => $date,
            'tracking num' => $tracking_num,
            'transaction num' => $transaction_num
        );

        array_push($purchases['data'], $transaction);
    }

    //Turn to JSON & output
    echo json_encode($purchases);
} else {
    http_response_code(404);
    echo json_encode(
        array(
            'username' => $account->id,
            'email' => $account->email,
            'shipping address' => $account->address,
            'shop name' => $account->shop_name,
            'data' => "No purchases found"
        )
    );
}
