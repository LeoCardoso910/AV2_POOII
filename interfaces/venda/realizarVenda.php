<?php
    session_start();
	require_once __DIR__ . '/../../class/Venda.php';
    require_once __DIR__ . '/../../class/DetalheVenda.php';

	$codCliente = isset($_POST['cliente']) ? $_POST['cliente'] : null;
    $dataVenda = isset($_POST['dataVenda']) ? $_POST['dataVenda'] : null;
    
    Venda::incluir($codCliente, $dataVenda);

    $codVenda = Venda::ultimaVenda()["MAX(codVenda)"];

    foreach ($_SESSION['carrinho'] as $key => $value) {
        $data = explode('-', $value);
        $codProduto = $data[0];
        $quantidade = $data[1];
        
        DetalheVenda::incluir($codVenda, $codProduto, $quantidade);
    }
    
    require __DIR__ . '/../carrinho/limparCarrinho.php';

    header('Location: ../../../pages/vendas.php');
?>