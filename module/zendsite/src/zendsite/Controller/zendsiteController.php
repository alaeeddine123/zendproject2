<?php

 namespace zendsite\Controller ;

 use Zend\Mvc\Controller\AbstractActionController;
 use zendsite\Form\additemform;
 /**
  *
  */
 class zendsiteController extends AbstractActionController
 {
    protected $itemtable;
    public function indexAction()
    {

    }
    public function addAction()
    {
     $add_form = new additemform();
     return array('oForm' => $add_form);
    }
    public function editAction()
    {

    }
    public function deleteAction()
    {

    }
    public function getitemTable(){

      if(!$this->itemtable){
         $sm = $this->getserviceLocator();
         $this->getitemTable = $sm->get('zendsite\Model\itemtable'); }

      return $this-getitemTable;
    }


 }
