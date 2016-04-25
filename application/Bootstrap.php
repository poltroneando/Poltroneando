<?php

require_once("plugins/Layout_Plugin.php");
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoload()
    {
        $autoloader = new Zend_Application_Module_Autoloader(array(
            'basePath' => APPLICATION_PATH,
            'namespace' => ''
        ));
        $front = Zend_Controller_Front::getInstance();
        $front->registerPlugin(new Layout_Plugin());
        $front->dispatch();        
        return $autoloader;
    }
}

