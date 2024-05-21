<?php

class Conta extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('numconta'),
        array('titulo'),
        array('nib'),
        array('email')
    );
    static $validates_format_of = array(
        array('email', 'with' => '/^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/')
    );

    static $has_many = array(
        array('despesas')
    );
}