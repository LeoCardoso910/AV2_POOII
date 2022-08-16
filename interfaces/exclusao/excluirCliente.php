<?php
    require __DIR__ . '/../../class/Cliente.php';

    $codCliente = isset($_GET['codCliente']) ? $_GET['codCliente'] : null;
    Cliente::excluir($codCliente);

    header('Location: ../../pages/Clientes.php');
?>