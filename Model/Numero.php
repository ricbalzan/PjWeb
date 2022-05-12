
<?php

class linhas{
    
    var $numero;
    var $sim;
    var $data;

    
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