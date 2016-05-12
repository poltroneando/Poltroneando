<?php

class IndexController extends Zend_Controller_Action {

    public function init() {
        
    }

    public function indexAction() {
        $usuario = Zend_Auth::getInstance()->getIdentity();
	$this->view->usuario = $usuario;
    }
}
