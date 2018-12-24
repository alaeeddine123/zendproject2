<?php
namespace zendsite;
use zendsite\model\item;
use zendsite\model\itemtable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class Module
{
/*public function getAutoloaderConfig(){

   return  array('Zend\Load\StandardAutoloader' =>
                array('namespaces' => array(__NAMESPACE__ => __DIR__.'/src/'.__NAMESPACE__,
              )
          )
        );

 }*/
public function getAutoloaderConfig()
  {
      return array(
          'Zend\Loader\StandardAutoloader' => array(
      'namespaces' => array(
                  __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
              )
          )
      );
  }
public function getConfig(){

  return include __DIR__ .'/config/module.config.php';
}

public function getServiceConfig(){

return array('factories' => array(
   'zendsite\Model\itemtable' => function($sm)
    {
      $tableGateway = $sm->get('itemtablegateway');
      $table = new itemtable ($tableGateway);
      return $table;
      },
      'itemtablegateway' => function ($sm)
      {
        $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
        $resultSetPrototype = new ResultSet();
        $resultSetprototype->setArrayObjectPrototype(new item());
        return new TableGateway('item',$dbAdapter, null, $resultSetPrototype);

        }

 ));
}
}
