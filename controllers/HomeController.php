<?php

require_once 'Controller.php';

class HomeController extends Controller
{

    public function index()
    {
        $home = new HomeController();

        $this->renderView('home', 'index');
    }
}
