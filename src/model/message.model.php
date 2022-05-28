<?php

class Message
{
    static public function get($to, $from, $last)
    {
        global $DB;
        $query = $DB->query("SELECT * FROM messages where (`to` = {$to} and `from` = {$from}) || (`to` = {$from} and `from` = {$to}) and id > {$last};");

        $result = $query->fetchAll();

        if (empty($result)) {
            return [];
        }
        return $result;
    }

    static public function send($data)
    {
        global $DB;
        $date = date('Y-m-d H:i:s');

        $query = $DB->query("INSERT INTO `messages` (`message`, `to`, `from`, `date`) 
        VALUES ('{$data['message']}', '{$data['to']}', '{$data['from']}', '{$date}');");


        if (empty($query)) {
            return false;
        }
        return $DB->lastInsertId();
    }
}
