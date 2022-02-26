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

    public function cadastro()
    {
        $data = $_SESSION;
        $data['title'] = "Cadastrar novo usuário";
        $data['button_submit'] = "Cadastrar";
        $data['action'] = BASE_URL . '/users/save';


        $data['users']['id'] = '';
        $data['users']['name'] = '';
        $data['users']['email'] = '';
        $data['users']['password'] = '';
        $data['users']['status'] = '';
        $data['users']['is_admin'] = '';

        _Application::applicationView('users/form', $data);
    }

    public function editar()
    {
        $id = trim($_GET['id']);
        $data = $_SESSION;

        $data['users']['id'] = '';
        $data['users']['nome'] = '';
        $data['users']['idade'] = '';
        $data['users']['peso'] = '';
        $data['users']['altura'] = '';
        $data['users']['sexo'] = '';
        $data['users']['email'] = '';
        $data['users']['tipo'] = '';
        $data['users']['status'] = '';
        $data['users'] = User::show($id);
        $data['users']['senha'] = '';

        $data['title'] = "Editar users";
        $data['button_submit'] = "Editar Usuário";
        $data['action'] = BASE_URL . '/users/update';
        _Application::applicationView('users/form', $data);
    }

    public function save()
    {
        $data['name'] = trim($_POST['name']) ?? '';
        $data['email'] = trim($_POST['email']) ?? '';
        $data['password'] = trim($_POST['password']) ?? '';
        $data['status'] = trim($_POST['status']) ?? 1;
        $data['is_admin'] = trim($_POST['is_admin']) ?? 1;

        $result = User::store($data);


        if (empty($data['name'])) {
            Alert::warning("É necessário adicionar um nome para o usuário!");
            redirect('users/cadastro');
        }

        if (empty($data['email'])) {
            Alert::warning("É necessário adicionar um email!");
            redirect('users/cadastro');
        }

        if (empty($data['password'])) {
            Alert::warning("É necessário adicionar uma senha!");
            redirect('users/cadastro');
        }

        if (empty($result)) {
            Alert::error("Falha ao criar conta!");
        } else {
            Alert::success("Usuario criado com sucesso!");
        }


        if ($_POST['save'] == '1') {
            redirect('users/cadastro');
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

    public function excluir()
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
