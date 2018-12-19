<?php
namespace item\Model;
class item {


public $id;
public $name;
public $item_expireddate;
public $item_price;

        public function __construct (){

        }


        public function exchengeArray($data){

        $this->id = (!empty($data['id'])) ? $data['id'] : null;
        $this->name = (!empty($data['name'])) ? $data['name'] : null;
        $this->item_expireddate = (!empty($data['item_expireddate'])) ? $data['item_expireddate'] : null;
        $this->$item_price = (!empty($data['item_price'])) ? $data['item_price'] : null;
        }

        public function getArrayCopy(){

          return get_object_vars($this);

        }



      }



 ?>
