<?php

class PaisController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $paises = new Application_Model_Paises();
        $lista = $paises->listar();
        $this->view->listaPaises = $lista;
    }


}

