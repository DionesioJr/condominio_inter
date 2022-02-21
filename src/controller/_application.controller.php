<?php
class _Application
{
    static public function applicationView($view = '', $data = false)
    {

        if (Login::isLogged() == false) {
            redirect('login');
        }

        if (empty($_SESSION['login'])) {
            return false;
        }
        
        if (file_exists("src/view/layout/_application.view.php")) {
            require_once("src/view/layout/_application.view.php");
        }
    }
}
