<?php

class Address
{
    public function __construct()
    {
    }


    static public function index()
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from `address`");


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
        $query = $DB->query("SELECT * from `address` where id = $id");


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
        $query = $DB->query("INSERT INTO `address` (`street`, `number`, `district`, `city`, `state`, `code`) 
        VALUES ('{$data['street']}', '{$data['number']}', '{$data['district']}', '{$data['city']}', '{$data['state']}', '{$data['code']}');");


        if (empty($query)) {
            return false;
        }
        return $DB->lastInsertId();
    }

    static public function update($data)
    {
        global $DB;
        $query = $DB->query("UPDATE `address` SET `street` = '{$data['street']}', `number` = '{$data['number']}', `district` = '{$data['district']}', `city` = '{$data['city']}', `state` = '{$data['state']}', `code` = '{$data['code']}'
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


        $query = $DB->query("DELETE from `address` where id = '$id'");

        if (empty($query)) {
            return false;
        }
        return true;
    }
}
