<?php
return array(
'controllers' => array(
  'invokables' => array('zendsite\Controller\zendsite' => 'zendsite\Controller\zendsiteController'),
),
'router'  => array(
  'routers' => array(
    'zendsite' => array(
      'type' => 'segment',
      'options' => array(
        'route' => '/zendsite[/:action][/:id]',
        'constraints' => array (
          'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          'id' => '[0-9]+'),
          'defaults' => array(
            'controller' => 'zendsite\Controller\zendsite',
            'action' =>'index'),
        )
      )
    )
  ),
  'view_manager' => array('template_path_stack' => array('zendsite' => __DIR__.'/../view'),),

);
