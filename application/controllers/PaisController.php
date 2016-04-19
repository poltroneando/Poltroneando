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
        $paises = new Application_Model_Paises();
        $lista = $paises->listar();
        $this->view->listaPaises = $lista;
    }


}

