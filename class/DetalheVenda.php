<?php
require_once __DIR__ . '/../conexaobd/ConexaoBD.php';
require_once __DIR__ . '/../config.php';

class DetalheVenda{
 
    public static function incluir($codVenda, $codProduto, $qtdProduto){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "INSERT INTO detalhevenda (codVenda, codProduto, qtdProduto) VALUES ($codVenda, $codProduto, $qtdProduto)";
        $conexao->execute($sql);
    }
 
    public static function getTotal($argCodVenda){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT SUM(p.valorUnitario * dv.qtdProduto) as total FROM detalhevenda dv inner join produto p on dv.codProduto = p.codProduto inner join venda v on v.codVenda = dv.codVenda WHERE dv.codVenda = $argCodVenda";
        return $conexao->query($sql)->fetch()['total'];
    }

    public static function getSubTotal($argCodVenda){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT (p.valorUnitario * dv.qtdProduto) as subTotal FROM detalhevenda dv inner join produto p on dv.codProduto = p.codProduto inner join venda v on v.codVenda = dv.codVenda WHERE dv.codVenda = $argCodVenda";
        return $conexao->query($sql);
    }
    public static function getListaProduto($argCodVenda){
        $conexao = new ConexaoBD(BANCODEDADOS, USUARIO, SENHA, SERVIDOR);
        $sql = "SELECT p.codProduto, p.descricao, p.valorUnitario, dv.qtdProduto FROM detalhevenda dv inner join produto p on dv.codProduto = p.codProduto WHERE dv.codVenda = $argCodVenda";
        return $conexao->query($sql);
    }

}
