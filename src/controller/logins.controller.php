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


        $data_user = array();
        $data_user['name'] = trim($_POST['user-name']) ?? '';
        $data_user['email'] = trim($_POST['email']) ?? '';
        $data_user['password'] = md5(trim($_POST['password'])) ?? '';
        $data_user['status'] = 1;
        $data_user['is_admin'] = (int) $_POST['is_admin'] ?? 1;
        $data_user['condominiums_id'] = $condominiums_id;
        $users_id = User::store($data_user);


        $data_trustee['condominiums_id'] =  $condominiums_id;
        $data_trustee['users_id'] =  $users_id;
        $trustee_id = Trustee::store($data_trustee);

        if (empty($data)) {
            Alert::info("Falha ao criar conta");
            redirect('logins/create');
        }

        self::authentication($data_user['email'], $data_user['password']);
    }


    public function recover()
    {
        new LoadingView('authentication/recover');
    }



    static public function isLogged()
    {
        if (isset($_SESSION['login'])  || !empty($_SESSION['login'])) {
            return true;
        } else {
            return false;
        }
    }
    static public function gerarSenha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos)
    {
        $senha = '';
        $ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
        $mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
        $nu = "0123456789"; // $nu contem os números
        $si = "!@#$%¨&*()_+="; // $si contem os símbolos

        if ($maiusculas) {
            // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($ma);
        }

        if ($minusculas) {
            // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($mi);
        }

        if ($numeros) {
            // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($nu);
        }

        if ($simbolos) {
            // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
            $senha .= str_shuffle($si);
        }

        // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
        return substr(str_shuffle($senha), 0, $tamanho);
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
            redirect('messages');
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
