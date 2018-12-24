<?php

 namespace zendsite\Controller ;

 use Zend\Mvc\Controller\AbstractActionController;
 use zendsite\Form\additemform;
 use zendsite\Model\item;

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
     $request = $this->getRequest();
     if($request->ispost()){

       $item = new item();
       $item->setInputFilter($item->getInputFilter());
       $form->setdata($request->getpost());

       if($form->isvalid()){
         $item->exchengeArray($form->getdata());
         $item->getitemTable()->save($item);
       }
        return $this->getitemTable()->save($item);
     }

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
