<?php

class Categoria extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('nome')
    );

    static $has_many = array(
        array('despesas')
    );
}