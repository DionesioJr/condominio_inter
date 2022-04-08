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
        $query = $DB->query("INSERT INTO `condominiums` (`name`, `description`, `cnpj`, `status`, `address_id`) 
        VALUES ('{$data['name']}', '{$data['description']}', '{$data['cnpj']}', '{$data['status']}', '{$data['address_id']}');");

        if (empty($query)) {
            return false;
        }
        return $DB->lastInsertId();
    }

    static public function update($data)
    {
        global $DB;
        $query = $DB->query("UPDATE `condominiums` SET `name` = '{$data['name']}', `description` = '{$data['description']}', `cnpj` = '{$data['cnpj']}', `status` = '{$data['status']}', `address_id` = '{$data['address_id']}' 
        WHERE (`id` = '{$data['id']}');");

        if (empty($query)) {
            return false;
        }
        return $data['id'];
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
