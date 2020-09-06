<?php
header("Content-type: application/json");
require 'Data.php';

$req = $_GET['req'] ?? null;


if ($req) {
    $jsonData = file_get_contents("menu_items.json");
    $dataList = json_decode($jsonData, true)['menu_items'];

    try {
        $menutData = new MenuData($dataList);
    } catch (Exception $th) {
        echo json_encode([$th->getMessage()]);
        return;
    }
}

switch ($req) {
    case 'menu_items':
        echo $menutData->getItemName();
        break;

    case 'Food_Data':
        $selectedItem = $_GET['foodId'];
        echo $menutData->getitemById($selectedItem);
        break;
    
    default:
        echo json_encode(["Invalid request"]);
        break;
}

?>