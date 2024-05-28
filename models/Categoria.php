<?php

class Categoria extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('nome')
    );

    static $has_many = array(
        array('despesas')
    );

    public function getTotalDespesas($id)
    {
        $contas = Conta::all();
        $qtddcontas = 0;
        foreach ($contas as $conta)
        {
            foreach ($conta->despesas as $despesa)
            {
                if($despesa->categoria_id == $id)
                    $qtddcontas++;
            }
        }
        return $qtddcontas;
    }
}







