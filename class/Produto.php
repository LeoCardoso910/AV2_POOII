<?php
require_once __DIR__ . '/../conexaobd/ConexaoBD.php';
require_once __DIR__ . '/../config.php';

class Produto {
    private $codProduto;
    private $descricao;
    private $valorUnitario;
    private $unidade;
    private $estoqueMinimo;
    private $qtdEstoque;

    function __construct($argCodProduto, $argDescricao, $argValorUnitario, $argUnidade, $argEstoqueMinimo, $argQtdEstoque) {
        $this->codProduto = $argCodProduto;
        $this->descricao = $argDescricao;
        $this->valorUnitario = $argValorUnitario;
        $this->unidade = $argUnidade;
        $this->estoqueMinimo = $argEstoqueMinimo;
        $this->qtdEstoque = $argQtdEstoque;
    }

    public static function listar(){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT * FROM produto";
        $resultado = $conexao->query($sql);
        return $resultado;
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
        $sql = "INSERT INTO produto (codProduto, descricao, valorUnitario, unidade, estoqueMinimo, qtdEstoque) VALUES ('$this->codProduto', '$this->descricao', '$this->valorUnitario', '$this->unidade', '$this->estoqueMinimo', '$this->qtdEstoque')";
        $db->execute($sql);
    }

    public function alterar($argCodProduto){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "UPDATE produto SET codProduto = '$this->codProduto', descricao = '$this->descricao', valorUnitario = '$this->valorUnitario', unidade = '$this->unidade',  estoqueMinimo = '$this->estoqueMinimo', qtdEstoque = '$this->qtdEstoque' WHERE codProduto = $argCodProduto";
        $db->execute($sql);
    }

    public function salvar($codProduto = null){
        $existe = $this->existe($this->codProduto);
        $existe == true ? (($codProduto) == null ? $this->alterar($this->codProduto) : $this->alterar($codProduto)) : $this->incluir();
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