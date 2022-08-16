<?php
	require_once __DIR__ . '/../../class/Produto.php';

    $codProduto = isset($_POST['codProduto']) ? $_POST['codProduto'] : null;
    $descricao = isset($_POST['descricao']) ? $_POST['descricao'] : null;
    $valorUnitario = isset($_POST['valorUnitario']) ? $_POST['valorUnitario'] : null;
    $unidade = isset($_POST['unidade']) ? $_POST['unidade'] : null;
    $estoqueMinimo = isset($_POST['estoqueMinimo']) ? $_POST['estoqueMinimo'] : null;
    $qtdEstoque = isset($_POST['qtdEstoque']) ? $_POST['qtdEstoque'] : null;

   Produto::alterar($codProduto, $descricao, $valorUnitario, $unidade, $estoqueMinimo, $qtdEstoque);
    

    header('Location: ../../pages/produtos.php');
?>