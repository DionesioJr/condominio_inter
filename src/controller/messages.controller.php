<?php
class Messages
{
    private $condominiums_id;

    public function __construct()
    {
        $this->condominiums_id = $_SESSION['user']['condominiums_id'];
    }

    static public function index()
    {
        $data = array();
        _Application::applicationView('messages/messages', $data);
    }

    static public function chat()
    {
        $data = array();
        _Application::applicationView('messages/chat', $data);
    }


    public function sendMessageAjax()
    {

        $data['to'] = $_GET['to'];
        $data['from'] = $_SESSION['user']['id'];
        $data['message'] = $_GET['message'];


        $mensages = Message::send($data);
    }

    public function getMessageAjax()
    {
        $to = $_GET['to'];
        $last = $_GET['last'];
        $from = $_SESSION['user']['id'];
        $await = $_GET['await'] ?? false;

        if (empty($from)) {
            return false;
        }

        $mensages = Message::get($to, $from, $last);

        // if ($await === 'true' && empty($mensages)) {
        //     for ($i = 1; $i <= 10; $i++) {
        //         usleep(500000); // meio segundo 0.5 segundos
        //         $mensages = Message::get($to, $from, $last);
        //         if (!empty($mensages)) {
        //             break;
        //         }
        //     }
        // }

        self::response($mensages);
    }


    public function getUsersAjax()
    {
        $users = User::index($this->condominiums_id);

        // filtrando usuarios ativos
        $users = array_filter($users, function ($user) {
            if ($user['status']) {
                return $user;
            }
        });

        // filtrando usuarios validos 
        $users = array_filter($users, function ($user) {
            if ($_SESSION['user']['is_admin']) {
                return  $user;
            } else {
                if ($user['is_admin'] == 1) {
                    return  $user;
                }
            }
        });

        // removendo o proprio usuario da lista
        $users = array_filter($users, function ($user) {
            if ($user['id'] != $_SESSION['user']['id']) {
                return $user;
            }
        });

        self::response($users);
    }


    public function getUserAjax($id)
    {
        $users = User::show($id, $this->condominiums_id);
        $users = array_map(function ($data) {

            if ($_SESSION['user']['is_admin']) {
                return $data;
            } else {
                if ($data['is_admin'] == 1) {
                    return $data;
                }
            }
        }, $users);

        $users = array_filter($users);
        self::response($users);
    }


    static public function response($data)
    {
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($data);
        exit;
    }
}
