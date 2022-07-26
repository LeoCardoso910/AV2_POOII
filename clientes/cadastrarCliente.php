<?php
	require_once __DIR__ . '/../class/Cliente.php';

    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
    $nomeCliente = isset($_POST['nomeCliente']) ? $_POST['nomeCliente'] : null;
    $renda = isset($_POST['renda']) ? str_replace(',', '.', $_POST['renda']) : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $classe = Cliente::calculaClasse($renda);

    Cliente::incluir($cpf, $nomeCliente, $email, $renda, $classe);

    header('Location: ../clientes.php');
    
?>