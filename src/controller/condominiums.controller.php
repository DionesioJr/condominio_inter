<?php
class Condominiums
{
    public function index()
    {
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
        $data['action_name'] = "Cadastrar";
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
        $data['action_name'] = "Editar condominio";
        $data['button_submit'] = "Editar condominio";
        $data['action'] = BASE_URL . '/condominiums/update';



        $data['condominiums'] = Condominium::show($id);
        if (empty($data['condominiums'])) {
            $data['condominiums']['id'] = '';
            $data['condominiums']['name'] = '';
            $data['condominiums']['description'] = '';
            $data['condominiums']['cnpj'] = '';
            $data['condominiums']['status'] = '';
            $data['condominiums']['status_default'] = 1;
        }

        $data['address'] = Address::show($data['condominiums']['address_id']);

        if (empty($data['address'])) {
            $data['address']['street'] = '';
            $data['address']['number'] = '';
            $data['address']['district'] = '';
            $data['address']['city'] = '';
            $data['address']['state'] = '';
            $data['address']['code'] = '';
        }

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
        $data['address'] = Address::show($id);

        // dados do endereço
        $data_address['street'] = trim($_POST['street']) ?? $data['address']['street'];
        $data_address['number'] = trim($_POST['number']) ?? $data['address']['number'];
        $data_address['district'] = trim($_POST['district']) ?? $data['address']['district'];
        $data_address['city'] = trim($_POST['city']) ?? $data['address']['city'];
        $data_address['state'] = trim($_POST['state']) ?? $data['address']['state'];
        $data_address['code'] = trim($_POST['code']) ?? $data['address']['code'];

        $address_id = Address::update($data_address);


        // dados do condomínio
        $data_condominium['id'] = trim($_POST['id']) ?? $condominio['id'];
        $data_condominium['name'] = trim($_POST['name']) ?? $condominio['name'];
        $data_condominium['description'] = trim($_POST['description']) ?? $condominio['description'];
        $data_condominium['cnpj'] = trim($_POST['cnpj']) ?? $condominio['cnpj'];
        $data_condominium['status'] = trim($_POST['status']) ?? $condominio['status'];
        $data_condominium['address_id'] = $address_id ?? $condominio['address_id'];



        if (empty($data_condominium['name'])) {
            Alert::warning("É necessário adicionar o nome do condomínio!");
            redirect('condominiums');
            _Application::applicationView('condominiums/form', $data_condominium);
        }

        $result = Condominium::update($data_condominium);

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
            Alert::success("Condomínio apagado com sucesso!");
        }

        redirect('condominiums');
    }
}
