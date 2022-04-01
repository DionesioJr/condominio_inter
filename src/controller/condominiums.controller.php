<?php
class Condominiums
{
    public function index()
    {
        $data = $_SESSION;
        $data['condominiums'] = Condominium::index();

        foreach ($data['condominiums'] as $key => $value) {
            $data['condominiums'][$key]['address'] = Address::show($value['address_id']);
        }

        $data['header']['title'] = 'Condomínios';
        $row = array();

        foreach ($data['condominiums'] as $key => $value) {

            $value['status_name'] = condominiohelp::getStatusName($value['status']);
            $row[] = $value;
        }

        $data['condominiums'] = $row;

        if (empty($data['condominiums'])) {
            _Application::applicationView('condominiums/empty', $data);
        } else {
            _Application::applicationView('condominiums/condominiums', $data);
        }
    }

    public function create()
    {
        $data = $_SESSION;
        $data['title'] = "Cadastro de condominio";
        $data['button_submit'] = "Cadastrar";
        $data['action'] = BASE_URL . '/condominiums/store';


        $data['condominiums']['id'] = '';
        $data['condominiums']['name'] = '';
        $data['condominiums']['description'] = '';
        $data['condominiums']['cnpj'] = '';
        $data['condominiums']['status'] = '';
        $data['condominiums']['status_default'] = 1;


        $data['address']['street'] = '';
        $data['address']['number'] = '';
        $data['address']['district'] = '';
        $data['address']['city'] = '';
        $data['address']['state'] = '';
        $data['address']['code'] = '';

        _Application::applicationView('condominiums/form', $data);
    }

    public function edit()
    {
        $id = trim($_GET['id']);
        $data = $_SESSION;
        $data['title'] = "Editar condominio";
        $data['button_submit'] = "Editar condominio";
        $data['action'] = BASE_URL . '/condominiums/update';

        $data['condominiums'] = Condominium::show($id);
        $data['address'] = Address::show($id);

        _Application::applicationView('condominiums/form', $data);
    }

    public function store()
    {

        // adicionando endereco
        $data_address['street'] = trim($_POST['street']) ?? '';
        $data_address['number'] = trim($_POST['number']) ?? '';
        $data_address['district'] = trim($_POST['district']) ?? '';
        $data_address['city'] = trim($_POST['city']) ?? '';
        $data_address['state'] = trim($_POST['state']) ?? '';
        $data_address['code'] = trim($_POST['code']) ?? '';

        $address_id = Address::store($data_address);


        // criação do condominio
        $data_condominium['name'] = trim($_POST['name']) ?? '';
        $data_condominium['description'] = trim($_POST['description']) ?? '';
        $data_condominium['cnpj'] = trim($_POST['cnpj']) ?? '';
        $data_condominium['status'] = trim($_POST['status']) ?? 1;
        $data_condominium['address_id'] = $address_id ?? '';

        if (empty($data_condominium['name'])) {
            Alert::warning("É necessário adicionar o nome do condomínio!");
            redirect('condominiums/create');
            _Application::applicationView('condominiums/form', $data_condominium);
        }

        $condominium_id = Condominium::store($data_condominium);


        // if (empty($data_address['street'])) {
        //     Alert::warning("É necessário adicionar o endereço!");
        //     redirect('condominiums/create');
        // }



        if (empty($condominium_id)) {
            Alert::error("Falha ao cadastrar condominio!");
        } else {
            Alert::success("Condomínio cadastrado com sucesso!");
        }
        redirect('condominiums');
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
            Alert::error("Falha ao atualizar Condomínio!");
        } else {
            Alert::success("Condomínio atualizado com sucesso!");
        }

        redirect('condominiums');
    }

    public function destroy()
    {
        $id = trim($_GET['id']);
        $result = Condominium::destroy($id);

        if (empty($result)) {
            Alert::error("Falha ao tentar apagar a conta!");
        } else {
            Alert::success("Usuario apagado com sucesso!");
        }

        redirect('condominiums');
    }
}
