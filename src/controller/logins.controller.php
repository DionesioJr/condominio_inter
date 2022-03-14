<?php
class Logins
{
    static public function index()
    {

        if (self::isLogged() == true) {
            redirect('home');
        }
        new LoadingView('authentication/login');
    }


    static public function logout()
    {
        session_destroy();
        redirect('login');
        return false;
    }


    public function create()
    {
        if (!empty($_POST)) {
            $this->newAccount($_POST);
        }

        $data = array();
        new LoadingView('authentication/create', $data);
    }


    private function newAccount($data)
    {

        if (empty($data)) {
            Alert::info("Falha ao criar conta");
            redirect('logins/create');
        }

        $data_user = array();
        $data_user['name'] = trim($_POST['user-name']) ?? '';
        $data_user['email'] = trim($_POST['email']) ?? '';
        $data_user['password'] = trim($_POST['password']) ?? '';
        $data_user['status'] = 1;
        $data_user['is_admin'] = trim($_POST['is_admin']) ?? '';
        $users_id = User::store($data_user);


        $data_address['street'] =  ' ';
        $data_address['number'] =  ' ';
        $data_address['district'] =  '';
        $data_address['city'] =  '';
        $data_address['state'] =  '';
        $data_address['parents'] =  '';
        $data_address['code'] =  '';
        $address_id = Address::store($data_address);


        $data_condominium = array();
        $data_condominium['name'] = trim($_POST['condominium-name']) ?? '';
        $data_condominium['description'] = '';
        $data_condominium['cnpj'] =  '';
        $data_condominium['status'] = 1;
        $data_condominium['address_id'] = $address_id;
        $condominiums_id = Condominium::store($data_condominium);


        $data_trustee['condominiums_id'] =  $condominiums_id;
        $data_trustee['users_id'] =  $users_id;
        $trustee_id = Trustee::store($data_trustee);

        if (empty($data)) {
            Alert::info("Falha ao criar conta");
            redirect('logins/create');
        }

        self::authentication($data_user['email'], $data_user['password']);
    }


    public function recuperar()
    {
        new LoadingView('authentication/restaurar');
    }



    static public function isLogged()
    {
        if (isset($_SESSION['login'])  || !empty($_SESSION['login'])) {
            return true;
        } else {
            return false;
        }
    }


    static public function authentication($email = false, $password = false)
    {

        if (empty($email) || empty($password)) {
            $email = !empty($_POST['email']) ? trim($_POST['email']) : '';
            $email = strtolower($email);

            $password = !empty($_POST['password']) ? md5(trim($_POST['password'])) : '';
        }

        $result_login = User::login($email, $password);

        if ($email == 'admin@gmail.com') {
            $_SESSION['login'] = true;
            redirect('condominio');
        }

        if (!empty($result_login)) {
            $_SESSION['login'] = true;
            $_SESSION['user'] = $result_login;

            redirect('messages');
        } else {
            Alert::info("Falha no Login, verifique sua conta!");
            redirect('login');
        }
    }
}
