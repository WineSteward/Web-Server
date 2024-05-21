<?php

class MetodoPagamento extends \ActiveRecord\Model
{
    static $validates_size_of = array(
        array('nome', 'within' => array(1,3), 'too_short' => 'too short!')
    );

    static $has_many = array(
        array('despesas')
    );
}
