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
    
    public function existe($argCodCliente){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT * FROM cliente WHERE cod_cliente = $argCodCliente";
        $result = $db->existe($sql);

        if($result == true){
            return true;
        }
        return false;
        
    }

    public function incluir(){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "INSERT INTO cliente (cpf, nomeCliente, email, renda, classe) VALUES ('$this->cpf', '$this->nomeCliente', '$this->email', '$this->renda', '$this->classe')";
        $db->execute($sql);
    }

    public function alterar($codCliente){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "UPDATE cliente SET cpf = '$this->cpf', nomeCliente = '$this->nomeCliente', email = '$this->email', renda = '$this->renda', classe = '$this->classe' WHERE cod_cliente = $codCliente";
        $db->execute($sql);
    }

    public function salvar($codCliente){
        $existe = $this->existe($codCliente);
        $existe == true ? $this->alterar($codCliente) : $this->incluir();
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