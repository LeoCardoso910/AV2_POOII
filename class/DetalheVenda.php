<?php
require_once __DIR__ . '/../conexaobd/ConexaoBD.php';
require_once __DIR__ . '/../config.php';

class DetalheVenda{
    private $codVenda;
    private $codProduto;
    private $qtdProduto;

    function __construct($codVenda, $codProduto, $qtdProduto) {
        $this->codVenda = $codVenda;
        $this->codProduto = $codProduto;
        $this->qtdProduto = $qtdProduto;
    }

    public function existe($argCodVenda, $argCodProduto){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT * FROM detalhevenda WHERE codVenda = $argCodVenda AND codProduto = $argCodProduto";
        return $conexao->existe($sql);
    }
    public function incluir(){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "INSERT INTO detalhevenda (codVenda, codProduto, qtdProduto) VALUES ($this->codVenda, $this->codProduto, $this->qtdProduto)";
        $conexao->execute($sql);
    }
    public function alterar(){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "UPDATE detalhevenda SET qtdProduto = $this->qtdProduto WHERE codVenda = $this->codVenda AND codProduto = $this->codProduto";
        $conexao->execute($sql);
    }
    public function salvar(){
        if($this->existe($this->codVenda, $this->codProduto)){
            $this->alterar();
        }else{
            $this->incluir();
        }
    }
    public function excluir(){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "DELETE FROM detalhevenda WHERE codVenda = $this->codVenda AND codProduto = $this->codProduto";
        $conexao->execute($sql);
    }
    public static function getSubTotal($argCodVenda){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT (p.valorUnitario * dv.qtdProduto) as subTotal FROM detalhevenda dv inner join produto p on dv.codProduto = p.codProduto WHERE dv.codVenda = $argCodVenda";
        return $conexao->query($sql)->fetchColumn();
    }
    public static function getListaProduto($argCodVenda){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT p.codProduto, p.descricao, p.valorUnitario, dv.qtdProduto FROM detalhevenda dv inner join produto p on dv.codProduto = p.codProduto WHERE dv.codVenda = $argCodVenda";
        return $conexao->query($sql);
    }

}
