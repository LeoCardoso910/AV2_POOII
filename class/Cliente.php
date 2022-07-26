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

    public function calculaClasse(){
        if($this->renda <= 2000){
            $this->classe = "Baixa";
        }elseif($this->renda <= 4000 && $this->renda > 2000){
            $this->classe = "Média";
        }elseif($this->renda <= 6000 && $this->renda > 4000){
            $this->classe = "Alta";
        }else{
            $this->classe = "Muito Alta";
        }

        return $this->classe;
    }

}
?>