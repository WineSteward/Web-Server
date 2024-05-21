<?php
require_once  'controllers/HomeController.php';
require_once  'controllers/ContaController.php';
require_once 'controllers/DespesaController.php';



return [

    'defaultRoute' => ['GET', 'HomeController', 'index'],

    'conta' => [
        'index' => ['GET', 'ContaController', 'index'],
        'create' => ['GET', 'ContaController', 'create'],
        'store' =>  ['POST', 'ContaController', 'store'],
        'read' =>   ['GET', 'ContaController', 'read'],
        'update' => ['GET', 'ContaController'. 'update'],
        'delete' => ['GET', 'ContaController', 'delete'],
        'show' =>   ['GET', 'ContaController', 'show'],
        'edit' =>   ['GET', 'ContaController', 'edit']
    ],

    'despesa' => [
        'index' => ['GET', 'DespesaController', 'index'],
        'create' => ['GET', 'DespesaController', 'create'],
        'store' =>  ['POST', 'DespesaController', 'store'],
        'read' =>   ['GET', 'DespesaController', 'read'],
        'update' => ['GET', 'DespesaController'. 'update'],
        'delete' => ['GET', 'DespesaController', 'delete'],
        'show' =>   ['GET', 'DespesaController', 'show'],
        'edit' =>   ['GET', 'DespesaController', 'edit']
    ]

];