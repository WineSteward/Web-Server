<?php

class Despesa extends \ActiveRecord\Model
{

    static $validates_numericality_of = array(
        array('valor', 'greater_than_or_equal_to' => 0),
    );

    static $belongs_to = array(
        array('conta')
    );

    static $has_many = array(
        array('categorias'),
        array('metodoPagamentos')
    );

}