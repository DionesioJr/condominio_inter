<?php
class Settings
{

    private $condominiums_id;

    public function __construct()
    {
        $this->condominiums_id = $_SESSION['user']['condominiums_id'];
    }

    public function index()
    {
        $users_id = $_SESSION['user']['id'];
        if (empty($users_id)) {
            return redirect('/');
        }

        $data['users'] = User::show($users_id, $this->condominiums_id);
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
            redirect('settings');
        }

        Alert::success("Usuario apagado com sucesso!");
        redirect('logins/logout');
    }


    public function updatepassword()
    {
        $email = trim($_SESSION['user']['email']);
        $password1 = trim($_POST['password1']);
        $password2 = trim($_POST['password2']);

        if ($password1 != $password2) {
            redirect('settings');
        }

        $password = md5($password1);

        $result = User::updatePassword($email, $password);
        
        if (empty($result)) {
            Alert::error("Falha ao tentar atualizar a senha");
        } else {
            Alert::success("Senha atualizada com sucesso");
        }
        redirect('settings');
    }

    public function updateNameAndEmail()
    {
        $users_id = trim($_SESSION['user']['id']);
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);

        $result = User::updateNameAndEmail($name, $email, $users_id);

        if (empty($result)) {
            Alert::error("Falha ao tentar atualizar");
        } else {
            Alert::success("Atualizada com sucesso");
        }
        redirect('settings');
    }
}
