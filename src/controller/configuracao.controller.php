<?php
class Configuracao
{

    public function index()
    {
        $this->conta();
    }

    public function conta()
    {
        $data = $_SESSION;
        _Application::applicationView('configuracao/conta', $data);
    }
}
