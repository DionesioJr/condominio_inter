<?php
class Users
{
    private $condominiums_id;

    public function __construct()
    {
        $data = $_SESSION;

        $this->condominiums_id = $_SESSION['user']['condominiums_id'];

        if (empty($data['user']['is_admin'])) {
            exit;
        }
    }

    public function index()
    {
        $data = $_SESSION;
        $Users = User::index($this->condominiums_id);
        $row = array();


        foreach ($Users as $key => $value) {

            //status
            $value['status_name'] = UsersHelp::getStatusName($value['status']);
            // administração
            $value['admin_name'] = UsersHelp::getAdminName($value['is_admin']);

            $row[] = $value;
        }

        $data['users'] = $row;


        if (empty($data['users'])) {
            _Application::applicationView('users/empty', $data);
        } else {
            _Application::applicationView('users/users', $data);
        }
    }

    public function create()
    {
        $data = $_SESSION;
        $data['title'] = "Cadastrar novo usuário";
        $data['button_submit'] = "Cadastrar";
        $data['action'] = BASE_URL . '/users/store';


        $data['users']['name'] = '';
        $data['users']['email'] = '';
        $data['users']['password'] = '';
        $data['users']['status'] = '';
        $data['users']['is_admin'] = 0;
        $data['users']['status_default'] = 1;
        $data['users']['admin_default'] = 1;


        _Application::applicationView('users/form', $data);
    }

    public function edit()
    {
        $id = trim($_GET['id']);
        $data = $_SESSION;
        $data['title'] = "Editar usuário";
        $data['button_submit'] = "Editar Usuário";
        $data['action'] = BASE_URL . '/users/update';

        $data['users'] = User::show($id, $this->condominiums_id);

        if (empty($data['users'])) {
            $data['users']['id'] = '';
            $data['users']['name'] = '';
            $data['users']['email'] = '';
            $data['users']['tipo'] = '';
            $data['users']['status'] = '';
        }

        $data['address'] = Address::show($id);
        if (empty($data['users'])) {
            $data['address']['street'] = '';
            $data['address']['number'] = '';
            $data['address']['district'] = '';
            $data['address']['city'] = '';
            $data['address']['state'] = '';
            $data['address']['code'] = '';
        }


        $data['action_name'] = "Editar usuários";
        $data['button_submit'] = "Editar Usuário";
        $data['action'] = BASE_URL . '/users/update';

        _Application::applicationView('users/form', $data);
    }

    public function store()
    {
        $data['name'] = trim($_POST['name']) ?? '';
        $data['email'] = trim($_POST['email']) ?? '';
        $data['password'] = md5(trim($_POST['password'])) ?? '';
        $data['status'] = trim($_POST['status']) ?? 1;
        $data['is_admin'] = (int) $_POST['is_admin'];
        $data['condominiums_id'] = $_SESSION['user']['condominiums_id'];

        $result = User::store($data);



        if (empty($data['name'])) {
            Alert::warning("É necessário adicionar um nome para o usuário!");
            redirect('users/create');
        }

        if (empty($data['email'])) {
            Alert::warning("É necessário adicionar um email!");
            redirect('users/create');
        }

        if (empty($data['password'])) {
            Alert::warning("É necessário adicionar uma senha!");
            redirect('users/create');
        }

        if (empty($result)) {
            Alert::error("Falha ao criar conta!");
        } else {
            Alert::success("Usuário criado com sucesso!");
        }
        redirect('users');
    }

    public function update()
    {
        $id = trim($_POST['id']);

        if (empty($id)) {
            Alert::error("Falha ao atualizar usuario!");
            redirect('users');
        }

        $users = User::show($id, $this->condominiums_id);

        $data['id'] = trim($_POST['id'] ?? $users['id']);
        $data['name'] = trim($_POST['name'] ?? $users['name']);
        $data['email'] = trim($_POST['email'] ?? $users['email']);
        $data['password'] = trim($_POST['password'] ?? $users['password']);
        $data['status'] = trim($_POST['status'] ?? $users['status']);
        $data['is_admin'] = (int) $_POST['is_admin'];
        $data['condominiums_id'] = (int) $this->condominiums_id;


        if (empty(trim($_POST['password']))) {
            $data['password'] = $users['password'];
        } else {
            $data['password'] = md5(trim($_POST['password']));
        }

        $result = User::update($data);

        if (empty($result)) {
            Alert::error("Falha ao atualizar usuario!");
        } else {
            Alert::success("Usuário atualizado com sucesso!");
        }

        redirect('users');
    }

    public function destroy()
    {
        $id = trim($_GET['id']);

        if (empty($id)) {
            return false;
        }


        $result = User::destroy($id);

        if (empty($result)) {
            Alert::error("Falha ao tentar apagar a conta!");
        } else {
            Alert::success("Usuario apagado com sucesso!");
        }

        redirect('users');
    }
}
