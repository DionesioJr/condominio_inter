<?php
class Messages
{

    static public function index()
    {   $data = array();
        _Application::applicationView('messages/messages', $data);
    }
}
