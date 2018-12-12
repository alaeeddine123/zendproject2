<?php
namespace zendsite;

/**
 *huihohom
 */
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
}
