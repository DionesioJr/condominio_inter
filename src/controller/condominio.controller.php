<?php
class Condominio
{
    public function index()
    {
        $data = $_SESSION;
        $data['condominiums'] = Condominium::index();
        $data['header']['title'] = 'Condomínios';
        $row = array();

        foreach ($data['condominiums'] as $key => $value) {

            $value['status_name'] = condominiohelp::getStatusName($value['status']);
            $row[] = $value;
        }

        $data['condominiums'] = $row;

        if (empty($data['condominiums'])) {
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

        $data_address['street'] = trim($_POST['street']) ?? '';
        $data_address['number'] = trim($_POST['number']) ?? '';
        $data_address['district'] = trim($_POST['district']) ?? '';
        $data_address['city'] = trim($_POST['city']) ?? '';
        $data_address['state'] = trim($_POST['state']) ?? '';
        $data_address['code'] = trim($_POST['code']) ?? '';

        $address_id = Address::store($data_address);

        $data_condominium['name'] = trim($_POST['name']) ?? '';
        $data_condominium['description'] = trim($_POST['description']) ?? '';
        $data_condominium['cnpj'] = trim($_POST['cnpj']) ?? '';
        $data_condominium['status'] = trim($_POST['status']) ?? 1;
        $data_condominium['address_id'] = $address_id ?? '';

        if (empty($data_condominium['name'])) {
            Alert::warning("É necessário adicionar o nome do condomínio!");
            redirect('condominio/cadastro');
        }

        if (empty($data_address['street'])) {
            Alert::warning("É necessário adicionar o endereço!");
            redirect('condominio/cadastro');
        }


        $condominium_id = Condominium::store($data_condominium);

        if (empty($condominium_id)) {
            Alert::error("Falha ao cadastrar condominio!");
        } else {
            Alert::success("Condomínio cadastrado com sucesso!");
        }

        if ($_POST['save'] == '1') {
            redirect('condominio/cadastro');
        } else if ($_POST['save'] == '2') {
            redirect('condominio');
        }
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
