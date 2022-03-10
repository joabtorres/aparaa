<?php

class homeController extends controller {

    public function index() {
        $crudModel = new crud_db();
        $viewName = "home-page";
        $dados = array();
        $this->loadView($viewName, $dados);
    }

}

?>