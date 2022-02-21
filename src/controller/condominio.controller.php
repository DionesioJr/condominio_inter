<?php
class Condominio
{
    public function index()
    {
        $data = $_SESSION;
        $data['condominios'] = Condominium::index();
        $data['header']['title'] = 'Condomínios';

        if (empty($data['condominios'])) {
            _Application::applicationView('condominio/empty', $data);
        } else {
            _Application::applicationView('condominio/condominio', $data);
        }
    }
 
    public function cadastro()
    {
        $data = $_SESSION;
        $data['title'] = "Cadastro de condominio";
        $data['button_submit'] = "Cadastrar";
        $data['action'] = BASE_URL . '/condominio/save';


        $data['condominio']['id'] = '';
        $data['condominio']['nome'] = '';
        $data['condominio']['idade'] = '';
        $data['condominio']['peso'] = '';
        $data['condominio']['altura'] = '';
        $data['condominio']['sexo'] = '';
        $data['condominio']['email'] = '';
        $data['condominio']['senha'] = '';
        $data['condominio']['tipo'] = '';
        $data['condominio']['status'] = '';

        _Application::applicationView('condominio/form', $data);
    }

    public function editar()
    {
        $id = trim($_GET['id']);
        $data = $_SESSION;

        $data['condominio']['id'] = '';
        $data['condominio']['nome'] = '';
        $data['condominio']['idade'] = '';
        $data['condominio']['peso'] = '';
        $data['condominio']['altura'] = '';
        $data['condominio']['sexo'] = '';
        $data['condominio']['email'] = '';
        $data['condominio']['tipo'] = '';
        $data['condominio']['status'] = '';
        $data['condominio'] = Condominium::show($id);
        $data['condominio']['senha'] = '';

        $data['title'] = "Editar condominio";
        $data['button_submit'] = "Editar condominio";
        $data['action'] = BASE_URL . '/condominio/update';
        _Application::applicationView('condominio/form', $data);
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

        $result = Condominium::store($data);

        if (empty($result)) {
            Alert::error("Falha ao criar conta!");
        } else {
            Alert::success("Usuario criado com sucesso!");
        }

        redirect('condominio');
    }

    public function update()
    {

        $id = trim($_POST['id']);
        $condominio = Condominium::show($id);

        $data['id'] = trim($_POST['id']) ?? $condominio['id'];
        $data['nome'] = trim($_POST['nome']) ?? $condominio['nome'];
        $data['idade'] = trim($_POST['idade']) ?? $condominio['idade'];
        $data['peso'] = trim($_POST['peso']) ?? $condominio['peso'];
        $data['altura'] = trim($_POST['altura']) ?? $condominio['altura'];
        $data['sexo'] = trim($_POST['sexo']) ?? $condominio['sexo'];
        $data['email'] = trim($_POST['email']) ?? $condominio['email'];
        $data['tipo'] = trim($_POST['tipo']) ?? $condominio['tipo'];
        $data['status'] = trim($_POST['status']) ?? $condominio['status'];

        if (empty(trim($_POST['senha']))) {
            $data['senha'] = $condominio['senha'];
        } else {
            $data['senha'] = md5(trim($_POST['senha']));
        }

        $result = Condominium::update($data);

        if (empty($result)) {
            Alert::error("Falha ao criar conta!");
        } else {
            Alert::success("Usuario criado com sucesso!");
        }

        redirect('condominio');
    }

    public function excluir()
    {
        $id = trim($_GET['id']);
        $result = Condominium::destroy($id);

        if (empty($result)) {
            Alert::error("Falha ao tentar apagar a conta!");
        } else {
            Alert::success("Usuario apagado com sucesso!");
        }

        redirect('condominio');
    }
}
