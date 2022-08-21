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

    public static function listarPorId($codProduto){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT * FROM produto WHERE codProduto = $codProduto";
        $resultado = $conexao->query($sql)->fetch();
        return $resultado;
    }

    public static function getQuantidadeEstoque($argCodProduto){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT qtdEstoque FROM produto WHERE codProduto = $argCodProduto";
        $resultado = $conexao->query($sql)->fetch()['qtdEstoque'];
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

    public static function getSubtotalProduto($qtd, $codProduto){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT ($qtd * p.valorUnitario) as subTotal FROM produto p WHERE p.codProduto = $codProduto;";
        $resultado = $conexao->query($sql)->fetch()['subTotal'];
        return $resultado;
    }

    public static function incluir($argDescricao, $argValorUnitario, $argUnidade, $argEstoqueMinimo, $argQtdEstoque){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "INSERT INTO produto (descricao, valorUnitario, unidade, estoqueMinimo, qtdEstoque) VALUES ('$argDescricao', '$argValorUnitario', '$argUnidade', '$argEstoqueMinimo', '$argQtdEstoque')";
        $db->execute($sql);
    }

    public static function alterar($codProduto, $descricao, $valorUnitario, $unidade, $estoqueMinimo, $qtdEstoque){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "UPDATE produto SET descricao = '$descricao', valorUnitario = '$valorUnitario', unidade = '$unidade',  estoqueMinimo = '$estoqueMinimo', qtdEstoque = '$qtdEstoque' WHERE codProduto = $codProduto";
        $db->execute($sql);
    }

    public function salvar($codProduto = null){
        $existe = $this->existe($this->codProduto);
        $existe == true ? (($codProduto) == null ? $this->alterar(1,2,3,4,5,6) : $this->alterar(1,2,3,4,5,6)) : $this->incluir(1,2,3,4,5);
    }

    public static function excluir($argCodProduto){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "DELETE FROM produto WHERE codProduto = $argCodProduto";
        $db->execute($sql);
    }

    public static function baixarEstoque($codProduto, $qtd){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "UPDATE produto SET qtdEstoque = qtdEstoque - $qtd WHERE codProduto = $codProduto";
        $db->execute($sql);
    }

    public static function subirEstoque($codProduto, $qtd){
        $db = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "UPDATE produto SET qtdEstoque = qtdEstoque + $qtd WHERE codProduto = $codProduto";
        $db->execute($sql);
    }

    public function estoqueBaixo(){
        return $this->qtdEstoque < $this->estoqueMinimo;
    }
}
?>