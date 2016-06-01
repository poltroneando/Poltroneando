<?php

class PaisController extends Zend_Controller_Action
{

    public function init()
    {
        if ( !Zend_Auth::getInstance()->hasIdentity() ) {
		return $this->_helper->redirector->goToRoute( array('controller' => 'auth'), null, true);
	}
    }

    public function indexAction()
    {
        if (Zend_Auth::getInstance()->hasIdentity()) {
            $usuario = Zend_Auth::getInstance()->getIdentity();
            $this->view->logado = 1;
            $this->view->usuario = $usuario;
        } else {
            $this->view->usuario = NULL;
            $this->view->logado = 0;
        }

        $paises = new Application_Model_Paises();
        $lista = $paises->listar();
        $this->view->listaPaises = $lista;
    }


}

