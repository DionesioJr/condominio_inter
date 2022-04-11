<?php
class Messages
{

    static public function index()
    {   $data = array();
        _Application::applicationView('messages/messages', $data);
    }

    static public function chat(){
        $data = array();
        _Application::applicationView('messages/chat', $data);
    }
}
