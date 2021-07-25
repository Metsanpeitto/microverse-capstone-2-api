<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");   
// The config folder in deployment will be like this:
//include_once '../../microverse.abi.api.config/database.php';
include_once '../config/database.php';
include_once '../class/menu.php';

$database = new Database();
$db = $database->getConnection();

$items = new Menu($db);

$stmt = $items->getMenu();
$itemCount = $stmt->rowCount();


echo json_encode($itemCount);

if ($itemCount > 0) {

    $menuArr = array();
    $menuArr["body"] = array();
    $menuArr["itemCount"] = $itemCount;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $e = array(
            "id" => $id,
            "name" => $name,
            "type" => $type,
            "price" => $price,
            "ingredients" => $ingredients,
            "image" => $image,
            "created" => $created
        );

        array_push($menuArr["body"], $e);
    }
    echo json_encode($menuArr,  JSON_UNESCAPED_SLASHES);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "No record found.")
    );
}
