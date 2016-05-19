<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
        
    }

    public function indexAction() {
        if (Zend_Auth::getInstance()->hasIdentity()) {
            $usuario = Zend_Auth::getInstance()->getIdentity();
            $this->view->logado = 1;
            $this->view->usuario = $usuario;
        } else {
            $this->view->usuario = NULL;
            $this->view->logado = 0;
//            $usuario = 0;
        }
//        $usuario = Zend_Auth::getInstance()->getIdentity();
    }

}
