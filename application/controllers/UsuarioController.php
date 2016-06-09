<?php

class UsuarioController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
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
        $model = new Application_Model_Usuario();
        $dados = $model->select();
        $this->view->assign("dados",$dados);
    }

    public function newAction()
    {
    }
    public function createAction()
    {
        $model = new Application_Model_Usuario();
        $model->insert($this->_getAllParams());
        $this->_redirect('usuario/index');
    }

}



