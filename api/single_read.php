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

    $item->id = isset($_GET['id']) ? $_GET['id'] : die();
  
    $item->getSingleMenu();

    if($item->name != null){
        // create array
        $emp_arr = array(
            "id" =>  $item->id,
            "name" => $item->name,
            "type" => $item->type,
            "price" => $item->price,
            "ingredients" => $item->ingredients,
            "image" => $item->image,
            "created" => $item->created
);
      
        http_response_code(200);
        echo json_encode($emp_arr);
    }
      
    else{
        http_response_code(404);
        echo json_encode("Employee not found.");
    }
?>