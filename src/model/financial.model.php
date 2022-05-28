<?php

class Financial
{
    public function __construct()
    {
    }


    static public function index($condominiums_id)
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from `financial` where condominiums_id = '{$condominiums_id}'");


        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return $row;
    }

    static public function show($id, $condominiums_id)
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from `financial` where id = $id and condominiums_id = '{$condominiums_id}'");
        $row = $query->fetchAll();

        if (empty($row)) {
            return false;
        }

        return current($row);
    }

    static public function store($data)
    {
        global $DB;
        $query = $DB->query("INSERT INTO `financial` (`name`, `description`, `due_date`, `cost`, `additional_charge`, `status`, `condominiums_id`) 
        VALUES ('{$data['name']}', '{$data['description']}', '{$data['due_date']}', '{$data['cost']}', '{$data['additional_charge']}', '{$data['status']}', '{$data['condominiums_id']}');");

        if (empty($query)) {
            return false;
        }
        return $DB->lastInsertId();
    }

    static public function update($data)
    {
        global $DB;
        $query = $DB->query("UPDATE `financial` SET `name` = '{$data['name']}', `description` = '{$data['description']}', `due_date` = '{$data['due_date']}', `cost` = '{$data['cost']}', `additional_charge` = '{$data['additional_charge']}', `status` = '{$data['status']}'
        WHERE (`id` = '{$data['id']}');");

        if (empty($query)) {
            return false;
        }
        return $query;
    }

    static public function destroy($id)
    {
        global $DB;
        $query = $DB->query("DELETE from `financial` where id = '$id'");

        if (empty($query)) {
            return false;
        }
        return true;
    }
}
