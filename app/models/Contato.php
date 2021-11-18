<?php

namespace app\models;

use app\core\Model;
use PDO;

class Contato extends Model
{
    public function showList()
    {
        $select = "SELECT * FROM contato";
        $query = $this->db->query($select);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getContato($id)
    {
        $select = "SELECT * FROM contato WHERE id_contato = :id";
        $query = $this->db->prepare($select);
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function insert($contato)
    {
        $insert = "INSERT INTO contato
        (nome,cep,endereco,complemento,numero,bairro,cidade,uf,celular,
        email,nascimento,cpf)
        VALUES (:nome,:cep,:endereco,:complemento,:numero,:bairro,:cidade,:uf,
        :celular,:email,:nascimento,:cpf)";

        $query = $this->db->prepare($insert);
        $query->bindValue(':nome', $contato->nome);
        $query->bindValue(':cep', $contato->cep);
        $query->bindValue(':endereco', $contato->endereco);
        $query->bindValue(':complemento', $contato->complemento);
        $query->bindValue(':numero', $contato->numero);
        $query->bindValue(':bairro', $contato->bairro);
        $query->bindValue(':cidade', $contato->cidade);
        $query->bindValue(':uf', $contato->uf);
        $query->bindValue(':celular', $contato->celular);
        $query->bindValue(':email', $contato->email);
        $query->bindValue(':nascimento', $contato->nascimento);
        $query->bindValue(':cpf', $contato->cpf);
        $query->execute();
        return $this->db->lastInsertId();
    }

    public function edit($contato)
    {
        $edit = "UPDATE contato SET
        nome = :nome, cep = :cep, endereco = :endereco, complemento = :complemento,
        numero = :numero, bairro = :bairro, cidade = :cidade, uf = :uf,
        celular = :celular, email = :email, nascimento = :nascimento, cpf = :cpf
        WHERE id_contato = :id_contato";

        $query = $this->db->prepare($edit);
        $query->bindValue(':nome', $contato->nome);
        $query->bindValue(':cep', $contato->cep);
        $query->bindValue(':endereco', $contato->endereco);
        $query->bindValue(':complemento', $contato->complemento);
        $query->bindValue(':numero', $contato->numero);
        $query->bindValue(':bairro', $contato->bairro);
        $query->bindValue(':cidade', $contato->cidade);
        $query->bindValue(':uf', $contato->uf);
        $query->bindValue(':celular', $contato->celular);
        $query->bindValue(':email', $contato->email);
        $query->bindValue(':nascimento', $contato->nascimento);
        $query->bindValue(':cpf', $contato->cpf);
        $query->bindValue(':id_contato', $contato->id_contato);
        $query->execute();
        return $contato->id_contato;
    }

    public function delete($id)
    {
        $delete = "DELETE FROM contato WHERE id_contato = :id";
        $query = $this->db->prepare($delete);
        $query->bindValue(':id', $id);
        $query->execute();
    }
}