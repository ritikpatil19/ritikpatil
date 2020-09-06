<?php

class MenuData {
    
    private $itemList;

    function __construct(array $itemList) {
        if (sizeof($itemList)>0) {
            $this->itemList = $itemList;
        } else {
            throw new Exception("Empty :(");
        }
    }

    public function getItemName() {
        $itemNameList = [];

        foreach($this->itemList as $food) {
            $itemNameList[] = array(
                "id"=>$food['id'],
                "name"=>$food['name']
            );
        }

        return json_encode($itemNameList);
    }

    public function getitemById($selectedItem) {
        $response = ["Invalid Request"];
        if($selectedItem) {
            foreach($this->itemList as $food) {
                if ($selectedItem == $food['id']) {
                    $response = $food;
                    break;
                }
            }
        }
        return json_encode($response);
    }

}
?>