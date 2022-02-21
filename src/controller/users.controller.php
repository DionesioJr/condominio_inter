<?php
class Users
{


    public function index()
    {
        $data = $_SESSION;
        $data['users'] = User::index();

        if (empty($data['users'])) {
            _Application::applicationView('users/empty', $data);
        } else {
            _Application::applicationView('users/users', $data);
        }
    }

    public function cadastro()
    {
        $data = $_SESSION;
        $data['title'] = "Cadastro de Condomínio";
        $data['button_submit'] = "Cadastrar";
        $data['action'] = BASE_URL . '/users/save';


        $data['users']['id'] = '';
        $data['users']['nome'] = '';
        $data['users']['idade'] = '';
        $data['users']['peso'] = '';
        $data['users']['altura'] = '';
        $data['users']['sexo'] = '';
        $data['users']['email'] = '';
        $data['users']['senha'] = '';
        $data['users']['tipo'] = '';
        $data['users']['status'] = '';

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
        $data['button_submit'] = "Editar Condomínio";
        $data['action'] = BASE_URL . '/users/update';
        _Application::applicationView('users/form', $data);
    }

    public function save()
    {
        $data['id'] = trim($_POST['id']) ?? '';
        $data['nome'] = trim($_POST['nome']) ?? '';
        $data['idade'] = trim($_POST['idade']) ?? '';
        $data['peso'] = trim($_POST['peso']) ?? '';
        $data['altura'] = trim($_POST['altura']) ?? '';
        $data['sexo'] = trim($_POST['sexo']) ?? '';
        $data['email'] = trim($_POST['email']) ?? '';
        $data['senha'] = md5(trim($_POST['senha'])) ?? '';
        $data['tipo'] = trim($_POST['tipo']) ?? '';
        $data['status'] = trim($_POST['status']) ?? '';

        $result = User::store($data);

        if (empty($result)) {
            Alert::error("Falha ao criar conta!");
        } else {
            Alert::success("Usuario criado com sucesso!");
        }

        redirect('users');
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
        $result = User::destroy($id);

        if (empty($result)) {
            Alert::error("Falha ao tentar apagar a conta!");
        } else {
            Alert::success("Usuario apagado com sucesso!");
        }

        redirect('users');
    }

}
