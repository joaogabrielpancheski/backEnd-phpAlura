<?php

namespace classes\abstratas;

abstract class FuncionarioAutenticavel extends Funcionario {

    public $senha;

    public function autenticar ($senha) {
        return ($senha == $this->senha) ? true : false;
    }
}


