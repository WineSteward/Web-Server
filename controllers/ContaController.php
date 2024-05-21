<?php

require_once 'Controller.php';
require_once  './models/Conta.php';

class ContaController extends Controller
{

    public function index()
    {
        $contas = Conta::all();

        $this->renderView('conta', 'index', ['contas' => $contas]);
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

    public function create()
    {
        $this->renderView('conta', 'create');
    }

    public function store()
    {
        $conta = new Conta($this-> getHTTPPost());
;
        if($conta->is_valid())
        {
            $conta->save();

            $this->redirectToRoute('conta', 'index');
            //redirecionar para o index
        }
        else
        {

            $this->renderView('conta', 'create', ['conta' => $conta]);
            //mostrar vista create passando o modelo como parâmetro
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

    public function delete()
    {

    }

}