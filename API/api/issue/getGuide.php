<?php
//Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json'); //Maybe not json

include_once '../../config/database.php';
include_once '../../models/Issue.php';

//Instantiate DB & Connect
$database = new Database();
$db = $database->connect();

$issue = new Issue($db);

$issue->name = isset($_GET['name']) ? $_GET['name'] : die();

$result = $issue->getGuide();

extract($result);

$ish = array(
    'rating' => $rating,
    'title' => $title,
    'article' => $article,
    'video' => $video,
    'prof_id' => $proffesional_id,
    'admin_id' => $admin_id,
    'issue name' => $issue->name
);

echo (json_encode($ish));
