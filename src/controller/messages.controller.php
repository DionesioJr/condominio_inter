<?php
class Messages
{
    public function __construct()
    {
       
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


    public function sendMessagesAjax()
    {
        $data['to'] = $_GET['to'];
        $data['from'] = $_GET['from'];
        $data['message'] = $_GET['message'];

        $mensages = Message::send($data);
    }

    public function getMessagesAjax()
    {
        $to = $_GET['to'];
        $from = $_SESSION['user']['id'];
        
        if(empty($from)){
            return false;
        }
        
        $mensages = Message::get($to, $from);
                
        // $mensages = array();
        // $i = 1;

        // do {
        //     if (empty($mensages)) {
        //         sleep(0.2);
        //     }
        // } while ($i <= 10 && empty($mensages));

        self::response($mensages);
    }


    public function getUsersAjax()
    {
        $users = User::index();

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

        self::response($users);
    }


    public function getUserAjax($id)
    {
        $users = User::show($id);
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
