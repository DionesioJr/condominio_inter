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


        $data['users']['id'] = '';
        $data['users']['name'] = '';
        $data['users']['email'] = '';
        $data['users']['password'] = '';
        $data['users']['status'] = '';
        $data['users']['is_admin'] = '';

        _Application::applicationView('users/form', $data);
    }

    public function edit()
    {
        $id = trim($_GET['id']);
        $data = $_SESSION;

        $data['users']['id'] = '';
        $data['users']['nome'] = '';
        $data['users']['email'] = '';
        $data['users']['tipo'] = '';
        $data['users']['status'] = '';
        $data['users'] = User::show($id);

        $data['title'] = "Editar users";
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
            Alert::success("Usuario criado com sucesso!");
        }


        if ($_POST['save'] == '1') {
            redirect('users/create');
        } else if ($_POST['save'] == '2') {
            redirect('users');
        }
    }

    public function update()
    {

        $id = trim($_POST['id']);
        $users = User::show($id);

        $data['id'] = trim($_POST['id']) ?? $users['id'];
        $data['nome'] = trim($_POST['nome']) ?? $users['nome'];
        $data['idade'] = trim($_POST['idade']) ?? $users['idade'];
        $data['peso'] = trim($_POST['peso']) ?? $users['peso'];
        $data['altura'] = trim($_POST['altura']) ?? $users['altura'];
        $data['sexo'] = trim($_POST['sexo']) ?? $users['sexo'];
        $data['email'] = trim($_POST['email']) ?? $users['email'];
        $data['tipo'] = trim($_POST['tipo']) ?? $users['tipo'];
        $data['status'] = trim($_POST['status']) ?? $users['status'];

        if (empty(trim($_POST['senha']))) {
            $data['senha'] = $users['senha'];
        } else {
            $data['senha'] = md5(trim($_POST['senha']));
        }

        $result = User::update($data);

        if (empty($result)) {
            Alert::error("Falha ao criar conta!");
        } else {
            Alert::success("Usuario criado com sucesso!");
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
