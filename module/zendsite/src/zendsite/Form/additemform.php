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
            'options' => array('label' => 'item name'   ) ) );

         $this->add(array(

              'name' => 'item_price',
              'type' => 'text',
               'options' => array('label' => 'item price'   ),
               'attributes' => array(
                     'placeholder' => 'yyyy-mm-dd'

                )
             )

            );


            $this->add(array(

                 'name' => 'item_id',
                 'type' => 'number',
                  'options' => array('label' => 'item id '   )
                 )
               );









            $this->add(array(

                 'name' => 'item_expireddate',
                 'type' => 'text',
                  'options' => array('label' => 'item expired date'   )
                 )
               );


                     $this->add(array(

                 'name' => 'add_item',
                 'type' => 'submit',

            'attributes' => array(
              'value' => 'add item',
              'id' => 'submitbutton') ));


  }
}

 ?>
