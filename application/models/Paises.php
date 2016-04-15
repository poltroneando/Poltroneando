<?php

class Application_Model_Paises extends Zend_Db_Table_Abstract
{
    protected $_name = "pais";
    public function listar()
    {
        $select = $this->select()->order("nome_pais asc");
        return $this->fetchAll($select)->toArray();
    }

}

