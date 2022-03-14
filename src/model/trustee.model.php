<?php

class Trustee
{
    public function __construct()
    {
    }

    static public function index()
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from `trustees`");


        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return $row;
    }

    static public function showUser($id)
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from `trustees` where users_id = $id");


        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return current($row);
    }

    static public function showCondominium($id)
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from `trustees` where condominiums_id = $id");


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
        $query = $DB->query("INSERT INTO `trustees` (`users_id`, `condominiums_id`) 
        VALUES ('{$data['users_id']}', '{$data['condominiums_id']}');");

        
        if (empty($query)) {
            return false;
        }
        return $DB->lastInsertId();
    }

    static public function destroyUser($id)
    {
        global $DB;

        $query = $DB->query("DELETE from `trustees` where users_id = '$id'");

        if (empty($query)) {
            return false;
        }
        return true;
    }


    static public function destroyCondominium($id)
    {
        global $DB;

        $query = $DB->query("DELETE from `trustees` where condominiums_id = '$id'");

        if (empty($query)) {
            return false;
        }
        return true;
    }
}
