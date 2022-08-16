<?php
    require __DIR__ . '/../../class/Produto.php';

    $codProduto = isset($_GET['codProduto']) ? $_GET['codProduto'] : null;
    Produto::excluir($codProduto);

    header('Location: ../../pages/produtos.php');
?>