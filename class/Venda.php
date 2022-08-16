<?php
require_once __DIR__ . '/../conexaobd/ConexaoBD.php';
require_once __DIR__ . '/../config.php';

class Venda {
    private $codCliente;
    private $dataVenda;

    function __construct($argCodCliente, $argDataVenda) {
        $this->codCliente = $argCodCliente;
        $this->dataVenda = $argDataVenda;
    }

    public static function listar(){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT * FROM venda";
        $resultado = $db->query($sql);
        return $resultado;
    }

    public function existe($argCodVenda){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT * FROM venda WHERE codVenda = $argCodVenda";
        $result = $db->existe($sql);

        if($result == true){
            return true;
        }
        return false;
    }

    public static function incluir($codCliente, $dataVenda){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "INSERT INTO venda (codCliente, dataVenda) VALUES ('$codCliente', '$dataVenda')";
        $db->execute($sql);
    }

    public static function ultimaVenda(){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT MAX(codVenda) FROM venda";
        $result = $db->query($sql)->fetch();
        return $result;
    }

    public function alterar($argCodVenda){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "UPDATE venda SET codCliente = '$this->codCliente', dataVenda = '$this->dataVenda' WHERE codVenda = $argCodVenda";
        $db->execute($sql);
    }

    public function salvar($argCodVenda){
        $existe = $this->existe($argCodVenda);
        $existe == true ? $this->alterar($argCodVenda) : $this->incluir($this->codCliente, $this->dataVenda);
    }

    public function excluir($argCodVenda){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $existe = $this->existe($argCodVenda);
        if($existe == true){
            $sql = "DELETE FROM venda WHERE codVenda = $argCodVenda";
            $result = $db->execute($sql);
        }else{
            $result = "Venda não existe";
        }
        return $result;
    }
}
?>