<?php
require_once __DIR__ . '/../conexaobd/ConexaoBD.php';
require_once __DIR__ . '/../config.php';

class Cliente{
    private $cpf;
    private $nomeCliente;
    private $email;
    private $renda;
    private $classe;

    function __construct($argCpf, $argNomeCliente, $argEmail, $argRenda, $argClasse){
        $this->cpf = $argCpf;
        $this->nomeCliente = $argNomeCliente;
        $this->email = $argEmail;
        $this->renda = $argRenda;
        $this->classe = $argClasse;
    }

    public static function listar(){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT * FROM cliente";
        $resultado = $conexao->query($sql);
        return $resultado;
    }
    
    public function existe($argCodCliente){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT * FROM cliente WHERE cod_cliente = $argCodCliente";
        $result = $db->existe($sql);

        if($result == true){
            return true;
        }
        return false;
        
    }

    public static function incluir($argCpf, $argNomeCliente, $argEmail, $argRenda, $argClasse){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "INSERT INTO cliente (cpf, nomeCliente, email, renda, classe) VALUES ('$argCpf', '$argNomeCliente', '$argEmail', '$argRenda', '$argClasse')";
        $db->execute($sql);
    }


    public function excluir($codCliente){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $existe = $this->existe($codCliente);
        if($existe == true){
            $sql = "DELETE FROM cliente WHERE cod_cliente = $codCliente";
            $result = $db->execute($sql);
        }else{
            $result = "Cliente não existe";
        }
        return $result;
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