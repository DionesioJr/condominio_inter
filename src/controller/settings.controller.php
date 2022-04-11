<?php
class Settings
{

    public function index()
    {
        $users_id = $_SESSION['user']['id'];
        if (empty($users_id)) {
            return redirect('/');
        }

        $data['users'] = User::show($users_id);
        if (empty($data['users'])) {
            return redirect('/');
        }

        _Application::applicationView('settings/conta', $data);
    }


    public function destroy()
    {
        $users_id = $_SESSION['user']['id'];

        if (empty($users_id)) {
            return false;
        }


        $result = User::destroy($users_id);

        if (empty($result)) {
            Alert::error("Falha ao tentar apagar a conta!");
        } else {
            Alert::success("Usuario apagado com sucesso!");
        }

        redirect('users');
    }
}
