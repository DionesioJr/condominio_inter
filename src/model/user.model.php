<?php

class User
{
    public function __construct()
    {
    }


    static public function index()
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from users");


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
        $query = $DB->query("SELECT * from users where id = $id");


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
        $query = $DB->query("INSERT INTO `users` (`name`, `email`, `password`, `status`, `is_admin`) 
        VALUES ('{$data['name']}', '{$data['email']}', '{$data['password']}', '{$data['status']}', '{$data['is_admin']}');");

        if (empty($query)) {
            return false;
        }
        return $DB->lastInsertId();
    }

    static public function update($data)
    {
        global $DB;
        $query = $DB->query("UPDATE `users` SET `name` = '{$data['name']}', `email` = '{$data['email']}', `password` = '{$data['password']}', `status` = '{$data['status']}', `is_admin` = '{$data['is_admin']}' 
        WHERE (`id` = '{$data['id']}');");

        if (empty($query)) {
            return false;
        }
        return $DB->lastInsertId();
    }

    static public function destroy($id)
    {
        global $DB;

        $query = $DB->query("DELETE from users where id = '$id'");

        if (empty($query)) {
            return false;
        }
        return true;
    }

    static public function login($email, $password)
    {
        global $DB;
        $row = array();
        $query = $DB->query("SELECT * from users where email = '{$email}' AND password = '{$password}'");

        if (empty($query)) {
            return false;
        }

        foreach ($query as $key => $value) {
            $row[] = $value;
        }
        return current($row);
    }
}
