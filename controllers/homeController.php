<?php

class homeController extends controller {

    public function index() {
        $crudModel = new crud_db();
        $viewName = "home-page";
        $dados = array();
        $dados['producao'] = $crudModel->read('SELECT p.producao, COUNT(*) as qtd FROM associado_producao as ap INNER JOIN producao as p ON p.cod=ap.producao_cod GROUP BY p.producao ORDER BY qtd DESC');
        $resultado = $crudModel->read_specific('SELECT COUNT(*) as qtd FROM associado_producao ');
        $dados['totalProducao'] = 0;
        if (!empty($resultado)) {
            $dados['totalProducao'] = $resultado['qtd'];
        }
        $this->loadView($viewName, $dados);
    }

}

?>