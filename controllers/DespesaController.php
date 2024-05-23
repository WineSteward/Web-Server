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
        $despesa = Despesa::find($id);

        if (is_null($despesa))
        {
            $this->redirectToRoute('despesa', 'index', ['id' => $despesa->conta_id]);
        }
        else
        {
            $this->renderView('despesa', 'show', ['despesa' => $despesa]);
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
        $despesa = new Despesa($this->getHTTPPost());

        if($despesa->is_valid())
        {
            $despesa->save();

            $this->redirectToRoute('despesa', 'index', ['id'=>$despesa->conta->id]);
            //redirecionar para o index
        }
        else
        {
            $conta = Conta::find($id);

            $categorias = Categoria::all();

            $metodopagamentos = MetodoPagamento::all();

            $this->renderView('despesa', 'create', ['conta' => $conta, 'categorias' => $categorias, 'metodopagamentos' => $metodopagamentos]);
            //mostrar vista create passando os modelos como parâmetros
        }
    }

    public function edit($id)
    {
        $despesa = Despesa::find($id);

        if(is_null($despesa))
        {
            $this->redirectToRoute('despesa', 'index', ['id' => $despesa->conta->id]);
        }
        else
        {
            $categorias = Categoria::all();

            $metodopagamentos = Metodopagamento::all();

            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('despesa', 'edit', ['despesa' => $despesa, 'categorias' => $categorias, 'metodopagamentos' => $metodopagamentos]);
        }
    }

    public function update($id)
    {
        $despesa = Despesa::find($id);

        $despesa->update_attributes($this->getHTTPPost());

        if($despesa->is_valid())
        {

            $despesa->save();
            $this->redirectToRoute('despesa', 'index', ['id' => $despesa->conta->id]);
            //redirecionar para o index
        }
        else
        {
            $this->renderView('conta', 'edit', ['despesa'=> $despesa]);
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