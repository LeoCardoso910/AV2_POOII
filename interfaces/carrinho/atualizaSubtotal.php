<?php
    require_once __DIR__ . '/../../class/Produto.php';
    $codProduto = $_POST['codProduto'];
    $quantidade = $_POST['quantidade'];

    echo Produto::getSubtotalProduto($quantidade, $codProduto);
?>