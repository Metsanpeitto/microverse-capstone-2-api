<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// The config folder in deployment will be like this:
//include_once '../../microverse.abi.api.config/database.php';  
include_once '../config/database.php';
include_once '../class/menu.php';

$database = new Database();
$db = $database->getConnection();

$item = new Menu($db);

$data = json_decode(file_get_contents("php://input"));

$item->id = $data->id;

// employee values
$item->name = $data->name;
$item->type = $data->type;
$item->price = $data->price;
$item->ingredients = $data->ingredients;
$item->image = $data->image;
$item->created = date('Y-m-d H:i:s');

if ($item->updateMenu()) {
    echo json_encode("Menu data updated.");
} else {
    echo json_encode("Menu could not be updated");
}
