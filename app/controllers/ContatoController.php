<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Contato;
use stdClass;

class ContatoController extends Controller
{
    public function index()
    {
        $objcontato = new Contato();
        $dados["list"] = $objcontato->showList();
        $dados["view"] = "contato/index";
        $this->load("template", $dados);
    }

    public function create()
    {
        $dados["view"] = "contato/create";
        $this->load("template", $dados);
    }

    public function edit($id)
    {
        $objcontato = new Contato();
        $dados["contato"] = $objcontato->getContato($id);
        $dados["view"] = "contato/create";
        $this->load("template", $dados);
    }

    public function save()
    {
        $id_contato = ($_POST["id_contato"]) ? $_POST["id_contato"] : NULL;

        $objcontato = new Contato();

        $contato = new stdClass();
        $contato->nome          = strip_tags(trim($_POST["nome"]));
        $contato->cep           = strip_tags(trim($_POST["cep"]));
        $contato->endereco      = strip_tags(trim($_POST["endereco"]));
        $contato->complemento   = strip_tags(trim($_POST["complemento"]));
        $contato->numero        = strip_tags(trim($_POST["numero"]));
        $contato->bairro        = strip_tags(trim($_POST["bairro"]));
        $contato->cidade        = strip_tags(trim($_POST["cidade"]));
        $contato->uf            = strip_tags(trim($_POST["uf"]));
        $contato->celular       = strip_tags(trim($_POST["celular"]));
        $contato->email         = strip_tags(trim($_POST["email"]));
        $contato->nascimento    = strip_tags(trim($_POST["nascimento"]));
        $contato->cpf           = strip_tags(trim($_POST["cpf"]));
        $contato->id_contato    = strip_tags(trim($id_contato));

        if (!$contato->id_contato) {
            $objcontato->insert($contato);
        } else {
            $objcontato->edit($contato);
        }

        header("Location:" . URL_BASE);
    }

    public function delete($id)
    {
        $objcontato = new Contato();
        $objcontato->delete($id);

        header("Location:" . URL_BASE);
    }
}