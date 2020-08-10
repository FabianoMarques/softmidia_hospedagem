<?php

class Conexao{

    public $localhost = "";
    public $usuario = "";
    public $senha = "";
    public $banco = "";
    
    public function getMysqli(){

        // Conecta-se ao banco de dados MySQL
        $mysqli = new mysqli($this->localhost, $this->usuario, $this->senha, $this->banco);

        return $mysqli;
        
    }
    

}
    


    


?>

