<?php

require_once 'Controller.php';
require_once  './models/Despesa.php';

class DespesaController extends Controller
{
    public function index($id)
    {
        $conta = Conta::find($id);

        $this->renderView('despesa', 'index', ['conta' => $conta]);
    }

    public function show($id)
    {
        $conta = Conta::find($id);

        if (is_null($conta))
        {
            $this->redirectToRoute('conta', 'index');
        }
        else
        {
            $this->renderView('conta', 'show', ['conta' => $conta]);
        }
    }

    public function create($id)
    {
        $conta = Conta::find($id);

        $categorias = Categoria::all();

        $metodopagamentos = MetodoPagamento::all();

        $this->renderView('despesa', 'create', ['conta' => $conta, 'metodopagamentos' => $metodopagamentos, 'categorias' => $categorias]);
    }

    public function store($id)
    {
        $conta = Conta::find($id);

        $despesa = new Despesa($this->getHTTPPost());

        if($despesa->is_valid())
        {
            $despesa->save();

            $this->redirectToRoute('despesa', 'index', ['conta' => $conta]);
            //redirecionar para o index
        }
        else
        {
            $categorias = Categoria::all();

            $metodopagamentos = MetodoPagamento::all();

            $this->renderView('despesa', 'create', ['conta' => $conta, 'categorias' => $categorias, 'metodopagamentos' => $metodopagamentos]);
            //mostrar vista create passando os modelos como parâmetros
        }
    }

    public function edit($id)
    {
        $conta = Conta::find($id);

        if(is_null($conta))
        {
            $this->redirectToRoute('conta', 'index');
        }
        else
        {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('conta', 'edit', ['conta' => $conta]);
        }
    }

    public function update($id)
    {
        $conta = Conta::find($id);
        $conta->update_attributes($this-> getHTTPPost());
        if($conta->is_valid())
        {
            $conta->save();
            $this->redirectToRoute('conta', 'index');
            //redirecionar para o index
        }
        else
        {
            $this->renderView('conta', 'edit', ['conta'=> $conta]);
            //mostrar vista edit passando o modelo como parâmetro
        }
    }

    public function delete($id)
    {
        $despesa = Despesa::find($id);

        $conta = $despesa->conta;

        $despesa->delete();

        $this->renderView('despesa', 'index', ['conta'=> $conta]);
        //redirecionar para o index
    }
}