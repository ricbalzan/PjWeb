
<?php

class Usuario{
    
    var $cpf;
    var $nome;
    var $email;
    var $senha;
    var $nascimento;
    var $rg;
    var $ativo;
    var $contrato;
    var $tipo;
    
    //metodo para atribuir/buscar valores de uma variavel;
    public function __construct() {

    }

    public function __set($propiedade, $valor) {
        $this->propriedade = $valor; 
    }

    public function __get($propiedade){
        return $this->propriedade;
    }
}
    ?>