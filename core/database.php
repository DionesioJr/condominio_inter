<?php
global $DB;

$HOST = 'localhost';
$DBNAME = 'inter_condominio';
$USER = 'root';
$PASS = '';

try {
    $DB = new PDO("mysql:host={$HOST};dbname={$DBNAME}", $USER, $PASS);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
