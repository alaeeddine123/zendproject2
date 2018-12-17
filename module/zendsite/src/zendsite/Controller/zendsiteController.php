<?php

 namespace zendsite\Controller ;

 use Zend\Mvc\Controller\AbstractActionController;
 use zendsite\Form\additemform;
 /**
  *
  */
 class zendsiteController extends AbstractActionController
 {

    public function indexAction()
    {

    }
    public function addAction()
    {
     $add_form = new additemform ();
     return array('form' => $add_form);
    }
    public function editAction()
    {

    }
    public function deleteAction()
    {

    }



 }
