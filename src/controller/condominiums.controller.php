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
        $data['action_name'] = "Cadastrar";
        $data['action'] = BASE_URL . '/condominiums/store';

        $data['condominium']['name'] = '';
        $data['condominium']['description'] = '';
        $data['condominium']['cnpj'] = '';
        $data['condominium']['status'] = '';
        $data['condominium']['address_id'] = '';

        _Application::applicationView('condominiums/form', $data);
    }

    public function edit()
    {
        $id = trim($_GET['id']);
        $data = $_SESSION;
        $data['title'] = "Editar condominio";
        $data['action_name'] = "Editar condominio";
        $data['action'] = BASE_URL . '/condominiums/update';

        $data['condominium'] = Condominium::show($id);
        $data['address'] = Address::show($data['condominium']['address_id']);


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

        if ($_POST['save'] == '1') {
            redirect('condominiums/create');
        } else if ($_POST['save'] == '2') {
            redirect('condominiums');
        }
    }

    public function update()
    {

        $id = trim($_POST['id']);
        $condominio = Condominium::show($id);


        $data['id'] = trim($_POST['id']) ?? $condominio['id'];
        $data['name'] = trim($_POST['name']) ?? $condominio['name'];
        $data['description'] = trim($_POST['description']) ?? $condominio['description'];
        $data['cnpj'] = trim($_POST['cnpj']) ?? $condominio['cnpj'];
        $data['status'] = trim($_POST['status']) ?? $condominio['status'];
        $data['address_id'] = trim($_POST['address_id']) ?? $condominio['address_id'];
        $result = Condominium::update($data);

        if (empty($result)) {
            Alert::error("Falha ao atualizar condominio!");
        } else {
            Alert::success("Condominio Atualziado com sucesso!");
        }

        redirect('Condominiums');
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
