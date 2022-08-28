<?php
    session_start();

   function existeNoCarrinho($cod){
    foreach ($_SESSION['carrinho'] as $key => $value) {
        $data = explode('-', $value);
        $codProduto = $data[0];
        $quantidade = $data[1];
        if($codProduto == $cod){
            return array(true, $key, $quantidade);
        }
    }
    return array(false);
}

function removeDoCarrinho($key){
    unset($_SESSION['carrinho'][$key]);
    header('Location: ../../pages/carrinho.php');
}

existeNoCarrinho($_GET['codProduto'])[0] == true ? removeDoCarrinho(existeNoCarrinho($_GET['codProduto'])[1])  : '';
?>