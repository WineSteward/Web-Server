<?php

    require_once './vendor/autoload.php';

    define('APP_NAME', 'Contas e Despesas');

    define('INVALID_ACCESS_ROUTE', 'c=auth&a=login');

    ActiveRecord\Config::initialize(function($cfg)
    {
        $cfg->set_model_directory('./models');
        $cfg->set_connections(
            array(
                'development' => 'mysql://root@localhost/bdextra',
            )
        );
    });








