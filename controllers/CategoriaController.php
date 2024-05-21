<?php

require_once 'Controller.php';
require_once  './models/Categoria.php';

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::all();

        $this->renderView('categoria', 'index', ['categorias' => $categorias]);
    }

    public function show($id)
    {
        $categoria = Categoria::find($id);

        if (is_null($categoria))
        {
            $this->redirectToRoute('categoria', 'index');
        }
        else
        {
            $this->renderView('categoria', 'show', ['categoria' => $categoria]);
        }
    }

    public function create()
    {
        $this->renderView('categoria', 'create');
    }

    public function store()
    {
        $categoria = new Categoria($this-> getHTTPPost());
;
        if($categoria->is_valid())
        {
            $categoria->save();

            $this->redirectToRoute('categoria', 'index');
            //redirecionar para o index
        }
        else
        {

            $this->renderView('categoria', 'create', ['categoria' => $categoria]);
            //mostrar vista create passando o modelo como parâmetro
        }
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);

        if(is_null($categoria))
        {
            $this->redirectToRoute('categoria', 'index');
        }
        else
        {
            //mostrar a vista edit passando os dados por parâmetro
            $this->renderView('categoria', 'edit', ['categoria' => $categoria]);
        }
    }

    public function update($id)
    {
        $categoria = Categoria::find($id);
        $categoria->update_attributes($this-> getHTTPPost());
        if($categoria->is_valid())
        {
            $categoria->save();
            $this->redirectToRoute('categoria', 'index');
            //redirecionar para o index
        }
        else
        {
            $this->renderView('categoria', 'edit', ['categoria'=> $categoria]);
            //mostrar vista edit passando o modelo como parâmetro
        }
    }

    public function delete()
    {

    }
}