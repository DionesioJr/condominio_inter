<?php
class Settings
{

    public function index()
    {
        $this->conta();
    }

    public function conta()
    {
        $data = $_SESSION;
        _Application::applicationView('settings/conta', $data);
    }
}
