<?php
	require_once __DIR__ . '/../../class/Produto.php';

    $descricao = isset($_POST['descricao']) ? strip_tags($_POST['descricao']) : null;
    $valorUnitario = isset($_POST['valorUnitario']) ? strip_tags($_POST['valorUnitario']) : null;
    $unidade = isset($_POST['unidade']) ? strip_tags($_POST['unidade']) : null;
    $estoqueMinimo = isset($_POST['estoqueMinimo']) ? strip_tags($_POST['estoqueMinimo']) : null;
    $qtdEstoque = isset($_POST['qtdEstoque']) ? strip_tags($_POST['qtdEstoque']) : null;

   if ($qtdEstoque >= $estoqueMinimo){
       Produto::incluir($descricao, $valorUnitario, $unidade, $estoqueMinimo, $qtdEstoque);
       header('Location: ../../pages/produtos.php');
   } else{
         header('Location: ../../pages/produtos.php?msg=estoqueInvalido#carousel_ae01');
   }
    

    
?>