<?php
require_once __DIR__ . '/../conexaobd/ConexaoBD.php';
require_once __DIR__ . '/../config.php';

class Produto {

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
}
?>