<?php
require_once __DIR__ . '/../conexaobd/ConexaoBD.php';
require_once __DIR__ . '/../config.php';

class Cliente{

    public static function listar(){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT * FROM cliente";
        $resultado = $conexao->query($sql);
        return $resultado;
    }

    public static function alterar($codCliente, $cpf, $nomeCliente, $email, $renda, $classe){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "UPDATE cliente SET nomeCliente = '$nomeCliente', email = '$email', renda = '$renda', classe = '$classe', cpf = '$cpf' WHERE cod_cliente = $codCliente";
        $db->execute($sql);
    }

    public static function incluir($argCpf, $argNomeCliente, $argEmail, $argRenda, $argClasse){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "INSERT INTO cliente (cpf, nomeCliente, email, renda, classe) VALUES ('$argCpf', '$argNomeCliente', '$argEmail', '$argRenda', '$argClasse')";
        $db->execute($sql);
    }

    public static function verificaClientesAtivos(){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT COUNT(*) as numAtivos FROM cliente WHERE ativo = 1";
        $result = $db->query($sql)->fetch()['numAtivos'];
        if ($result > 0){
            return true;
        }
        return false;
    }

    public static function excluir($argCodCliente){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "UPDATE cliente SET ativo = 0  WHERE cod_cliente = $argCodCliente";
        $db->execute($sql);
    }


    public static function calculaClasse($argRenda){
        if($argRenda <= 2000){
            $classe = "Baixa";
        }else if($argRenda <= 4000 && $argRenda > 2000){
            $classe = "Média";
        }else if($argRenda > 4000){
            $classe = "Alta";
        }

        return $classe;
    }

}
?>