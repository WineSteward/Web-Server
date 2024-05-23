<?php

require_once 'Controller.php';
require_once  './models/Metodopagamento.php';

class MetodoPagamentoController extends Controller
{

    public function index()
    {
        $contas = Conta::all;

        $this->renderView('conta', 'index', ['contas' => $contas]);
    }
}