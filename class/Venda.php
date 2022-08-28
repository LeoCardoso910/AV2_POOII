<?php
require_once __DIR__ . '/../conexaobd/ConexaoBD.php';
require_once __DIR__ . '/../config.php';

class Venda {

    public static function listar(){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT * FROM venda";
        $resultado = $db->query($sql);
        return $resultado;
    }


    public static function incluir($codCliente, $dataVenda){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "INSERT INTO venda (codCliente, dataVenda) VALUES ('$codCliente', '$dataVenda')";
        $db->execute($sql);
    }

    public static function ultimaVenda(){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT MAX(codVenda) FROM venda";
        $result = $db->query($sql)->fetch()["MAX(codVenda)"];
        return $result;
    }
}
?>