<?php

class Application_Model_Usuario {

    protected $_name = "usuario";

    public function select($where = null, $order = null, $limit = NULL) {
        $dao = new Application_Model_DbTable_Usuario();
        $select = $dao->select()->from($dao)->order($order)->limit($limit);
        if (!is_null($where)) {
            $select->where($where);
        }
        return $dao->fetchAll($select)->toArray();
    }

    public function insert(array $request) {
        $dao = new Application_Model_DbTable_Usuario();
        $dados = array(
            'email' => $request['email'],
            'nome' => $request['nome'],
            'data_nasc' => $request['data_nasc'],
            'senha' => md5($request['senha'])
        );
        return $dao->insert($dados);
    }

}
