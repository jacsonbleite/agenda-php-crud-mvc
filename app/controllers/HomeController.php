<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Contato;

class HomeController extends Controller
{

    public function index()
    {
        $objcontato = new Contato();
        $dados["list"] = $objcontato->showList();
        $dados["view"] = "contato/index";
        $this->load("template", $dados);
    }
}