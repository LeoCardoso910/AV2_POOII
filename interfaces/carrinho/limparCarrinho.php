<?php
    function redirectToCart(){
        header("Location: ../../pages/carrinho.php");
    } 
    session_start();
    function limparCarrinho(){
        session_start();
        unset($_SESSION['carrinho']);
        unset($_SESSION['valorCarrinho']);
        redirectToCart();
    }
    isset($_SESSION['limparCarrinho']) ? ($_SESSION['limparCarrinho'] == true ? limparCarrinho() : redirectToCart()) : redirectToCart();
?>