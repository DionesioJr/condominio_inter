<?php
class Finance
{


    public function index()
    {
        $data = $_SESSION;
        $Users = Financial::index();
        $row = array();



        foreach ($Users as $key => $value) {


            $row[] = $value;
        }

        $data['financial'] = $row;


        if (empty($data['financial'])) {
            _Application::applicationView('financial/empty', $data);
        } else {
            _Application::applicationView('financial/financial', $data);
        }
    }

    public function create()
    {
        $data = $_SESSION;
        $data['title'] = "Cadastrar novo financeiro";
        $data['button_submit'] = "Cadastrar";
        $data['action'] = BASE_URL . '/finance/store';


        $data['financial']['name'] = '';
        $data['financial']['description'] = '';
        $data['financial']['cost'] = '';
        $data['financial']['due_date'] = date("Y-m-d");
        $data['financial']['additional_charge'] = '';

        _Application::applicationView('financial/form', $data);
    }

    public function edit()
    {
        $id = trim($_GET['id']);
        $data = $_SESSION;
        $data['title'] = "Editar financeiro";
        $data['button_submit'] = "Editar financeiro";
        $data['action'] = BASE_URL . '/finance/update';

        $data['financial'] = Financial::show($id);



        if (empty($data['financial'])) {
            redirect('finance');
        }

        $date = date_create($data['financial']['due_date']);
        $data['financial']['due_date'] = date_format($date, 'Y-m-d');

        _Application::applicationView('financial/form', $data);
    }

    public function store()
    {
        $data['name'] = trim($_POST['name'] ?? '');
        $data['description'] = trim($_POST['description'] ?? '');
        $data['cost'] = trim($_POST['cost'] ?? '');
        $data['due_date'] = trim($_POST['due_date'] ?? date("Y-m-d"));
        $data['additional_charge'] = trim($_POST['additional_charge'] ?? '');

        $result = Financial::store($data);

       


        if (empty($result)) {
            Alert::warning("Falha ao adicionar financeiro!");
            redirect('finance/create');
        }

        if (empty($data['name'])) {
            Alert::warning("É necessário adicionar um nome para o financeiro!");
            redirect('finance/create');
        }


        Alert::success("Financeiro criado com sucesso!");
        redirect('finance');
    }

    public function update()
    {
        $id = trim($_POST['id']);
        if (empty($id)) {
            Alert::error("Falha ao atualizar!");
            redirect('finance');
        }

        $financial = financial::show($id);
        if (empty($financial)) {
            Alert::error("Falha ao atualizar!");
            redirect('finance');
        }

        $data['id'] = trim($_POST['id'] ?? $financial['id']);
        $data['name'] = trim($_POST['name'] ?? $financial['name']);
        $data['description'] = trim($_POST['description'] ?? $financial['description']);
        $data['cost'] = trim($_POST['cost'] ?? $financial['cost']);
        $data['due_date'] = trim($_POST['due_date'] ?? $financial['due_date']);
        $data['additional_charge'] = trim($_POST['additional_charge'] ?? $financial['additional_charge']);

        $result = financial::update($data);

        if (empty($result)) {
            Alert::error("Falha ao atualizar!");
        } else {
            Alert::success("Criado com sucesso!");
        }

        redirect('finance');
    }

    public function destroy()
    {
        $id = trim($_GET['id']);

        if (empty($id)) {
            return false;
        }

        $result = Financial::destroy($id);

        if (empty($result)) {
            Alert::error("Falha ao tentar apagar!");
        } else {
            Alert::success("Apagado com sucesso!");
        }

        redirect('finance');
    }
}
