<?php

/**
 *
 */
namespace zendsite\form;
use Zend\Form\Form;
class additemform extends  form
{


public function __construct()
     {

       parent::__construct('additemform');

       $this->add(array(
            'name' => 'item_name',
            'type' => 'text',
            'options' => array('label' => 'item name'   )
           )
         );

         $this->add(array(

              'name' => 'item_price',
              'type' => 'text',
               'options' => array('label' => 'item price'   )
              )
            );

         $this->add(array(
              'name' => 'item_price',
              'type' => 'text',
              'attributes' => array(
                'value' => 'add item',
                'id' => 'submitbutton')
              )
            );


  }
}







 ?>
