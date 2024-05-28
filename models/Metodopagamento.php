<?php

class Metodopagamento extends \ActiveRecord\Model
{
    static $validates_size_of = array(
        array('nome', 'within' => array(1,3), 'too_short' => 'too short!')
    );

    static $validates_presence_of = array(
        array('nome')
    );

    static $has_many = array(
        array('despesas')
    );
}
