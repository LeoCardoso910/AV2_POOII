<?php
require_once __DIR__ . '/../../class/Produto.php';
session_start();

if (empty($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = array();
}

array_push($_SESSION['carrinho'], $_POST['codProduto'] . '-' . $_POST['qtde']);

$_SESSION['valorCarrinho'] = 0;
$total = 0;

foreach ($_SESSION['carrinho'] as $key => $value) {
    $data = explode('-', $value);
    $codProduto = $data[0];
    $quantidade = $data[1];
    $produto = Produto::listarPorId($codProduto);
    $subtotal = $quantidade * $produto['valorUnitario'];
    $total += $subtotal;
}

if(!empty($_SESSION['valorCarrinho'])){
    $_SESSION['valorCarrinho'] += $total;
} else {
    $_SESSION['valorCarrinho'] = $total;
}

header('Location: ../../pages/carrinho.php');
