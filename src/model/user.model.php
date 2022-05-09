<?php

class User
{
    public function __construct()
    {
    }


    static public function index()
    {
        global $DB;
        $query = $DB->query("SELECT * from users;");
        
        $result = $query->fetchAll();
    
        if (empty($result)) {
            return false;
        }

        return $result;
    }

    static public function show($id)
    {
        global $DB;
        $query = $DB->query("SELECT * from users where id = $id");

        $result = $query->fetchAll();

        if (empty($result)) {
            return false;
        }

        return current($result);
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
        return $data['id'];
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
        $query = $DB->query("SELECT * from users where email = '{$email}' AND password = '{$password}' AND status = 1");

        $result = $query->fetchAll();

        if (empty($result)) {
            return false;
        }
        return current($result);
    }

    static public function updatePassword($email, $password)
    {
        global $DB;
        $query = $DB->query("UPDATE `users` SET `password` = '{$password}' WHERE (`email` = '{$email}');");

        $result = $query->fetchAll();

        if (empty($result)) {
            return false;
        }

        return $result;
    }


    static public function updateNameAndEmail($name, $email, $id)
    {
        global $DB;
        $query = $DB->query("UPDATE `users` SET `name` = '{$name}', `email` = '{$email}' WHERE (`id` = '{$id}');");

        $result = $query->fetchAll();

        if (empty($result)) {
            return false;
        }

        return $result;
    }
}
