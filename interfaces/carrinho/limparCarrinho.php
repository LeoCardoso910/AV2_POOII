<?php
    function limparCarrinho(){
        session_start();
        unset($_SESSION['carrinho']);
        unset($_SESSION['valorCarrinho']);
        header('Location: ../../pages/carrinho.php');
    }
    limparCarrinho();
?>