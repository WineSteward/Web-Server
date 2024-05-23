<?php
require_once  'controllers/HomeController.php';
require_once  'controllers/ContaController.php';
require_once 'controllers/DespesaController.php';
require_once 'controllers/CategoriaController.php';
require_once 'controllers/MetodoPagamentoController.php';

return [

    'defaultRoute' => ['GET', 'HomeController', 'index'],

    'conta' => [
        'index' => ['GET', 'ContaController', 'index'],
        'create' => ['GET', 'ContaController', 'create'],
        'store' =>  ['POST', 'ContaController', 'store'],
        'read' =>   ['GET', 'ContaController', 'read'],
        'update' => ['POST', 'ContaController'. 'update'],
        'delete' => ['GET', 'ContaController', 'delete'],
        'show' =>   ['GET', 'ContaController', 'show'],
        'edit' =>   ['GET', 'ContaController', 'edit']
    ],

    'despesa' => [
        'index' => ['GET', 'DespesaController', 'index'],
        'create' => ['GET', 'DespesaController', 'create'],
        'store' =>  ['POST', 'DespesaController', 'store'],
        'read' =>   ['GET', 'DespesaController', 'read'],
        'update' => ['POST', 'DespesaController', 'update'],
        'delete' => ['GET', 'DespesaController', 'delete'],
        'show' =>   ['GET', 'DespesaController', 'show'],
        'edit' =>   ['GET', 'DespesaController', 'edit']
    ],

    'categoria' => [
        'index' => ['GET', 'CategoriaController', 'index'],
        'create' => ['GET', 'CategoriaController', 'create'],
        'store' =>  ['POST', 'CategoriaController', 'store'],
        'read' =>   ['GET', 'CategoriaController', 'read'],
        'update' => ['POST', 'CategoriaController'. 'update'],
        'delete' => ['GET', 'CategoriaController', 'delete'],
        'show' =>   ['GET', 'CategoriaController', 'show'],
        'edit' =>   ['GET', 'CategoriaController', 'edit']
    ],

    'metodopagamento' => [
        'index' => ['GET', 'MetodoPagamentoController', 'index'],
        'create' => ['GET', 'MetodoPagamentoController', 'create'],
        'store' =>  ['POST', 'MetodoPagamentoController', 'store'],
        'read' =>   ['GET', 'MetodoPagamentoController', 'read'],
        'update' => ['POST', 'MetodoPagamentoController'. 'update'],
        'delete' => ['GET', 'MetodoPagamentoController', 'delete'],
        'show' =>   ['GET', 'MetodoPagamentoController', 'show'],
        'edit' =>   ['GET', 'MetodoPagamentoController', 'edit']
    ]

];