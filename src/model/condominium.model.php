<?php

class Condominium
{
    public function __construct()
    {
    }


    static public function index()
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from condominiums");


        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return $row;
    }

    static public function show($id)
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from condominiums where id = $id");


        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return current($row);
    }

    static public function store($data)
    {
        global $DB;
        $query = $DB->query("INSERT INTO `condominiums` (`nome`, `idade`, `peso`, `altura`, `sexo`, `email`, `senha`, `tipo`, `status`) 
        VALUES ('{$data['nome']}', '{$data['idade']}', '{$data['peso']}', '{$data['altura']}', '{$data['sexo']}', '{$data['email']}', '{$data['senha']}', '{$data['tipo']}', '{$data['status']}');");

        if (empty($query)) {
            return false;
        }
        return true;
    }

    static public function update($data)
    {
        global $DB;
        $query = $DB->query("UPDATE `condominiums` SET `nome` = '{$data['nome']}', `idade` = '{$data['idade']}', `peso` = '{$data['peso']}', `altura` = '{$data['altura']}', `sexo` = '{$data['sexo']}', `email` = '{$data['email']}', `senha` = '{$data['senha']}', `tipo` = '{$data['tipo']}', `status` = '{$data['status']}' 
        WHERE (`id` = '{$data['id']}');");

        if (empty($query)) {
            return false;
        }
        return true;
    }

    static public function destroy($id)
    {
        global $DB;

        // $treinos = Treinos::showCondomínio($id);

        // if (!empty($treinos)) {
        //     foreach ($treinos as $key => $treino) {
        //         $destroy =  Treinos::destroy($treino['id']);
        //     }
        // }


        $query = $DB->query("DELETE from condominiums where id = '$id'");

        if (empty($query)) {
            return false;
        }
        return true;
    }
}
