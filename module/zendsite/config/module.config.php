<?php /*var_dump("fff");die;*/
return array(
'controllers' => array(
  'invokables' => array('zendsite\Controller\zendsite' => 'zendsite\Controller\zendsiteController'),
),

'router' => [
    'routes' => [
                              'index' => [
                                  'type' => segment::class,
                                  'options' => [
                                      'route'    => '/index',
                                      'constraints' => array (
                                         'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                         'id' => '[0-9]+'),
                                      'defaults' => [
                                          'controller' => 'zendsite\Controller\zendsite',
                                          'action'     => 'index',
                                      ],
                                  ],
                              ],

                            'add' => [
                                'type' => segment::class,
                                'options' => [
                                    'route'    => '/add',
                                    'defaults' => [
                                        'controller' => 'zendsite\Controller\zendsite',
                                        'action'     => 'add',
                                    ],
                                ],
                                    ]

                                /*    'add' => [
                                        'type' => segment::class,
                                        'options' => [
                                            'route'    => '/add',
                                            'defaults' => [
                                                'controller' => 'zendsite\Controller\zendsite',
                                                'action'     => 'add',
                                            ],
                                        ],
                                            ]*/


    ],
],
/*
'router' => [
    'routes' => [
        'test' => [
            'type' => segment::class,
            'options' => [
                'route'    => '/add',
                'constraints' => array (
                   'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                   'id' => '[0-9]+'),
                'defaults' => [
                    'controller' => 'zendsite\Controller\zendsite',
                    'action'     => 'add',
                ],
            ],
        ]
    ],
],*/











/*'router'  => array(
  'routers' => array(
    'test' => array(
      'type' => 'segment',
      'options' => array(
        'route' => '/zendsite1vue',
       'constraints' => array (
          'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
          'id' => '[0-9]+'),
          'defaults' => array(
            'controller' => 'zendsite\Controller\zendsite',
            'action' =>'index'),
        )
      )
    )
  ),*/
  'view_manager' => array('template_path_stack' => array('zendsite' => __DIR__.'/../view'),),

);
