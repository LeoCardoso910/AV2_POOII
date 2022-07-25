<?php
require_once __DIR__ . '/../conexaobd/ConexaoBD.php';
require_once __DIR__ . '/../config.php';

class Produto {
    private $codProduto;
    private $unidade;
    private $descricao;
    private $valorUnitario;
    private $estoqueMinimo;
    private $qtdEstoque;

    function __construct($argCodProduto = null, $argUnidade, $argDescricao, $argValorUnitario, $argEstoqueMinimo, $argQtdEstoque) {
        $this->codProduto = $argCodProduto;
        $this->unidade = $argUnidade;
        $this->descricao = $argDescricao;
        $this->valorUnitario = $argValorUnitario;
        $this->estoqueMinimo = $argEstoqueMinimo;
        $this->qtdEstoque = $argQtdEstoque;
    }

    public function existe($argCodProduto){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT * FROM produto WHERE codProduto = $argCodProduto";
        $result = $db->existe($sql);

        if($result == true){
            return true;
        }
        return false;
        
    }

    public function incluir(){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "INSERT INTO produto (codProduto, unidade, descricao, valorUnitario, estoqueMinimo, qtdEstoque) VALUES ('$this->codProduto','$this->unidade', '$this->descricao', '$this->valorUnitario', '$this->estoqueMinimo', '$this->qtdEstoque')";
        $db->execute($sql);
    }

    public function alterar($argCodProduto){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "UPDATE produto SET codProduto = '$this->codProduto', unidade = '$this->unidade', descricao = '$this->descricao', valorUnitario = '$this->valorUnitario', estoqueMinimo = '$this->estoqueMinimo', qtdEstoque = '$this->qtdEstoque' WHERE codProduto = $argCodProduto";
        $db->execute($sql);
    }

    public function salvar($codProduto){
        $existe = $this->existe($this->codProduto);
        $existe == true ? $this->alterar($codProduto) : $this->incluir();
    }

    public function excluir($argCodProduto){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $existe = $this->existe($argCodProduto);
        if($existe == true){
            $sql = "DELETE FROM produto WHERE codProduto = $argCodProduto";
            $result = $db->execute($sql);
        }else{
            $result = "Produto não existe";
        }
        return $result;
    }

    public function baixarEstoque($argQtd){
        $this->qtdEstoque -= $argQtd;
        $this->salvar($this->codProduto);
    }

    public function subirEstoque($argQtd){
        $this->qtdEstoque += $argQtd;
        $this->salvar($this->codProduto);
    }

    public function estoqueBaixo(){
        return $this->qtdEstoque < $this->estoqueMinimo;
    }
}
?>