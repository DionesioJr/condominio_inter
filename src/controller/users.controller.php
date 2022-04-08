<?php
class Users
{

    public function index()
    {
        $data = $_SESSION;
        $Users = User::index();
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
        $data['users']['is_admin'] = '';
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

        $data['users'] = User::show($id);

        if (empty($data['users'])) {
            $data['users']['id'] = '';
            $data['users']['nome'] = '';
            $data['users']['email'] = '';
            $data['users']['tipo'] = '';
            $data['users']['status'] = '';
        }

        _Application::applicationView('users/form', $data);
    }

    public function store()
    {
        $data['name'] = trim($_POST['name']) ?? '';
        $data['email'] = trim($_POST['email']) ?? '';
        $data['password'] = md5(trim($_POST['password'])) ?? '';
        $data['status'] = trim($_POST['status']) ?? 1;
        $data['is_admin'] = trim($_POST['is_admin']) ?? 1;

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
        $id = $_POST['id'];
        $data['users'] = User::show($id);

        $data['users']['name'] = trim($_POST['name']) ?? $data['users']['name'];
        $data['users']['email'] = trim($_POST['email']) ?? $data['users']['email'];
        $data['users']['password'] = md5(trim($_POST['password'])) ?? $data['users']['password'];
        $data['users']['status'] = trim($_POST['status']) ?? $data['users']['status'];
        $data['users']['is_admin'] = trim($_POST['is_admin']) ?? $data['users']['is_admin'];


        if (empty(trim($_POST['password']))) {
            $data['password'] = $data['users']['password'];
        } else {
            $data['password'] = md5(trim($_POST['password']));
        }

        $result = User::update($data);

        if (empty($result)) {
            Alert::error("Falha ao atualizar conta!");
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
