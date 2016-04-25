<?php

class Layout_Plugin extends Zend_Controller_Plugin_Abstract
{
    public function preDispatch(Zend_Controller_Request_Abstract $request) 
    {
        $layout = Zend_Layout::getMvcInstance();

        $layout->getView()->usuario = 'Teste';

//        $view->usuario = Zend_Auth::getInstance()->getIdentity();
//        $view->usuario = 'teste';
    }
}
