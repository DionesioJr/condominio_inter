<?php
class Home
{

    static public function index()
    {
        if (empty($_SESSION['login'])) {
            return false;
        }
        redirect('condominio');
    }
}
