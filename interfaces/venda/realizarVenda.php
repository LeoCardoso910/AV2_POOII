<?php
    session_start();
	require_once __DIR__ . '/../../class/Venda.php';
    require_once __DIR__ . '/../../class/DetalheVenda.php';
    require_once __DIR__ . '/../../class/Produto.php';

	$codCliente = isset($_POST['cliente']) ? $_POST['cliente'] : null;
    $dataVenda = isset($_POST['dataVenda']) ? $_POST['dataVenda'] : null;
    
    Venda::incluir($codCliente, $dataVenda);

    $codVenda = Venda::ultimaVenda();


    foreach ($_SESSION['carrinho'] as $key => $value) {
        $data = explode('-', $value);
        $codProduto = $data[0];
            isset($_POST[$codProduto]) ? $quantidade = $_POST[$codProduto] : $quantidade = null;
        DetalheVenda::incluir($codVenda, $codProduto, $quantidade);
        Produto::baixarEstoque($codProduto, $quantidade);
    }
    
    $_SESSION['limparCarrinho'] = true;

    require __DIR__ . '/../carrinho/limparCarrinho.php';

    header('Location: ../../../pages/vendas.php');
?>